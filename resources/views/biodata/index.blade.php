@extends('biodata.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Belajar CRUD di Laravel 7</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('biodata.create') }}"> Input Data</a>
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
            <th>Nama</th>
            <th>Alamat</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($biodata as $bio)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $bio->nama }}</td>
            <td>{{ $bio->alamat }}</td>
            <td>
                <form action="{{ route('biodata.destroy',$bio->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('biodata.show',$bio->id) }}">Tampil</a>
    
                    <a class="btn btn-primary" href="{{ route('biodata.edit',$bio->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $biodata->links() !!}
      
@endsection