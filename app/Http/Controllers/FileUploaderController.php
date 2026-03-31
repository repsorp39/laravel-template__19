<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploaderController extends Controller
{
    public function upload(Request $req)
    {
        $req->validate([
            'file' => 'required|file|mimes:jpg,png,pdf|max:2048'
        ]);
        $file = $req->file('file');

        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('uploads', $filename, 'public');
        $file_url = "http://localhost:8000/storage/uploads/" .$filename;
        // redirect($file_url);
        return back()->with('success', 'File uploaded successfully!');
    }
}
