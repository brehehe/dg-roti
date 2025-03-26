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
                <h3>Bahan</h3>
            </div>
            <div class="col-6 text-end">
                <a href="/ingredient/create" class="btn btn-primary">Tambah</a>
            </div>
        </div>
        <hr class="my-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px" class="text-center">#</th>
                    <th>Name</th>
                    <th>Roti</th>
                    <th class="text-center" width="10px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ingredients as $ingredient)
                    <tr>
                        <th class="text-center">{{ $loop->iteration }}</th>
                        <th>{{ $ingredient->name }}</th>
                        <th>{{ $ingredient?->cake?->name ?? '-' }}</th>
                        <th>
                            <div class="d-flex gap-2">
                                <div>
                                    <a href="{{ route('ingredient.edit', $ingredient->id) }}"
                                        class="btn btn-warning">Edit</a>
                                </div>
                                <div>
                                    <form action="{{ route('ingredient.destroy', $ingredient->id) }}" method="POST"
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
