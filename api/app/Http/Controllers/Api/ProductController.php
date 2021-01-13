<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function add(Request $request){
        $request->validate([
            'name' => 'required',
            'fabrication' => 'required',
            'size' => 'required',            
            'price' => 'required'            
        ]);

        $product = new Product();
        $product->fill($request->all());
                        
        if (!$product->save()) {            
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
        $product = Product::get();                        
        if ($product) {
            return response()->json([
                'status' => true,
                'data' => $product
            ], 200);
        }

        return response()->json([
            'status' => false,
            'data' => 'Error save data'
        ], 400);

    }

    public function get($id){
        $product = Product::find($id);                        
        if ($product) {
            return response()->json([
                'status' => true,
                'data' => $product
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
            'fabrication' => 'required',
            'size' => 'required',            
            'price' => 'required'            
        ]);

        $product = Product::find($id);
        $product->name = $request->get('name');
        $product->fabrication = $request->get('fabrication');
        $product->size = $request->get('size');
        $product->price = $request->get('price');
                
        if($product->save()) {
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
        $product = Product::where('id', $id)->delete();
        if(!$product){
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
