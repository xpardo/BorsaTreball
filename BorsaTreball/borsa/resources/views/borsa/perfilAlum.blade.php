@extends('layouts.app')
 @section('content')
    @include('borsa.header')


    @include('borsa.menuAlumn')







            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">

                      
                       
            
                            <p><b>Nom:</b>  {{ Auth::user()->name }}</p>
                            <p><b>Cognom:</b>  {{Auth::user()->cognom }}</p>
                            <p><b>Data neixement:</b>   {{Auth::user()->neixement }}</p>
                            <p><b>Email:</b> {{ Auth::user()->email }}</p>
                            <p><b>Telefon:</b> {{Auth::user()->telefon }}</p>
                            <p><b>Poblacio:</b> {{Auth::user()->poblacio }}</p>
                            <p><b>Codi Postal:</b> {{Auth::user()->cp }}</p>
                            <p><b>Estat de practiques:</b> {{Auth::user()->estat }}</p>
                            <p><b>Practiques abans:</b> {{Auth::user()->fet }}</p>
                            <p><b> Estat o  treballat:</b> {{Auth::user()->treballat }}</p>


                               
                            
                        </div>
                    </div>
                    
                </div>
            </div>

        <br><br>

        
                    @include('borsa.footer')


@include('estil/perfil')


@endsection