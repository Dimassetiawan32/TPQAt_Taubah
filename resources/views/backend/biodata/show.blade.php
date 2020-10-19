@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 ">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
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
                                    <input type="text" name="nama" class="form-control" value="{{$biodata->nama}}" id="" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="{{$biodata->alamat}}" id="" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Gender</label>
                                    <input type="text" name="gender" class="form-control" value="{{$biodata->gender}}" id="" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <div class="">
                                        <img src="{{asset('storage/'.$biodata->images)}}" alt="" weight="30px" height="30px">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Agama</label>
                                    <input type="text" name="agama" class="form-control" value="{{$biodata->agama}}" id="" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" name="tmp_lahir" class="form-control" value="{{$biodata->tmp_lahir}}" id="" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="text" name="tgl_lahir" class="form-control" value="{{$biodata->tgl_lahir}}" id="" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Asal Sekolah</label>
                                    <input type="text" name="asal_sekolah" class="form-control" value="{{$biodata->asal_sekolah}}" id="" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Telpon</label>
                                    <input type="text" name="telpon" class="form-control" value="{{$biodata->telpon}}" id="" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Ayah</label>
                                    <input type="text" name="nama_ayah" class="form-control" value="{{$biodata->nama_ayah}}" id="" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Ibu</label>
                                    <input type="text" name="nama_ibu" class="form-control" value="{{$biodata->nama_ibu}}" id="" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <a href="{{route('backend.biodata.index')}}" class="btn btn-outline-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  