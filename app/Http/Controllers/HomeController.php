<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{public function index()
    {
        // Verificar si el usuario está autenticado
        if (auth()->check()) {
            // Si el usuario está autenticado, redirigir al dashboard
            return redirect()->route('dashboard');
        }
    
        // Si el usuario no está autenticado, mostrar la vista del índice
        return view('index');
    }
    

    public function dashboard()
    {
        // Lógica para la página del manager
        return view('dashboard');
    }

    public function about()
    {
        // Lógica para la página "Acerca de"
        return view('about');
    }

    public function contact()
    {
        // Lógica para la página "Contacto"
        return view('contact');
    }
    public function services()
    {
        // Lógica para la página "Contacto"
        return view('services');
    }
    public function login()
    {
        // Lógica para la página "Contacto"
        return view('login');
    }
    public function categories()
    {
        // Lógica para la página "Contacto"
        return view('categories');
    }
    public function subcategories()
    {
        // Lógica para la página "Contacto"
        return view('subcategories');
    }
    public function transactions()
    {
        // Lógica para la página "Contacto"
        return view('transactions');
    }
    public function orders()
    {
        // Lógica para la página "Contacto"
        return view('orders');
    }
    public function users()
    {
        $usuarios=User::all();

        return view('users', compact('usuarios'));
    }
    public function insignia()
    {
        // Lógica para la página "Contacto"
        return view('insignia');
    }
    public function dealers()
    {
        // Lógica para la página "Contacto"
        return view('dealers');
    }
    public function mapdealers()
    {
        // Lógica para la página "Contacto"
        return view('mapdealers');
    }
    public function certificates()
    {
        // Lógica para la página "Contacto"
        return view('certificates');
    }
    public function medals()
    {
        // Lógica para la página "Contacto"
        return view('medals');
    }
    public function events()
    {
        // Lógica para la página "Contacto"
        return view('events');
    }
    public function banners()
    {
        // Lógica para la página "Contacto"
        return view('banners');
    }
    public function trophies()
    {
        // Lógica para la página "Contacto"
        return view('trophies');
    }
    public function notifications()
    {
        // Lógica para la página "Contacto"
        return view('notifications');
    }
    public function sensors()
    {
        // Lógica para la página "Contacto"
        return view('sensors');
    }
    public function offline()
    {
        // Lógica para la página "Offline"
        return view('vendor.laravelpwa.offline');
    }
   
}