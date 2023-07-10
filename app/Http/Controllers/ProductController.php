<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Type;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return view('product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modelCat = Category::all();
        $modelBrand = Brand::all();
        $modelType = Type::all();
        return view('product.formcreate', compact('modelCat', 'modelBrand', 'modelType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Product();
        $file=$request->file('foto');
        $imgFolder='images';
        $imgFile=time()."_".$file->getClientOriginalName();
        $file->move($imgFolder, $imgFile);
        $data->product_image=$imgFile;

        $data->product_name = $request->get('namePro');
        $data->product_price = $request->get('price');
        $data->product_category = $request->get('category');
        $data->product_brand = $request->get('brand');
        $data->product_type = $request->get('type');

        $data->save();
        return redirect()->route('products.index')->with('status', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('access-permission', $id);
        $objProduct = Product::find($id);
        $modelCat = Category::all();
        $modelBrand = Brand::all();
        $modelType = Type::all();
        $data = $objProduct;
        return view('product.formedit', compact('data', 'modelCat', 'modelBrand', 'modelType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $objProduct = Product::find($id);
        $objProduct->product_name = $request->get('nameProduct');
        $objProduct->product_price = $request->get('priceProduct');
        $objProduct->product_category = $request->get('proCate');
        $objProduct->product_brand = $request->get('proBrand');
        $objProduct->product_type = $request->get('proType');
        $objProduct->save();
        return redirect()->route('products.index')->with('status', 'Your Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $objProduct = Product::find($id);
            $objProduct->delete();
            return redirect()->route('products.index')->with('status', 'Successfull');
        } catch (\PDOException $ex) {
            $msg = "Delete Failed";
            return redirect()->route('products.index')->with('status', $msg);
        }
    }
    public function details(Request $request)
    {
        $id = $request->get('id');
        $data = Product::find($id);
        return response()->json(array(
            'status' => 'oke',
            'msg' => view('public.details', compact('data'))->render()
        ));
    }
}
