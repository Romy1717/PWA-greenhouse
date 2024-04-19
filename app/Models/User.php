<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lastname_1',
        'lastname_2',
        'email',
        'password',
        'birthday',
        'gender',
        'category',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    
    /**
     * Obtener todos los usuarios de la base de datos y pasarlos a la vista.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Obtener todos los usuarios de la base de datos
        $users = User::all();
        
        // Pasar los usuarios a la vista
        return view('users', compact('users'));
    }

    /**
     * Setear 'usuario' como valor por defecto para el campo 'category'.
     *
     * @param string|null $value
     * @return void
     */
    public function setCategoryAttribute(?string $value)
    {
        $this->attributes['category'] = $value ?? 'usuario';
    }
}
