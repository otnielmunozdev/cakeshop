<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider; 

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //'App\Model' => 'App\Policies\ModelPolicy',
        'App\Sucursal' => 'App\Policies\SucursalPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //

         /**
         * Define gate llamado 'ediatar-documento'
         * 
         * La expresión solo será verdadera si el usuario es quien recibe el documento
         * 'editar-documento' Nombre del Gate
         * $user Es la instancia del usuario logeado
         * $documento Es la instancia del documento
         * @return boolean
         */
        Gate::define('Admin', function($user) {
            return $user->rol == "Administrador";
        });
    }
}
