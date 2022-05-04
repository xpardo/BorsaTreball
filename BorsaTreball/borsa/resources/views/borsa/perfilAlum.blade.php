@extends('layouts.app')
 @section('content')
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

                            

                            <p><b>Nom:</b>   {{ $name }}</p>
                            <p><b>Cognom:</b>   {{ $cognom }}</p>
                            <p><b>Data neixement:</b>   {{ $neixement }}</p>
                            <p><b>Email:</b> {{ $email }}</p>
                            <p><b>Telefon:</b> {{ $telefon }}</p>
                            <p><b>Poblacio:</b> {{ $poblacio }}</p>
                            <p><b>Codi Postal:</b> {{ $cp }}</p>
                            <p><b>Estat de practiques:</b> {{ $estas }}</p>
                            <p><b>Practiques abans:</b> {{ $fet }}</p>
                            <p><b> >Estat o  treballat:</b> {{ $treballat }}</p>


                               
                            
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