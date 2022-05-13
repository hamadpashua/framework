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


// <?php
// namespace App\Http\Controllers;

// use App\Models\User;
// use Sailor\Sailor\Http\Request;
// use Sailor\Sailor\Session\Session;
// use Sailor\Sailor\Application\Controller;
// use Sailor\Sailor\Mail\Mailer;

// class WelcomeController extends Controller
// {
    
//     public function index()
//     {
//         if (Request::has('post')) {
//             $request = Request::get('post');

//             // $mail = new Mailer;
//             // $data = [
//             //     'to' => 'hamadpashua7@gmail.com',
//             //     'subject' => 'Sailor framework',
//             //     'view' => 'emails.blade', 
//             //     'name' => 'Hamad Pashua',
//             //     'body' => ""
//             //     ];
    
//             // if ($mail->send($data)) {
//             //     Session::set('success', 'Email Sent Successful!');
//             //     return redirect('/');
//             // }else {
//             //     Session::set('fail', 'Email failed!');
//             //     return redirect('/');
//             // } 

//             // $user = User::where('name', $request->name)
//             //         ->orWhere('name', $request->name)
//             //         ->first();
//             // if ($user) {
//             //     Session::set('SESSION_USER', $user->name);
//             //     Session::set('SESSION_UID', $user->id);
//             //     Session::set('success', 'Your successfull authorized');
//             //     return redirect('/test');
//             // } else {
//             //     Session::set('fail', 'User not found');
//             //     return view('welcome');
//             // }
//         }

        
//         return view('welcome');
//     }

//     public function formT()
//     {
//         return view('welcome');
//     }

//     public function logout()
//     {
//         if (isAuthenticated()) {
//             Session::remove('SESSION_USER');
//             Session::remove('SESSION_UID');
//         }
//         return redirect('/');
//     }
// }
