<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('form');
    }
    //
    public function post(Request $request){
        return back()->withInput(
            $request->only('username')
        );
    }
    public function getForm(Request $request) {
        if($request->hasFile('image')){
            $file = $request->file('image'); 
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = 'tranthivietmy.'.$fileExtension;
            $file->storeAs('photo', $fileName);
            $array = [
                'fileExtension' => $fileExtension,
                'fileName' => $fileName
            ];
            return view('uploadFile',compact('array') );
        }
        else {
            $error = 'Vui lòng chọn tệp cần upload';
            return view('uploadFile', compact('error'));
        }
    }
}
