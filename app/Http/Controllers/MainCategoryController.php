<?php

namespace App\Http\Controllers;

use App\MainCategory;
use Illuminate\Http\Request;
use Image;

class MainCategoryController extends Controller
{
    public function index()
    {
    	$main_categories = MainCategory::orderBy('id','DESC')->get();
        return view('backend.main-category.main-category-manage', compact('main_categories'));
    }

    public function insertMainCategory(Request $request)
    {
    	$image = $request->file('main_cat_image');
        $image_name = rand(11111, 99999) . '_' . $image->getClientOriginalName();
        $category_image = 'backend/main_category_image/';
        Image::make($image)->resize(1359,339)->save($category_image.$image_name);
        $main_category = new MainCategory();
        $main_category->main_cat_name = $request->main_cat_name;
        $main_category->main_cat_description = $request->main_cat_description;
        $main_category->main_cat_image = $category_image.$image_name;
        $main_category->main_cat_status = $request->main_cat_status;
        $main_category->save();
       return redirect()->back()->with('message', 'Main Category Inserted Successfully');
    }

    public function publishMainCategory($id)
    {
        $main_category = MainCategory::where('id', $id)->first();
        $main_category->main_cat_status = 1;
        $main_category->update();
        return redirect()->back()->with('message','Main Category Publised Successfully');
    }
    
    public function unpublishMainCategory($id)
    {
        $main_category = MainCategory::where('id', $id)->first();
        $main_category->main_cat_status = 0;
        $main_category->update();
        return redirect()->back()->with('message','Main Category Unpublised Successfully');
    }

    public function updateMainCategory(Request $request)
    {
        $image = $request->file('main_cat_image');
        $main_category = MainCategory::where('id', $request->main_category_id)->first();
        if($image){
            unlink($main_category->main_cat_image);
            $image_name = rand(11111, 99999) . '_' .$image->getClientOriginalName();
            $category_image = 'backend/main_category_image/';
            Image::make($image)->resize(1359,339)->save($category_image.$image_name);
            $main_category->main_cat_image = $category_image.$image_name;
        }
        $main_category->main_cat_name = $request->main_cat_name;
        $main_category->main_cat_description = $request->main_cat_description;
        $main_category->main_cat_status = $request->main_cat_status;
        $main_category->update();
        return redirect()->back()->with('message', 'Main Category Inserted Successfully');
    }

    public function deleteMainCategory($id){
        $main_category = MainCategory::where('id', $id)->first();
        if($main_category->main_cat_image){
            unlink($main_category->main_cat_image);
        }
        $main_category->delete();
        return redirect('/main-category/manage')->with('message','Category Deleted Successfully !!!');
    }
}
