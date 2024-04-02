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
use Illuminate\Support\Facades\Validator; // Importar Validator
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class RegisteredUserController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }
    
    public function store(Request $request): RedirectResponse
    {
        $v = Validator::make(request()->all(), [ 
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'confirmed', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'lastname1' => ['required', 'string', 'max:255'],
            'aEstado' => ['required', 'string', 'max:255'],
            'aCiudad' => ['required', 'string', 'max:255'],     
            'gender' => ['required', 'string', Rule::in(['hombre', 'mujer', 'otro'])], 
            'category' => ['required', 'string', Rule::in(['usuario', 'admin', 'superadmin'])], 
        ]);
        if ($v->fails()){
            return redirect()->back()->withErrors($v->errors())->withInput();
        } else {
            $estado = DB::table('estados')
                        ->select('estados.*')
                        ->where('idEstado', $request->aEstado)
                        ->first();
                   
            $ciudad = DB::table('ciudades')
                        ->select('ciudades.*')
                        ->where('idCiudad', $request->aCiudad)
                        ->first();            
            
            $user = User::create([
                'name' => $request->name,
                'lastname1' => $request->lastname1,
                'lastname2' => $request->lastname2,
                'gender' => $request->gender, 
                'category' => $request->category,
                'email' => $request->email,
                'aEstado' => $estado->aNombre,
                'aCiudad' => $ciudad->aNombre,
                'password' => Hash::make($request->password),
            ]);

            event(new Registered($user));

            Auth::login($user);

            return redirect(RouteServiceProvider::HOME);
        }
    }
};
