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
                    <a class="nav-link" href="{{url('perfilEmpre')}}">  <i class="fa fa-duotone fa-user">Perfil</i></a>
                    </li>
    
             
                <li class="nav-item active">
                    <a class="nav-link"  href="{{url('MyOferta')}}">  <i class="fa fa-duotone fa-user">Oferta</i></a>
                </li>
                

                
            </ul>

        </div>
    </div>

    </button>

    </nav>

 

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">

                        @csrf

                                    <label for="edit" class="col-10">Nom :
                                    <a>{{ $username }}</a></label>

                                    <label for="edit" class="col-10">cognom :
                                    <a>{{ $cognom }}</a></label>

                                    <label for="edit" class="col-10">Nom de l'empresa:
                                    <a>{{ $empre }}</a></label>

                                    <label for="edit" class="col-10">Identificació:
                                    <a>{{ $identifi }}</a></label>

                                    <label for="edit" class="col-10">Correu electronic:
                                        <a> {{ $email }}</a></label>

                                    <label for="edit" class="col-10">Telefón | movil:
                                        <a> {{ $telefon }}</a></label>

                                    <label for="edit" class="col-10">Població:
                                        <a> {{ $poblacio }}</a></label>


                               
                            
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <label for="Tipus" class="col-10">logo: </label><br><br>
                        </div>
                    </div>
        
                </div>
            </div>

        <br><br>

        
                    @include('borsa.footer')
</x-app-layout>

@include('estil/perfil')