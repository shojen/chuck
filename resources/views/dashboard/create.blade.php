@extends('layouts.dashboard.dashboard')
@section('content')
<div class="col-xs-12 col-lg-6 col-lg-offset-3">
    @include('layouts.partials.form_errors')
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Nueva Frase</h3>
            </div>            
            {!! Form::open(['action'=>'DashboardController@store','method'=>'post','role'=>'form']) !!}
            
              <div class="box-body">
                <div class="form-group">
                  <label for="phrase">Frase</label>
                  <input type="text" class="form-control" id="phrase" name="phrase" placeholder="Escribe tu frase" value="{!! old('phrase') !!}">
                </div>
               
              </div>
              <div class="box-footer text-center">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{!! action('DashboardController@index') !!}" class="btn btn-danger">Cancelar</a>
              </div>
            {!! Form::close() !!}
          </div>
  </div>
@endsection

@section('script')
  @if (notify()->ready())
    <script>
        swal({
            text:  "{{ notify()->message() }}",
            type:  "{{ notify()->type() }}",
            title: "{{ notify()->option('title') }}",
            timer: {{ notify()->option('timer') }}   
        });
    </script>
  @endif
@endsection
