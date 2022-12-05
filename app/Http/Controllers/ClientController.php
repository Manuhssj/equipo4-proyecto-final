<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
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

        $request->validate([
            'name'      => 'required',
            'lastname'  => 'required',
            'email'     => 'required|unique:clients|string|max:50',
            'phone'     => 'required|numeric|min:10',
        ],
        [   
            'name.required'     => 'Es necesario ingresar un nombre.',
            'lastname.required' => 'Es necesario ingresar al menos un apellido.',
            'email.required'    => 'Es necesario ingresar un correo electrónico.',
            'email.unique'      => 'Otro usuario ya tiene ese correo electrónico.',
            'email.max'         => 'El email no debe exceder los 50 caracteres.',
            'phone.required'    => 'Es necesario ingresar un teléfono.', 
            'phone.numeric'     => 'El teléfono debe ser numérico.', 
            'phone.min'         => 'El teléfono debe ser de 10 caracteres.', 
        ]);
        $client = Client::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->back()->with('error', 'Hubo un error al añadir el cliente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clients = Client::find($id);
        return view('clients.detailClient', compact('clients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     * 
     */
    public function update(Request $request, Client $client)
    {

        
        if ($client) {
            $client = Client::find($request->id);
            $request->validate([
                'name'      => 'required',
                'lastname'  => 'required',
                'email'     => ['required', 'string', Rule::unique('clients')->ignore($client->id), 'max:50'],
                'phone'     => 'required|numeric|min:10',
            ],
            [   
                'name.required'     => 'Es necesario ingresar un nombre.',
                'lastname.required' => 'Es necesario ingresar al menos un apellido.',
                'email.required'    => 'Es necesario ingresar un correo electrónico.',
                'email.max'         => 'El email no debe exceder los 50 caracteres.',
                'phone.required'    => 'Es necesario ingresar un teléfono.',
                'phone.numeric'     => 'El teléfono debe ser numérico.', 
                'phone.min'         => 'El teléfono debe ser de 10 caracteres.', 
            ]);
            $client->update($request->all());
            return redirect()->back()->with("success","Actualizacion completada satisfactoriamente");
        }
        return redirect()->back()->with("error","Los datos no se pudieron actualizar, datos incorrectos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $client = Client::find($id);
        if ($client) {
            $client->delete();
            return redirect()->back()->with('success', 'Se ha eliminado el cliente satisfactoriamente');
        }
        return redirect()->back()->with('error', 'No fue posible eliminar el cliente satisfactoriamente');

    }
}
