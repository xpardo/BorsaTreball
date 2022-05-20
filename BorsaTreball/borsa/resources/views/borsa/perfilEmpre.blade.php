@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuEmpre') 




            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">

                      
                   

                                    <p><b>Nom:</b>   {{ Auth::user()->name }}</p>
                                    <p><b>Cognom:</b>   {{ Auth::user()->cognom }}</p>
                                    <p><b>nom de la empresa:</b>   {{ Auth::user()->empre }}</p>
                                    <p><b>Email:</b> {{ Auth::user()->email }}</p>
                                    <p><b>Telefon:</b> {{ Auth::user()->telefon }}</p>
                                    <p><b>Poblacio:</b> {{ Auth::user()->poblacio }}</p>
                            


                               
                            
                        </div>
                    </div>
                    
            </div>

        <br><br><br><br> <br><br> <br><br>
        



@include('estil/perfil')


@endsection