@extends('layouts.app')
 
 @section('content')

    
    @include('borsa.header')
    


 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                
                      
          

                                <!-- Contenido de los Formularios -->
                                    <div class="contenido-tab">

                                        <!-- Registrarse -->
                                        <div id="registrarse">
                                            <h3><strong>Registrarse</strong></h3>
                                            <form action="{{ url('MyOferta') }}"   method="POST" enctype="multipart/form-data">
                            
                                                        @csrf 
                                                        <div class="dropdown">

                                                     


                                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Cicle
                                                            </button>
                                                            <div class="dropdown-menu" name="cicle" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#">Grau Mitjà Sistemes Microinformàtics i Xarxes</a>
                                                                <a class="dropdown-item" href="#">Grau Mitjà Gestió Administratva</a>
                                                                <a class="dropdown-item" href="#">Grau Mitjà Gestió Administrativa de l’Àmbit Jurídic</a>
                                                                <a class="dropdown-item" href="#">Grau Mitjà Activitats Comercials</a>
                                                                <a class="dropdown-item" href="#"> Grau Superior Desenvolupament d’Aplicacions Web </a>
                                                                <a class="dropdown-item" href="#"> Grau Superior Administració de Sistemes Informàtics en Xarxa </a>
                                                                <a class="dropdown-item" href="#"> Grau Superior Administració i Finances </a>
                                                                <a class="dropdown-item" href="#"> Grau Superior Comerç internacional </a>
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div  class="btn btn-info ">
                                                            
                                                            <label>tipus: </label>
                                                                
                                                            <div class="checkbox">
                                                                <label><input type="checkbox" value="coindesk" name="tipus[]">Practiques</label>
                                                            
                                                                <label><input type="checkbox" value="coinbase" name="tipus[]">Practiques amb opció de quedarse</label>
                                                            
                                                                <label><input type="checkbox" value="zebpay" name="tipus[]">treballar</label>
                                                            </div>
                                                                

                                                        </div>
                                                            <br><br>
                                                            
                                                            <label class="col-10">nom: </label>
                                                            <input type="text" id="name" name="name">
                                                            <br><br>
                                                            <label class="col-10">Salari: </label>
                                                            <input type="num" id="sala" name="sala">
                                                            <br><br>
                                                            <label class="col-10">Horari:</label>
                                                            <input type="text" id="h" name="h">
                                                            <br><br>
                                                            <div class="contenedor-input">
                                                                <label for="desc" class="col-10">Descripció:</label>

                                                                <textarea name="desc" rows="10" cols="50"></textarea><br><br>
                                                            </div>

                                                            <br><br>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" name="flexT[]" id="flexT">
                                                                <label class="form-check-label" for="flexT">privat</label>
                                                            </div>


                                                        





                                                                <button type="submit" class="btn btn-primary">Create</button>
                                                                <button type="reset" class="btn btn-secondary">Reset</button>

                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        
                                    @method('PUT')
                             
                            
                     
                    </div>
               
            </div>
        </div>
    </div>
    @include('borsa.footer')




@include('estil/perfil')





@endsection



