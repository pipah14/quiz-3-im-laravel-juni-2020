@extends('layouts.master')
@section('content')

<div class="ml-3 mt-3">
    <form action='/artikel/{{ $artikel->id }}' method="POST">
      @csrf
      @method('PUT')
        <div class="form-group">
            {{-- {{ dd($artikel )}} --}}
          <label for="judul">Judul</label>
          <input type="text" class="form-control" name="judul" id="judul" value="{{ $artikel->judul }}">
        </div>
        <div class="form-group">
          <label for="isi">Isi Artikel</label>
          <br>
        <textarea name="isi" id="isi" cols="112" rows="10" >{{ $artikel->isi }}</textarea>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" name="slug" id="slug" value="{{ $artikel->slug }}">
          </div>
          <div class="form-group">
            <label for="tag">Tag</label>
            <input type="text" class="form-control" name="tag" id="tag" value="{{ $artikel->tag }}">
          </div>
        <button type="submit" class="btn btn-primary">Upload</button>
       
      </form>
</div>
    
@endsection