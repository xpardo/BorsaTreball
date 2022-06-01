@extends('layouts.app')
    @section('content')
        @include('borsa.header')
            @include('borsa.menuEmpre') 




            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">


                            <form action="{{route('perfilEmpre.index')}}" method="POST" enctype = "multipart/form-data">
                                @csrf
                                <input type="file" name="imagen">
                                <button type="submit">Guardar</buuton>
                            </from>
                        </div>
                    </div>
                </div>
            </div>


            @include('estil/perfil')


@endsection