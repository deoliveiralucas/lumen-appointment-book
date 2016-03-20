<?php

namespace PhoneBook\Providers;

use Illuminate\Support\ServiceProvider;
use PhoneBook\Entities\Person;

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

    public function boot()
    {
        view()->share(['letters' => $this->getLetters()]);
    }

    protected function getLetters()
    {
        $letters = [];
        foreach (Person::all() as $person) {
            $letters[] = strtoupper(substr($person->nickname, 0, 1));
        }
        sort($letters);

        return array_unique($letters);
    }
}
