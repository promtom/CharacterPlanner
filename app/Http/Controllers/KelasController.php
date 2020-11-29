<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kelas;
use DataTables;

class KelasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        // datatabel??
        if(request()->ajax()) { 
            return datatables()->of(Kelas::select('*'))
                ->addColumn('action', 'kelas.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true); 
        }
        $kelas = Kelas::all();
        // dd($kelas);
        return view('konten.kelas.index', compact('kelas'));
    }

    public function create()
    {
        return view('konten.kelas.add');
    }

    public function store(Request $request) {
        $data = $request->only([
            'name_kelas',
            'ket_kelas'
        ]);
        $kelas = Kelas::create($data);
        return redirect('/class')->withSuccess('Data has been add :3');
    }

    public function show($id) {
        $kelas = Kelas::find($id);
        return view('konten.kelas.show', compact('kelas'));
    }
    public function edit($id) {
        $kelas = Kelas::find($id);
        return view('konten.kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id) {
        $kelas = Kelas::find($id);
        if($kelas) {
            $data = $request->only([
                'name_kelas',
                'ket_kelas'
            ]);
            $kelas = Kelas::where('id', $id)->update($data);
        }
        return redirect('/class')->withSuccess('Data has been update :3');
    }

    public function destroy($id) {
        $kelas = Kelas::where('id', $id)->delete();
        return redirect('/class')->withSuccess('Data has been delete :3');
    }
}
