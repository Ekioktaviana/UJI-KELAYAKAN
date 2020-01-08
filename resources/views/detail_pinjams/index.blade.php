@extends('detail_pinjams.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>UJI KELAYAKAN</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('detail_pinjams.create') }}"> Create New Product</a>
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
            <th>ID Detail Pinjam</th>
            <th>ID Inventaris</th>
            <th>Jumlah</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($detail_pinjams as $detail_pinjam)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $detail_pinjam->id_detail_pinjam }}</td>
            <td>{{ $detail_pinjam->id_inventaris }}</td>
            <td>{{ $detail_pinjam->jumlah }}</td>
            <td>
                <form action="{{ route('detail_pinjams.destroy',$detail_pinjam->id_detail_pinjam) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('detail_pinjams.show',$detail_pinjam->id_detail_pinjam) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('detail_pinjams.edit',$detail_pinjam->id_detail_pinjam) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $detail_pinjams->links() !!}
      
@endsection