
  
@extends('layouts.app')
  
  @section('content')
      <div class="row">
          <div class="col-lg-12 margin-tb">
              <div class="pull-right">
                  <a class="btn btn-primary" href="{{ route('borsa.MyOferta') }}">Back</a>
              </div>
          </div>
      </div>
   



      <div class="card">
                <div class="card-header">{{ __('Oferta') . " " . $oferta->id }}</div>
                <div class="card-body">
                    <table class="table">
                            
                            <tr>
                                <td><strong>cicle</strong></td>
                                <td>{{ $oferta->cicle }}</td>
                            </tr>
                            <tr>
                                <td><strong>tipus</strong></td>
                                <td> {{ $oferta->tipus }}</td>
                            </tr>
                            <tr>
                                <td><strong>nom</strong></td>
                                <td> {{ $oferta->name }}</td>
                            </tr>
                            <tr>
                                <td><strong>salari:</strong></td>
                                <td>{{ $oferta->sala }}</td>
                            </tr>
                            <tr>
                                <td><strong>h:</strong></td>
                                <td>{{ $oferta->h }}</td>
                            </tr>
                            <tr>
                                <td><strong>descripcio:</strong></td>
                                <td>{{ $oferta->desc }}</td>
                            </tr>
                            <tr>
                                <td><strong>privat:</strong></td>
                                <td>{{ $oferta->privat }}</td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>

<!--           <td><a class="btn btn-warning"  href="{{ route("oferta.edit", $file) }}">edit </a></td>
          <td><a class="btn btn-danger" href="{{ route("oferta.destroy", $file->id) }}">delete </a></td> -->
  @endsection