@extends('layouts.app')
 
 @section('content')

  @include('borsa.header')

  <nav class="navbar navbar-expand-lg navbar-light m-2"  style="background-color: #bcdefd;">
    
         
                           
            <div class="col-12 col-md-3">



            </div>
        <!--Menu-->
            <div class="lletres">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                    <ul class="navbar-nav mr-auto">

                            <li class="nav-item active">
                                <a class="nav-link btn btn-secondary btn-block"  href="{{url('/')}}" style="color: #fff; ">  <i class="fa fa-duotone fa-user">Home</i></a>
                            </li>

                      
                            
                        
                    </ul>

                </div>
             </div>

    </button>

    </nav>

 
  
 

 
                    
 <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container-1 m-12">
    
                        <div class="row sling-items-end ">
                   
                          
            

                                <div class="container m-5 ">
                        
                        
                                   
                                    <center>

                                        <h3><strong>Tèrmit i condicions</strong></h3>
                                            
                                    </center>
                                
                                </div>

                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>

    </div>

 
        
@include('borsa.footer')

 

@include('estil/home')    


@endsection