@extends('layouts.app')
    @section('content')
        @include('borsa.header')
         



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <center><h1>Borsa de treball </h1></center>


                            <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container-1 m-12">

                        <div class="box">

                            <form method="get" action="home.html" target="_blank">
                            <fieldset>  
                              
                                <div class="col-sm ">
                            
                                    <div class="dropdown">
                                        
                                             <!-- 
                                                    <form class="form-linie" action="{{route('home')}}" method="get">
                                                

                                                            <div class="form-row">
                                                                <div class="col-sm-4 ">
                                                                    <input  name="text" class="form-control mr-sm-2" type="text" id="search" 
                                                                                    placeholder="Search" aria-label="Search"/>
                                                                    
                                                                    <input type="submit" class="btn btn-primary" value="Buscar">
                                                                </div>

                                                            </div>

                                                    </form>  -->
                                               
                                          
                                        
                                        <!-- <br> <br> <br> <br>
                                      
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" 
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Cicle
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                
                                                            <li>
                                                                <a class="dropdown-item">
                                                                    <div class="form-check form-check-inline">
                                                                        <label for="adminAd" 
                                                                        class="form-check-label "> Administratiu</label>
                                                                        <input type="checkbox" name="admin"   class="form-check-input @error('admin') is-invalid @enderror"
                                                                            id="adminAd" value="Ad" {{ old('admin')== 'Ad' ? 'checked' : '' }}>
                                                                    </div>
                                                                </a>
                                                        
                                                            <li>    
                                                                <a class="dropdown-item">
                                                                    <div class="form-check form-check-inline">
                                                                        <label for="adminGe" 
                                                                        class="form-check-label "> Administratiu - Grau Mitjà Gestió Administratva</label>
                                                                        <input type="checkbox" name="admin"   class="form-check-input @error('admin') is-invalid @enderror"
                                                                            id="adminGe" value="Ge" {{ old('admin')== 'Ge' ? 'checked' : '' }}>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item">
                                                                    <div class="form-check form-check-inline">
                                                                        <label for="adminJu" class="form-check-label ">Administratiu - Grau Mitjà Gestió Administrativa de l’Àmbit Jurídic</label>
                                                                        <input type="checkbox" name="admin"  class="form-check-input @error('admin') is-invalid @enderror"
                                                                            id="adminJu" value="Ju" {{ old('admin')== 'Ju' ? 'checked' : '' }}>
                                                                    </div>
                                                                </a>
                                                             </li>
                                                            <li>
                                                                <a  class="dropdown-item">
                                                                    
                                                                    <div class="form-check form-check-inline">
                                                                        <label for="adminFi" 
                                                                        class="form-check-label ">Administratiu - Grau Superior Administració i Finances</label>
                                                                        <input type="checkbox" name="admin"  class="form-check-input @error('admin') is-invalid @enderror"
                                                                            id="adminFi" value="Fi" {{ old('admin')== 'Fi' ? 'checked' : '' }}>
                                                                    </div>

                                                                </a>
                                                            </li>
                                                        <div class="dropdown-divider"></div>
                                                        <li>
                                                            <a  class="dropdown-item" >
                                                         
                                                                <div class="form-check form-check-inline">
                                                                    <label for="comCom" class="form-check-label ">Comerç</label>
                                                                    <input type="checkbox" name="com"   class="form-check-input @error('com') is-invalid @enderror"
                                                                        id="comCom" value="Com" {{ old('com')== 'Com' ? 'checked' : '' }}>
                                                                </div>
                                                            </a>
                                                        </li>
                                                            <li>
                                                                <a  class="dropdown-item" > 
                                                                <div class="form-check form-check-inline">
                                                                        <label for="comCi" 
                                                                        class="form-check-label ">Comerç  - Grau Mitjà Activitats Comercials</label>
                                                                        <input type="checkbox" name="com"   class="form-check-input @error('com') is-invalid @enderror"
                                                                            id="comCi" value="Ci" {{ old('com')== 'Ci' ? 'checked' : '' }}>
                                                                    </div>
                                                                  
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a  class="dropdown-item" >
                                                                   
                                                                    <div class="form-check form-check-inline">
                                                                        <label for="comIn" 
                                                                        class="form-check-label "> Comerç - Grau Superior Comerç internacional</label>
                                                                        <input type="checkbox" name="com" class="form-check-input @error('com') is-invalid @enderror"
                                                                            id="comIn" value="In" {{ old('com')== 'In' ? 'checked' : '' }}>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        <div class="dropdown-divider"></div>
                                                        <li>
                                                            <a  class="dropdown-item" >
                                                                <div class="form-check form-check-inline">
                                                                    <label for="infInf" 
                                                                    class="form-check-label ">Informatica</label>
                                                                    <input type="checkbox" name="inf" class="form-check-input @error('inf') is-invalid @enderror"
                                                                        id="infInf" value="Inf" {{ old('inf')== 'Inf' ? 'checked' : '' }}>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a  class="dropdown-item" >
                                                                
                                                                <div class="form-check form-check-inline">
                                                                    <label for="infXa" 
                                                                    class="form-check-label ">Informatica - Grau Mitjà Sistemes Microinformàtics i Xarxes</label>
                                                                    <input type="checkbox" name="inf" class="form-check-input @error('inf') is-invalid @enderror"
                                                                        id="infXa" value="Xa" {{ old('inf')== 'Xa' ? 'checked' : '' }}>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a  class="dropdown-item" >
                                                              
                                                                <div class="form-check form-check-inline">
                                                                    <label for="infDaw" 
                                                                    class="form-check-label ">Informatica - Grau Superior Desenvolupament d’Aplicacions Web</label>
                                                                    <input type="checkbox" name="inf" class="form-check-input @error('inf') is-invalid @enderror"
                                                                        id="infDaw" value="Daw" {{ old('inf')== 'Daw' ? 'checked' : '' }}>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a  class="dropdown-item" >
                                                                


                                                                <div class="form-check form-check-inline">
                                                                    <label for="infAsix" 
                                                                    class="form-check-label ">Informatica - Grau Superior Administració de Sistemes Informàtics en Xarxa </label>
                                                                    <input type="checkbox" name="inf" class="form-check-input @error('inf') is-invalid @enderror"
                                                                        id="infAsix" value="Asix" {{ old('inf')== 'Asix' ? 'checked' : '' }}>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    
                                               
                                            </div> -->
                                        
                                        
                                    
                                            <!--checkbox---->

                                            <!-- <div  class="btn btn-info ">
                                                
                                                    <label>tipus:</label>
                               
                                                <div class="form-check form-check-inline m-12 md-3">
                                                    <label for="tipusPr" class="form-check-label "> Practiques </label>
                                                    <input type="checkbox" name="tipus"   class="form-check-input @error('gender') is-invalid @enderror"
                                                        id="tipusPr" value="Pr" {{ old('tipus')== 'Pr' ? 'checked' : '' }}>
                                                </div>
                                                <div class="form-check form-check-inline">

                                                    <label for="tipusOp" class="form-check-label"> Practiques amb opció de quedar-se </label>
                                                    <input type="checkbox"  name="tipus"  class="form-check-input @error('gender') is-invalid @enderror"
                                                    id="tipusOp" value="Op" {{ old('tipus')== 'Op' ? 'checked' : '' }}>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label for="tipusTr" class="form-check-label"> Treballar</label>
                                                    <input type="checkbox"  name="tipus"  class="form-check-input @error('gender') is-invalid @enderror"
                                                    id="tipusTr" value="Tr" {{ old('tipus')== 'Tr' ? 'checked' : '' }}>
                                                </div>

                                            </div>
                                            <input type="hidden" name="num" value="50">
                                            <input class="botb" type="submit" value="Buscar">
                                        </div>

                                    </div> -->
                                    
                                      
                                 </div>
                              
                            </fieldset>

                        
                        </div>

                       

                    </div>
                </div>
                
            
                      
                
