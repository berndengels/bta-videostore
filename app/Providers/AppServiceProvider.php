<?php

namespace App\Providers;

use App\View\Components\Form\Input\Checkbox;
use App\View\Components\Form\Input\Date;
use App\View\Components\Form\Input\Email;
use App\View\Components\Form\Input\File;
use App\View\Components\Form\Input\Password;
use App\View\Components\Form\Input\Radio;
use App\View\Components\Form\Input\Select;
use App\View\Components\Form\Input\Submit;
use App\View\Components\Form\Input\Text;
use App\View\Components\Form\Input\Textarea;
use App\View\Components\Form\Input\Time;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('inp.text', Text::class);
        Blade::component('inp.email', Email::class);
        Blade::component('inp.date', Date::class);
        Blade::component('inp.time', Time::class);
        Blade::component('inp.file', File::class);
        Blade::component('inp.password', Password::class);
        Blade::component('inp.checkbox', Checkbox::class);
        Blade::component('inp.radio', Radio::class);
        Blade::component('inp.submit', Submit::class);
        Blade::component('inp.textarea', Textarea::class);
        Blade::component('inp.select', Select::class);
    }
}
