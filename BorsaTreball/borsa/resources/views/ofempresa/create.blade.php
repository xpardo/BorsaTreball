@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuEmpre') 

            
    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="border-radius:15px;">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" >
                <div class="p-6 bg-white border-b border-gray-200" >      
                    <div class="contenido-tab">
                       
                            <div class="card-header btn-warning" style="border-radius:15px; background:#54CBF7">
                                <FONT SIZE=5><center><b>{{ __('Nova Oferta') }}</b></FONT></center>
                            </div>

                            <br>
                
                            <form action="{{ route('ofempresa.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
    
                                
                                <div class="dropdown">

                                    <div class="from-group form-row">
                                        <label for="cicle" class="col-3" >{{__('Cicle')}} </label><br><br>
                                        <select name="cicle" class="form-control @error('cicle') is-invalid @enderror" style="border-radius:15px;" id="cicle" autofocus>
                                            <option value="0"> </option>
                                            <option value=" Grau Mitjà Sistemes Microinformàtics i Xarxes "> Grau Mitjà Sistemes Microinformàtics i Xarxes  </option>
                                            <option value="Grau Mitjà Gestió Administratva"> Grau Mitjà Gestió Administratva  </option>
                                            <option value="Grau Mitjà Gestió Administrativa de l’Àmbit Jurídic"> Grau Mitjà Gestió Administrativa de l’Àmbit Jurídic </option>
                                            <option value="Grau Mitjà Activitats Comercials "> Grau Mitjà Activitats Comercials </option>
                                            <option value="Grau Superior Desenvolupament d’Aplicacions Web "> Grau Superior Desenvolupament d’Aplicacions Web </option>
                                            <option value=" Grau Superior Administració de Sistemes Informàtics en Xarxa ">  Grau Superior Administració de Sistemes Informàtics en Xarxa </option>
                                            <option value="Grau Superior Administració i Finances">Grau Superior Administració i Finances </option>
                                            <option value="Grau Superior Comerç internacional"> Grau Superior Comerç internacional </option>
                                    

                                        </select>
                                    </div>



                                </div>
                                
                                <br><br>


                               
                                    
                                    <b class="col-md-1"> Tipus :</b>
                                        <div class="form-check form-check-inline ">
                                            <label for="tipusPractiques" class="form-check-label"> {{__('Practiques')}} </label>
                                            <input  style="border-radius:15px;"type="checkbox" name="tipus"   class="form-check-input @error('gender') is-invalid @enderror"
                                                id="tipusPractiques" value="Practiques" {{ old('tipus')== 'Practiques' ? 'checked' : '' }}>
                                        </div>
                                        <div class="form-check form-check-inline">

                                            <label for="tipusQuedarse" class="form-check-label"> {{__('Practiques amb opció de quedarse')}}</label>
                                            <input  style="border-radius:15px;" type="checkbox"  name="tipus"  class="form-check-input @error('gender') is-invalid @enderror"
                                            id="tipusQuedarse" value="Quedarse" {{ old('tipus')== 'Quedarse' ? 'checked' : '' }}>
                                        </div>
                                        <div class="form-check form-check-inline">

                                            <label for="tipusTreballar" class="form-check-label"> {{__('Treballar')}}</label>
                                            <input style="border-radius:15px;" type="checkbox"  name="tipus"  class="form-check-input @error('gender') is-invalid @enderror"
                                            id="tipusTreballar" value="Treballar" {{ old('tipus')== 'Treballar' ? 'checked' : '' }}>
                                        </div>

                              

                                    <br><br>
                                    
                                        <label  for="name" class="col-10">Titol: </label>
                                        <input style="border-radius:15px;" type="text" id="name" name="name">
                                    <br><br>
                                        <label  for="sala" class="col-10">Salari: </label>
                                        <input style="border-radius:15px;" type="num" id="sala" name="sala" placeholder="€">
                                    <br><br>
                                        <label for="h"  class="col-10">Horari:</label>
                                        <input style="border-radius:15px;" type="text" id="h" name="h" placeholder="00:00-00:00 00:00-00:0">
                                    <br><br>
                                    <div class="contenedor-input">
                                        <label for="desc" class="col-10">Descripció:</label>
                                        <textarea style="border-radius:15px;"  name="desc" rows="10" cols="50"></textarea><br><br>
                                    </div>


                                    
                                    
                                    


                                    <button style="border-radius:15px;" class="btn btn-success" type="submit">ENVIAR</button>
                                    <button style="border-radius:15px;" type="reset" class="btn btn-secondary">RESTABLIR</button>
                                        

                                </div>
                            </form>
                           
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
  


    @include('estil/perfil')
 @endsection





