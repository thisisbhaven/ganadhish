@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="btn btn-primary" href="bappa/register" role="button">बाप्पाची नोंदणी करा</a>
                <hr>
                @foreach($bappas as $bappa)
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title"><a class="nav-link" href="bappa/{{ $bappa->id }}/show">{{ $bappa->name }}</a>
                                @if ($bappa->status == "Approved")
                                    <span class="badge badge-success">वेरिफाइड</span>
                                @elseif ($bappa->status == "Not Approved")
                                    <span class="badge badge-warning">वेरिफाइड नाही</span>
                                @elseif ($bappa->status == "Declined")
                                    <span class="badge badge-danger">रद्द</span>
                                @endif
                            </h5>
                            <p class="card-text"># {{ $bappa->id }}</p>
                        </div>
                        <div class="card-footer text-muted">
                            एकूण मते: <span class="badge badge-primary badge-pill">{{ $bappa->votes }}</span>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection
