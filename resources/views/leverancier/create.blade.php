@extends('layouts.dashboard')
@section('content')


<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Appartementen tovoegen</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Een appartementen toevoegen</h3>
        </div>

        <div class="card-body">

            <form>
                <div class="card-body">
                    <div class="form-group">


                    </div>
                    <div class="form-group">

                    </div>
                    <div class="form-group">

                    </div>
                    <div class="form-group">

                    </div>
                    <div class="form-group">

                    </div>

                    <a href="{{ route('klant.index') }}" class="btn btn-danger margin">Cancel</a>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- /.cont
ent -->

@endsection