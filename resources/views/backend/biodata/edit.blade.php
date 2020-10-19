@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 ">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{route('backend.biodata.update', $biodata->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" value="{{$biodata->nama}}" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="{{$biodata->alamat}}" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Gender</label>
                                        <select name="gender" class="form-control" value="{{$biodata->gender}}" id="">
                                            <option>Pilih Gender</option>
                                            <option>Laki-Laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="images" class="form-control" value="{{$biodata->images}}" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Agama</label>
                                        <select name="agama" class="form-control" value="{{$biodata->agama}}" id="">
                                            <option>Pilih Agama</option>
                                            <option>Islam</option>
                                            <option>Kristen</option>
                                            <option>Hindu</option>
                                            <option>Budha</option>
                                            <option>Konghuchu</option>
                                            <option>Ateis</option>
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" name="tmp_lahir" class="form-control" value="{{$biodata->tmp_lahir}}" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" value="{{$biodata->tgl_lahir}}" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Asal Sekolah</label>
                                    <input type="text" name="asal_sekolah" class="form-control" value="{{$biodata->asal_sekolah}}" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Telpon</label>
                                    <input type="text" name="telpon" class="form-control" value="{{$biodata->telpon}}" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Ayah</label>
                                    <input type="text" name="nama_ayah" class="form-control" value="{{$biodata->nama_ayah}}" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Ibu</label>
                                    <input type="text" name="nama_ibu" class="form-control" value="{{$biodata->nama_ibu}}" id="" >
                                </div>
                            </div>
                        </div>
                        <div class="">
                        <button type="submit" class="btn btn-outline-info">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  