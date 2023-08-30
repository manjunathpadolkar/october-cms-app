<?php

namespace GreenPaltform\PlumbingPossibilities\Console;

use Carbon\Carbon;
use GreenPaltform\PlumbingPossibilities\Models\Settings;
use GreenPaltform\PlumbingPossibilities\Models\Appointment;
use Illuminate\Console\Command;
use Mail;
use Vonage\Client as VonageClient;
use Vonage\Client\Credentials\Basic;
use Vonage\SMS\Message\SMS;

/**
 * AppointmentReminder Command
 *
 * @link https://docs.octobercms.com/3.x/extend/console-commands.html
 */
class AppointmentReminder extends Command
{
    /**
     * @var string signature for the console command.
     */
    protected $signature = 'plumbingpossibilities:appointmentreminder';

    /**
     * @var string description is the console command description
     */
    protected $description = 'Send appointment reminder to assginee.';

    /**
     * handle executes the console command.
     */
    public function handle()
    {
        $timezone = Settings::where("key", "timezone")->first()->value ?? "Canada/Pacific";
        $beforeHalfAnHour = Carbon::now($timezone)->setTimezone("UTC")->addMinutes(30);
        $appointments = Appointment::whereBetween("date_time", [
            $beforeHalfAnHour->format("Y-m-d H:i:s"),
            $beforeHalfAnHour->addMinute()->format("Y-m-d H:i:s")
        ])->with(["assignee", "client", "address", "address.province:id,name", "address.country:id,name"])->get();
        
        foreach ($appointments ?? [] as $appointment) {

            if (!is_null($appointment->assignee)) {
                if (!empty($appointment->assignee->email)) {
                    $this->sendEmail($appointment);
                }

                if (!empty($appointment->assignee->email)) {
                    $this->sendSMS($appointment);
                }
            }
        }
    }

    private function formatAddress($address)
    {
        $formattedAddress = $address->address_1 . ", ";
        $formattedAddress .= !empty($address->address_2) ? $address->address_2 . ", " : "";
        $formattedAddress .= !empty($address->city) ? $address->city . ", " : "";
        $formattedAddress .= !empty($address->province->name) ? $address->province->name . ", " : "";
        $formattedAddress .= $address->country->name . " - ";
        $formattedAddress .= $address->postal;
        return $formattedAddress;
    }

    private function sendSMS($appointment)
    {
        $address = $this->formatAddress($appointment->address);
        $text = "Hi " . $appointment->assignee->first_name . " " . $appointment->assignee->last_name . ", ";
        $text .= "You've an appointment at " . Carbon::parse($appointment->date_time, "UTC")->setTimezone($appointment->timezone)->format("d-m-Y h:i A");
        $text .= " with " . $appointment->client->name . " at " . $address;

        $client = new VonageClient(new Basic(config("services.vonage.api_key"), config("services.vonage.api_secret")));

        $client->sms()->send(new SMS($appointment->assignee->phone, config("services.vonage.brand_name"), $text));
    }

    private function sendEmail($appointment)
    {
        $address = $this->formatAddress($appointment->address);
        $data = [
            "date_time" => Carbon::parse($appointment->date_time, "UTC")->setTimezone($appointment->timezone)->format("d-m-Y h:i A"),
            "assignee_name" => $appointment->assignee->first_name . " " . $appointment->assignee->last_name,
            "assignee_email" => $appointment->assignee->email,
            "client_name" => $appointment->client->name,
            "client_phone" => $appointment->client->phone,
            "client_email" => $appointment->client->email,
            "client_name" => $appointment->client->name,
            "address" => $address,
        ];
        Mail::send('greenpaltform.plumbingpossibilities::mail.appointment-reminder-to-assignee', $data, function ($message) use ($data) {
            $message->to($data["assignee_email"], $data["assignee_name"]);
        });
    }
}
