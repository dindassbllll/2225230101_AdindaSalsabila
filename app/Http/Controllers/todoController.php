<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class todoController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 3;
        if(strlen($katakunci)){
            $data = todo::where('kegiatan', 'like', "%$katakunci%")
            ->orWhere('tanggal', 'like', "%$katakunci%")
            ->paginate($jumlahbaris);
        }else{
            $data = todo::orderBy('kegiatan','desc')->paginate($jumlahbaris);
        }
        
        return view('todo.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('kegiatan', $request->nama);
        Session::flash('tanggal', $request->alamat);

        $request->validate([
            'kegiatan'=>'required',
            'tanggal'=>'required',
        ],[
            'kegiatan.required'=>'Kegiatan wajib diisi',
            'tanggal.required'=>'Tanggal wajib diisi',
        ]);
        $data = [
            'id_kegiatan'=>$request->id_kegiatan,
            'kegiatan'=>$request->kegiatan,
            'tanggal'=>$request->tanggal,
            ];
            todo::create($data);
            return redirect()->to('todo')->with('success', 'Berhasil menambahkan kegiatan');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = todo::where('id_kegiatan', $id)->first();
        return view('todo.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kegiatan' => 'required',
            'tanggal' => 'required',
        ], [
            'kegiatan.required' => 'Kegiatan wajib diisi',
            'tanggal.required' => 'Tanggal wajib diisi',
        ]);
    
        todo::where('id_kegiatan', $id)
            ->update([
                'kegiatan' => $request->input('kegiatan'),
                'tanggal' => $request->input('tanggal'),
            ]);
    
        return redirect()->to('todo')->with('success', 'Berhasil update kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        todo::where('id_kegiatan', $id)->delete();
        return redirect()->to('todo')->with('success', 'Berhasil delete data');
    }
}
