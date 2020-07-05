@extends('layouts.master')

@section('content')

<div class="card ml-3 mt-3">

<form  action="{{url('/artikel/'.$id)}}" method="POST"> 
{{method_field('put')}}
@csrf
<input hidden name="id" value="{{$id}}">
<label for="">Judul Artikel</label>
<input class="form-control" type="text" name="judul" value="{{$artikel->judul}}">
<br>
<label for="">Isi Artikel</label>
<textarea class="form-control type="text" class="form-control" value="{{$artikel->isi}}" id="" name="isi" numfmt_parse_currency="isi" cols="30" rows="10"></textarea>
<br>
<label for="slug">Slug</label>
<input type="text" class="form-control" id="slug" name="slug">
<br>
<label for="tag">Tag</label>
<input type="text" class="form-control" id="tag" name="tag">
<br>
<button type="submit" class="btn btn-warning ml-3 mb-3">Update</button>
<a href="/artikel" class="btn btn-info ml-3 mb-3">
Kembali
</a>
</form>

</div>


@endsection