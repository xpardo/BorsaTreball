@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuAlumn')

 
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">       
                        <form action="presentacio" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">nom</label>
                                <input class="form-control" type="text" name="name" class="form-control-file">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Adjuntar Carta de presentació</label>
                                <input class="form-control" type="file" name="pdf" class="form-control-file">
                            </div>

                            <button class="btn btn-success" type="submit">ENVIAR</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table class="table">
                            <thead>
                                <th>ID_DOC</th>
                              
                                <th>NOM</th>
                                <th>VISUALITZAR CARTA DE PRESENTACIÓ</th>
                            </thead>
                            <tbody>
                                @foreach($pre as $d)
                                    <tr>
                                        <td>{{$d->id_doc}}</td>
                                       
                                        <td>{{$d->name}}</td>
                                        <td><a href="pre/{{$d->pdf}}" target="blank_">VISUALITZAR DOCUMENT</a></td>
                                
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    
                    </div>
                </div>
            </div>
        </div>
    
      
    @include('borsa.footer')


@include('estil/perfil')


@endsection