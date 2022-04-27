@extends('layouts.app')


 
 @section('content')
@section('title', 'Perfil')

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
                <a class="nav-link"  href="{{url('MySolicitud')}}">  <i class="fa fa-duotone fa-user">Les meves solicituds</i></a>
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

                            <label for="edit" class="col-10">data de naixement:
                            <a>{{ $date }}</a></label>

                     

                            <label for="edit" class="col-10">Correu electronic:
                                <a> {{ $email }}</a></label>

                            <label for="edit" class="col-10">Telefón | movil:
                                <a> {{ $telefon }}</a></label>

                            <label for="edit" class="col-10">Població:
                                <a> {{ $poblacio }}</a></label>

                            <label for="edit" class="col-10">Codi postal:
                            <a> {{ $cp }}</a></label>
                            
                            <label for="edit" class="col-10">Estat de practiques:
                            <a> {{ $estas }}</a></label>

                            <label for="edit" class="col-10">Practiques abans:
                            <a> {{ $fet }}</a></label>

                            <label for="edit" class="col-10">Estat o  treballat :
                            <a> {{ $treballat }}</a></label>


                               
                            
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                        <label for="edit" class="col-10">curicolom :
                            
                        </div>
                    </div>
                </div>
            </div>

        <br><br>

        
                    @include('borsa.footer')


@include('estil/perfil')


@endsection