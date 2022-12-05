<?php

namespace App\Http\Controllers;

use File;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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
        /* VALIDACIONES */
        $request->validate([
            'name'      => 'required',
            'lastname'  => 'required',
            'email'     => 'required|unique:users|string|max:50',
            'password'  => ['required', Password::min(8)],
            'phone'     => 'required|numeric|min:10',
        ],
        [   
            'name.required'     => 'Es necesario ingresar un nombre.',
            'lastname.required' => 'Es necesario ingresar al menos un apellido.',
            'email.required'    => 'Es necesario ingresar un correo electrónico.',
            'email.unique'      => 'Otro usuario ya tiene ese correo electrónico.',
            'email.max'         => 'El email no debe exceder los 50 caracteres.',
            'password.required' => 'Es necesario ingresar una contraseña.',
            'password.min'      => 'La contraseña debe tener minimo 8 caracteres.',
            'phone.required'    => 'Es necesario ingresar un teléfono.', 
            'phone.numeric'     => 'El teléfono debe ser numérico.', 
            'phone.min'         => 'El teléfono debe ser de 10 caracteres.', 
        ]);

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

        /* VALIDACIONES */
        $request->validate([
            'name'      => 'required',
            'lastname'  => 'required',
            'email'     => ['required', 'string', Rule::unique('users')->ignore($user->id)],
            'phone'     => 'required|numeric|min:10',
        ],
        [   
            'name.required'     => 'Es necesario ingresar un nombre.',
            'lastname.required' => 'Es necesario ingresar al menos un apellido.',
            'email.required'    => 'Es necesario ingresar un correo electrónico.', 
            'email.string'      => 'El email debe ser alfanumérico.', 
            'email.unique'      => 'Otro usuario ya tiene ese correo electrónico.', 
            'email.max'         => 'El email no debe exceder los 50 caracteres.',
            'password.min'      => 'La contraseña debe tener minimo 8 caracteres.',
            'phone.required'    => 'Es necesario ingresar un teléfono.', 
            'phone.numeric'     => 'El teléfono debe ser numérico.', 
            'phone.min'         => 'El teléfono debe ser de 10 caracteres.', 
        ]);
        
        if(isset($request['password']) && $request['password']!=''){
            $request->validate(['password' => ['required', Password::min(8)]],['password.required' => 'Es necesario ingresar una contraseña.', 'password.min' => 'La contraseña debe tener minimo 8 caracteres.']);
            $request['password'] = bcrypt($request['password']);
        }else{
            $request['password'] = $user->password;
        }

        /* MODIFICAR IMAGEN Y ACTUALIZAR REGISTRO */
        if($user){
            if($request->hasFile('avatar')){
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
