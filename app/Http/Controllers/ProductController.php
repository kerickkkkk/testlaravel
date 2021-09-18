<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        $productList = $this -> getProducts();

        return view('product.index', [
            'productList' => $productList
        ]);
    }

    public function create()
    {
        //
        return view('product.create');
    }

    public function store(Request $request)
    {
        //
        echo 'store';
    }
    
    function show($id, Request $request){
        // $id = $request -> input('id');

        $index = $id - 1;
        
        // $productList = [
        //     [
        //         "imgUrl" => 'https://images.unsplash.com/photo-1631735237334-f4f98679a7c2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80'
        //     ],
        //     [
        //         "imgUrl" => 'https://images.unsplash.com/photo-1571214430617-743350e975fe?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80'
        //     ]
        // ];
        $productList = $this -> getProducts();
        // gate 擋住都不能過
        if($index < 0 || $index > count($productList) -1){
            abort(404);
        }

        return view('product.show', [
            "productList" => $productList,
            "index" => $index
        ]);

    }

    public function edit($id)
    {
        $index = $id - 1;
        $productList = $this -> getProducts();
        // gate 擋住都不能過
        if($index < 0 || $index > count($productList) -1){
            abort(404);
        }

        $product = $productList[$index];

        return view('product.edit', [
            "product" => $product
        ]);
    }

    public function update(Request $request, $id)
    {
        //
        echo 'update';
    }


    public function destroy($id)
    {
        //
        echo 'destroy';
    }

    private function getProducts(){
        return [
            [
                "id" => "1",
                "imgUrl" => 'https://images.unsplash.com/photo-1631735237334-f4f98679a7c2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80'
            ],
            [
                "id" => "2",
                "imgUrl" => 'https://images.unsplash.com/photo-1571214430617-743350e975fe?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80'
            ]
        ];
    }
}
