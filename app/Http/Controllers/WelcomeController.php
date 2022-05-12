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
        if (Request::has('post')) {
            $request = Request::get('post');
            $user = User::where('name', $request->name)
                    ->orWhere('name', $request->name)
                    ->first();
            if ($user) {
                Session::set('SESSION_USER', $user->name);
                Session::set('SESSION_UID', $user->id);
                Session::set('success', 'Your successfull authorized');
                return redirect('/test');
            } else {
                Session::set('fail', 'User not found');
                return view('welcome');
            }
        }

        
        return view('welcome');
    }

    public function formT()
    {
        return view('welcome');
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
