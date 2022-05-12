
@extends('layouts.app')
    @section('content')
        @include('borsa.header')
 
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        
                        <div class="container m-5 ">
                            <div class="row sling-items-end ">
                        
                                <div class="col-sm ">
                                    <div class="contenedor ">
                                    
                                 

                                        @foreach ($oferta as $oferta)
                                            
                                        <b>Tipus:</b><p> {{ $oferta->tipus }}</p>
                                        <b>Empresa:</b> <p>{{ $oferta->empre }}</p>
                                        <b>Titol:</b><p> {{ $oferta->name }}</p>
                                        <b>Horari:</b><p>{{ $oferta->h }}</p>
                                        <b>Salari:</b><p> {{ $oferta->sala }}</p>
                                        <b>Estudis als que va dirigida:</b><p> {{ $oferta->cicle }}</p>
                                        <b>Descripció:</b><p>{{ $oferta->desc }}</p>
                                              
                                          
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@include('estil/home')    


@endsection


