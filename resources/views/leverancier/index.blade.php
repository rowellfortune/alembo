@extends('layouts.dashboard')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Leverancier</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('leverancier.create') }}" class="btn btn-success btn-sm float-end">Add</a>

        </div>
        <div class="card-body">

            <table id="example2" class="table">
                <thead>
                    <tr>
                        <th>Bedrijfsnaam</th>
                        <th>Adres</th>
                        <th>District</th>
                        <th>Directeur</th>
                        <th>Telefoonnummer</th>
                        <th>Website</th>
                        <th>Status</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                    @if(count($data) > 0)

                    @foreach($data as $row)

                    <tr>
                        <td>{{ $row->bedrijfsnaam }}</td>
                        <td>{{ $row->adres }}</td>
                        <td>{{ $row->district }}</td>
                        <td>{{ $row->directeur }}</td>
                        <td>{{ $row->telefoonnummer }}</td>
                        <td>{{ $row->website }}</td>
                        <td>{{ $row->is_published }}</td>
                        <td>
                            <form method="post" action="{{ route('leverancier.destroy', $row->id) }}">
                                @csrf
                                <a href="{{ route('leverancier.show', $row->id) }}"
                                    class="btn btn-primary btn-sm">View</a>
                            </form>

                        </td>
                        <td>
                            <form method="post" action="{{ route('leverancier.destroy', $row->id) }}">
                                @csrf
                                <a href="{{ route('leverancier.edit', $row->id) }}"
                                    class="btn btn-warning btn-sm">Edit</a>

                            </form>

                        </td>
                        <td>
                            <form method="post" action="{{ route('leverancier.destroy', $row->id) }}">
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



@endsection
