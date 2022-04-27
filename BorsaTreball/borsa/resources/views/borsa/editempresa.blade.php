@extends('layouts.app')
 
 @section('content')



    
    @include('borsa.header')
    @if ($errors->any())
        <div class ="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

    @endif


 

    <div class="contenedor-formularios">

        <!-- Contenido de los Formularios -->
        <div class="contenido-tab">

            <!-- Registrarse -->
            <div id="registrarse">
                <h3><strong>Edita</strong></h3>

                <form nmethod="post"  action="perfilEmpre" >
                @csrf 
                    <p>Dades d'acces personal <i class="bi bi-person"></i></p>
                    <div class="fila-arriba">
                        <div class="contenedor-input">

                            <label for="name">Nom</label><br><br>
                            <input type="text" name="name"  class="form-control" id="name" >

                        </div>
                        <div class="contenedor-input">

                            <label for="cognom">Cognom</label><br><br>
                            <input type="text" name="cognom" class="form-control" id="cognom" >

                        </div>
                    </div>

                    <div class="contenedor-input">

                        <div class="contenedor-input">
                            <label>E-mail</label><br><br>
                            <input type="email" name="email" rclass="form-control" id="email" equired>

                        </div>

                        <div class="contenedor-input">
                            <label  for="password">Nou Password</label><br><br>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <div class="contenedor-input">
                            <label for="password_confirmation">Repetir password</label><br><br>
                            <input type="password" class="form-control" id="password_confirmation"  name="password_confirmation">
                        </div>


                    </div>

                    <p>Dades de l'empresa <i class="bi bi-person-rolodex"></i></p>

                    <div class="contenedor-input">

                        <label for="empre">Nom de la empresa</label><br><br>
                        <input type="text" name="empre" class="form-control" id="empre" >

                    </div>

                    <div class="contenedor-input">
                    <label>telefón/movil<i class="bi bi-telephone"></i></label><br><br>
                        <input type="text" name="telefon" class="form-control" id="telefon">
                    </div>


                    <div class="contenedor-input">

                        <label for="identifi">Identificacio fiscal (C.I.F o N.I.F)</label><br><br>
                        <input type="text" name="identifi" class="form-control" id="identifi" >

                    </div>

                    <div class="contenedor-input">
                        <label for="poblacio">Població</label><br><br>
                        <input type="text" name="poblacio"  class="form-control" id="poblacio" >
                    </div>

                    <div class="contenedor-input">
                        
                        <label for="upload">Logo</label><br><br>
                            
                         <input type="file" name="upload" class="form-control">
                        
                    </div>

                    <input type="submit"  value="Registrarse "> <br>
                    <p>
                    <a  href="{{url('borsa')}}"><u>home</u></a>
                    </p>
                    <p>
                    <a  href="{{url('login')}}"><u>Login</u></a>
                    </p>
                    @method('PUT')
                </form>
            </div>
        </div>
    </div>
    @include('borsa.footer')




@include('estil/regi')
@endsection