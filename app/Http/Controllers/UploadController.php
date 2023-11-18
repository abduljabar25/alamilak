<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;

use Illuminate\Http\Request;
use App\File;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }
    // save record
    public function saveRecord(Request $request)
    { 
        $request->validate([
            'name'   => 'required|string|max:255',
            'age'    => 'required|numeric',
            'gander' => 'required|in:male,female',
            'email'  => 'required|email',
            'upload' => 'required|max:1024'
        ]);

        DB::beginTransaction();
        try {
            // upload file
            $folder_name= 'upload';
            \Storage::disk('local')->makeDirectory($folder_name, 0775, true); //creates directory
            if ($request->hasFile('upload')) {
                foreach ($request->upload as $photo) {
                    $destinationPath = $folder_name.'/';
                    $file_name = $photo->getClientOriginalName(); //Get file original name                   
                    \Storage::disk('local')->put($folder_name.'/'.$file_name,file_get_contents($photo->getRealPath()));
                }
            }

            $form = new files;
            $form->name    = $request->name;
            $form->age     = $request->age;
            $form->gander  = $request->gander;
            $form->email   = $request->email;
            $form->upload  = $file_name;
            $form->save();
            
            DB::commit();
            // Toastr::success('Create new holiday successfully :)','Success');
            return redirect()->back();
            
        } catch(\Exception $e) {
            DB::rollback();
            // Toastr::error('Add Holiday fail :)','Error');
            return redirect()->back();
        }
    }

    // download
    public function download($id)
    {
        $data = DB::table('test_tables')->where('id',$id)->first();
        $filepath = storage_path("app/{$data->path}");
        return \Response::download($filepath);
    }
}
