@extends('biodata.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Tampilkan Biodata </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('biodata.index') }}"> Kembali</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                {{ $biodata->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $biodata->alamat }}
            </div>
        </div>
    </div>
@endsection