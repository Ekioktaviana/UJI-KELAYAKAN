@extends('peminjamans.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Detail Pinjam</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('peminjamans.index') }}"> Back</a>
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

    <form action="{{ route('peminjamans.update',$peminjaman->id_peminjaman) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID peminjaman:</strong>
                <input type="text" name="id_peminjaman" class="form-control" placeholder="ID Peminjaman" value="{{ $peminjaman->id_peminjaman }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Pinjam:</strong>
                <input type="date" value="{{ $peminjaman->tanggal_pinjam }}" name="tanggal_pinjam" class="form-control" placeholder="Tanggal Peminjaman">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Kembali:</strong>
                <input type="date" value="{{ $peminjaman->tanggal_kembali }}" name="tanggal_kembali" class="form-control" placeholder="Tanggal Kembali">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status Peminjaman:</strong>
                <input type="text" value="{{ $peminjaman->status_peminjaman }}" name="status_peminjaman" class="form-control" placeholder="Status Peminjaman">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Pegawai:</strong>
                <input type="text" value="{{ $peminjaman->id_pegawai }}" name="id_pegawai" class="form-control" placeholder="ID Pegawai">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection