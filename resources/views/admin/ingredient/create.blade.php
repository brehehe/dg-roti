@extends('layouts.admin.app')


@section('content')
    <div class="container-fluid mb-3">
        <form method="post" action="{{ route('ingredient.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Bahan <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Bahan" required autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="cake_id" class="form-label">Nama Kue <span class="text-danger">*</span></label>
                <select class="form-select" name="cake_id" id="cake_id">
                    <option value="">-- Pilih Bahan --</option>
                    @foreach ($cakes as $cake)
                        <option value="{{ $cake->id }}">{{ $cake->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
