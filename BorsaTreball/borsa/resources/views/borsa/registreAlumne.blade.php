<x-app-layout>

    <x-slot name="header">

    </x-slot>

   
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
                <h1>Registrarse</h1>

               
                <form nmethod="post"  action="perfilAlum" >
                @csrf 
                    <div class="fila-arriba">
                        <div class="contenedor-input">

                            <label for="username">Nom</label><br><br>
                            <input type="text" name="username"  class="form-control" id="username" required>

                            <label for="date">Data de naixement</label><br><br>
                            <input type="date" name="date" class="form-control" id="date" required>

                        </div>
                        <div class="contenedor-input">

                            <label for="cognom">Cognom</label><br><br>
                            <input type="text" name="cognom" class="form-control" id="cognom" required>


                            <label for="cp">Codi Postal</label><br><br>
                            <input type="text" id="cp" name="cp" class="form-control" id="cp" required>


                        </div>
                    </div>

                    <div class="contenedor-input">

                        <div class="from-group form-row">
                            <label for="Genere" class="col-3">Genere </label><br><br>
                            <select name="Genere" class="form-control" id="Genere">
                                <option value="0"> </option>
                                <option value="1"> Home  </option>
                                <option value="2"> Dona  </option>
                                <option value="3"> Altre </option>
                            </select>
                        </div>



                    </div>
                    <div class="contenedor-input">
                        <label>telefón/movil<i class="bi bi-telephone"></i></label><br><br>
                        <input type="text" name="telefon" class="form-control" id="telefon" required>
                    </div>

                    <div class="contenedor-input">
                        <label>Població</label><br><br>
                        <input type="text" name="poblacio" class="form-control" id="poblacio" required>
                    </div>

                    <div class="contenedor-input">
                        <label>E-mail</label><br><br>
                        <input type="email" name="email" class="form-control" id="email" required>

                    </div>
                    <div class="contenedor-input">
                        <label  for="password">Password</label><br><br>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="contenedor-input">
                        <label for="password_confirmation">Repetir password</label><br><br>
                        <input type="password" class="form-control" id="password_confirmation"  name="password_confirmation">
                    </div>


                    <div class="contenedor-input">

                

                            <div class="from-group form-row offset-9 col-3">

                                <label>Estas en practiques ?</label><br><br>

                                <label for="estasSi" class="form-check-label"> Si </label>
                                <input type="checkbox" name="estas"   class="form-check-input @error('estas') is-invalid @enderror"
                                 id="estasSi" value="Si" {{ old('estas')== 'Si' ? 'checked' : '' }}>

                                <br><br>

                                <label for="estasNo" class="form-check-label"> No </label>
                                <input type="checkbox"  name="estas"  class="form-check-input @error('estas') is-invalid @enderror"
                                id="estasNo" value="No" {{ old('estas')== 'No' ? 'checked' : '' }}>

                            </div>

                            <br>
                            
                            <div class="from-group form-row offset-9 col-3">

                                <label>Has fet practiques abans ?</label><br><br>

                                <label for="fetSi" class="form-check-label"> Si </label>
                                <input type="checkbox"  name="fet"  class="form-check-input @error('fet') is-invalid @enderror"
                                id="fetSi" value="Si" {{ old('fet')== 'Si' ? 'checked' : '' }}>

                                <br><br>

                                <label for="fetNo" class="form-check-label"> No </label>
                                <input type="checkbox"  name="fet"  class="form-check-input @error('fet') is-invalid @enderror"
                                id="fetNo" value="No" {{ old('fet')== 'No' ? 'checked' : '' }}>

                            </div>

                            <br>
                          
                            <div class="from-group form-row offset-9 col-3">

                                <label>Estas o has treballat ?</label><br><br>

                                <label for="treballatSi" class="form-check-label"> Si </label>
                                <input type="checkbox"  name="treballat"  class="form-check-input @error('treballat') is-invalid @enderror"
                                id="treballatSi" value="Si" {{ old('treballat')== 'Si' ? 'checked' : '' }}>

                                <br><br>

                                <label for="treballatNo" class="form-check-label"> No </label>
                                <input type="checkbox"  name="treballat"  class="form-check-input @error('treballat') is-invalid @enderror"
                                id="treballatNo" value="No" {{ old('treballat')== 'No' ? 'checked' : '' }}>

                            </div>
                   

                        </div>

                            <input type="submit" value="Registrarse "> <br>
                            <p>
                                <a class="inf ">Pots especificar als cicles i posar  curriculums,cartas de presentacio i carrtas de recomendació en el perfil</a>
                            </p>
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


</x-app-layout>



@include('estil/regi')