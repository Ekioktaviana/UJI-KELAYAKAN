@extends('pegawais.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Detail Pinjam</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pegawais.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('pegawais.update',$pegawai->id_pegawai) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Pegawai:</strong>
                    <input type="text" name="id_pegawai" value="{{ $pegawai->id_pegawai }}" class="form-control" placeholder="ID Pegawai">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Pegawai:</strong>
                    <input type="text "class="form-control" value="{{ $pegawai->nama_pegawai }}" name="nama_pegawai" placeholder="Nama Pegawai">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIP:</strong>
                    <input type="text "class="form-control" value="{{ $pegawai->nip }}" name="nip" placeholder="NIP">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <input type="text "class="form-control" value="{{ $pegawai->alamat }}" name="alamat" placeholder="NIP">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection