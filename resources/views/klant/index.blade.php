@extends('layouts.dashboard')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

                <h1 class="m-0 text-dark">Klanten</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('klant.create') }}" class="btn float-sm-right btn-primary">Add +</a>
            <h3 class="card-title">Quick Example</h3>
        </div>
        <div class="card-body">

            <table id="example2" class="table">
                <thead>
                    <tr>
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th>Geslacht</th>
                        <th>Huisnummer</th>
                        <th>District</th>
                        <th>Telefoonnummer</th>
                        <th>Email</th>
                        <th>Edit</th>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a title="edit" href="#" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>

                </thead>
                </tfoot>
            </table>

            Er zijn geen Appartementen ingevoerd


        </div>
    </div>
</div>
<!-- /.content -->

@endsection
