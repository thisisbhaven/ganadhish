@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">{{ $bappa->name }}
                            @if($bappa->user_id == auth()->user()->id)
                                @if ($bappa->status == "Approved")
                                    <span class="badge badge-success">वेरिफाइड</span>
                                @elseif ($bappa->status == "Not Approved")
                                    <span class="badge badge-warning">वेरिफाइड नाही</span>
                                @elseif ($bappa->status == "Declined")
                                    <span class="badge badge-danger">रद्द</span>
                                @endif
                            @endif
                        </h5>
                        <p class="card-text"># {{ $bappa->id }}</p>
                        <p class="card-text">
                            {{ $bappa->address }}
                            <br>
                            {{ $bappa->pincode }}
                        </p>
                        <p><i>२ सप्टेंबर, २०१९ रोजी दुपारी १२ वाजता मतदान सुरू होईल</i></p>
                        <p><i>१ सप्टेंबर, २०१९ दुपारी १२ वाजता पासून आपण फोटो अपलोड करू शकता</i></p>
                    </div>
                    <div class="card-footer text-muted">
                        एकूण मते: <span class="badge badge-primary badge-pill">{{ $bappa->votes }}</span>
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
                <div class="card">
                    <div class="card-header">अलीकडील मते</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">नाव</th>
                                <th scope="col">वेळ</th>
                            </tr>
                            </thead>
                            @foreach($votes as $vote)
                                <tbody>
                                <tr>
                                    <th scope="row">{{ $no-- }}</th>
                                    <td>{{ $vote->user->name }}</td>
                                    <td>{{ $vote->created_at->diffForHumans() }}</td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
