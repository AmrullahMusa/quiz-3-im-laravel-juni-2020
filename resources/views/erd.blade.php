@extends('layouts.master')

@section('content')

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tampilan ERD</h3>
              </div>
<img class="img-thumbnail ml-6" width="700px"src="{{asset('/sbadmin2/img/tugasquiz.png')}}">
<br>
</div>
<a href="/artikel/create" class="btn btn-info ml-3 mb-3">Buat Artikel</a>

@endsection