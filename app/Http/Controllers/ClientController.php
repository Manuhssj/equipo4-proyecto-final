<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

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
        // /* BUSCAR REGISTRO */
        // $client = Client::where('id',$request->id)->first();
        

        // if($client){
        //     $client->save();
        //     return redirect()->back()->with('success', 'Actualización completada.');
        // }
        // return redirect()->back()->with('error', 'Los datos no se pudieron actualizar, datos incorrectos.');

        if ($client) {
            # code...
            $client = Client::find($request->id);
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
        if ($cient) {
            $client->delete();
            return redirect()->back()->with('success', 'Se ha eliminado el cliente satisfactoriamente');
        }
        return redirect()->back()->with('error', 'No fue posible eliminar el cliente satisfactoriamente');

    }
}
