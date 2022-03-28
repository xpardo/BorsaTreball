<x-app-layout>
    <x-slot name="header">
    </x-slot>

@include('borsa.header')



    <!---logo--->

    <nav class="navbar navbar-expand-lg navbar-light m-2"  style="background-color: #bcdefd;">
    
         
                           
        <div class="col-12 col-md-3">



    </div>
<!--Menu-->
    <div class="lletres">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
            <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">
                        <a class="nav-link"  href="{{url('borsa')}}">  <i class="fa fa-duotone fa-user">Home</i></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#">  <i class="fa fa-duotone fa-user">Perfil</i></a>
                    </li>
    
             
                <li class="nav-item active">
                    <a class="nav-link"  href="{{url('MyOferta')}}">  <i class="fa fa-duotone fa-user">Oferta</i></a>
                </li>
                       
                
            </ul>

        </div>
    </div>

    </button>

    </nav>

 

    @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container-1 m-12">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                    <a href="{{url("CreateOfert")}}">añadir Libro </a>
                                        <div class="card-header">{{ __('Ofertes Actuals') }}</div>
                                            <div class="card-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                        
                                                            <td scope="col">Oferta</td><!------la meva oferta------->
                                                            <td scope="col">candidatures</td>
                                                        
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($ofertes as $ofertes)
                                                        <tr>
                                                    
                                                            <td>{{ $ofertes->miOfe }}</td>
                                                            <td>{{ $ofertes->candidatures }}</td>
                                                        
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>
    </div>            
        <br><br>

        
                    @include('borsa.footer')
</x-app-layout>

@include('estil/perfil')