<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Karakter;
use App\Models\Kelas;
use DataTables;

class KarakterController extends Controller {
    
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $karakter = Karakter::all();
        return view('konten.karakter.index', compact('karakter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $kelas = Kelas::all();
        return view('konten.karakter.add', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $data = $request->only([
            'name',
            'title',
            'ket',
            'id_kelas',
            'power'
        ]);
        $karakter = Karakter::create($data);
        return redirect('/characters')->withSuccess('Data has been add :3');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $karakter = Karakter::find($id);
        return view('konten.karakter.show', compact('karakter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $karakter = Karakter::find($id);
        $kelas = Kelas::all();
        return view('konten.karakter.edit', compact('karakter'), compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $karakter = Kelas::find($id);
        if($karakter) {
            $data = $request->only([
                'name',
                'title',
                'ket',
                'id_kelas',
                'power'
            ]);
            $karakter = Karakter::where('id', $id)->update($data);
        }
        return redirect('/characters')->withSuccess('Data has been add :3');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $karakter = Karakter::where('id', $id)->delete();
        return redirect('/characters')->withSuccess('Data has been delete :3');
    }
}
