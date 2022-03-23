<x-app-layout>
    <x-slot name="header">
    </x-slot>
    @include('header')
    <!--   
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        Borsa de treball
                    </div>
                </div>
            </div>
        </div> 
    -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Borsa de treball</h1>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <label>La Borsa de Treball és un servei que ofereix 
                    l’Institut Joaquim mir  als seus alumnes i exalumnes per facilitar la inserció laboral i 
                    potenciar les relacions de l’institut amb les institucions i empreses de l’entorn.</label><br>
                  
                </div>
              
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
      
                   
                       
                     
                    <div class=contenedor>
                        <h3><strong>Empresa</strong><h3>
                        <a href="{{url('registreEmpre')}}"><u> <i class="bi bi-clipboard-plus-fill"></i> Registra</u></a><br>
                        <a href="{{url('login')}}"><u><i class="bi bi-person"></i> Login</u></a><br><br>
                        <img src="{{ asset('img/empresas-img.jpg') }}" alt="mi foto">
                    </div>    
                
                    <div class=contenedor>
                        <h3><strong>Alumne</strong><h3>
                        <a href="{{url('registreAlumne')}}"><u> <i class="bi bi-clipboard-plus-fill"></i> Registra</u></a><br>
                        <a href="{{url('login')}}"><u> <i class="bi bi-person"></i> Login</u></a><br><br>
                        <img src="{{ asset('img/alumne.jpg') }}" alt="mi foto">
                    </div>    
                </div>
            </div>







            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container-1 m-5">

                        <div class="box">

                            <form method="get" action="home.html" target="_blank">
                                <fieldset>
                                    <span class="icon"<i class="bi bi-person"></i>><i class="bi bi-search"></i></span>
                                    <input type="search" id="search" name="search" autofocus required>
                                    <br>

                                    <br><br>
                                    <label for="cicles" class="col-3">cicles </label>
                                    <select name="Cicles">
                                        <option value="0"> </option>
                                        <option value="1"> Grau Mitjà Sistemes Microinformàtics i Xarxes</option>
                                        <option value="2"> Grau Mitjà Gestió Administratva</option>
                                        <option value="3"> Grau Mitjà Gestió Administrativa de l’Àmbit Jurídic</option>
                                        <option value="4"> Grau Mitjà Activitats Comercials</option>

                                        <option value="5"> Grau Superior Desenvolupament d’Aplicacions Web </option>
                                        <option value="6"> Grau Superior Administració de Sistemes Informàtics en Xarxa </option>
                                        <option value="7"> Grau Superior Administració i Finances </option>
                                        <option value="8"> Grau Superior Comerç internacional </option>

                                    </select>
                                    <br><br>
                                    <label for="tipus" class="col-3">tipus </label>
                                    <select class="select" name="tipus">
                                        <option label="tot" value="" selected="selected"></option>
                                        <option value="gsm">Practiques</option>
                                        <option value="gss">Practiques amb opció de quedarse</option>
                                        <option value="gss">treballar</option>

                                    </select>
                                    <br><br>

                                    <input type="hidden" name="num" value="50">
                                    <input class="botb" type="submit" value="Buscar">
                                </fieldset>
                                
                                

                                <div class="bg-white  shadow-sm sm:rounded-lg">
                                    <div class="p-6 bg-white ">
                                        <table style="width:100%">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">Empresa</th>
                                                    <th scope="col">Descripció</th>
                                                    <th scope="col">Estudis als que va dirigida</th>
                                                    <th scope="col">Població</th>
                                                    <th scope="col">Termini presentació candidatures</th>
                                                </tr>
                                            </thead>
                                            

                                         
                                             
                                        </table>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>



                </div>
            </div>







        </div>
    </div>
    @include('footer')
</x-app-layout>


@include('estil/home')