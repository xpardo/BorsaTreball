@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuEmpre') 

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('OFerta') . " " . $oferta->id }}</div>
                                <div class="card-body">
                                
                 
                                    <form method="POST" action="{{ route('ofempresa.update', $oferta) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method("PUT")
                                    


                                        <div class="dropdown">
                            
                                            <div class="from-group form-row">
                                                <label for="cicle" class="col-3">{{__('Cicle')}} </label><br><br>
                                                <select name="cicle" class="form-control @error('cicle') is-invalid @enderror" id="cicle" autofocus>
                                                    <option value="0">{{ $oferta -> cicle}} </option>
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
                                                <p><b>{{ $oferta -> tipus }} </b></p>
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
                                                <input type="text" id="name" name="name" value="{{ $oferta -> name }}" @extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuEmpre') 

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('OFerta') . " " . $oferta->id }}</div>
                                <div class="card-body">
                                
                 
                                    <form method="POST" action="{{ route('ofempresa.update', $oferta) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method("PUT")
                                    


                                        <div class="dropdown">
                            
                                            <div class="from-group form-row">
                                                <label for="cicle" class="col-3">{{__('Cicle')}} </label><br><br>
                                                <select name="cicle" class="form-control @error('cicle') is-invalid @enderror" id="cicle" autofocus>
                                                    <option value="0">{{ $oferta -> cicle}} </option>
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
                                                <p><b>{{ $oferta -> tipus }} </b></p>
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
                                                <input type="text" id="name" name="name" value="{{ $oferta -> name }}" @extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuEmpre') 

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('OFerta') . " " . $oferta->id }}</div>
                                <div class="card-body">
                                
                 
                                    <form method="POST" action="{{ route('ofempresa.update', $oferta) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method("PUT")
                                    


                                        <div class="dropdown">
                            
                                            <div class="from-group form-row">
                                                <label for="cicle" class="col-3" required>{{__('Cicle')}} </label><br><br>
                                                <select name="cicle" class="form-control @error('cicle') is-invalid @enderror" id="cicle" autofocus>
                                                    <option value="0">{{ $oferta -> cicle}} </option>
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
                                                <p><b>{{ $oferta -> tipus }} </b></p>
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
                                                <input type="text" id="name" name="name" value="{{ $oferta -> name }}" required>
                                                <br><br>
                                                <label  for="sala" class="col-10">Salari: </label>
                                                <input type="num" id="sala" name="sala" value="{{ $oferta -> sala }}" required>
                                                <br><br>
                                                <label for="h"  class="col-10">Horari:</label>
                                                <input type="text" id="h" name="h"value="{{ $oferta -> h }}" required>
                                                <br><br>
                                                <div class="contenedor-input">
                                                    <label for="desc" class="col-10" required>Descripció:</label>

                                                    <textarea name="desc" rows="10" cols="50" value="{{ $oferta -> desc }}" required>{{ $oferta -> desc }}</textarea><br><br>
                                                </div>


                                                <div>
                                                
                                               

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

@endsection>
                                                <br><br>
                                                <label  for="sala" class="col-10">Salari: </label>
                                                <input type="num" id="sala" name="sala" value="{{ $oferta -> sala }}" required>
                                                <br><br>
                                                <label for="h"  class="col-10">Horari:</label>
                                                <input type="text" id="h" name="h"value="{{ $oferta -> h }}" required>
                                                <br><br>
                                                <div class="contenedor-input">
                                                    <label for="desc" class="col-10" required>Descripció:</label>

                                                    <textarea name="desc" rows="10" cols="50" value="{{ $oferta -> desc }}" required>{{ $oferta -> desc }}</textarea><br><br>
                                                </div>


                                                <div>
                                                
                                               

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

@endsection> 
                                                <br><br>
                                                <label  for="sala" class="col-10">Salari: </label>
                                                <input type="num" id="sala" name="sala" value="{{ $oferta -> sala }}" required>
                                                <br><br>
                                                <label for="h"  class="col-10">Horari:</label>
                                                <input type="text" id="h" name="h"value="{{ $oferta -> h }}" required>
                                                <br><br>
                                                <div class="contenedor-input">
                                                    <label for="desc" class="col-10" required>Descripció:</label>

                                                    <textarea name="desc" rows="10" cols="50" value="{{ $oferta -> desc }}" required>{{ $oferta -> desc }}</textarea><br><br>
                                                </div>


                                                <div>
                                                
                                               

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