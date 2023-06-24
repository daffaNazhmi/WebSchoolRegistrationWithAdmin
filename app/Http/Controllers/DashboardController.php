<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Registrasi;
use Barryvdh\DomPDF\PDF;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cari = $request->search;

        $query = DB::table('registrasi')
        ->select('registrasi.*')
        ->where('registrasi.no_reg', 'LIKE', "%$cari%")
        ->orwhere('registrasi.nama', 'LIKE', "%$cari%")
        ->orwhere('registrasi.jenis_kelamin', 'LIKE', "%$cari%")
        ->orwhere('registrasi.alamat', 'LIKE', "%$cari%")
        ->orwhere('registrasi.agama', 'LIKE', "%$cari%")
        ->orwhere('registrasi.asal_sekolah', 'LIKE', "%$cari%")
        ->orwhere('registrasi.jurusan', 'LIKE', "%$cari%")
        ->get();

        return view ('dashboard.index', compact('query', 'cari'));
    }

    public function index2()
    {
        return view('user.index');
    }

    public function cetakpdf()
    {
    	$regis = Registrasi::all();
 
    	$pdf = PDF::loadview('dashboard.pdf',['dashboard.index'=>$regis]);
    	return $pdf->download('laporan-pegawai-pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $query = Registrasi::all();
        return view ('dashboard.create', compact('query'));
    }

    public $registrasi;
    public function __construct()
    {
        $this->registrasi = new Registrasi;
    }
    public function store(Request $request)
    {
        $rules = [
            'noreg' => 'required|min:3|max:20',
            'nama' => 'required',
            'jeniskelamin' => 'required|min:3|max:10',
            'alamat' => 'required|min:3|max:100',
            'agama' => 'required|min:3|max:100',
            'asalsekolah' => 'required|min:3|max:100',
            'jurusan' => 'required|min:3|max:100',
        ];
        $messages = [
            'required' => "atribut harus di isi, tidak boleh kosong",
            'min' => "isi form nya kurang, min 3 karakter",
            'max' => "isi form nya kebanyakan / ukuran file terlalu besar",
            'mimes' => "ekstensi file tidak di izinkan"
        ];
        $this->validate($request, $rules, $messages);

        $this->registrasi->no_reg = $request->noreg;
        $this->registrasi->nama = $request->nama;
        $this->registrasi->jenis_kelamin = $request->jeniskelamin;
        $this->registrasi->alamat = $request->alamat;
        $this->registrasi->agama = $request->agama;
        $this->registrasi->asal_sekolah = $request->asalsekolah;
        $this->registrasi->jurusan = $request->jurusan;

        $this->registrasi->save();

        return redirect()->route('dashboard.index');
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
        $query = Registrasi::all();
        $edit = Registrasi::findOrFail($id);
        return view ('dashboard.edit', compact('query', 'edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = Registrasi::findOrFail($id);

        $update->no_reg = $request->noreg;
        $update->nama= $request->nama;
        $update->jenis_kelamin = $request->jeniskelamin;
        $update->alamat = $request->alamat;
        $update->agama = $request->agama;
        $update->jurusan = $request->jurusan;
        
        $update->save();
        return redirect()->route('dashboard.index');
    }

    public function checkout()
    {
        $query = Registrasi::all();
        
        return view('user.checkout', compact('query'));
    }

    public function informasi()
    {
        
        return view('user.information');
    }

    public function registrasi(Request $request)
    {

        $rules = [
            'noreg' => 'required|min:3|max:20',
            'nama' => 'required',
            'jeniskelamin' => 'required|min:3|max:10',
            'alamat' => 'required|min:3|max:100',
            'agama' => 'required|min:3|max:100',
            'asalsekolah' => 'required|min:3|max:100',
            'jurusan' => 'required|min:3|max:100',
        ];
        $messages = [
            'required' => "atribut harus di isi, tidak boleh kosong",
            'min' => "isi form nya kurang, min 3 karakter",
            'max' => "isi form nya kebanyakan / ukuran file terlalu besar"
        ];
        $this->validate($request, $rules, $messages);
       
        $this->registrasi->no_reg = $request->noreg;
        $this->registrasi->nama = $request->nama;
        $this->registrasi->jenis_kelamin = $request->jeniskelamin;
        $this->registrasi->alamat = $request->alamat;
        $this->registrasi->agama = $request->agama;
        $this->registrasi->asal_sekolah = $request->asalsekolah;
        $this->registrasi->jurusan = $request->jurusan;

        $this->registrasi->save();

        return view('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapus(string $id)
    {
        // ini variabel buat nampung id
        $hapus = Registrasi::findOrFail($id);

        $hapus->delete();

        return redirect()->route('dashboard.index');
    }
}
