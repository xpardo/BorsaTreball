        
        @extends('layouts.app')
    @section('content')
        @include('borsa.header')
 
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        
                        <div class="container ">
                            <div class="row sling-items-end ">
                        
                
                                <div class="contenedor ">
        
        
        
        
        
        
            
                   
                                <form action="{{ url('watch') }}" method="POST" enctype="multipart/form-data">

                                        @csrf
                            
                                
                                                        
                                            <div class="col-md-12"> 
                                                <b>Segur que bols inscriure't ?</b>
                                                <br>  <br>  <br>
                                                <div class="form-check form-check-inline ">
                                                    <label for="inscriuremSi" class="form-check-label"> {{__('si')}} </label>
                                                    <input type="checkbox" name="inscriurem"   class="form-check-input @error('gender') is-invalid @enderror"
                                                        id="inscriuremSi" value="inscriurem" {{ old('inscriurem')== 'inscriuremSi' ? 'checked' : '' }}>
                                                </div>
                                                

                                
                                        <br><br>
                                        <button class="btn btn-success" type="submit">ENVIAR</button>
                                        
                                                                        
                                 </from>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@include('estil/home')    


@endsection
