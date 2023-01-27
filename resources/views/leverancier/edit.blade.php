@extends('layouts.admin')
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
         {!! Form::model($appartementen, ['method' => 'PATCH','action' => ['AdminAppartementenController@update', $appartementen->id]]) !!}
        <div class="card-body">
          <div class="form-group  {{ $errors->first('name') ? 'has-error' : '' }}">
            {!! Form::label('name', 'Kamer') !!}
            {!! Form::text('name', $appartementen->name, ['class' => 'form-control', 'placeholder' => 'Kamer 1', 'require']) !!}
            @if($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
            @endif
          </div>            
          <div class="form-group  {{ $errors->first('status') ? 'has-error' : '' }}">
            {!! Form::label('status', 'Bedrijf') !!}
            {!! Form::text('status', $appartementen->status->name, ['class' => 'form-control', 'placeholder' => 'Bedrijf', 'require']) !!}
            @if($errors->has('status'))
                <span class="help-block">{{ $errors->first('status') }}</span>
            @endif
          </div>
          <div class="form-group {{ $errors->first('adres') ? 'has-error' : '' }}">
            {!! Form::label('prijs', 'Prijs') !!}
            {!! Form::text('prijs', $appartementen->prijs, ['class' => 'form-control', 'placeholder' => 'Adress', 'require']) !!}
            @if($errors->has('prijs'))
                <span class="help-block">{{ $errors->first('prijs') }}</span>
            @endif
          </div>
           {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
           <a href="{{ route('appartementen.index') }}" class="btn btn-danger margin">Cancel</a>
        </div>
         {!! Form::close() !!}
    </div>
  </div>
</div>
<!-- /.content -->

@endsection     