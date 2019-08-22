@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">{{ $bappa->name }}
                            @if ($bappa->status == "Approved")
                                <span class="badge badge-success">Approved</span>
                            @elseif ($bappa->status == "Not Approved")
                                <span class="badge badge-warning">Not Approved</span>
                            @elseif ($bappa->status == "Declined")
                                <span class="badge badge-danger">Declined</span>
                            @endif
                        </h5>
                        <p class="card-text"># {{ $bappa->id }}</p>
                        @if(auth()->user()->is_admin)
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-primary"><a class="text-white" href="/admin/bappa/{{ $bappa->id }}/edit">Edit</a></button>
                                <button type="button" class="btn btn-success"><a class="text-white" href="/admin/bappa/{{ $bappa->id }}/approve">Approve</a></button>
                                <button type="button" class="btn btn-danger"><a class="text-white" href="/admin/bappa/{{ $bappa->id }}/decline">Decline</a></button>
                            </div>
                        @endif
                    </div>
                    <div class="card-footer text-muted">
                        Total Votes: <span class="badge badge-primary badge-pill">{{ $bappa->votes }}</span>
                    </div>
                </div>
                <hr>
                <div class="card">
                    <div class="card-header">Details</div>
                    <div class="card-body">
                        <p class="card-text">
                            Address: {{ $bappa->address }}
                            <br>
                            Pincode: {{ $bappa->pincode }}
                            <br>
                            Contact Person Name: {{ $bappa->person }}
                            <br>
                            Mobile: {{ $bappa->mobile }}
                        </p>
                    </div>
                </div>
                @if(!$bappa->pc == 0)
                    <hr>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/img/{{$bappa->id}}-1.jpg" alt="1">
                            </div>
                            @for ($i = 2; $i <= $bappa->pc; $i++)
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/img/{{$bappa->id}}-{{ $i }}.jpg" alt="{{ $i }}">
                                </div>
                            @endfor
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                @endif
                <hr>
                <form id="form" class="form-horizontal" method="POST" action="/admin/bappa/{{ $bappa->id }}/upload" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="file" class="col-md-4 control-label">Upload Photos</label>

                        <div class="col-md-6">
                            <input id="file" type="file" class="form-control" name="file[]" multiple>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
