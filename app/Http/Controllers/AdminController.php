<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\bookrequest;

class AdminController extends Controller
{

    public function front_scr(){
        $author = User::all();
        return view('admin.index' , compact('author'));
    }


    public function add_author(){
        return view('admin.add_author');
    }

    public function upload_author(Request $request){
        $author = new User();
        
        // $image = $request->file('image');
        // $path = $image->store('uploads','public');
        // $author->image = $path;
        
        
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('authorimage' , $imagename);
        $author->image = $imagename;

        $author->name = $request->name;
        $author->email = $request->email;
        $author->phone = $request->phone;
        $author->address = $request->address;
        $author->password = bcrypt("123456789");
        $author->usertype = "1";
        $author->save();
        return redirect()->back();
    }



    public function all_author(){
        $author = User::all();
        return view('admin.all_author' , compact('author'));
    }

    public function req_book(){
        $req = bookrequest::all();
        return view('admin.request_book' , compact('req'));
    }

    public function delete_author($id){
        $author = User::find($id)->delete();
        return redirect()->back();
    }

    public function edit_author($id){
        $author = User::find($id);
        return view('admin.edit_author' , compact('author'));
    }

    public function update_author(Request $request , $id){
        $author = User::find($id);
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('authorimage' , $imagename);
        $author->image = $imagename;

        $author->name = $request->name;
        $author->email = $request->email;
        $author->phone = $request->phone;
        $author->address = $request->address;
        $author->save();
        return redirect("/all_author");
    }

    public function approved_req(Request $request , $id){
        $b_req = bookrequest::find($id);
        $b_req->status = "Approved";
        $b_req->save();
        return redirect()->back();
    }

    public function canceled_req(Request $request , $id){
        $b_req = bookrequest::find($id);
        $b_req->status = "Canceled";
        $b_req->save();
        return redirect()->back();	
    }
}
