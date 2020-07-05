@extends('layouts.master')
<!-- @section('content')

<h1>apakah berhasil<h1>

@endsection -->

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush