
@extends('layouts.app')
 @section('content')
    @include('borsa.header')



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @include('borsa.busca')

          
              
          
 

                <div class="p-6 bg-white border-b border-gray-200">
                   
                        <!---camp editable---->
                        <!-- <a style="color: #ff0000;"> hi ha de ser editable</a>
                        <h1>Borsa de treball </h1>
                    </div> -->
                    <!---camp editable---->
                    <!-- <div class="p-6 bg-white border-b border-gray-200">
                    <a style="color: #ff0000;">hi ha de ser editable</a>
                        <label>La Borsa de Treball és un servei que ofereix 
                        l’Institut Joaquim mir  als seus alumnes i exalumnes per facilitar la inserció laboral i 
                        potenciar les relacions de l’institut amb les institucions i empreses de l’entorn.</label>
                       <br>
                    
                    </div> -->
              


            
                 
                       <!-------container----->

                    <div class="p-6 bg-white border-b border-gray-200">
                        
                        <div class="container m-5 ">
                            <div class="row sling-items-end ">
                        
                                    <div class="col-sm ">
                                        <div class="contenedor ">

                                            <h3><strong>Empresa</strong></h3>
                                            <div class="service ">
                                                <a class="nav-link btn btn-success" href="{{ route('registreEmpre') }} "  style="color: #fff; ">{{ __("Registra't") }}</a>
                                            
                                            </div><br>
                                            <img src="{{ asset('img/empresas-img.jpg') }}" alt="registreEmpre">
                                        </div>
                                    </div>

                                    <div class="col-sm ">
                                        <div class="contenedor ">

                                            <h3><strong>Alumne</strong></h3>
                                            <div class="service ">
                                        
                                            
                                                <a class="nav-link btn btn-success" href="{{ route('registreAlumne') }} "  style="color: #fff; ">{{ __("Registra't") }}</a>
                                            </div><br>
                                            <img src="{{ asset('img/alumne.jpg') }}" alt="registreAlumne">
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
               
                    </div>
                </div>

            </div>



        
   @include('borsa.footer')

 

@include('estil/home')    


@endsection