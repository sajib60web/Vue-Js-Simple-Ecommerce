<?php

namespace App\Http\Controllers;

use App\Brand;
use App\MainCategory;
use App\Product;
use App\ProductImage;
use App\SubCategory;
use Illuminate\Http\Request;
use Auth;
use Image;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id','DESC')->get();
        $brands = Brand::orderBy('id','DESC')->get();
        $sub_categories = SubCategory::orderBy('id','DESC')->get();
        $main_categories = MainCategory::orderBy('id','DESC')->get();
        $product_images = ProductImage::all();
        return view('backend.product.product-manage', compact('products','brands','main_categories','sub_categories','product_images'));
    }


    public function insertProduct(Request $request)
    {
        $image_arry = $request->file('product_image');
        $product_id = $this->productBasicInfo($request);
        $this->saveProductImages($image_arry, $product_id);
        return redirect()->back()->with('message', 'Product Inserted Successfully');
    }

    protected function productBasicInfo($request)
    {
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->main_category_id = $request->main_category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->product_brand_id = $request->product_brand_id;
        $product->product_short_description = $request->product_short_description;
        $product->prodcut_long_description = $request->prodcut_long_description;
        $product->product_new_price = $request->product_new_price;
        $product->product_old_price = $request->product_old_price;
        $product->product_qty = $request->product_qty;
        $product->product_color = $request->product_color;
        $product->product_status = $request->product_status;
        $product->admin_id = Auth::user()->id;
        $product->save();
        $product_id = $product->id;
        return $product_id;
    }

    protected function saveProductImages($image_arry, $product_id)
    {
        $image_arry_len = count($image_arry);
        for ($i = 0; $i < $image_arry_len; $i++) {
            $product_image = new ProductImage();
            $imageName = time() . '_' . $image_arry[$i]->getClientOriginalName();
            $image = $image_arry[$i];
            $image_large = 'backend/product_image/';

            Image::make($image)->resize(441, 463)->save($image_large . $imageName);
            $product_image->product_id = $product_id;
            $product_image->product_image = $image_large . $imageName;
            $product_image->save();
        }
    }

    public function editImage($id){
        $product = Product::find($id);
        $product_images = ProductImage::where('product_id', $product->id)->get();
//        return $product_images;
        return view('backend.product.include.update-product-image', compact('product_images'));
    }

    public function updateProductImage(Request $request){
//        return $request;
        $image_arry = $request->file('product_image');
        $image_arry_len = count($image_arry);
        for ($i = 0; $i < $image_arry_len; $i++) {
            $product = ProductImage::where('id', $request->product_image_id[$i])->first();
            return $product;
        }
    }

    public function publishproduct($id)
    {
        $product = product::where('id', $id)->first();
        $product->product_status = 1;
        $product->update();
        return redirect()->back()->with('message','product Published Successfully');
    }

    public function unpublishproduct($id)
    {
        $product = product::where('id', $id)->first();
        $product->product_status = 0;
        $product->update();
        return redirect()->back()->with('message','product Unpublished Successfully');
    }

    public function updateproduct(Request $request)
    {
        $image = $request->file('product_image');
        $product = product::where('id', $request->product_id)->first();
        if($image){
            unlink($product->product_image);
            $image_name = rand(11111, 99999) . '_' . $image->getClientOriginalName();
            $product_image = 'backend/product_image/';
            Image::make($image)->resize(1359,339)->save($product_image.$image_name);
            $product->product_image = $product_image.$image_name;
        }
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->product_status = $request->product_status;
        $product->update();
        return redirect()->back()->with('message', 'product Inserted Successfully');
    }

    public function deleteproduct($id){
        $product = product::where('id', $id)->first();
        if($product->product_image){
            unlink($product->product_image);
        }
        $product->delete();
        return redirect()->back()->with('message','product Deleted Successfully !!!');
    }
}
