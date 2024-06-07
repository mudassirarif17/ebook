<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    public function add_book(){
        return view('author.add_book');
    }

    public function upload_book(Request $request){
        $data = new book;
        $pdf = $request->file;
        $pdfname = time().'.'.$pdf->getClientOriginalExtension();
        $request->file->move('bookpdf' , $pdfname);
        $data->file = $pdfname;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('bookimage' , $imagename);
        $data->image = $imagename;

        $data->book_name = $request->name;
        $data->book_desc = $request->desc;
        if(Auth::id()){
            $author = Auth::User()->name;
        }
        $data->author = $author;
        $data->type = $request->type;
        $data->save();
        return redirect()->back();
    }

    public function all_book($name){
        $book = Book::where('author', $name)->get();
        return view('author.all_book' , compact('book'));
    }
}
