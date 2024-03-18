<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index() {
        // $data['allProduct'] = DB::table('product_tb')->paginate (3);
        $data['allProduct'] = DB::table('product_tb')->get();
        // dd( $data['allProduct']);
        return view('home.index', $data);
    }

    public function createProduct(Request $request ) {
        // $name = $request->input('name');
        // $price = $request->input('price');
        $data = $request->except('_token');

        $data = array(
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status
        );
        $i = DB::table('product_tb')->insert($data);
        if ($i) {
            return redirect ('/')->with('Success', "Create product successfully!");
        }
        // Display the retrieved data
        // dd($data);
    }

}
