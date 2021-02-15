@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 ">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{route('kirim.sms')}}"  method="POST">
                        @csrf
                       
                        <div class="mb-3">
                            <h5 class="text-muted">Form Tambah SMS</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nomor</label>
                                    <input type="text" name="number" class="form-control" id="" >
                                </div>
                            </div>    
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Pesan</label>
                                    <input type="text" name="message" class="form-control" id="" >
                                </div>
                            </div>    
                        </div>
                        <button type="submit" class="btn btn-outline-info btn-sm">Simpan</button>
                        <a href="" class="btn btn-outline-secondary btn-sm">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  