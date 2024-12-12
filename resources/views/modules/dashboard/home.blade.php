@extends('layouts/main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                    You are logged in!

                            <div class="text-center mt-4">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                        <button type="submit" class="btn btn-danger">Cerrar sesión</button>
                                </form>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
