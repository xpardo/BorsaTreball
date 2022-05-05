@extends('layouts.app')
 
 @section('content')

@include('borsa.header')




    <nav class="navbar navbar-expand-lg navbar-light m-2"  style="background-color: #bcdefd;">

        <div class="col-sm ">
            <div class="ins ">
                <div id="logo_centre_widget-3 ">
                    <div class="targeta_id_centre row ">
                        <div class="large-6 small-12 columns logo_inline hide-for-small ">
                            <div class="overflow-hidden  sm:rounded-lg">



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
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>






 

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">


                        <a  style="color: black;" href="{{url('editempresa')}}">edit</a>



                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">

                        @csrf

                                    <label for="edit" class="col-10">Nom :
                                    <a>{{ $name }}</a></label>

                                    <label for="edit" class="col-10">cognom :
                                    <a>{{ $cognom }}</a></label>

                                    <label for="edit" class="col-10">Nom de l'empresa:
                                    <a>{{ $empre }}</a></label>


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
                            <label for="logotip" class="col-10">logo: </label><br><br>
                        </div>
                    </div>

                </div>
            </div>

        <br><br>


                    @include('borsa.footer')

@include('estil/perfil')


@endsection
