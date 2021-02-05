<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\questionTable;
use App\userTable;
use http\Env\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function store(\Illuminate\Http\Request $request)
    {
        //
/*        print_r($request->input());*/
        $newSession=userTable::where('phone',$request->input('phone'))
            ->where('password',$request->input('password'))->limit(1)->firstOr(function (){
                print_r('NO');
            });
        if($newSession!=null){
            return view('intermediateViews.examId');
          //  print_r('Nice');
/*            print_r($newSession);*/
        }

    }

}
