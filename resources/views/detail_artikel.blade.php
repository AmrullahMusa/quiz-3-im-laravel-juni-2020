@extends('layouts.master')

@section('content')
<a href="{{url('/artikel')}}" class="ml-3">
<button class="btn btn-info mt-3"> Kembali </button>
</a>
<div class="card ml-3 mt-3">
<div class="ml-3 mb-3 mt-3">
<h1>Detail Artikel :</h1> 
<br>
<p>Judul Artikel : {{$artikel->judul}}</p> 
<p>Isi Artikel : {{$artikel->isi}}</p>  
<p>Slug : {{$artikel->slug}}</p>
<br>
<div>
<button class="btn btn-success mt-3"> info </button>
<button class="btn btn-success mt-3"> web </button>
<button class="btn btn-success mt-3">phplaravel </button>
</div>
</div>
</div>

@endsection