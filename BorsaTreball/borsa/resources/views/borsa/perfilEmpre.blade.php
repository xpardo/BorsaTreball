@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuEmpre') 




            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">

      
                                    <table class="table table-striped table-info">
                                    <tbody >
                                        <tr>
                                            <td><b><strong>Nom</strong></b></td>
                                            <td><a>{{ Auth::user()->name }}</a></td>
                                        </tr> <tr>
                                            <td><strong>Cognom</strong></td>
                                            <td>{{ Auth::user()->cognom }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Nom de l'empresa</strong></td>
                                            <td>{{ Auth::user()->empre }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email</strong></td>
                                            <td>{{ Auth::user()->email }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Telefon</strong></td>
                                            <td>{{ Auth::user()->telefon }}</td>
                                        </tr>
                                    
                                        <tr>
                                            <td><strong>Poblacio</strong></td>
                                            <td> {{ Auth::user()->poblacio }}</td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            


                               
                            
                        </div>
                    </div>
                    
            </div>

        <br><br><br><br> <br><br> <br><br>
        



@include('estil/perfil')


@endsection