<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Department;
use App\Classo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = Auth::user();

        $classo_id = Auth::user()->classo_id;

        $department_id = Classo::findOrFail($classo_id)->department_id;

        $department = Department::findOrFail($department_id);

        return view('home', compact(['user', 'department']));
    }
}
