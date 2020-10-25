<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Updata as PostModel;;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use DB;

class uploadConroller extends Controller
{
    
    public function submit(Request $request)
    {
       
     $data =  array();
 $data['title']= $request->title;
        if ($request->hasFile('file_name')) {
        $file = $request->file('file_name');
        $extension = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $file->move($destinationPath, $extension);
        $data['file_name']=$extension;
    }

    else{

	//return $request;
	$data->image='';
}
 $st = DB::table('up')
      ->insert($data);
        return redirect()->to('/logins');
    }


    public function pro_show()
   {
  $contacts = DB::table('up')
   ->get();
   return view('livewire.data_view')->with('all_data',$contacts);
}
    }
