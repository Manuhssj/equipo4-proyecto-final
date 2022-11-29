<?php

namespace App\Http\Controllers;

use File;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

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
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* VALIDACIONES (Comentadas temporalmente) */
        /* $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users|string|max:50',
            'password' => ['required', Password::min(8)],
            'phone' => 'required|numeric|min:10',
        ]); */

        /* INSTANCIA DE USER */
        $user = User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'rol' => 'Administrador',
        ]);

        /* AGREGAR LA IMAGEN Y CREAR REGISTRO */
        if($user){
            if($request->hasFile('avatar')){
                $file = $request->file('avatar');
                $name_file = $user->id."_user".".".$file->getClientOriginalExtension();
                $path = $request->file('avatar')->storeAs(
                    'public/user/avatars/', $name_file
                );
                $user->avatar = $name_file;
                $user->save();
            }
            return redirect()->back()->with('success', 'Se añadió el usuario de forma exitosa.');
        }
        return redirect()->back()->with('error', 'Hubo un error al añadir el cliente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        return view('users.detailUser', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        /* BUSCAR REGISTRO */
        $user = User::where('id',$request->id)->first();

        /* VALIDACIONES (Comentadas temporalmente) */
        /* $rules = [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users|string|max:50',
            'phone' => 'required|numeric|min:10|max:10',
        ];
        if(isset($request['password']) && $request['password']!=''){
            $password = $request['password'];
            $rules['password'] = ['required', Password::min(8)];
            $request->validate($rules);
            $request['password'] = bcrypt($request['password']);
        }else{
            $request->validate($rules);
            $request['password'] = $user->password;
        } */

        /* MODIFICAR IMAGEN Y ACTUALIZAR REGISTRO */
        if($user){
            if($user->avatar != "avatar.jpg" && $request->avatar != 'avatar.jpg'){
                $path = storage_path()."/app/public/user/avatars/".$user->avatar;
                if (File::exists($path)) {
                    File::delete($path);
                    $user->avatar = 'avatar.jpg';
                }
            }
            if($request->hasFile('avatar')){
                $file = $request->file('avatar');
                $name_file = $user->id."_user".".".$file->getClientOriginalExtension();
                $path = $request->file('avatar')->storeAs(
                  'public/user/avatars/', $name_file
                );
                $user->avatar = $name_file;
            }
            $user->update($request->except(['avatar']));
            return redirect()->back()->with('success', 'Actualización completada satisfactoriamente');
        }
        return redirect()->back()->with('error', 'Los datos no se pudieron actualizar, datos incorrectos.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'Se ha eliminado el usuario.');
        }
        return redirect()->back()->with('error', 'No fue posible eliminar el usuario.');
    }
}
