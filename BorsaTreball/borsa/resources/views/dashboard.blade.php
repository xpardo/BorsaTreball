<x-app-layout>
<x-slot name="header">
</x-slot>
@include('header')
    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Benvingut a la Pagina
                </div>
            </div>
        </div>
    </div> -->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <div class="container m-5">
                       <div class="row sling-item-end">
                           <div class="col-sm">
                                <div class=contenedor>
                                    <h3><strong>Empresa</strong><h3>
                                    <a href="{{url('registreEmpre')}}"><u>Registrarse</u></a>
                                    <img src="{{ asset('img/empresas-img.jpg') }}" alt="mi foto">
                                </div>    
                            </div> 
                        </div>
                    </div>
                    <div class="container m-5">
                       <div class="row sling-item-end">
                           <div class="col-sm">
                                <div class=contenedor>
                                    <h3><strong>Alumne</strong><h3>
                                    <a href="{{url('registreAlumne')}}"><u>Registrarse</u></a>
                                    <img src="{{ asset('img/alumne.jpg') }}" alt="mi foto">
                                </div>    
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
    </x-app-layout>



<!------------------------------------------------------------------------------------------------>
<style>
    .contenedor{
        background: rgba(19, 35, 47, 0.9);
        padding: 50px;
        max-width:400px;
        margin:10px auto;
        border-radius: 10px;
        box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
        color:#fff;
        text-align: center;
    }
</style>

