@extends('levels.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Detail Pinjam</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('levels.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Detail Pinjam:</strong>
                {{ $level->id_level }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Level:</strong>
                {{ $level->nama_level }}
            </div>
        </div>
    </div>
@endsection