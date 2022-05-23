
@extends('layouts.app')
    @section('content')
        @include('borsa.header')
 
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">                   
                   <div class="p-6 bg-white border-b border-gray-200">
   
                       <table  class="table">
                       
                           <thead class="table-primary">

                               <tr>
                                   <th scope="col"><center>TiPUS</center></th>
                                   <th scope="col"><center>EMPRESA</center></th>
                                   <th scope="col"><center>TITOL</center></th>
                                   <th scope="col"><center>ESTUDIS ALS QUE VA DIRIGIDA</center></th>
                                   <th scope="col"></th>
                                   
                               </tr>
                           </thead>
                           <tbody>
                               @foreach ($ofertas as $oferta)
                                   <tr>
                                       <td><center>{{ $oferta->tipus }}</center></td>
                                       <td><center>{{ $oferta->empre }}</center></td>
                                       <td><center>{{ $oferta->name }}</center></td>
                                       <td><center>{{ $oferta->cicle }}</center></td>
                     
                                       <td>
                                           <center>
                                               <b>
                                                   <a   title="View" href="{{ route('ofertas.show', $oferta) }}">
                                                       <h1 class="btn btn-dark">
                                                           <i class="bi bi-eye-fill"></i>
                                                       </h1>
                                                   </a>
                                               </b>
                                           </center>
                                       </td>
                                       
                                   </tr>
                               @endforeach
                           </tbody>
              
                       </table>

                   </div>
                </div>
            </div>
        </div>



@include('estil/home')    


@endsection


