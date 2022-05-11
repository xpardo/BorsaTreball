@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuEmpre') 

            
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                            
                      
          

                                <!-- Contenido de los Formularios -->
                                    <div class="contenido-tab">

                                        <!-- Registrarse -->
                                        <div id="registrarse">
                                            <h3><strong>Oferta</strong></h3>
                             
                                            <form action="{{ url('store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                            
                                                        
                                                        <div class="dropdown">

                                                        <div class="from-group form-row">
                                                            <label for="cicle" class="col-3">{{__('Cicle')}} </label><br><br>
                                                            <select name="cicle" class="form-control @error('cicle') is-invalid @enderror" id="cicle" autofocus>
                                                                <option value="0"> </option>
                                                                <option value="smx"> Grau Mitjà Sistemes Microinformàtics i Xarxes  </option>
                                                                <option value="gma"> Grau Mitjà Gestió Administratva  </option>
                                                                <option value="gmaj"> Grau Mitjà Gestió Administrativa de l’Àmbit Jurídic </option>
                                                                <option value="amc"> Grau Mitjà Activitats Comercials </option>
                                                                <option value="daw"> Grau Superior Desenvolupament d’Aplicacions Web </option>
                                                                <option value="asi">  Grau Superior Administració de Sistemes Informàtics en Xarxa </option>
                                                                <option value="af">Grau Superior Administració i Finances </option>
                                                                <option value="ci"> Grau Superior Comerç internacional </option>
                                                        

                                                            </select>
                                                        </div>



                                                        </div>
                                                        
                                                        <br><br>
                                     

                                                       



                                                        <div>
                                                            
                                                            <b class="col-md-1"> Tipus: </b>
                                                                <div class="form-check form-check-inline ">
                                                                    <label for="tipusP" class="form-check-label"> {{__('Practiques')}} </label>
                                                                    <input type="checkbox" name="tipus"   class="form-check-input @error('gender') is-invalid @enderror"
                                                                        id="tipusP" value="P" {{ old('tipus')== 'P' ? 'checked' : '' }}>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                
                                                                    <label for="tipusQ" class="form-check-label"> {{__('Practiques amb opció de quedarse')}}</label>
                                                                    <input type="checkbox"  name="tipus"  class="form-check-input @error('gender') is-invalid @enderror"
                                                                    id="tipusQ" value="Q" {{ old('tipus')== 'Q' ? 'checked' : '' }}>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                
                                                                    <label for="tipusT" class="form-check-label"> {{__('treballar')}}</label>
                                                                    <input type="checkbox"  name="tipus"  class="form-check-input @error('gender') is-invalid @enderror"
                                                                    id="tipusT" value="T" {{ old('tipus')== 'T' ? 'checked' : '' }}>
                                                                </div>

                                                        </div>






                                                            <br><br>
                                                            
                                                            <label  for="name" class="col-10">nom: </label>
                                                            <input type="text" id="name" name="name">
                                                            <br><br>
                                                            <label  for="sala" class="col-10">Salari: </label>
                                                            <input type="num" id="sala" name="sala">
                                                            <br><br>
                                                            <label for="h"  class="col-10">Horari:</label>
                                                            <input type="text" id="h" name="h">
                                                            <br><br>
                                                            <div class="contenedor-input">
                                                                <label for="desc" class="col-10">Descripció:</label>

                                                                <textarea name="desc" rows="10" cols="50"></textarea><br><br>
                                                            </div>


                                                            <div>
                                                            
                                                            <b class="col-md-1"> Privat: </b>
                                                                <div class="form-check form-check-inline ">
                                                                    <label for="privatS" class="form-check-label"> {{__('Si')}} </label>
                                                                    <input type="checkbox" name="privat"   class="form-check-input @error('privat') is-invalid @enderror"
                                                                        id="privatS" value="S" {{ old('privat')== 'S' ? 'checked' : '' }}>
                                                                </div>
                                                                <div class="form-check form-check-inline ">
                                                                    <label for="privatN" class="form-check-label"> {{__('No')}} </label>
                                                                    <input type="checkbox" name="privat"   class="form-check-input @error('privat') is-invalid @enderror"
                                                                        id="privatN" value="N" {{ old('privat')== 'N' ? 'checked' : '' }}>
                                                                </div>
                                                  

                                                        </div>


                                                        



                                                        <input type="submit"  class="btn btn-primary" value="Create"> 

                                                              
                                                                <button type="reset" class="btn btn-secondary">Reset</button>

                                                        </div>
                                                    </form>
                                           
                                                </div>

                                            </div>

                                        </div>
               
                                    </div>
                                </div>
                            </div>
  


    @include('estil/perfil')
 @endsection





