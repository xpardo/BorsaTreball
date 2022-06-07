@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuAlumn')

 
   
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                        <div class="card-header" style="border-radius:15px;">{{ __('Curriculum') }}</div>
                        <br>
                            <p><b><a class="btn btn-primary" href="{{ route('curriculum.create') }}" role="button">➕</a></b> </p>
                        
                            <table class="table">
                                <thead>
                    
                                    <th><center>NOM</center></th>
                                    <th><center>Curriculum</center></th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach($curris as $c)
                                        <tr>
                                                        
                                            <td><center>{{$c->name}}</center></td>
                                            <td><center><a class="offset-1 col-5" href="/storage/curri/{{$c->filepath}}" target="blank_">👁️</a></center></td>  

                                            <td> 
                                                

                                                <form id="form" method="POST" action="{{ route('curriculum.destroy', $c) }}">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button id="destroy" type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmModal">🗑️</button>
                                                </form>
                                                @include('js/modal')
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        
                        </div>
                    </div>
                </div>
            </div>
    
        <br><br>   <br><br>  <br><br>  <br><br>  <br><br>  <br>

    @include('estil/perfil')


@endsection