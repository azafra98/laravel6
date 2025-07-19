<?php

namespace App;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellidos', 'email', 'password', 'telefono', 'imagenusuario', 'rol','insta_user'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function reservas() {
        return $this->hasMany(Reserva::class, "idCliente");
    }

    public function scopeApellidos($query, $apellidos) {
        if($apellidos) {
            return $query->where('apellidos', 'like', "%$apellidos%");
        }
    }
    public function scopeEmail($query, $email) {
        if($email) {
            return $query->where('email', 'like', "%$email%");
        }
    }

    public function scopeRol($query, $rol) {
        if($rol) {
            return $query->where('rol', 'like', "%$rol%");
        }
    }
}
