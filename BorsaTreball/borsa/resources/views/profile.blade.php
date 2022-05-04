@extends('layouts.app')
 @section('content')
    @include('borsa.header')


                       
                      
        
    
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               


            
                 
                    <div class="p-6 bg-white border-b border-gray-200">
                        
                        <div class="container m-5 ">
                            <div class="row sling-items-end ">
                        
                                    <div class="col-sm ">
                                  
                                        <p><b>Nom:</b>   {{ Auth::user()->name }}</p>
                                
                                        <p><b>Email:</b> {{ Auth::user()->email }}</p>
     
                            
                                        
                                       
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