@extends('detail_pinjams.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Detail Pinjam</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('detail_pinjams.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Detail Pinjam:</strong>
                {{ $detail_pinjam->id_detail_pinjam }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Inventaris:</strong>
                {{ $detail_pinjam->id_inventaris }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah:</strong>
                {{ $detail_pinjam->jumlah }}
            </div>
        </div>
    </div>
@endsection