@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">लीडरबोर्ड</div>

                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">बाप्पाचे नाव</th>
                                <th scope="col">कोड</th>
                                <th scope="col">मते</th>
                            </tr>
                            </thead>
                            @foreach($bappas as $bappa)
                                <tbody>
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td><a href="bappa/{{ $bappa->id }}/show">{{ $bappa->name }}</td>
                                    <td>{{ $bappa->id }}</td>
                                    <td><span class="badge badge-primary badge-pill">{{ $bappa->votes }}</span></td>
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
