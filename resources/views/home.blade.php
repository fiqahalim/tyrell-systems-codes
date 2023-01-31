@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br/><br/>

                    <div class="container">
                        <div class="row">
                            <h3>Tyrell Test Programming - Card Distributor</h3>
                        </div>

                        <div class="row mt-3">
                            <form action="/submit" method="post">
                                @csrf

                                @if ($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                        Input value does not exist or value is invalid
                                    </div>
                                @endif

                                <div class="form-group mb-3">
                                    <label for="numOfPeople">Number of People</label>
                                    <input type="text" class="form-control @error('numOfPeople') is-invalid @enderror" id="numOfPeople" name="numOfPeople" placeholder="Number of People" value="{{ old('numOfPeople') }}">

                                    @error('numOfPeople')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Answer</button>
                            </form>
                        </div>

                        <br/><br/>
                        <hr>

                        <div class="row">
                            <h6><strong>Answer: </strong></h6>
                        </div>

                        {!! $answer ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
