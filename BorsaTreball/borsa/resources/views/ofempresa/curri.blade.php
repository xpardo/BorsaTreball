@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuEmpre')

         

      
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                
                               
                                <table class="table">
                               
                                    <thead>
                                        <th>ID_DOC</th>
                                        <th>NOM</th>
                                        <th>VISUALITZAR CURRICULUM</th>
                                    
                                    </thead>
                                    <tbody>
                                        @foreach($curri as $d)
                                            <tr>
                                                <td>{{$d->id_doc}}</td>
                                                <td>{{$d->name}}</td>
                                                <td><a class="offset-1 col-5" href="curri/{{$d->pdf}}" target="blank_">👁️</a></td>
                                            
                                            </tr>
                                        
                                        @endforeach
                                    </tbody>
                                </table>
                            
                            </div>
                        </div>
                    </div>
                </div>
    
            
          

        @include('estil/perfil')


@endsection