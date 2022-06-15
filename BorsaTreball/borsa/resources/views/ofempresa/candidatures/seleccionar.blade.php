@extends('layouts.app')
 
 @section('content')
    @include('borsa.header')
    @include('borsa.menuEmpre')
        <div class="py-12">
     
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container ">
                  
                            <div class="row ">
                            
                                <div class="container box" style="width: 970px;">
                                    <h1 style="text-align:center;"> <tutofox/> </h1>
                                  
                                    <br/>
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                        </ul>
                                        </div>
                                    @endif
                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @endif
                                    
      
                    <!---------------------------------------------------------------------------------->
   
                                    <form action="{{ route('ofempresa.notificar') }}" method="POST" enctype="multipart/form-data">
                    
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                        <div class="card-header" >{{ __('Candidatura Nº') . " " . $candis -> id}}</div>
                    
                                      
                                        </div>
                                        <div class="form-group">
                                        
                                            <label>Nom</label>
                                            <input type="text" name="name" class="form-control" value="{{ $candis->user }}" />
                                        </div>
                                            <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control" value="{{ $candis->email }}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Missatgea</label>
                                            <textarea name="message" class="form-control" cols="20" rows="4"v >                          
                                                Has sigut seleccionat/da per la nostra empresa: ( {{ Auth::user()->empre }} )
                                                Posat amb contacte amb nosaltres ( {{ Auth::user()->email }} )
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="mails.notificar" class="btn btn-info" value="Enviar Notificació" />
                                        </div>
                                        <br> <br> 
                                    </form>
                                   
                                </div>
                                               
                            </div>
                                
                            
                        </div>
                    </div>
                </div> 
            </div> 
 

            

          <br><br><br><br><br><br>

@include('estil/menssa')


@endsection


