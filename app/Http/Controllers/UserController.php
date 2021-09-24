<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Image;

use Validator;

class UserController extends Controller
{
    /**
     * Get all s.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUsers() {
        $users = User::all();
        return response()->json($users);
    }

    // public function uploadUserImage(Request $request, $id)
    // {
    //     if(!$request->hasFile('file_name')) {
    //         return response()->json(['upload_file_not_found'], 400);
    //     }

    //     if(!$id) {
    //         return response()->json(['User ID is required'], 400);
    //         if(!intval($id)) {
    //             return response()->json(['User ID should be an integer'], 400);
    //         }
    //     }

    //     $allowedfileExtension=['pdf','jpg','png'];
    //     $files = $request->file('file_name'); 
    //     $errors = [];
    
    //     foreach ($files as $file) {      
    
    //         $extension = $file->getClientOriginalExtension();
    
    //         $check = in_array($extension,$allowedfileExtension);
    
    //         if($check) {
    //             foreach($request->fileName as $mediaFiles) {
    
    //                 $path = $mediaFiles->store('public/images');
    //                 $name = $mediaFiles->getClientOriginalName();
        
    //                 //store image file into directory and db
    //                 $save = new Image();
    //                 $save->user_id = $request->id;
    //                 $save->title = $name;
    //                 $save->path = $path;
    //                 $save->save();
    //             }
    //         } else {
    //             return response()->json(['invalid_file_format'], 422);
    //         }
    
    
    //     }
    //     return response()->json(['file_uploaded'], 200);
    // }
}
