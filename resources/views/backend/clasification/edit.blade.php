@extends('backend.layouts.master')
@section('title', 'Klasifikasi')
@section('content')
    <main>
        <div class="container my-3">
            @include('backend.partials.alert')
            <div class="row">
                <div class="col-6">
                    <h2 class="my-3">Informasi Data</h2>
                    <table class="table table-responsive">
                        <tbody>
                            <tr>
                                <th>Gambar</th>
                                <th>:</th>
                                <td><img src="{{ Storage::url($clasification->image) }}" alt="gambar" style="width: 100px">
                                </td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <th>:</th>
                                <td>{{ $clasification->name }}</td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <th>:</th>
                                <td>{{ $clasification->description }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-6">
                    <h2 class="my-3">Edit Data</h2>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('clasification.update', $clasification->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <img src="{{ Storage::url($clasification->image) }}" alt="gambar" style="width: 200px"
                                    class="mb-3">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Choose file</label>
                                    <input type="file" class="form-control" name="image" id="image" />
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Masukan Nama Klasifikasi Obat" value="{{ $clasification->name }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="5"
                                        placeholder="Masukan Deskripsi Klasifikasi Obat">{{ $clasification->description }}</textarea>
                                </div>
                                <button type="submit">Edit</button>
                                <button><a href="{{ route('clasification.index') }}" >Kembali</a></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
