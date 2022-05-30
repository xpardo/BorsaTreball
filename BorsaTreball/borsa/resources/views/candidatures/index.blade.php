@extends('layouts.app')
 
 @section('content')
@include('borsa.header')

@include('borsa.menuAlumn')
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container-1 m-12">
                        <div class="container">
                            <div class="row justify-content-center">
                            
                                    <div class="card">
                                    
                            
                                    <br>
                                        <div class="card-header">{{ __('oferta Actuals') }}</div>
                                      
                                            <div class="card-body">
                                                <table class="table">
                                                    <thead>
                                               
                                                        <tr>
                                                      
                                                        <td scope="col"><center>Empresa</center></td>   
                                                        <td scope="col"><center></center></td>  
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($candis as $candi)
                                                        
                                                        <tr>
                                                            
                                               
                                                            <td><center>{{ $candi->empre }}</center></td>

                                                           
                                                       
                                                            <td> 
                                                                
                                                        
                                                                <form id="form" method="POST" action="{{ route('candi.destroy', $candi) }}">
                                                                    @csrf
                                                                    @method("DELETE")
                                                                    <button id="destroy" type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmModal">🗑️ </button>
                                                                </form>
                                                                                                                <!-- Modal -->
                                                                    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Estàs segur?</h5>
                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    Aquesta acció no es pot desfer
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                    <button id="confirm" type="button" class="btn btn-primary">Confirm</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                <!-- Submit confirm -->
                                                                <script type="text/javascript">                
                                                                    const submit = document.getElementById('destroy')
                                                                    const  confirm = document.getElementById('confirm')

                                                                    // Disable form submit button
                                                                    submit.addEventListener("click", function( event ) {
                                                                        event.preventDefault()
                                                                        return false
                                                                    })

                                                                    // Enable submit via modal confirmation
                                                                    confirm.addEventListener("click", function( event ) {
                                                                        document.getElementById("form").submit(); 
                                                                    })
                                                                </script>
                                                            </td>
                                                            
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                   
                               
                                 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
 
            <br><br>   <br><br>  <br><br>  <br><br>  <br>
          

@include('estil/perfil')


@endsection