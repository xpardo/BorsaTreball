
  
@extends('layouts.app')
  
  @section('content')
      <div class="row">
          <div class="col-lg-12 margin-tb">
              <div class="pull-right">
                  <a class="btn btn-primary" href="{{ route('borsa.MyOferta') }}">Back</a>
              </div>
          </div>
      </div>
     
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
              <strong>cicle:</strong>
                  {{ $oferta->cicle }}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>tipus:</strong>
                  {{ $oferta->tipus }}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>salari:</strong>
                  {{ $oferta->sala }}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>horari:</strong>
                  {{ $oferta->h }}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>privat:</strong>
                  {{ $oferta->flexT }}
              </div>
          </div>
  
          <td><a class="btn btn-warning"  href="{{ route("oferta.edit", $file) }}">edit </a></td>
          <td><a class="btn btn-danger" href="{{ route("oferta.destroy", $file->id) }}">delete </a></td>
          
      </div>
  @endsection