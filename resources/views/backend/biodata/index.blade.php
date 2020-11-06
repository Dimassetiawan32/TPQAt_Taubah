@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{route('backend.biodata.create')}}" class="btn btn-outline-primary">Tambah Biodata</a>
            </div>
            <div class="card border-0 shadow">
                <div class="px-3 py-3">
                    <h4 class="text muted">Biodata</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Agama</th>
                                <th>Image</th>
                                <th>Telpon</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($biodatas as $biodata)
                            <tr>
                                <td>{{$biodata->nama}}</td>
                                <td>{{$biodata->alamat}}</td>
                                <td>{{$biodata->agama}}</td>
                                <td><img src="{{asset('storage/'.$biodata->images)}}" alt="" title="" weight="30px" height="30px">
                                </td>
                                <td>{{$biodata->telpon}}</td>
                                <td>
                                    <form action="{{route('backend.biodata.delete', $biodata->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('backend.biodata.formEdit', $biodata->id)}}" class="btn btn-outline-primary btn-sm">Edit</a>
                                        <a href="{{route('backend.biodata.show', $biodata->id)}}" class="btn btn-outline-success btn-sm">Show</a>
                                        <button href="" class="btn btn-outline-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 