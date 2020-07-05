@extends('layouts.master')

@section('content')
<div class="ml3 mt=3">
<h1> Daftar Artikel <h1>
<a href="/artikel/create" class="btn btn-primary ml-3 mb-3">
Buat Artikel Baru
</a>

<table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>No.</th>
                      <th>Judul</th>
                      <th>Isi Artikel</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($artikels as $artikel)
                    <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$artikel->judul}}</td>
                    <td>{{$artikel->isi}}</td>
                    <td>
                    <a href="{{url('/artikel/'.$artikel->id)}}">
                    <button title="Detail Artikel" class="btn btn-primary"><i class="fas fa-eye"></i></button>
                    </a>
                    <a href="{{url('/artikel/'.$artikel->id.'/edit')}}">
                    <button title="Edit Artikel" class="btn btn-info"><i class="fas fa-edit"></i></button>
                    </a>
                    <form method="POST" action="{{url('/artikel/'.$artikel->id)}}">
                    @csrf
                    {{method_field('delete')}}
                    <button title="Hapus Artikel" type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                   
                    </form>
                    </td>
                    </tr>
                  @endforeach

                  
                  </tbody>
                </table>

</div>

@endsection