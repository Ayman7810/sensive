<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;

class ThemeController extends Controller
{
    public function index(){
       $blogs = Blog::paginate(2);
       $blogsSleeder = Blog::latest()->take(5)->get();
  
        return view('theme.index' , compact('blogs' , 'blogsSleeder'));
    }
    public function category($id){
        
        $blogs = Blog::where('category_id' , $id)->paginate(2);
        $categoryName = Category::where('id' , $id)->first();
        
        
        return view('theme.category' , compact('blogs','categoryName'));
    }
    public function contact(){
        return view('theme.contact');
    }
    
  
   
}