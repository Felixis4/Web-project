<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function upload(){
        return view("upload-file");
    }

    public function upload_file(Request $request){
        $file = $request->file("file");
        echo 'File Name:' . $file->getClientOriginalName();
        $destinationPath = "uploads";
        if ($file->move($destinationPath, $file->getClientOriginalName())){
            return redirect()->route('/upload')->with('success', 'File Uploaded successfully');
        }
        else{
            echo "Falied to upload file";
        }
    }
}
