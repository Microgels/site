<?php

namespace App\Http\Controllers;

use App\Jobs\Compress;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FileUpload extends Controller
{
    public function render_form()
        {
            return view('file_upload');
        }

    public function upload(Request $request): RedirectResponse
    {
        $payload = $request->validate([
            'img_file' => ['file','image','max:10240','required','mimes:png,jpg,jpeg']
        ]);
        if ($request->img_file !== null && !$request->img_file->getError()){
            $payload['img_file'] = $request->img_file->store('uploads','public');
            Compress::dispatch($payload['img_file']);
            return to_route('upload_view')->with(['success'=>'file compressed sucessfully']);
        }
        else{
            return to_route('upload_view')->with(['error'=>'Error when compressing file']);
        }
    }
    public function sync_upload(Request $request): RedirectResponse
    {
        $payload = $request->validate([
            'img_file' => ['file','image','max:10240','required','mimes:png,jpg,jpeg']
        ]);
        if ($request->img_file !== null && !$request->img_file->getError()){
            $payload['img_file'] = $request->img_file->store('uploads','public');
            
            \Tinify\setKey(env('TINIFY_API_KEY'));
            $source = \Tinify\fromFile(storage_path('/app/public/'.$payload['img_file']));
            $source->toFile(storage_path('/app/public/'.$payload['img_file']));

            return to_route('upload_view')->with(['success'=>'file compressed sucessfully']);
        }
        else{
            return to_route('upload_view')->with(['error'=>'Error when uploading file']);
        }
    }

}

