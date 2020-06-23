<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\images;
use App\image_category;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
    	$this->validate($request,[
            'category'=>'required',
            
        ],[
            'category.required'=>'Bạn chưa chọn danh mục'
            
        ]);

        if($request->hasFile('images')) {
            foreach($request->file('images') as $image) {
                
            	$name=$image->getClientOriginalName();
            	$hinh=str_random(8)."_".$name;
           		$image->move("images/",$hinh);
           		$image=new images; 
           		$image->name=$hinh;
           		$image->category=$request->category;	
           		$image->source=$hinh;
           		$image->save();
            }
            
            return redirect('user/viewimages');
        }
        else
        {
        	return redirect('/')->with('thongbao','Không có ảnh');
        }
    }

    public function viewimages()
    {

    	$cates=image_category::all();
    	$images= images::paginate(12);
    	return view('image_slide',['images'=>$images,'cates'=>$cates]);
    }

    public function viewbycate($id)
    {

    	$cates=image_category::all();
    	$images= images::where('category',$id)->paginate(12);
    	return view('image_slide',['images'=>$images,'cates'=>$cates]);
    }


}
