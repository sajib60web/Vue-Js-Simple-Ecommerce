<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Image;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::orderBy('id','DESC')->get();
        return view('backend.brand.brand-manage', compact('brands'));
    }

    public function insertBrand(Request $request)
    {
        $image = $request->file('brand_image');
        $image_name = rand(11111, 99999) . '_' . $image->getClientOriginalName();
        $brand_image = 'backend/brand_image/';
        Image::make($image)->resize(1359,339)->save($brand_image.$image_name);
        $brandegory = new Brand();
        $brandegory->brand_name = $request->brand_name;
        $brandegory->brand_description = $request->brand_description;
        $brandegory->brand_image = $brand_image.$image_name;
        $brandegory->brand_status = $request->brand_status;
        $brandegory->save();
        return redirect()->back()->with('message', 'Brand Inserted Successfully');
    }

    public function publishBrand($id)
    {
        $brand = Brand::where('id', $id)->first();
        $brand->brand_status = 1;
        $brand->update();
        return redirect()->back()->with('message','Brand Published Successfully');
    }

    public function unpublishBrand($id)
    {
        $brand = Brand::where('id', $id)->first();
        $brand->brand_status = 0;
        $brand->update();
        return redirect()->back()->with('message','Brand Unpublished Successfully');
    }

    public function updateBrand(Request $request)
    {
        $image = $request->file('brand_image');
        $brand = Brand::where('id', $request->brand_id)->first();
        if($image){
            unlink($brand->brand_image);
            $image_name = rand(11111, 99999) . '_' . $image->getClientOriginalName();
            $brand_image = 'backend/brand_image/';
            Image::make($image)->resize(1359,339)->save($brand_image.$image_name);
            $brand->brand_image = $brand_image.$image_name;
        }
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->brand_status = $request->brand_status;
        $brand->update();
        return redirect()->back()->with('message', 'Brand Inserted Successfully');
    }

    public function deleteBrand($id){
        $brand = Brand::where('id', $id)->first();
        if($brand->brand_image){
            unlink($brand->brand_image);
        }
        $brand->delete();
        return redirect()->back()->with('message','Brand Deleted Successfully !!!');
    }
}
