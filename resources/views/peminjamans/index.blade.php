@extends('peminjamans.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>UJI KELAYAKAN</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('peminjamans.create') }}"> Create New Product</a>
                <a class="btn btn-success" href="/dashboard" class="btn btn-danger btn-sm">Back to home</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>ID peminjaman</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status Peminjaman</th>
            <th>ID Pegawai</th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($peminjamans as $peminjaman)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $peminjaman->id_peminjaman }}</td>
            <td>{{ $peminjaman->tanggal_pinjam }}</td>
            <td>{{ $peminjaman->tanggal_kembali }}</td>
            <td>{{ $peminjaman->status_peminjaman }}</td>
            <td>{{ $peminjaman->id_pegawai }}</td>
            
            <td>
                <form action="{{ route('peminjamans.destroy',$peminjaman->id_peminjaman) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('peminjamans.show',$peminjaman->id_peminjaman) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('peminjamans.edit',$peminjaman->id_peminjaman) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $peminjamans->links() !!}
      
@endsection