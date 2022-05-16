@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuEmpre') 
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" >{{ __('Oferta') . " " . $ofertas -> id}}</div>
                                    <div class="card-body">

                                            


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
@include('estil/sh')    
@endsection
