<?php

namespace App\Http\Controllers;

use App\SubCategory;
use App\MainCategory;
use Illuminate\Http\Request;
use Image;

class SubCategoryController extends Controller
{
    public function index()
    {
    	$sub_categories = SubCategory::orderBy('id','DESC')->get();
        $main_categories = MainCategory::all();
        return view('backend.sub-category.sub-category-manage', compact('sub_categories','main_categories'));
    }

    public function insertSubCategory(Request $request)
    {
    	$image = $request->file('sub_cat_image');
        $image_name = rand(11111, 99999) . '_' . $image->getClientOriginalName();
        $category_image = 'backend/sub_category_image/';
        Image::make($image)->resize(1359,339)->save($category_image.$image_name);
        $sub_category = new SubCategory();
        $sub_category->sub_cat_name = $request->sub_cat_name;
        $sub_category->main_category_id = $request->main_category_id;
        $sub_category->sub_cat_description = $request->sub_cat_description;
        $sub_category->sub_cat_image = $category_image.$image_name;
        $sub_category->sub_cat_status = $request->sub_cat_status;
        $sub_category->save();
       return redirect()->back()->with('message', 'Sub Category Inserted Successfully');
    }

    public function publishSubCategory($id)
    {
        $sub_category = SubCategory::where('id', $id)->first();
        $sub_category->sub_cat_status = 1;
        $sub_category->update();
        return redirect()->back()->with('message','Sub Category Publised Successfully');
    }
    
    public function unpublishSubCategory($id)
    {
        $sub_category = SubCategory::where('id', $id)->first();
        $sub_category->sub_cat_status = 0;
        $sub_category->update();
        return redirect()->back()->with('message','Sub Category Unpublised Successfully');
    }

    public function updateSubCategory(Request $request)
    {
        $image = $request->file('sub_cat_image');
        $sub_category = SubCategory::where('id', $request->sub_category_id)->first();
        if($image){
            unlink($sub_category->sub_cat_image);
            $image_name = rand(11111, 99999) . '_' .$image->getClientOriginalName();
            $category_image = 'backend/sub_category_image/';
            Image::make($image)->resize(1359,339)->save($category_image.$image_name);
            $sub_category->sub_cat_image = $category_image.$image_name;
        }
        $sub_category->sub_cat_name = $request->sub_cat_name;
        $sub_category->main_category_id = $request->main_category_id;
        $sub_category->sub_cat_description = $request->sub_cat_description;
        $sub_category->sub_cat_status = $request->sub_cat_status;
        $sub_category->update();
        return redirect()->back()->with('message', 'Sub Category Inserted Successfully');
    }

    public function deleteSubCategory($id){
        $sub_category = SubCategory::where('id', $id)->first();
        if($sub_category->sub_cat_image){
            unlink($sub_category->sub_cat_image);
        }
        $sub_category->delete();
        return redirect()->back()->with('message','Sub Category Deleted Successfully !!!');
    }
}
