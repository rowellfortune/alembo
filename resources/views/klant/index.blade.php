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
            <a href="{{ route('klant.create') }}" class="btn btn-success btn-sm float-end">Add</a>

        </div>
        <div class="card-body">

            <table id="example2" class="table">
                <thead>
                    <tr>
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th>Geslacht</th>
                        <th>Adres #</th>
                        <th>District</th>
                        <th>Tel</th>
                        <th>Email</th>
                        <th>View</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                    @if(count($data) > 0)

                    @foreach($data as $row)

                    <tr>
                        <td>{{ $row->voornaam }}</td>
                        <td>{{ $row->achternaam }}</td>
                        <td>{{ $row->geslacht }}</td>
                        <td>{{ $row->adres }} {{ $row->huisnummer }}</td>

                        <td>{{ $row->district }}</td>
                        <td>{{ $row->telefoonnummer }}</td>
                        <td>{{ $row->email }}</td>
                        <td>
                            <form method="post" action="{{ route('klant.destroy', $row->id) }}">
                                @csrf
                                <a href="{{ route('klant.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
                            </form>

                        </td>
                        <td>
                            <form method="post" action="{{ route('klant.destroy', $row->id) }}">
                                @csrf
                                <a href="{{ route('klant.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            </form>

                        </td>
                        <td>
                            <form method="post" action="{{ route('klant.destroy', $row->id) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                            </form>

                        </td>
                    </tr>

                    @endforeach

                    @else
                    <tr>
                        <td colspan="5" class="text-center">No Data Found</td>
                    </tr>
                    @endif
                </thead>
                </tfoot>
            </table>
            {!! $data->links() !!}
        </div>
    </div>

    @if($message = Session::get('success'))

    <div class="alert alert-success">
        {{ $message }}
    </div>

    @endif


</div>
<!-- /.content -->

@endsection