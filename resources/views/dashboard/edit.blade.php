@extends('template.back')
@section('konten')
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Edit Data</h5>
        </div>
        <div class="card-body">
            <form action="{{route('dashboard.update',$edit['id'])}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label" for="Email">NoReg</label>
                            <input type="text" value="{{$edit['no_reg']}}" class="form-control" id="text" name="noreg">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label" for="Text">Nama</label>
                            <input type="text" value="{{$edit['nama']}}" class="form-control" id="Text" name="nama">
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
                            <input type="text" value="{{$edit['alamat']}}" class="form-control" id="password" " name="alamat">
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
                            <label class="floating-label" for="password">AsalSekolah</label>
                            <input type="text" value="{{$edit['asal_sekolah']}}" class="form-control" id="password" name="asalsekolah">
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