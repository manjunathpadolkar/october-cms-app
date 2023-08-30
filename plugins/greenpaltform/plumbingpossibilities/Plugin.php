<?php

namespace GreenPaltform\PlumbingPossibilities;

use Backend\Controllers\Users as UsersController;
use Backend\Models\User;
use GreenPaltform\PlumbingPossibilities\Console\AppointmentReminder;
use System\Classes\PluginBase;


/**
 * Plugin class
 */
class Plugin extends PluginBase
{
    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        $this->registerConsoleCommand('plumbingpossibilities:appointmentreminder', AppointmentReminder::class);
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        User::extend(function ($model) {
            $model->addFillable(['phone']);
            $rules = $model->rules;
            $rules["phone"] = "required";
            $model->rules = $rules;
        });

        UsersController::extendFormFields(function ($form, $model, $context) {
            $form->addTabFields([
                "phone" => [
                    "label" => "Phone Number",
                    "type" => "text",
                    "comment" => "Enter phone number with country code ex. if number is 123456789 and country code 123 then enter 123123456789",
                    "tab" => "Phone Number",
                    "required" => true
                ]
            ]);
        });
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }

    public function registerSchedule($schedule)
    {
        $schedule->command('plumbingpossibilities:appointmentreminder')->everyMinute();
    }
}
