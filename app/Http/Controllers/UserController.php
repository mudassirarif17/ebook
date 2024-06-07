<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookrequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function book_req(Request $request , $b_id){
        $b_req = new bookrequest();
        $b_req->userId = Auth::user()->id;	
        $b_req->userName = Auth::user()->name;	
        $b_req->userEmail = Auth::user()->email;	
        $b_req->userPhone = Auth::user()->phone;	
        $b_req->bookId = $b_id;	
        $b_req->status = "Pending";	
        $b_req->save();
        return redirect()->back();
    }

    public function cancel_req($r_id){
        $r_req = bookrequest::find($r_id)->delete();
        return redirect()->back();
    }
    

}
