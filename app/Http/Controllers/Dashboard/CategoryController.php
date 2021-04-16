<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $cats = Category::all();    

        $page = 'category.categories';
        $title = "دسته بندی ها";
        $data = [
            'iterable' => $cats,
        ];
        
        return view('dashboard.main', compact('data', 'title', 'page'));
    }

    public function create()
    {
        $page = 'category.addCategory';
        $title = "افزودن دسته بندی";

        return view('dashboard.main', compact('title', 'page'));
    }

    public function add(Request $request)
    {
        
        $request->validate([
            'cat_title' => 'required',
        ]);
        
        // if keys and meta description is not set set theme to null
        $keys = isset($request->cat_keys) ? $request->cat_keys : null;
        $description = isset($request->cat_desc) ? $request->cat_desc : null;

        $cat = new Category([
            'title' => $request->cat_title,
        ]);
        $cat->meta_keys = $keys;
        $cat->meta_description = $description;
    
        if ($cat->save()) {
            return redirect()->route('dashboard.categories')->with('message', 'دسته بندی جدید با موفقیت افزوده شد');
        }
    }

    public function edit(Request $request, $id)
    {
        $cat = Category::findOrFail($id);
        $page = 'category.editCategory';
        $title = "ویرایش دسته بندی";
        $data = array(
            'cat' => $cat,
        );
        return view('dashboard.main', compact('page', 'data', 'title'));    
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'cat_title' => 'required',
        ]);

        $keys = isset($request->cat_keys) ? $request->cat_keys : null;
        $description = isset($request->cat_desc) ? $request->cat_desc : null;
        
        $cat = Category::findOrFail($id);
        $cat->title = $request->cat_title;
        $cat->meta_keys = $keys;
        $cat->meta_description = $description;
    
        if ($cat->save()) {
            return redirect()->route('dashboard.categories')->with('message', 'دسته بندی جدید با موفقیت آپدیت شد');
        }    
    }

    public function destroy($id)
    {
        $cat = Category::findOrFail($id);
        if ($cat->delete()) {
            return redirect()->route('dashboard.categories')->with('message', 'دسته بندی با موفقیت حذف شد');
        }

        return redirect()->route('dashboard.categories')->with('message', 'مشکلی در حذف دسته بندی پیش آمد دوباره تلاش کنید');
    }
}
