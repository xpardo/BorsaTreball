
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
                                    
                                 
                                        <div class="card-body">
                                          
                                            <b><strong>Tipus:</strong></b>
                                            <p> {{ $oferta->tipus }} </p>
                                            <b><strong>Cicle formatiu</strong></b>
                                            <p> {{ $oferta->cicle }} </p>
                                            <b><strong>Name</strong></b>
                                            <p> {{ $oferta->name }} </p>
                                            <b><strong>Empre</strong></b>
                                            <p> {{ $oferta->empre }} </p>
                                            <b><strong>Horari</strong></b>
                                            <p> {{ $oferta->h }} </p>
                                            <b><strong>Salari</strong></b>
                                            <p> {{ $oferta->sala }} </p>
                                            <b><strong>Descripció</strong></b>
                                            <p> {{ $oferta->desc }} </p>
                                        
                                        </div>



                                        <br>  
                                        
                                        <center>

                                            <form id="form" method="POST" action="{{ route('candi.store') }}">
                                                @csrf
                                                <!--agafar el id, nom i empre de la taula--->
                                                <input type="hidden" name="oferta_id" value="{{$oferta->id}}" />
                                                <input type="hidden" name="empre" value="{{$oferta->empre}}" />
                                                <input type="hidden" name="name" value="{{$oferta->name}}" />
                                                <button id="mybutton" type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#confirmModal">Inscripció</button>
                                            </form>

                                        </center>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tancar</button>
                <button id="confirm" type="button" class="btn btn-primary">Confirmeu</button>
            </div>
        </div>
    </div>
</div>

<!-- Submit confirm -->
<script type="text/javascript">                
    const submit = document.getElementById('mybutton')
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

@include('estil/home')    





@endsection


