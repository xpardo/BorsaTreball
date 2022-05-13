
@extends('layouts.app')
    @section('content')
        @include('borsa.header')
 
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        
                        <div class="container ">
                            <div class="row sling-items-end ">
                        
                
                                    <div class="contenedor ">
                                    
                                 
                                        <div class="card-body">
                                          
                                                        <b><strong>Tipus:</strong></b>
                                                        <p> {{ $ofertas -> tipus }} </p>
                                                        <b><strong>Cicle formatiu</strong></b>
                                                        <p> {{ $ofertas -> cicle }} </p>
                                                        <b><strong>Name</strong></b>
                                                        <p> {{ $ofertas -> name }} </p>
                                                        <b><strong>Empre</strong></b>
                                                        <p> {{ $ofertas -> empre }} </p>
                                                        <b><strong>Horari</strong></b>
                                                        <p> {{ $ofertas -> h }} </p>
                                                        <b><strong>Salari</strong></b>
                                                        <p> {{ $ofertas -> sala }} </p>
                                                        <b><strong>Descripció</strong></b>
                                                        <p> {{ $ofertas -> desc }} </p>
                                        
                                        </div>



                                        <br>  
                                        
                                        <center>
                                            <b>
                                                <a   title="View" href="{{ url('/candi') }}">
                                                    <h1 class="btn btn-dark">
                                                    Inscriurem
                                                    </h1>
                                                </a>
                                            </b>
                                        </center>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@include('estil/home')    


@endsection


