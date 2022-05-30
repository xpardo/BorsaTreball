@extends('layouts.app')
 
 @section('content')
    @include('borsa.header')
    @include('borsa.menuEmpre')
        <div class="py-12">
     
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" bg-white border-b border-gray-200">
                    <div class="container ">

                            <div class="row ">
                            


                                <div class="container box" style="width: 970px;">
                                    <h1 style="text-align:center;"> <tutofox/> </h1>

                                    <br/>
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert"></button>
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



                                    <form action="{{ Route('ofempresa.send') }}" method="POST" enctype="multipart/form-data">
                    
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                        
                                            <label>Nombre</label>
                                            <input type="text" name="name" class="form-control" value="{{ $candis->user }}" />
                                        </div>
                                            <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control" value="{{ $candis->email }}" />
                                        </div>
                                        <div class="form-group">
                                            <label>missatgea</label>
                                            <textarea name="message" class="form-control" >                          Has sigut seleccionat per la nostra empresa: ( {{ Auth::user()->empre }} )
                          Posat amb contacte amb nosaltres ( {{ Auth::user()->email }} )
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="send" class="btn btn-info" value="Enviar" />
                                        </div>
                                    </form>

                                </div>
                                               
                                 
                                
                            
                        </div>
                    </div>
                </div> 
            </div> 
 

            

          <br><br><br><br><br><br>

@include('estil/menssa')


@endsection


