<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    // public function index()
    // {
    //     // $data['allProduct'] = DB::table('product_tb')->paginate (3);
    //     $allProduct['allProduct'] = DB::table('product_tb as p')
    //         ->select('p.id', 'p.name', 'pi.photo')
    //         ->join('photo_tb as pi', 'p.id', '=', 'pi.product_id')
    //         ->where('p.status', 'Selling')
    //         ->orderBy('p.id', 'desc')
    //         ->get();
    //     $allCategory['getAllCategories'] = DB::table('category_tb')->get();
    //     // dd( $allCategory['getAllCategories']);
    //     dd( $allProduct['allProduct']);
    //     return view('home.index', $allProduct, $allCategory);
    // }

    public function index()
    {
        // Fetching products with photos
        $productsWithPhotos = DB::table('product_tb as p')
            ->select('p.id', 'p.name', 'pi.photo')
            ->join('photo_tb as pi', 'p.id', '=', 'pi.product_id')
            ->where('p.status', 'Selling')
            ->orderBy('p.id', 'desc')
            ->get();

        // Grouping photos by product ID
        $groupedProducts = $productsWithPhotos->groupBy('id');

        // Transforming the grouped result to include photos as an array
        $products = $groupedProducts->map(function ($group) {
            $firstItem = $group->first();
            return [
                'id' => $firstItem->id,
                'name' => $firstItem->name,
                'photos' => $group->pluck('photo')->toArray()
            ];
        });

        // Fetching all categories
        $categoryies = DB::table('category_tb')->select('id', 'category_name')->get();

        // Logging the transformed products
        // dd($products);
        // dd($categoryies);

        // Returning the view with the transformed products and categories
        return view('home.index', compact('products', 'categoryies'));
    }

    // public function getAllCategories() {
    //     $category['getAllCategories'] = DB::table('category_tb')->get();
    //     // dd( $category['getAllCategories']);
    //     // dd( $data['allProduct']);
    //     return view('home.index', $category);
    // }

    public function savemulti(Request $req, $productId)
    {
        #upload multi file
        $files = $req->file('multiphoto');
        // dd($files);

        if ($req->multiphoto) {
            foreach ($files as $file) {
                // $file->store('uploads/images/','custom');
                $path = $file->store('uploads/images/', 'custom');

                // Insert the file path and other necessary data into the database
                $i = DB::table('photo_tb')->insert([
                    'photo' => $path,
                    'product_id' => $productId
                ]);
            }
            // $i = DB::table('photo_tb')->insert($files);
            // Session::flash('success','File has been uploaded for mutil files!');
            return redirect('upload');
        } else {
            return redirect('upload')->with('error', 'Please choose a file upload!');
        }

    }


    public function createProduct(Request $request)
    {
        // $name = $request->input('name');

        $request->validate([
            'price' => 'required',
        ]);

        // Handle file upload

        try {
            $data = $request->except('_token');

            $data = array(
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'status' => 'Selling',
                'size' => $request->size,
                'discount_type' => $request->discount_type,
                'category_id' => $request->category_id,
                'user_id' => $request->user_id,
            );

            // dd($data);

            // save product and get product id
            $productId = DB::table('product_tb')->insertGetId($data);


            if ($productId) {
                $homeController = new HomeController();
                $homeController->savemulti($request, $productId);
                return redirect('/')->with('Success', "Create product successfully!");
            }

        } catch (QueryException $e) {
            dd($e);
            return back()->with('error', 'Something went wrong');
        }

    }

    // public function getProductById(Request $request)
    // {
    //     $data = array(
    //         'productId' => $request->productId,
    //     );
    //     dd($data);
    //     return view('home.index');
    // }




}
