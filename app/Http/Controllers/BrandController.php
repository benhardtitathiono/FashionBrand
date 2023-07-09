<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Brand::all();
        return view('brand.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brand.formcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Brand();
        $data->brand_name = $request->get('name');
        $data->brand_address = $request->get('address');
        $data->save();
        return redirect()->route('brands.index')->with('status', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
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
        $objBrand = Brand::find($id);
        $data = $objBrand;
        return view('brand.formedit', compact('data'));
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
        $objBrand = Brand::find($id);
        $objBrand->brand_name = $request->get('name');
        $objBrand->brand_address = $request->get('address');
        $objBrand->save();
        return redirect()->route('brands.index')->with('status', 'Brand is Updated');
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
            $objBrand = Brand::find($id);
            $objBrand->delete();
            return redirect()->route('brands.index')->with('status', 'Successfull');
        } catch (\PDOException $ex) {
            $msg = "Delete Failed";
            return redirect()->route('brands.index')->with('status', $msg);
        }
    }

    public function deleteData(Request $request)
    {
        $id = $request->get('id');
        $data = Brand::find($id);
        $data->delete();
        return response()->json(array(
            'status' => 'oke',
            'msg' => 'Brand is removed'
        ), 200);
    }
}
