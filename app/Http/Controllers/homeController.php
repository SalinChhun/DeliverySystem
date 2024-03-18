<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index() {
        // $data['allProduct'] = DB::table('product_tb')->paginate (3);
        $allProduct['allProduct'] = DB::table('product_tb')->get();
        $allCategory['getAllCategories'] = DB::table('category_tb')->get();
        // dd( $allCategory['getAllCategories']);
        // dd( $allProduct['allProduct']);
        return view('home.index', $allProduct, $allCategory);
    }

    // public function getAllCategories() {
    //     $category['getAllCategories'] = DB::table('category_tb')->get();
    //     // dd( $category['getAllCategories']);
    //     // dd( $data['allProduct']);
    //     return view('home.index', $category);
    // }
    

    public function createProduct(Request $request ) {
        // $name = $request->input('name');
        $data = $request->except('_token');

        $data = array(
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
            'size' => $request->size,
            'discount_type' => $request->discount_type,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
        );
        // dd( $data );
        $i = DB::table('product_tb')->insert($data);
        if ($i) {
            return redirect ('/')->with('Success', "Create product successfully!");
        }
        // Display the retrieved data
        // dd($data);
    }

}
