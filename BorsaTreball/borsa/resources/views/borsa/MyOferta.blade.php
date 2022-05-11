@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuEmpre') 

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container-1 m-12">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div  class="btn btn-info ">
                                      
                                            <b class="col-md-1"> Tipus: </b>
                                                <div class="form-check form-check-inline ">
                                                    <label for="tipusP" class="form-check-label"> {{__('pública')}} </label>
                                                    <input type="checkbox" name="tipus"   class="form-check-input @error('gender') is-invalid @enderror"
                                                        id="tipusP" value="Pr" {{ old('tipus')== 'P' ? 'checked' : '' }}>
                                                </div>
                                                <div class="form-check form-check-inline">

                                                    <label for="tipusI" class="form-check-label"> {{__('Privada')}}</label>
                                                    <input type="checkbox"  name="tipus"  class="form-check-input @error('gender') is-invalid @enderror"
                                                    id="tipusI" value="I" {{ old('tipus')== 'I' ? 'checked' : '' }}>
                                                </div>

                        
                                                

                                        </div>
                                    <br>
                                    <td><a  class="btn btn-primary" href="{{url("CreateOfert")}}">➕ Crear oferta </a></td>
                                    <br>
                                        <div class="card-header">{{ __('oferta Actuals') }}</div>
                                        
                                            <div class="card-body">
                                                <table class="table">
                                                    <thead>
                                               
                                                        <tr>
                                                        
                                                            <td scope="col">nom</td><!------la meva oferta------->
                                                            <td scope="col">cicle</td>
                                                            
                                                            <td scope="col">candidatures</td>
                                                            <td scope="col"></td>
                                                        
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($ofertas as $oferta)
                                                        <tr>
                                                    
                                                            <td>{{ $oferta->name }}</td>
                                                            <td>{{ $oferta->cicle }}</td>
                                                           
                                                           <td>{{ $oferta->candidatures }}</td> 
                                                           <td>
                                                                
                                                                <a title="View" href="{{ url('show', $oferta) }}">👁️</a>
                                                                <a title="Delete" href="{{ url('delete', [$oferta, 'delete' => 1]) }}">🗑️</a>
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
                </div> 
            </div> 
 

          

@include('estil/perfil')


@endsection