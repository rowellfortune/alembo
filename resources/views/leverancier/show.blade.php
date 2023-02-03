@extends('layouts.dashboard')


@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Bedrijfsdetails</b></div>
            <div class="col col-md-6">
                <a href="{{ route('leverancier.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Bedrijfsnaam</b></label>
            <div class="col-sm-10">
                {{ $leverancier->bedrijfsnaam}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Adres</b></label>
            <div class="col-sm-10">
                {{ $leverancier->adres}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Directeur</b></label>
            <div class="col-sm-10">
                {{ $leverancier->directeur}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>District</b></label>
            <div class="col-sm-10">
                {{ $leverancier->district}}
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Telefoonnummer</b></label>
            <div class="col-sm-10">
                {{ $leverancier->telefoonnummer }}
            </div>
        </div>

        <div class="row mb-4">
            <label class="col-sm-2 col-label-form"><b>Webiste</b></label>
            <div class="col-sm-10">
                {{ $leverancier->website }}
            </div>
        </div>
    </div>
</div>
@endsection
