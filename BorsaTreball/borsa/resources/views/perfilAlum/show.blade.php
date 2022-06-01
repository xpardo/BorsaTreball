@extends('layouts.app')
 
 @section('content')
    @include('borsa.header')

    @include('borsa.menuAlumn')
        <div class="py-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        
                        <div class="container ">
                            <div class="row sling-items-end ">
                        
                
                            <tr>
                                <td> <a  href="{{ route('candi.index') }} ">TORNAR</a></td>
                            </tr>
                             
                                   

                                <table class="table table-striped table-dark">

                                    

                                    <tbody>

                                        <tr>
                                            <td><strong>Name</strong></td>
                                            <td>{{ $oferta->name }}</td>
                                        </tr>

                                        <tr>
                                            <td><b><strong>Tipus</strong></b></td>
                                            <td><a>{{ $oferta->tipus }}</a></td>
                                        </tr> 

                                        <tr>
                                            <td><strong>Empre</strong></td>
                                            <td>{{ $oferta->empre }}</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Cicle formatiu</strong></td>
                                            <td>{{ $oferta->cicle }}</td>
                                        </tr>

                                        
                                        <tr>
                                            <td><strong>Horari</strong></td>
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
                    </div>
                </div>
            </div>
        </div>
    <br><br><br><br> <br><br> <br>
    @include('estil/home')     
@endsection
