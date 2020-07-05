@extends('layouts.master')
@section('content')

<div class="ml-3 mt-3">
    <form action='/artikel' method="POST">
      @csrf
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Artikel">
        </div>
        <div class="form-group">
          <label for="isi">Isi Artikel</label>
          <br>
          <textarea name="isi" id="isi" cols="112" rows="10" placeholder="Tulis Artikel disini..."></textarea>
        </div>
        <div class="form-group">
            <label for="isi">Slug</label>
            <input type="text" class="form-control" name="slug" id="isi" placeholder="Isi Slug Anda">
          </div>
          <div class="form-group">
            <label for="isi">Tag</label>
            <input type="text" class="form-control" name="tag" id="isi" placeholder="Tulis Tag">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
       
      </form>
</div>

    
@endsection