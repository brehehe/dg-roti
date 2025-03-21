@extends('layouts.admin.app')


@section('content')
    <div class="container-fluid mt-3">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col-6">
                <h3>Roti</h3>
            </div>
            <div class="col-6 text-end">
                <a href="/cake/create" class="btn btn-primary">Tambah</a>
            </div>
        </div>
        <hr class="my-3">
        {{-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav> --}}
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Gambar</th>
                    <th scope="col" class="text-center" width="10px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cakes as $cake)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $cake->name }}</th>
                        <th>Rp {{ number_format($cake->price, 0, ',', '.') }}</th>
                        <th>{{ $cake->description }}</th>
                        <th><img src="{{ asset('storage/' . $cake->image) }}" class="img-fluid image"></th>
                        <th>
                            <div class="d-flex gap-2">
                                <div>
                                    <a href="/cake/{{ $cake->id }}/edit" class="btn btn-warning">Edit</a>
                                </div>
                                <div>
                                    <form action="{{ route('cake.destroy', $cake->id) }}" method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus item ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
