<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        // Verificar si el usuario está autenticado
        if (auth()->check()) {
            // Si el usuario está autenticado, redirigir al dashboard
            return redirect()->route('profile');
        }
    
        // Si el usuario no está autenticado, mostrar la vista del índice
        return view('index');
    }

    public function business()
    {
        // Lógica para la página del manager
        return view('business');
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
        // Lógica para la página "Servicios"
        return view('services');
    }
    
    public function login()
    {
        // Lógica para la página "Iniciar sesión"
        return view('login');
    }
  
    public function transactions()
    {
        // Lógica para la página "Transacciones"
        return view('transactions');
    }
    
    public function orders()
    {
        // Lógica para la página "Pedidos"
        return view('orders');
    }
    
    public function users()
    {
        $usuarios = User::all();
        return view('users', compact('usuarios'));
    }
    
    public function dealers()
    {
        // Lógica para la página "Distribuidores"
        return view('dealers');
    }
    
    public function mapdealers()
    {
        // Lógica para la página "Mapa de distribuidores"
        return view('mapdealers');
    }
    
    public function certificates()
    {
        // Lógica para la página "Certificados"
        return view('certificates');
    }

    public function creategreenhouse()
    {
        // Lógica para la página "Crear invernadero"
        return view('creategreenhouse');
    }
    public function greenhouse()
    {
        // Lógica para la página "Crear invernadero"
        return view('greenhouse');
    }
    
    public function listgreenhouse()
    {
        // Lógica para la página "Listar invernaderos"
        return view('listgreenhouse');
    }
    
    public function events()
    {
        // Lógica para la página "Eventos"
        return view('events');
    }

    public function notifications()
    {
        // Lógica para la página "Notificaciones"
        return view('notifications');
    }
    
  
    public function profile()
    {
        // Lógica para la página "Perfil"
        return view('profile');
    }
    
   
    
    public function offline()
    {
        // Lógica para la página "Offline"
        return view('vendor.laravelpwa.offline');
    }
}
