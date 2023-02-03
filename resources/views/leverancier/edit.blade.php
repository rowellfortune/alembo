@extends('layouts.dashboard')
@section('content')


<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Appartement Bijwerken</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Bijwerken</h3>
        </div>

        <div class="card-body">
            <form method="post" action="{{ route('leverancier.update', $leverancier->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Bedrijfsnaam</label>
                                    <input type="text" name="bedrijfsnaam" class="form-control" id="exampleInputEmail1"
                                        value="{{ $leverancier->bedrijfsnaam }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputAdres">Adres</label>
                                    <input type="text" name="adres" class="form-control" id="exampleInputAdres"
                                        value="{{ $leverancier->adres }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputDistrict">District</label>
                                    <select class="form-control select2" name="district" style="width: 100%;"
                                        value="{{ $leverancier->district }}">
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
                                        value="{{ $leverancier->directeur }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="InputEmail1">Website</label>
                                    <input type="text" name="website" class="form-control" id="InputEmail1"
                                        placeholder="Website" value="{{ $leverancier->website }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="InputTelefoonnummer">Telefoonnummer</label>
                                    <input type="number" name="telefoonnummer" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                        minlength="6" maxlength="6" class="form-control" id="InputTelefoonnummer"
                                        value="{{ $leverancier->telefoonnummer }}">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleInputPublished">Status</label>
                                    <select class="form-control" name="is_published" style="width: 100%;">
                                        <option value="draft">Draft</option>
                                        <option value="published">Publish</option>
                                    </select>

                                </div>
                            </div>


                        </div>
                    </div>
                    <div class=" card-footer">
                        <div class="text-center">
                            <input type="hidden" name="hidden_id" value="{{ $leverancier->id }}" />
                            <input type="submit" class="btn btn-primary" value="Edit" />
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>






@endsection