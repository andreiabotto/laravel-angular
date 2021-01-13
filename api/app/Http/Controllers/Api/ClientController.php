<?php

namespace App\Http\Controllers\Api;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function add(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'cpf' => 'required',            
            'gender' => 'required'            
        ]);

        $client = new Client();
        $client->fill($request->all());
                        
        if (!$client->save()) {            
            return response()->json([
                'status' => false,
                'data' => 'Save sucess data'
            ], 400);            
        }
                        
        return response()->json([
            'status' => true,
            'data' =>  'Erro save data'
        ], 200);

    }

    public function list(){
        
        $client = Client::get();                        
        if ($client) {
            return response()->json([
                'status' => true,
                'data' => $client
            ], 200);
        }

        return response()->json([
            'status' => false,
            'data' => 'Error save data'
        ], 400);

    }

    public function get($id){

        $client = Client::find($id);                        
        if ($client) {
            return response()->json([
                'status' => true,
                'data' => $client
            ], 200);
        }

        return response()->json([
            'status' => false,
            'data' => 'Error save data'
        ], 400);

    }
    
    public function update($id, Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'cpf' => 'required',            
            'gender' => 'required'            
        ]);

        $client = Client::find($id);
        $client->name = $request->get('name');
        $client->email = $request->get('email');
        $client->cpf = $request->get('cpf');
        $client->gender = $request->get('gender');
                
        if($client->save()) {
            return response()->json([
                'status' => true,
                'data' => 'Update data sucess'
            ], 200);
        }
        
        return response()->json([
            'status' => false,
            'data' => 'Error save data',
        ], 400);

    }

    public function delete($id){
        $client = Client::where('id', $id)->delete();
        if(!$client){
            return response()->json([
                'status' => false,
                'data' => 'Error save data',
            ], 400);
        }

        return response()->json([
            'status' => true,
            'data' => 'Delete data sucess'
        ], 200);   
    }

}