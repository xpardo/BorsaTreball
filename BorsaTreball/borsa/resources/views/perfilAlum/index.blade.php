@extends('layouts.app')
 @section('content')
    @include('borsa.header')
        @include('borsa.menuAlumn')


            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">

                            <div class="container"> 
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#dialogo1"><b><FONT SIZE=5><i class="fas fa-info-circle"></i>Informació important</FONT></b></button>

                                <div class="modal fade" id="dialogo1">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                    
                                        <!-- cabecera del diálogo -->
                                        <div class="modal-header">
                                            <h4 class="modal-title"></h4>
                                            <button type="button" class="close" data-dismiss="modal">X</button>
                                        </div>
                                    
                                        <!-- cuerpo del diálogo -->
                                        <div class="modal-body">
                                            Et recomanem que col·loquis un currículum i una carta de presentació per tindre
                                            oportunitat que tens per a fer una bona impressió durant la teva cerca d'ocupació 
                                            i així facilitis a l'empresa
                                        </div>
                                    
                                        <!-- pie del diálogo -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    
                                        </div>
                                    </div>
                                </div> 



                             </div>
                        </div> 




                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">

                     <table class="table table-striped table-info">

                                <b><a  title="Editar" class="btn btn-warning"  href="{{ route('perfilAlum.edit' ) }}">
                                <FONT SIZE=5> <i class="fas fa-edit"></i></FONT>
                                    </a></b>
                                <br><br>
                               
                                <tbody >
                                    <tr>
                                        <td><b><strong>Nom</strong></b></td>
                                        <td><a>{{ Auth::user()->name }}</a></td>
                                    </tr> <tr>
                                        <td><strong>Cognom</strong></td>
                                        <td>{{ Auth::user()->cognom }}</td>
                                    </tr>
                                    </tr> <tr>
                                        <td><strong>Data neixement</strong></td>
                                        <td>{{ Auth::user()->neixement }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email</strong></td>
                                        <td>{{ Auth::user()->email }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Telefon</strong></td>
                                        <td>{{ Auth::user()->telefon }}</td>
                                    </tr>
                                
                                    <tr>
                                        <td><strong>Poblacio</strong></td>
                                        <td> {{ Auth::user()->poblacio }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Codi Postal</strong></td>
                                        <td> {{ Auth::user()->cp }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Estat de practiques</strong></td>
                                        <td> {{ Auth::user()->estat }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Practiques abans</strong></td>
                                        <td> {{ Auth::user()->fet }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Estat o  treballat</strong></td>
                                        <td> {{ Auth::user()->treballat }}</td>
                                    </tr>
                                   
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>                    
                </div>
            </div>

        <br><br>


      
  </div>
  
    @include('estil/perfil')

@endsection

