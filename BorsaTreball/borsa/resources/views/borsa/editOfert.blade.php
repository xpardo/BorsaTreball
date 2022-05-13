@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuEmpre') 

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('OFerta') . " " . $ofertas->id }}</div>
                                <div class="card-body">
                                
                                    <form method="POST" action="{{route('update', $ofertas) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method("PUT")
                                    


                                        <div class="dropdown">
                            
                                            <div class="from-group form-row">
                                                <label for="cicle" class="col-3">{{__('Cicle')}} </label><br><br>
                                                <select name="cicle" class="form-control @error('cicle') is-invalid @enderror" id="cicle" autofocus>
                                                    <option value="0">{{ $ofertas -> cicle}} </option>
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


                                            <div>
                                                <p><b>{{ $ofertas -> tipus }} </b></p>
                                                <b > Tipus: </b>
                                                    <div class="form-check form-check-inline ">
                                                        <label for="tipusPractiques" class="form-check-label"> {{__('Practiques')}} </label>
                                                        <input type="checkbox" name="tipus"   class="form-check-input @error('gender') is-invalid @enderror"
                                                            id="tipusPractiques" value="Practiques" {{ old('tipus')== 'Practiques' ? 'checked' : '' }}>
                                                    </div>
                                                    <div class="form-check form-check-inline">

                                                        <label for="tipusQuedarse" class="form-check-label"> {{__('Practiques amb opció de quedarse')}}</label>
                                                        <input type="checkbox"  name="tipus"  class="form-check-input @error('gender') is-invalid @enderror"
                                                        id="tipusQuedarse" value="Quedarse" {{ old('tipus')== 'Quedarse' ? 'checked' : '' }}>
                                                    </div>
                                                    <div class="form-check form-check-inline">

                                                        <label for="tipusTreballar" class="form-check-label"> {{__('Treballar')}}</label>
                                                        <input type="checkbox"  name="tipus"  class="form-check-input @error('gender') is-invalid @enderror"
                                                        id="tipusTreballar" value="Treballar" {{ old('tipus')== 'Treballar' ? 'checked' : '' }}>
                                                    </div>

                                            </div>






                                                <br><br>
                                                
                                                <label  for="name" class="col-10">Titol: </label>
                                                <input type="text" id="name" name="name" value="{{ $ofertas -> name }}">
                                                <br><br>
                                                <label  for="sala" class="col-10">Salari: </label>
                                                <input type="num" id="sala" name="sala" value="{{ $ofertas -> sala }}">
                                                <br><br>
                                                <label for="h"  class="col-10">Horari:</label>
                                                <input type="text" id="h" name="h"value="{{ $ofertas -> h }}">
                                                <br><br>
                                                <div class="contenedor-input">
                                                    <label for="desc" class="col-10">Descripció:</label>

                                                    <textarea name="desc" rows="10" cols="50" value="{{ $ofertas -> desc }}">{{ $ofertas -> desc }}</textarea><br><br>
                                                </div>


                                                <div>
                                                
                                                <b> Privat: </b>
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
                                        <br><br>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    @include('estil/perfil')

@endsection