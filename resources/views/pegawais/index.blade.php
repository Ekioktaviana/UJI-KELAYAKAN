@extends('pegawais.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>UJI KELAYAKAN</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pegawais.create') }}"> Create New Product</a>
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
            <th>ID Pegawai</th>
            <th>Nama Pegawai</th>
            <th>Nama Pegawai</th>
            <th>Alamat</th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($pegawais as $pegawai)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pegawai->id_pegawai }}</td>
            <td>{{ $pegawai->nama_pegawai }}</td>
            <td>{{ $pegawai->nip }}</td>
            <td>{{ $pegawai->alamat }}</td>
            
            <td>
                <form action="{{ route('pegawais.destroy',$pegawai->id_pegawai) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('pegawais.show',$pegawai->id_pegawai) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('pegawais.edit',$pegawai->id_pegawai) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $pegawais->links() !!}
      
@endsection