@extends('layouts.dashboard')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Nieuwe leverancier</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@if($errors->any())

<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach
    </ul>
</div>

@endif

<div class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Een nieuwe toevoegen</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('leverancier.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Bedrijfsnaam</label>
                                    <input type="text" name="bedrijfsnaam" class="form-control" id="exampleInputEmail1"
                                        placeholder="Bedrijfsnaam">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputAdres">Adres</label>
                                    <input type="text" name="adres" class="form-control" id="exampleInputAdres"
                                        placeholder="adres">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputDistrict">District</label>
                                    <select class="form-control select2" name="district" style="width: 100%;">
                                        <option value="Brokopondo">Brokopondo</option>
                                        <option value="Commewijne">Commewijne</option>
                                        <option value="Coronie">Coronie</option>
                                        <option value="Marowijne">Marowijne</option>
                                        <option value="Nickerie">Nickerie</option>
                                        <option value="Para">Para</option>
                                        <option value="Paramaribo">Paramaribo</option>
                                        <option value="Saramacca">Saramacca</option>
                                        <option value="Sipaliwini">Sipaliwini</option>
                                        <option value="Wanica">Wanica</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputDirecteur">Directeur</label>
                                    <input type="text" name="directeur" class="form-control" id="exampleInputDirecteur"
                                        placeholder="directeur">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="InputEmail1">Website</label>
                                    <input type="text" name="website" class="form-control" id="InputEmail1"
                                        placeholder="Website">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="InputTelefoonnummer">Telefoonnummer</label>
                                    <input type="number" name="telefoonnummer" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                        minlength="6" maxlength="6" class="form-control" id="InputTelefoonnummer"
                                        placeholder="597-820-1598">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('klant.index') }}" class="btn btn-danger margin">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
