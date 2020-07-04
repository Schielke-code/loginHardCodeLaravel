<?php

namespace App\Http\Controllers;

use App\Model\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function dashboard()
    {
        if (Auth::check() === true){
            return view('admin.dashboard');
        }else{
            return redirect()->route('admin.login');
        }

    }

    public function showLogin()
    {
        return view('admin.formLogin');
   }

    public function login(Request $request)
    {
        $credentials =[
            'email' => $request->email,
            'password' => $request->password
        ];

        Auth::attempt($credentials);

        if(Auth::check()){
            return redirect()->route('admin');
        }else{
            return redirect()->route('admin.login');
        }
   }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
   }

    public function cadastroUser(Request $request)
    {

        return view('admin.formCadastro');

   }

    public function cadastroUserDo(Request $request)
    {
        $usuario = new Usuario;
        $usuario->password = Hash::make($request->password);
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->save();
        if($usuario){
            return redirect()->route('admin.login');
        }else{
            return redirect()->back();
        }
    }
}
