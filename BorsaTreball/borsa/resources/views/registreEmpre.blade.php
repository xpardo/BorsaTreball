<x-app-layout>

    <x-slot name="header">

    </x-slot>

    
    @include('header')
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
                <h3><strong>Registrarse</strong></h3>

                <form nmethod="post"  action="perfilEmpre" >
                @csrf 
                    <p>Dades d'acces personal <i class="bi bi-person"></i></p>
                    <div class="fila-arriba">
                        <div class="contenedor-input">

                            <label for="username">Nom</label><br><br>
                            <input type="text" name="username" required>

                        </div>
                        <div class="contenedor-input">

                            <label for="cognom">Cognom</label><br><br>
                            <input type="text" name="cognom" required>

                        </div>
                    </div>

                    <div class="contenedor-input">

                        <div class="contenedor-input">
                            <label>E-mail</label><br><br>
                            <input type="email" name="email" required>

                        </div>

                        <div class="contenedor-input">
                            <label>Password</label><br><br>
                            <input type="password" name="password1" required>
                        </div>

                        <div class="contenedor-input">
                            <label>Repetir password</label><br><br>
                            <input type="password" name="password2" required>
                        </div>


                    </div>

                    <p>Dades de l'empresa <i class="bi bi-person-rolodex"></i></p>

                    <div class="contenedor-input">

                        <label for="empre">Nom de la empresa</label><br><br>
                        <input type="text" name="empre" required>

                    </div>

                    <div class="contenedor-input">
                    <label>telefón/movil<i class="bi bi-telephone"></i></label><br><br>
                        <input type="text" name="telefon">
                    </div>


                    <div class="contenedor-input">

                        <label for="identifi">Identificacio fiscal (C.I.F o N.I.F)</label><br><br>
                        <input type="text" name="identifi" required>

                    </div>

                    <div class="contenedor-input">
                        <label for="poblacio">Població</label><br><br>
                        <input type="text" name="poblacio" required>
                    </div>

                    <input type="submit"  value="Registrarse "> <br>
                    <p>
                    <a  href="{{url('dashboard')}}"><u>home</u></a>
                    </p>
                    <p>
                    <a  href="{{url('login')}}"><u>Login</u></a>
                    </p>
                    @method('PUT')
                </form>
            </div>
        </div>
    </div>
    @include('footer')


</x-app-layout>

@include('estil/regi')
