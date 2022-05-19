@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuEmpre') 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                  <div class="card-header" >{{ __('candidatura') . " " . $candi -> id_ofert}}</div>
                        <div class="card-body">
              

                            <table class="table table-striped table-info">
                                <thead>
                            
                                    <tr>
                                    <td scope="col"><center>id_ofert</center></td>
                                    <td scope="col"><center>name</center></td>
                                    <td scope="col"><center>email</center></td>
                                    <td scope="col"><center>genere</center></td>
                                    <td scope="col"><center>Telefon</center></td>
                                    </tr>

                                </thead>
                                <tbody>

                                    <tr>
                                    <td><center>{{ $candi->id_ofert }}</center></td>
                                        <td><center>{{ $candi->user }}</center></td>
                                        <td><center>{{ $candi->email }}</center></td>
                                        <td><center>{{ $candi->genere }}</center></td>
                                        <td><center>{{ $candi->telefon }}</center></td>
                                    </tr>

                                </tbody>
                            </table>
                        
                            
                        </div>
                    </div>

                
                    
                </div>

            </div>
        </div>
    </div>
    @include('estil/sh')    
@endsection
