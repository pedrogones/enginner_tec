<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = User::all();
        return view('admin.clients.index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validação e separação dos dados
            $userData = $request->only(['name', 'email', 'password', 'roles']);
            $addressData = $request->only(['street', 'number', 'cep', 'district', 'complement', 'city', 'uf']);
            $clientData = $request->only(['birthdate', 'phone', 'gender', 'type_contact', 'type_attendance']);
dd($clientData);
              // Crie o usuário e endereço
            $user = User::create($userData);
            $address = Address::create($addressData);

            // Associe os IDs no cliente e salve
            $clientData['user_id'] = $user->id;
            $clientData['address_id'] = $address->id;
            Client::create($clientData);

            // Retorne ou redirecione conforme necessário
            return redirect()->route('clients.view')->with('success', 'Registro salvo com sucesso!');
        } catch (\Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
