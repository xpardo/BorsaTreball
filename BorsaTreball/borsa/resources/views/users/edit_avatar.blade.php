@extends('layouts.app')
@section('title')
         Información básica
@stop
@section('content')
    <section class="section" >
        <div class="container">
            <div class="columns">
                <div class="column is-3">
                    <div class="card">
                        <div class="card-content">
                            <nav class="panel ">
                                <a class="panel-block" href="{{url('users/'.$user->id.'/edit')}}">
                            <span class="panel-icon">
                              <i class="fa fa-book" aria-hidden="true"></i>
                            </span>
                                                                         Información personal
                                </a>
                                <a class="panel-block is-active"  href="{{ route('users.edit_avatar',$user->id) }}">
                            <span class="panel-icon">
                              <i class="fa fa-picture-o" aria-hidden="true"></i>
                            </span>
                                                                         Modificar avatar
                                </a>
                                <a class="panel-block" href="{{ route('users.edit_password',$user->id) }}">
                            <span class="panel-icon">
                              <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                                                                         Cambiar contraseña
                                </a>
                                <div class="panel-block">
                                    <a class="button is-link is-outlined is-fullwidth">
                                                                                 Comentarios sugeridos
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="column is-9">
                    <div class="card">
                        <div class="card-content">
                            <h2 class="title is-4"><span class="icon"><i class="fa fa-picture-o"> </ i> </ span> Seleccione una imagen </ h2>
                            <hr>
                            @if(\Illuminate\Support\Facades\Session::has('mes'))
                                <p class="field">
                                   <span class="has-text-danger">
                                       {{\Illuminate\Support\Facades\Session::get('mes')}}
                                   </span>
                                </p>
                            @endif
                            <form action="{{route('users.update_avatar',$user->id)}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                               <div class="columns">
                                   <div class="column is-3">
                                       <div class="">
                                                                                       <strong> Seleccione una imagen: </ strong>
                                           <figure class="image is-1by1"><img src="{{asset($user->avatar)}}"></figure>
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
                                                    <i class="fa fa-upload"></i>
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
@stop