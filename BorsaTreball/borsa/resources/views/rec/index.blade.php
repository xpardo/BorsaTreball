@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuAlumn')

 
   
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                    <div class="card-header" style="border-radius:15px;">{{ __('Carta Recomendació') }}</div>
<br>
                        <p><b><a class="btn btn-primary" href="{{ route('recomenacio.create') }}" role="button">➕</a></b> </p>
                       
                        <table class="table">
                            <thead>
                         
                                <th><center>NOM</center></th>
                                <th><center>VISUALITZAR CARTA DE RECOMENDACIÓ</center></th>
                                <th><center></center></th>
                            </thead>
                            <tbody>
                                @foreach($recs as $r)
                                    <tr>
                                                   
                                        <td><center>{{$r->name}}</center></td>
                                        <td><center><a class="offset-1 col-5" href="./rec/{{$r->filepath}}" target="blank_">👁️</a></center></td>                                
                                        <td>
                                            <center>
                                                <form id="form" method="POST" action="{{ route('recomenacio.destroy', $r) }}">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button id="destroy" type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmModal"><i class="fas fa-backspace"></i></button>
                                                </form>
                                                @include('js/modal')
                                            </center>
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