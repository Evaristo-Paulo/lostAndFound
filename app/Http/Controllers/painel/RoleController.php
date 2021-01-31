<?php

namespace App\Http\Controllers\Sistema;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRoleRequest;
use Illuminate\Validation\Rule;
use App\Models\Role;
use App\Models\Permission;


class RoleController extends Controller
{
    //<?php

   public function index()
   {       
           $roles = Role::orderBy('id', 'asc')->get();
       
         return view('sistema.papel.index',compact('roles'));
   }

    public function create()
   {      
        $permissaos = Permission::orderBy('id', 'asc')->get();
        return view('sistema.papel.create',compact('permissaos'));
   }


   public function store(StoreRoleRequest $request)
   {
      $role = new Role();
      $role->tipo = $request->nome;
      $role->slug = $request->descricao;
      $role->save();
      
      foreach ($request->permissao as $perm) {
         
         $role->permissions()->attach($perm);
         //$role->save();
      }
   
     return redirect()->route('role.index')->with('mensagem', 'Perfil criado com suceeso!');
   }

   public function edit($id)
   {
      $role = Role::where('id',base64_decode($id))->get()->first();
   
   
      if (isset($role)) {
         
          $permissaos = Permission::orderBy('id', 'asc')->get();
       
          return view('sistema.papel.create',compact('permissaos','role'));
        }
      return redirect()->route('role.index')->with('erro', 'Perfil não encontrado...!');
     
   }

   public function delete($id)
   {

   }

   public function update(Request $request, $id)
   {

         $request->validate([
             'nome' => 'required',
             'descricao' => 'required',
             'permissao' => 'required'
            ]);
        $role = Role::where('id',base64_decode($id))->get()->first();
      if(isset($role)){
           $role->tipo = $request->nome;
           $role->slug = $request->descricao;
           $role->save();
           $role->permissions()->detach();
           $role->permissions()->delete();

          foreach ($request->permissao as $perm) {
               $role->permissions()->attach($perm);
           }

            return redirect()->route('role.index')->with('mensagem', 'Perfil actualizado com suceeso!');
        }

        return redirect()->route('role.index')->with('erro', 'Perfil não actualizado !');
        
              
   }
   
   public function show($id)
   {
      $role = Role::where('id',base64_decode($id))->get()->first();
      if (isset($role)) {
         return view('sistema.papel.show',compact('role'));
      }
      return redirect()->route('role.index')->with('erro', 'Perfil não encontrado...!');
   }



}
