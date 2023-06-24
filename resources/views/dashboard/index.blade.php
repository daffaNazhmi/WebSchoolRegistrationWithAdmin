@extends('template.back')
@section('konten')
<div class="card">
    <div class="card-header">
        <h5>Data User Registrasi Sekolah</h5>
        <a href="{{route('dashboard.create')}}"><button class="btn btn-info float-right">Tambah</button></a>
    </div>
    <div class="card-body table-border-style">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>NoReg</th>
                        <th>Nama</th>
                        <th>JK</th>
                        <th>Alamat</th>
                        <th>Agama</th>
                        <th>Asal Sekolah</th>
                        <th>Jurusan</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                      $query = DB::table('registrasi')
                        ->select('registrasi.*')
                            ->where('registrasi.no_reg', 'LIKE', "%$cari%")
                            ->orwhere('registrasi.nama', 'LIKE', "%$cari%")
                            ->orwhere('registrasi.jenis_kelamin', 'LIKE', "%$cari%")
                            ->orwhere('registrasi.alamat', 'LIKE', "%$cari%")
                            ->orwhere('registrasi.asal_sekolah', 'LIKE', "%$cari%")
                            ->orwhere('registrasi.agama', 'LIKE', "%$cari%")
                            ->orwhere('registrasi.jurusan', 'LIKE', "%$cari%")
                        ->get();
                    @endphp
                    @foreach ($query as $item)
                    <tr>
                        <td>{{$item->no_reg}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->jenis_kelamin}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->agama}}</td>
                        <td>{{$item->asal_sekolah}}</td>
                        <td>{{$item->jurusan}}</td>
                        <td>
						    <a href="{{route('dashboard.edit',$item->id)}}"><button type="submit" class="btn  btn-warning">Edit</button></a>
                            <a href="{{route('Hapus', $item->id)}}"><button type="submit" onclick="return confirm('Apakah yakin data ini dihapus?')" class="btn  btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection