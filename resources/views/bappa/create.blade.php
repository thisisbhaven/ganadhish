@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('बाप्पा बद्दल माहिती') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('bappa/register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('बाप्पाचे किंवा मंडळाचे नाव') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('स्पर्धा') }}</label>

                            <div class="col-md-6">
                                <input id="competition" type="radio" name="competition" value="home" required> घरगुती गणेशोत्सव
                                <input id="competition" type="radio" name="competition" value="public" required> सार्वजनिक गणेशोत्सव
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('पत्ता') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pincode" class="col-md-4 col-form-label text-md-right">{{ __('पिन कोड') }}</label>

                            <div class="col-md-6">
                                <input id="pincode" type="text" class="form-control{{ $errors->has('pincode') ? ' is-invalid' : '' }}" name="pincode" value="{{ old('pincode') }}" required>

                                @if ($errors->has('pincode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pincode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="person" class="col-md-4 col-form-label text-md-right">{{ __('संपर्क व्यक्तीचे नाव') }}</label>

                            <div class="col-md-6">
                                <input id="person" type="text" class="form-control{{ $errors->has('person') ? ' is-invalid' : '' }}" name="person" value="{{ old('person') }}" required autofocus>

                                @if ($errors->has('person'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('person') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('मोबाईल') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}" required autofocus>

                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('रजिस्टर') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
