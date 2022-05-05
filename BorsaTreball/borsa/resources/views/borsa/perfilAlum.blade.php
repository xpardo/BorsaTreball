@extends('layouts.app')
 @section('content')
    @include('borsa.header')



 
<!---logo--->

<nav class="navbar navbar-expand-lg navbar-light m-2"  style="background-color: #bcdefd;">
    
         
                           
    <div class="col-12 col-md-3">



</div>


</button>

</nav>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">

                      
                   

                            <p><b>Nom:</b>   {{ Auth::user()->name }}</p>
                            <p><b>Cognom:</b>   {{Auth::user()->cognom }}</p>
                            <p><b>Data neixement:</b>   {{Auth::user()->neixement }}</p>
                            <p><b>Email:</b> {{ Auth::user()->email }}</p>
                            <p><b>Telefon:</b> {{Auth::user()->telefon }}</p>
                            <p><b>Poblacio:</b> {{Auth::user()->poblacio }}</p>
                            <p><b>Codi Postal:</b> {{Auth::user()->cp }}</p>
                            <p><b>Estat de practiques:</b> {{Auth::user()->estas }}</p>
                            <p><b>Practiques abans:</b> {{Auth::user()->fet }}</p>
                            <p><b> Estat o  treballat:</b> {{Auth::user()->treballat }}</p>


                               
                            
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