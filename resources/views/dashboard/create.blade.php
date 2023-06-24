@extends('template.back')
@section('konten')
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Tambah Data</h5>
        </div>
        <div class="card-body">
            <form action="{{route('dashboard.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label" for="Email">NoReg</label>
                            <input type="text" class="form-control" id="text" placeholder="Masukkan no registrasi" name="noreg">
                            @error('noreg')
                                <small class="text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label" for="Text">Nama</label>
                            <input type="text" class="form-control" id="Text" placeholder="Masukkan nama" name="nama">
                            @error('nama')
                                <small class="text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label" for="password">JK</label>
                            <select name="jeniskelamin" class="form-control">
                                
                                <option>Laki Laki</option>
                                <option>Perempuan</option>
                            </select>  
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label" for="password">Alamat</label>
                            <input type="text" class="form-control" id="password" placeholder="Masukkan alamat" name="alamat">
                            @error('alamat')
                                <small class="text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label" for="password">Agama</label>
                            <select name="agama" class="form-control">
                                
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Kong Hu Cu</option>
                                <option>Buddha</option>
                                <option>Shinto</option>
                            </select>  
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label" for="password">Asal Sekolah</label>
                            <input type="text" class="form-control" id="password" placeholder="Masukkan asal sekolah" name="asalsekolah">
                            @error('asalsekolah')
                                <small class="text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label" for="password">Jurusan</label>
                            <select name="jurusan" class="form-control">
                                
                                <option>PPL (Pengembangan Perangkat Lunak)</option>
                                <option>PSJ (Pengelolaan Sistem dan Jaringan)</option>
                                <option>Desain Grafis</option>
                            </select>
                        </div>
                    </div>
                </div>
                <center>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success mt-4">Simpan</button>
                    </div>
                </center>
            </form>
        </div>
    </div>
</div>
@endsection