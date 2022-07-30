<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kepengurusan;

class kepengurusancon extends Controller
{
    public function bagianadmin()
    {
        $bagian=kepengurusan::all();
        return view('admin.bagianadmin')->with([
            'bagian' => $bagian
        ]);
    }

    public function tambahbagian()
    {
        return view ('admin.tambahbagian');
    }

    public function store(Request $request)
    {
        $info = new kepengurusan();
        $info->nama = $request->nama;
        $info->jabatan = $request->jabatan;
        $info -> save();
        return redirect('admin.bagianadmin');
    }

    public function delete($id)
    {
        $deleteinfo = kepengurusan::find($id);
         if($deleteinfo->delete()){}
           return redirect()->back();
    }

    public function update(request $request, $id){
        $update = kepengurusan::find($id);
            $update->nama= $request->nama;
            $update->jabatan = $request->jabatan;
            $update -> save();
           
            return redirect('admin.bagianadmin');         
    
        }

        public function edit($id)
    {
        $update = kepengurusan::find($id);
        return view('admin.editbagian',compact('update'));
    }

    public function bagiann()
    {
        $info=kepengurusan::all();
        return view('/store',compact('info'));
    }

}
