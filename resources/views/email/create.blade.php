@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 ">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{ route('kirim.email') }}" method="POST" class="form">
                        @csrf
                        <div class="mb-3">
                            <h5 class="text-muted">Form Tambah Email</h5>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" name="email_body" placeholder="Enter your message here..."></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  