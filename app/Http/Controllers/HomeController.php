<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        return view('home');
    }

    public function reset()
    {
        $token = "sTbddAKa_ndad#ban34adbad7anjad9";
        $email = Auth::user()->email;
        return view('auth.passwords.reset', compact('token', 'email'));
    }

    public function reset_pass(Request $request)
    {
        $common = new Common();
        $token = "sTbddAKa_ndad#ban34adbad7anjad9";
        $this->validator($request->all())->validate();
        $data['password'] = Hash::make($request->password);
        if (Auth::user()->id != null && $request->token == $token) {
            $user = User::find(Auth::user()->id);
            if ($user->update($data)){
                return $common->send_notification('Password Reset Successfully','success');
            }
        }else{
            return abort(404);
        }
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
}
