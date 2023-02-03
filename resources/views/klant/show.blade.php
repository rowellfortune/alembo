@extends('layouts.dashboard')


@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Student Details</b></div>
            <div class="col col-md-6">
                <a href="{{ route('klant.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Voornaam</b></label>
            <div class="col-sm-10">
                {{ $klant->voornaam}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Achternaam</b></label>
            <div class="col-sm-10">
                {{ $klant->achternaam}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Geslacht</b></label>
            <div class="col-sm-10">
                {{ $klant->geslacht}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Adres</b></label>
            <div class="col-sm-10">
                {{ $klant->adres}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Huisnummer</b></label>
            <div class="col-sm-10">
                {{ $klant->huisnummer }}
            </div>
        </div>
        <div class="row mb-4">
            <label class="col-sm-2 col-label-form"><b>District</b></label>
            <div class="col-sm-10">
                {{ $klant->district }}
            </div>
        </div>
        <div class="row mb-4">
            <label class="col-sm-2 col-label-form"><b>District</b></label>
            <div class="col-sm-10">
                {{ $klant->telefoonnummer }}
            </div>
        </div>
        <div class="row mb-4">
            <label class="col-sm-2 col-label-form"><b>Email</b></label>
            <div class="col-sm-10">
                {{ $klant->email }}
            </div>
        </div>
    </div>
</div>
@endsection