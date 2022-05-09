@extends('layouts.app')
 @section('content')
    @include('borsa.header')


    @include('borsa.menuAlumn')










    <section class="section" >
        <div class="container">
            
                
                    <div class="card">
                       
                           
                       
                            @if(\Illuminate\Support\Facades\Session::has('mes'))
                                <p class="field">
                                   <span class="has-text-danger">
                                       {{\Illuminate\Support\Facades\Session::get('mes')}}
                                   </span>
                                </p>
                            @endif
                            <form action="{{route('users.update_avatar', Auth::user()->id)}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                               <div class="columns">
                                   <div class="column is-3">
                                       <div class="">
                                                <strong> Seleccione una imagen: </strong>
                                           <figure class="image is-1by1"><img src="{{asset( Auth::user()->avatar)}}"></figure>
                                       </div>
                                   </div>
                               </div>
                                <div class="columns">
                                    <div class="column is-3">
                                        <div class="file is-boxed">
                                            <label class="file-label">
                                                <input class="file-input" type="file" name="avatar">
                                                <span class="file-cta">
                                                  <span class="file-icon">
                                                  
                                                  </span>
                                                  <span class="file-label">
                                                        Elige una foto
                                                  </span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column is-3">
                                        <button class="button is-link" type="submit">
                                            <span> Subir avatar </ span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>













            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">

                      
                       
            
                            <p><b>Nom:</b>  {{ Auth::user()->name }}</p>
                            <p><b>Cognom:</b>  {{Auth::user()->cognom }}</p>
                            <p><b>Data neixement:</b>   {{Auth::user()->neixement }}</p>
                            <p><b>Email:</b> {{ Auth::user()->email }}</p>
                            <p><b>Telefon:</b> {{Auth::user()->telefon }}</p>
                            <p><b>Poblacio:</b> {{Auth::user()->poblacio }}</p>
                            <p><b>Codi Postal:</b> {{Auth::user()->cp }}</p>
                            <p><b>Estat de practiques:</b> {{Auth::user()->estat }}</p>
                            <p><b>Practiques abans:</b> {{Auth::user()->fet }}</p>
                            <p><b> Estat o  treballat:</b> {{Auth::user()->treballat }}</p>


                               
                            
                        </div>
                    </div>
                    
                </div>
            </div>

        <br><br>







      

















        
                    @include('borsa.footer')


@include('estil/perfil')


@endsection