@extends('layouts.master')

@section('content')

<div class="ml-3 mt-3">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Artikel Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/artikel" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul Artikel</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                  </div>
                    <label for="isi">Isi Artikel</label>
                    <textarea class="form-control" type="text" class="form-control" id="" name="isi" numfmt_parse_currency="isi"  placeholder="Isi Artikelmu Di sini" cols="30" rows="10"></textarea>
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug">
                    <label for="tag">Tag</label>
                    <input type="text" class="form-control" id="tag" name="tag">
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Buat Artikel Baru</button>
                  
                </div>
                
              </form>
            </div>
</div>

@endsection