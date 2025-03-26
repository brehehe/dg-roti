@extends('layouts.admin.app')


@section('content')
    <div class="container-fluid mb-3">
        <form method="post" action="{{ route('cake.update', $cake->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Roti <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Roti"
                    required autocomplete="off" value="{{ $cake->name }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga Roti <span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="price" id="price" placeholder="Masukan Harga Roti"
                    value="{{ intval($cake->price) }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar Roti</label>
                <input type="file" class="form-control" name="image" id="image" accept=".jpg, .jpeg, .png">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi <span class="text-danger">*</span></label>
                <textarea name="description" class="form-control" id="description" rows="3" placeholder="Masukan Deskripsi Roti">{{ $cake->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
