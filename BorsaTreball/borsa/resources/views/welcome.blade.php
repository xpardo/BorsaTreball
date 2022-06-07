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

                            
                            
                                <div class="dropdown">
                                        
                                        
                                    
                                      
                                 </div>
                           

                        
                         </div>

                       

                    </div>
                </div>
                
            
                      
                
<!------------------------------------------------------------------------------------------------------>

                            <div class="p-6 bg-white border-b border-gray-200">
                            
                                <div class="card-header btn-warning" style="border-radius:15px; background:#54CBF7"><FONT SIZE=5><center>{{ __('Ofertes de treball') }}</FONT></center></div>

                                <div class="p-6 bg-white border-b border-gray-200">

                                    <table class="table table-striped ">
                                    
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




        


 

@include('estil/home')    


@endsection
