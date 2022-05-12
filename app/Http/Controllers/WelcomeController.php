<?php
namespace App\Http\Controllers;

use App\Models\User;
use Sailor\Sailor\Http\Request;
use Sailor\Sailor\Session\Session;
use Sailor\Sailor\Application\Controller;

class WelcomeController extends Controller
{
    
    public function index()
    { 
        return view('index');
    }

    public function logout()
    {
        if (isAuthenticated()) {
            Session::remove('SESSION_USER');
            Session::remove('SESSION_UID');
        }
        return redirect('/');
    }
}
