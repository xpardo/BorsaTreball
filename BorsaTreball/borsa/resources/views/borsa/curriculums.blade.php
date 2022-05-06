@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuAlumn')

 
        <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">       



                        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">Nuevo</button>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Acciones</th>
            <th scope="col">Titulo</th>
            <th scope="col">Estado</th>
           </tr>
        </thead>
        <tbody>
            @foreach ($curri as $key => $item)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td width="25%">
                        <button type="button" class="btn btn-info" onclick="showFile('{{ $item->id }}')">Ver</button>
                        <button type="button" class="btn btn-success" onclick="modalEdit('{{ $item->id }}','{{ $item->title }}','{{ $item->state }}','{{ $item->curri_code }}')" data-toggle="modal" data-target="#exampleModalEdit">Editar</button>
                        <button type="button" class="btn btn-danger" onclick="deletecurri('{{ $item->id }}')">Eliminar</button>
                    </td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->state }}</td>
                </tr>
            @endforeach

        </tbody>
      </table>
      <!-- Modal -->
        <form enctype="multipart/form-data" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nueva Tesis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control" id="title" name="title">

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Archivo</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
                          </div>
                        <div class="form-group form-check">
                            <input type="checkbox" value="1" checked class="form-check-input" id="exampleCheck1" name="state">
                            <label class="form-check-label" for="exampleCheck1">Activo</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-register">Guardar</button>
                    </div>
                </div>
            </div>
        </form>
        <form enctype="multipart/form-data" class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Tesis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control" id="title-edit" name="title">
                            <input type="hidden" id="id_alumn" name="id_alumn">
                            <input type="hidden" id="curri_id" name="curri_id">
                            <input type="hidden" id="curri_code" name="curri_code">
                        </div>
                        <div class="form-group">
                            <label for="file-edit">Archivo</label>
                            <input type="file" class="form-control-file" id="file-edit" name="file">
                          </div>
                        <div class="form-group form-check">
                            <input type="checkbox" value="1" checked class="form-check-input" id="state-edit" name="state">
                            <label class="form-check-label" for="state-edit">Activo</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-update">Actualizar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

                                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

                                <script>
                                    function modalEdit(id,tit,est,cod){
                                        $('#title-edit').val(tit);
                                        $('#state-edit').val(est);
                                        $('#curri_id').val(id);
                                        $('#id_alum').val(id)
                                        $('#curri_code').val(cod);
                                    }
                                </script>

                                <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
                                <script>

                                    $("#btn-register" ).click(function() {
                                        var formData = new FormData(document.getElementById("exampleModal"));
                                        $.ajax({
                                            url: "{{ route('curri_register') }}",
                                            type: "post",
                                            dataType: "html",
                                            data: formData,
                                            cache: false,
                                            contentType: false,
                                            processData: false
                                        }).done(function(res){
                                            msg = JSON.parse(res).response.msg
                                            alert(msg);
                                            location.reload();
                                        }).fail(function(res){
                                            console.log(res)
                                        });
                                    });
                                    function showFile(id){
                                        $.ajax({
                                            url: "{{ asset('/curri/file/') }}/"+id,
                                            type: "get",
                                            dataType: "html",
                                            contentType: false,
                                            processData: false
                                        }).done(function(res){
                                            url = JSON.parse(res).response.url
                                            window.open('storage/'+url,'_blank');
                                        }).fail(function(res){
                                            console.log(res)
                                        });
                                    }
                                    $( "#btn-update" ).click(function() {
                                        var formData = new FormData(document.getElementById("exampleModalEdit"));
                                        $.ajax({
                                            url: "{{ route('curri_update') }}",
                                            type: "post",
                                            dataType: "html",
                                            data: formData,
                                            cache: false,
                                            contentType: false,
                                            processData: false
                                        }).done(function(res){
                                            msg = JSON.parse(res).response.msg
                                            alert(msg);
                                            location.reload();
                                        }).fail(function(res){
                                            console.log(res)
                                        });
                                    });
                                    function deletecurri(id){
                                        $.ajax({
                                            url: "{{ asset('/curri/delete/') }}/"+id,
                                            type: "get",
                                            dataType: "html",
                                            contentType: false,
                                            processData: false
                                        }).done(function(res){
                                            msg = JSON.parse(res).response.msg
                                            alert(msg);
                                            location.reload();
                                        }).fail(function(res){
                                            console.log(res)
                                        });
                                    }
                                </script>
                        </div>
                    </div>
                </div>
            </div>

                            
    
      
    @include('borsa.footer')


@include('estil/perfil')


@endsection