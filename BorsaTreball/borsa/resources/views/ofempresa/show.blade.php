@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuEmpre') 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card"  style="border-radius:15px;">
                    <div class="card-header"  style="border-radius:15px;" ><center><b>{{ __('Oferta:') . " "  }}</b>{{$oferta -> name}}</center></div>
                        <div class="card-body">
              
                                <table class="table table-striped table-info">
                                    <tbody >
                                        <tr>
                                            <td><strong>Tipos</strong></td>
                                            <td>{{ $oferta->tipus }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Cicle</strong></td>
                                            <td>{{ $oferta->cicle }}</td>
                                        </tr>
                                      
                                        <tr>
                                            <td><strong>horari</strong></td>
                                            <td>{{ $oferta->h }}</td>
                                        </tr>
                                    
                                        <tr>
                                            <td><strong>Salari</strong></td>
                                            <td>{{ $oferta->sala }}</td>
                                        </tr>
                                        
                                        <tr>
                                            <td><strong>Descripció</strong></td>
                                            <td>{{ $oferta->desc }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            
                        </div>
                    </div>

                
                    <form id="form" method="POST" action="{{ route('ofempresa.destroy', $oferta) }}">
                        @csrf
                        @method("DELETE")
                        <button id="destroy" type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmModal"><i class="fas fa-backspace"></i></button>
                    </form>
                    @include('js/modal')
                   

            </div>
        </div>
    </div>
    <br><br><br><br> <br><br> <br><br><br>
    @include('estil/sh')    
@endsection