<!------------------------------------------------------------------------------------------------------>

                            <div class="p-6 bg-white border-b border-gray-200">
                            
                                <center><h2>Ofertas de treball</h2></center>
                                <div class="p-6 bg-white border-b border-gray-200">

                                    <table  class="table">
                                    
                                        <thead class="table-primary">

                                            <tr>
                                                <th scope="col"><center>TiPUS</center></th>
                                                <th scope="col"><center>EMPRESA</center></th>
                                                <th scope="col"><center>TITOL</center></th>
                                                <th scope="col"><center>ESTUDIS ALS QUE VA DIRIGIDA</center></th>
                                                <th scope="col"></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ofertas as $oferta)
                                                <tr>
                                                    <td><center>{{ $oferta->tipus }}</center></td>
                                                    <td><center>{{ $oferta->empre }}</center></td>
                                                    <td><center>{{ $oferta->name }}</center></td>
                                                    <td><center>{{ $oferta->cicle }}</center></td>
                                  
                                                    <td>
                                                        <center>
                                                            <b>
                                                                <a   title="View" href="{{ route('ofertas.show', $oferta) }}">
                                                                    <h1 class="btn btn-dark">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </h1>
                                                                </a>
                                                            </b>
                                                        </center>
                                                    </td>
                                                    
                                                </tr>
                                            @endforeach
                                        </tbody>
                           
                                    </table>

                                </div>

                            </div>
                        </div>

          
              
          
                        @guest

                <div class="p-6 bg-white border-b border-gray-200">
                   
                       
  
                    <!---camp editable---->
                    <div class="p-6 bg-white border-b border-gray-200">

                        <center><h1>Registra't a la nostra borsa</label></h1>
                       <br>
                    
                    </div> 
              

                  
            
                 
                       <!-------container----->

                    <div class="p-6 bg-white border-b border-gray-200">
                        
                        <div class="container m-5 ">
                            <div class="row sling-items-end ">
                        
                                    <div class="col-sm ">
                                        <div class="contenedor ">

                                            <h3><strong>Empresa</strong></h3>
                                            <div class="service ">
                                                <a class="nav-link btn btn-success" href="{{ route('registreEmpre') }} "  style="color: #fff; ">{{ __("Registra't") }}</a>
                                            
                                            </div><br>
                                            <img src="{{ asset('img/empresas-img.jpg') }}" alt="registreEmpre">
                                        </div>
                                    </div>

                                    <div class="col-sm ">
                                        <div class="contenedor ">

                                            <h3><strong>Alumne</strong></h3>
                                            <div class="service ">
                                        
                                            
                                                <a class="nav-link btn btn-success" href="{{ route('registreAlumne') }} "  style="color: #fff; ">{{ __("Registra't") }}</a>
                                            </div><br>
                                            <img src="{{ asset('img/alumne.jpg') }}" alt="registreAlumne">
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
               
                    </div>
                    @endguest
                </div>

            </div>
        </div>

</div>




        
   <br><br>

 

@include('estil/home')    


@endsection
