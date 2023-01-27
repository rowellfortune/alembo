@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- <div class="col-md-8"> -->
            <!-- <div class="card"> -->
            <div class="card-header">{{ __('Leverancier') }}</div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                {{ __('You are logged in!') }}
            </div>

            <div class="row">
            </div>
        </div>
    </div>
</div>
@endsection