@extends('layouts.master')
@section('content')

<div class="ml-3 mt-3">
    <h2>Data Artikel</h2>
    <a href="/artikel/create" class="btn btn-primary mb-2">Create</a>
      <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Judul Artikel</th>
              <th scope="col">Edit Artikel</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              {{-- {{ dd($artikel)}} --}}
              @foreach ($artikels as $key => $al)
              <tr>
                  <th> {{ $key +1 }} </th>
                  <td> 
                    <a href="/artikel/{{ $al->id }}" >{{ $al->judul }}</a>  
                  </td>
                  <td> 
                    <a href="/artikel/{{ $al->id }}/edit" class="btn btn-sm btn-primary" >Edit</a> 
                  </td>
                  <td>
                    
                    <form action="/artikel/{{$al->id}}" method="POST" style="display: inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                    </form>
                  </td>
                </tr>
              @endforeach
            
          </tbody>
        </table>
        
@push('script')
<script>
  Swal.fire({
      title: 'Berhasil!',
      text: 'Memasangkan script sweet alert',
      icon: 'success',
      confirmButtonText: 'Cool'
  })
</script>
    
@endpush
@endsection