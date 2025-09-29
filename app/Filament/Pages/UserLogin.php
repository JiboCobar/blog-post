<?php

namespace App\Filament\Pages;

use App\Models\User;
use App\Rules\AccessRule;
use Filament\Auth\Pages\Login;
use Filament\Schemas\Components\Component;

class UserLogin extends Login
{
    /*
    protected string $view = 'filament.pages.user-login';
    */

    protected function getEmailFormComponent(): Component
    {
        return parent::getEmailFormComponent()
            ->rules([new AccessRule]);
    }
}
