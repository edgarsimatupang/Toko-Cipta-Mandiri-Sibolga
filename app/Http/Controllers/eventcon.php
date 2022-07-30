<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;

class eventcon extends Controller
{
    public function eventadmin()
    {
        $eventot=event::all();
        return view('admin.eventadmin')->with([
            'eventot' => $eventot
        ]);
    }

    public function tambahevent()
    {
        return view ('admin.tambahevent');
    }

    public function store(Request $request)
    {
        $info = new event();
        $info->judul = $request->judul;
        $info->keterangan = $request->keterangan;
        if ($request->hasFile('gambar')){
            $file= $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('images/event',$file);
            $info->gambar = $file;
        } 
        $info -> save();
        return redirect('admin.eventadmin');
    }

    public function delete($id)
    {
        $deleteinfo = event::find($id);
         if($deleteinfo->delete()){}
           return redirect()->back();
    }

    public function update(request $request, $id){
        $update = event::find($id);
            $file = $update->gambar;
            if ($request->hasFile('gambar')){
                $file= $request->file('gambar')->getClientOriginalName();
                $request->file('gambar')->move('images/event',$file);
                $update->gambar = $file;
            }   
            $update->judul= $request->judul;
            $update->gambar = $file;
            $update->keterangan = $request->keterangan;
            $update -> save();
           
            return redirect('admin.eventadmin');         
    
        }

    public function edit($id)
    {
        $update = event::find($id);
        return view('admin.editevent',compact('update'));
    }

    
    public function eventi()
    {
        $info=event::all();
        return view('/products',compact('info'));
    }

  

}