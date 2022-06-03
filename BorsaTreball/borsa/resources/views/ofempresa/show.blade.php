@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuEmpre') 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" >{{ __('Oferta') . " " . $oferta -> name}}</div>
                        <div class="card-body">
              
                                <table class="table table-striped table-info">
                                    <tbody >
                                        <tr>
                                            <td><strong>Tipos</strong></td>
                                            <td>{{ $oferta->tipus }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Cicle</strong></td>
                                            <td>{{ $oferta->cicle }}</td>
                                        </tr>
                                      
                                        <tr>
                                            <td><strong>horari</strong></td>
                                            <td>{{ $oferta->h }}</td>
                                        </tr>
                                    
                                        <tr>
                                            <td><strong>Salari</strong></td>
                                            <td>{{ $oferta->sala }}</td>
                                        </tr>
                                        
                                        <tr>
                                            <td><strong>Descripció</strong></td>
                                            <td>{{ $oferta->desc }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            
                        </div>
                    </div>

                
                    <form id="form" method="POST" action="{{ route('ofempresa.destroy', $oferta) }}">
                        @csrf
                        @method("DELETE")
                        <button id="destroy" type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmModal">🗑️ Delete</button>
                    </form>

                    <!-- Modal -->
                    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    This action cannot be undone
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

                </div>

            </div>
        </div>
    </div>
    <br><br><br><br> <br><br> <br>
    @include('estil/sh')    
@endsection
