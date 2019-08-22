@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">{{ $bappa->name }}</h5>
                        <p class="card-text"># {{ $bappa->id }}</p>
                        <p class="card-text">{{ $bappa->address }}</p>
                    </div>
                    <div class="card-footer text-muted">
                        एकूण मते: {{ $bappa->votes }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
