@extends('backend.layouts.master')
@section('title', 'Obat')
@section('content')
    <main>
        <div class="container my-3">
            @include('backend.partials.alert')
            <div class="row">
                <div class="col-6">
                    <h2 class="my-3">Informasi Data</h2>
                    <table class="table table-responsive">
                        <tbody class="btn">
                            <tr>
                                <th>Gambar</th>
                                <th>:</th>
                                <td><img src="{{ Storage::url($drug->image) }}" alt="gambar" style="width: 100px">
                                </td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <th>:</th>
                                <td>{{ $drug->name }}</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <th>:</th>
                                <td>Rp.{{ $drug->price }}</td>
                            </tr>
                            <tr>
                                <th>Clasification</th>
                                <th>:</th>
                                <td>{{ $drug->clasification->name }}</td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <th>:</th>
                                <td>{{ $drug->description }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-6">
                    <h2 class="my-3">Edit Data</h2>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('drug.update', $drug->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <img src="{{ Storage::url($drug->image) }}" alt="gambar" style="width: 200px"
                                    class="mb-3">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Choose file</label>
                                    <input type="file" class="form-control" name="image" id="image" />
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Masukan Nama Klasifikasi Obat" value="{{ $drug->name }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="number" class="form-control" name="price" id="price"
                                        placeholder="Masukan Harga Satuan" value="{{ $drug->price }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="clasification_id" class="form-label">Clasification</label>
                                    <select class="form-select form-select-sm" name="clasification_id"
                                        id="clasification_id">
                                        <option disabled>Select one</option>
                                        @foreach ($clasifications as $clasification)
                                            <option value="{{ $clasification->id }}"
                                                {{ $clasification->id == $drug->clasification_id ? 'selected' : '' }}>
                                                {{ $clasification->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="5"
                                        placeholder="Masukan Deskripsi Klasifikasi Obat">{{ $drug->description }}</textarea>
                                </div>
                                <button type="submit">Edit</button>
                                <button><a href="{{ route('drug.index') }}">Kembali</a></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
