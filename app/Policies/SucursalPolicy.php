<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SucursalPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    
    /**
     * Determina cuando un usuario puede eliminar el documento.
     *
     * @param  \App\User  $user
     * @param  \App\Sucursal  $sucursal
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->rol == 'Administrador';
    }

    /**
     * Determina cuando un usuario puede eliminar el documento.
     *
     * @param  \App\User  $user
     * @param  \App\Sucursal  $sucursal
     * @return mixed
     */
    public function VerificacionAdmin(User $user)
    {
        return $user->rol == 'Administrador';
    }
}
