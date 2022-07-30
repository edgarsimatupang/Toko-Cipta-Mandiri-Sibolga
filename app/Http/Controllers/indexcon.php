<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\index;

class indexcon extends Controller
{
    public function indexadmin()
    {
        $indexx=index::all();
        return view('admin.indexadmin')->with([
            'indexx' => $indexx
        ]);
    }

    public function indexxx()
    {
        $info=index::all();
        return view('/index',compact('info'));
    }


    public function tambahindex()
    {
        return view ('admin.tambahindex');
    }

    public function store(Request $request)
    {
        $info = new index();
        $info->judul = $request->judul;
        $info->keterangan = $request->keterangan;
        if ($request->hasFile('gambar')){
            $file= $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('images/index',$file);
            $info->gambar = $file;
        } 
        $info -> save();
        return redirect('admin.indexadmin');
    }

    public function delete($id)
    {
        $deleteinfo = index::find($id);
         if($deleteinfo->delete()){}
           return redirect()->back();
    }

    public function update(request $request, $id){
        $update = index::find($id);
            $file = $update->gambar;
            if ($request->hasFile('gambar')){
                $file= $request->file('gambar')->getClientOriginalName();
                $request->file('gambar')->move('images/index',$file);
                $update->gambar = $file;
            }   
            $update->judul= $request->judul;
            $update->gambar = $file;
            $update->keterangan = $request->keterangan;
            $update -> save();
           
            return redirect('admin.indexadmin');         
    
        }

        public function edit($id)
    {
        $update = index::find($id);
        return view('admin.editindex',compact('update'));
    }


}
