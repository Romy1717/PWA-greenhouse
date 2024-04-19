<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname_1' => ['required', 'string', 'max:255'],
            'lastname_2' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:8'],
            'birthday' => ['required', 'date'],
            'gender' => ['required', 'string', 'in:masculino,femenino,otro'],
            'category' => ['unrequired', 'string', 'in:usuario,admin,superadmin'],
        ]);
        $category = $request->input('category', 'usuario');
        // Crear el usuario en la base de datos
        $user = User::create([
            'name' => $request->name,
            'lastname_1' => $request->lastname_1,
            'lastname_2' => $request->lastname_2,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'category' => $request->category,
        ]);

        // Disparar el evento de registro
        //event(new Registered($user));

        // Autenticar al usuario recién registrado
        Auth::login($user);

        // Redirigir al usuario a la página de inicio
        return redirect(RouteServiceProvider::HOME);
    }
}
