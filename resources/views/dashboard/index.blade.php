@extends('layouts.dashboard.dashboard')
@section('content')
<div class="row" id="app">
  
  <div class="col-xs-12 col-lg-10 col-lg-offset-1">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Frases Célebres</h3>
        
        <div class="box-tools">
        	<div class="pull-right"><a href="{!! action('DashboardController@create') !!}" class="btn btn-success">Agregar</a></div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tbody><tr>
            
            <th class="text-center hidden-sm">Frase</th>            
            <th class="text-center">Estado</th>
            <th class="text-center">Acciones</th>
            
          </tr>
          @if(count($phrases)>0)
            @foreach($phrases as $phrase)
              <tr data-id="{!! $phrase->id !!}" class="text-center">
                
                <td title="{{ $phrase->phrase }}">{{ $phrase->phrase }}</td>                                
                <td class='state'>{!! ($phrase->show)?"<span class='label label-success'>Publicado</span>":"<span class='label label-danger'>Pendiente</span>" !!}</td>
                <td>          
                            
                    <a href="{!! action('DashboardController@edit',$phrase->id) !!}" class="btn btn-primary btn-sm" title="Editar"><span class="fa fa-edit"></span></a>
                    
                    <a href="#" class="btn btn-danger btn-delete btn-sm" title="Eliminar" data-loading-text="Eliminando..."><span class="fa fa-trash"></span></a>
                  
                </td>
                
              </tr>
            @endforeach
          @else
            <tr><td colspan="2" class="text-center"><h3>Sin Registros</h3></td></tr>
          @endif
          
        </tbody></table>
      </div>
      <div class="box-footer clearfix">
          {!! $phrases->links() !!}              
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
 {!! Form::open(['action'=>['DashboardController@destroy',':PHRASE_ID'],'method'=>'delete','id'=>'form-delete']) !!}
 {!! Form::close() !!}
 
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
  
  <script>
    $(document).ready(function(){
      $('.btn-delete').click(function(){

          var row=$(this).parents('tr');
          var id=row.data('id');
          var form=$('#form-delete');
          var url=form.attr('action').replace(':PHRASE_ID',id);
          var data=form.serialize();
          var btn=$(this);
          
        askDelete(url,data,row,btn);
      });

      
    });

    function askDelete(url,data,row,btn) {
          
          swal({
            title:"¿Seguro que deseas eliminar?",
            text:"No podrás recuperar los datos",
            type:"warning",
            showCancelButton:true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Si,eliminar!",
            cancelButtonText: "No",
            closeOnConfirm: true,
            closeOnCancel: true
            
          },
          function(isConfirm){
            if(isConfirm)
            {
              $.ajax({
                method:'POST',
                url:url,
                data:data,
                beforeSend:function(){
                  btn.button('loading');
                }
                
              })              
              .done(function(res){
                
                if(res==='ok')
                {
                  row.hide();
                }
              }).complete(function(){
                btn.button('reset');
              });
              
              
            }
          });

      
    }
    
  </script>
@endsection
