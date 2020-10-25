<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\up;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class LaraFileUpload extends Component
{
    

   use WithFileUploads;
 
    public $title;
    public $file_name;
 
    public function submit(Request $request)
    {
      
 
       $data  = new up();
		$data-> title= $request->input('title');
 
        if ($request->hasFile('file_name')) {
        $file = $request->file('file_name');
        $extension = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $file->move($destinationPath, $extension);
        $data->image=$extension;
    }

    else{

	//return $request;
	$data->image='';
}
 $data->save();
        return redirect()->to('/lara-livewire-file-upload');
    }

    public function render()
    {
        return view('livewire.lara-file-upload');
    }
}
