@extends('levels.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>UJI KELAYAKAN</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('levels.create') }}"> Create New Product</a>
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
            <th>ID Level</th>
            <th>Nama Level </th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($levels as $level)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $level->id_level }}</td>
            <td>{{ $level->nama_level }}</td>
            
            <td>
                <form action="{{ route('levels.destroy',$level->id_level) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('levels.show',$level->id_level) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('levels.edit',$level->id_level) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $levels->links() !!}
      
@endsection