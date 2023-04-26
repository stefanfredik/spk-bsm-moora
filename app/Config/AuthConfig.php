<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use Myth\Auth\Config\Auth as MyAuthConfig;

class AuthConfig extends MyAuthConfig
{
    public $requireActivation = null;
    public $allowRegistration = false;

    public $validFields = ['username'];

    // public $landingRoute = '/dashboard';

    public $views = [
        // 'login'           => 'Myth\Auth\Views\login',
        'login'           => 'App\Views\login\index',
        'register'        => 'Myth\Auth\Views\register',
        'forgot'          => 'Myth\Auth\Views\forgot',
        'reset'           => 'Myth\Auth\Views\reset',
        'emailForgot'     => 'Myth\Auth\Views\emails\forgot',
        'emailActivation' => 'Myth\Auth\Views\emails\activation',
    ];
}
