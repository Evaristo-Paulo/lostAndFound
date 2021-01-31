<?php

namespace App\Http\Controllers\painel;

use App\User;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public $pedidos_G = array();
    public $pedidos_entregue = array();
    public $pedidos_nao_entregue = array();
    public $pedidos_cancelado = array();
    public $anos = array();
    public $vendas = array();

    public function login_form()
    {
        return view('painel.login');
    }

    public function painel()
    {
        return view('painel.dashboard');
    }

    public function postLogin(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);



        //$tipocampo = filter_var($request->email,FILTER_VALIDATE_EMAIL)?'email':'username';

        $email = $request->get('email');
        $password = $request->get('password');
        //$remember = $request->has('remember');


        if (Auth::attempt(['email' => $email, 'password' => $password, 'estado' => 'activo'])) {
            Auth::logoutOtherDevices($password);
            // Authentication passed...
            $user = auth()->user();
            if ($user->observacao == 0) {

                return redirect()->route('redifinir.senha');
            }


            $role = DB::table('roles')->where('id', $user->role->role_id)->first();

            // Criação de variáveis de sessão
            session()->put('perfil', $role->tipo);
            session()->put('user_role_id', $user->role->role_id);

            $user_name = Pessoa::where('id', $user->id)->first()->nome;

            return redirect()->route('painel');
        }

        return redirect()->route('painel.login')->with('errorMessage', 'Credenciais inválidos!');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('sitema.login');
    }


    public function redidfinirSenha()
    {
        return view('painel.user.redifinirSenha');
    }

    public function updateNovasenha(Request $request)
    {
        $request->validate([
            'pass_antiga' => 'required',
            'pass_nova' => 'required',
            'pass_confirm' => 'required',

        ]);

        $user = auth()->user();

        if (!password_verify($request->pass_antiga, $user->password)) {
            return redirect()->route('redifinir.senha')->with('erro', 'A senha antiga está errada');
        }

        if (($request->pass_antiga != $request->pass_nova) && ($request->pass_nova == $request->pass_confirm)) {

            $user->password = Hash::make($request->pass_nova);
            $user->observacao = 1;
            $user->save();
            $role = DB::table('roles')->where('id', $user->role->role_id)->first();

            // Criação de variáveis de sessão
            session()->put('perfil', $role->tipo);
            session()->put('user_role_id', $user->role->role_id);

        }

        return redirect()->route('redifinir.senha')->with('erro', 'As senhas têm que ser iguais !');
    }

    public function grafico_pedidos()
    {
       
    }
}
