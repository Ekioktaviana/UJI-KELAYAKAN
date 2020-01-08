@extends('ruangs.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>UJI KELAYAKAN</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ruangs.create') }}"> Create New Product</a>
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
            <th>ID ruang</th>
            <th>Nama Ruang</th>
            <th>Kode Ruang</th>
            <th>Keterangan</th>            
            <th width="280px">Action</th>
        </tr>
        @foreach ($ruangs as $ruang)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $ruang->id_ruang }}</td>
            <td>{{ $ruang->nama_ruang }}</td>
            <td>{{ $ruang->kode_ruang }}</td>
            <td>{{ $ruang->keterangan }}</td>            
            <td>
                <form action="{{ route('ruangs.destroy',$ruang->id_ruang) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('ruangs.show',$ruang->id_ruang) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('ruangs.edit',$ruang->id_ruang) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $ruangs->links() !!}
      
@endsection