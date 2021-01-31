<?php

namespace App\Http\Controllers\Sistema;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Pessoa;
use App\Models\RolesUser;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('sistema.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('sistema.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
    	//try {
    		
             $pessoa = new Pessoa();
             if ($request->file('fotografia')) {
                    $storagepath = $request->file('fotografia')->store('utilizador');
                    $pessoa->fotografia = $storagepath;
                   }
             $pessoa->nome = $request->nome;
             $pessoa->genero = $request->genero;
             $pessoa->bi = $request->bi;
             $pessoa->save();
             $user = new User();
             $user->pessoa_id = $pessoa->id;
             $user->password = Hash::make(1234);
             $user->email = $request->email;
             $user->estado = "activo";
             $user->obs = 0;
             $user->save();

             $roleuser = new RolesUser();
             $roleuser->user_id = $user->id;
             $roleuser->role_id = $request->funcao;
             $roleuser->save();

        return redirect()->route('user.index')->with('erro', 'Utilizador registado com sucesso...');
         /*} catch (\Exception $e) {
    		return redirect()->route('user.index')->with('erro', 'Operação não concluída...!');
    	}*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoa $pessoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
    {
        try {
             $user = User::where('id',base64_decode($user_id))->get()->first();
             if (isset($user)) {
                $roles = Role::all();
               return view('sistema.user.create',compact('roles','user'));
            }
           return redirect()->route('user.index')->with('erro', 'Utilizador não encontrado...!');
        } catch (\Exception $e) {
             return redirect()->route('user.index')->with('erro', 'Operação não concluída...!');
        }
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
        
        try {

        $user = User::where('id',base64_decode($user_id))->get()->first();
        if(isset($user)){
            $pessoa = Pessoa::where('id',$user->pessoa_id)->get()->first();
           if(!isset($pessoa))
           {
            return redirect()->route('user.index')->with('erro', 'Operação não pode ser concluída...!');
           }
         $request->validate([
            
            'email' => [
                'email',
                'required',
                $user->email == $request->email ? "" :Rule::unique('users'),
            ],
             'nome' => 'required',
             'genero' => 'required',
             'bi'=>'required',
             'funcao'=>'required|numeric',
           ]);
             $pessoa->nome = $request->nome;
             $pessoa->genero = $request->genero;
             $pessoa->bi = $request->bi;
             
             if ($request->file('fotografia')) {
                    $storagepath = $request->file('fotografia')->store('utilizador');
                    $pessoa->fotografia = $storagepath;
                   }

                    $pessoa->save();
                    $user->email = $request->email;
                    $user->save();
                   \DB::table('roles_users')
                  ->where('user_id', $user->id)
                  ->update(['role_id'=> $request->funcao]); 

                return redirect()->route('user.index')->with('mensagem', 'Utilizador actualizado com sucesso...');

              }

               return redirect()->route('user.index')->with('erro', 'Utilizador não encontrado...!');

            } catch (\Exception $e) {
                 return redirect()->route('user.index')->with('erro', 'Operação não pode ser concluída...!');
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoa)
    {
        //
    }

    public function activar($user_id)
    {
        try {
            $user = User::where('id',base64_decode($user_id))->get()->first();
            if (isset($user)) {
                  $estado = $user->estado == 'activo' ? 'desactivo':'activo';
                  $user->estado = $estado;
                  $user->save();
                  return redirect()->route('user.index')->with('mensagem', 'Utilizador '.$estado .'..');
            }
            return redirect()->route('user.index')->with('erro', 'Utilizador não encontrado...!');
            
        } catch (\Exception $e) {
             return redirect()->route('user.index')->with('erro', 'Operação não pode ser concluída...!');
        }
    }

    public function reset($user_id)
    {
        try {
            $user = User::where('id',base64_decode($user_id))->get()->first();
            if (isset($user)) {
         
                  $user->password =  Hash::make(1234);
                  $user->obs =  0;
                  $user->save();
                  return redirect()->route('user.index')->with('mensagem', 'Password foi restaurado ');
            }
            return redirect()->route('user.index')->with('erro', 'Utilizador não encontrado...!');
            
        } catch (\Exception $e) {
             return redirect()->route('user.index')->with('erro', 'Operação não pode ser concluída...!');
        }
    

    }
}
