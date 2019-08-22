@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="accordion" id="accordionDashboard">
                    <div class="card">
                        <div class="card-header" id="headingNotApproved">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseNotApproved" aria-expanded="true" aria-controls="collapseOne">
                                    <h3><span class="badge badge-warning">Not Approved</span></h3>
                                </button>
                            </h5>
                        </div>

                        <div id="collapseNotApproved" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionDashboard">
                            <div class="card-body">
                                @foreach($bappas->where('status', 'Not Approved') as $bappa)
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5 class="card-title"><a class="nav-link" href="admin/bappa/{{ $bappa->id }}/show">{{ $bappa->name }}</a>
                                                <span class="badge badge-warning">Not Approved</span>
                                            </h5>
                                            <p class="card-text"># {{ $bappa->id }}</p>
                                        </div>
                                        <div class="card-footer text-muted">
                                            Total Votes: <span class="badge badge-primary badge-pill">{{ $bappa->votes }}</span>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingApproved">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseApproved" aria-expanded="false" aria-controls="collapseTwo">
                                    <h3><span class="badge badge-success">Approved</span></h3>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseApproved" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionDashboard">
                            <div class="card-body">
                                @foreach($bappas->where('status', 'Approved') as $bappa)
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5 class="card-title"><a class="nav-link" href="admin/bappa/{{ $bappa->id }}/show">{{ $bappa->name }}</a>
                                                <span class="badge badge-success">Approved</span>
                                            </h5>
                                            <p class="card-text"># {{ $bappa->id }}</p>
                                        </div>
                                        <div class="card-footer text-muted">
                                            Total Votes: <span class="badge badge-primary badge-pill">{{ $bappa->votes }}</span>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingDeclined">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseDeclined" aria-expanded="false" aria-controls="collapseThree">
                                    <h3><span class="badge badge-danger">Declined</span></h3>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseDeclined" class="collapse" aria-labelledby="headingThree" data-parent="#accordionDashboard">
                            <div class="card-body">
                                @foreach($bappas->where('status', 'Declined') as $bappa)
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5 class="card-title"><a class="nav-link" href="admin/bappa/{{ $bappa->id }}/show">{{ $bappa->name }}</a>
                                                <span class="badge badge-danger">Declined</span>
                                            </h5>
                                            <p class="card-text"># {{ $bappa->id }}</p>
                                        </div>
                                        <div class="card-footer text-muted">
                                            Total Votes: <span class="badge badge-primary badge-pill">{{ $bappa->votes }}</span>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
