<?php
namespace App\Http\Controllers\Admin;

use Sailor\Sailor\Application\Controller;
use Sailor\Sailor\Http\Middleware\Middleware;

class TestMidController extends Controller
{
    public function __construct()
    {
        if (!Middleware::middleware('user')) {
            return redirect('/');
        }
    }

    public function test()
    {
        return view('test');
    }
}
