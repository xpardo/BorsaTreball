@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuEmpre') 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
<<<<<<< HEAD
                <div class="card"  style="border-radius:15px;">
                    <div class="card-header"  style="border-radius:15px;" ><center><b>{{ __('Oferta:') . " "  }}</b>{{$oferta -> name}}</center></div>
=======
                <div class="card">
                    <div class="card-header" >{{ __('Oferta') . " " . $oferta -> id}}</div>
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
                        <div class="card-body">
              
                                <table class="table table-striped table-info">
                                    <tbody >
                                        <tr>
<<<<<<< HEAD
=======
                                            <td><b><strong>id</strong></b></td>
                                            <td><a>{{ $oferta->id }}</a></td>
                                        </tr> <tr>
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
                                            <td><strong>Tipos</strong></td>
                                            <td>{{ $oferta->tipus }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Cicle</strong></td>
                                            <td>{{ $oferta->cicle }}</td>
                                        </tr>
<<<<<<< HEAD
                                      
=======
                                        <tr>
                                            <td><strong>Titól</strong></td>
                                            <td>{{ $oferta->name }}</td>
                                        </tr>
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
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
<<<<<<< HEAD
                        <button id="destroy" type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmModal"><i class="fas fa-backspace"></i></button>
                    </form>
                    @include('js/modal')
                   
=======
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
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d

            </div>
        </div>
    </div>
<<<<<<< HEAD
    <br><br><br><br> <br><br> <br><br><br>
=======
    <br><br><br><br> <br><br> <br>
>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
    @include('estil/sh')    
@endsection
