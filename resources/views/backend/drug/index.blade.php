@extends('backend.layouts.master')
@section('title', 'Obat')
@section('content')
    <main>
        <div class="container my-3">
            <h1 class="text-center my-3">Obat</h1>
            @include('backend.partials.alert')
            <div class="row">
                <div class="col-8">
                    <h2 class="my-3">Daftar Data</h2>
                    <form action="{{ route('drug.index') }}" method="get">
                        <input type="text" name="keyword" placeholder="cari klasifikasi.." value="{{ request('keyword') }}" class="mb-3">
                        <button type="submit">Cari..</button>
                    </form>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($drug as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ Storage::url($item->image) }}" alt="gambar" style="width: 100px">
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ Str::limit($item->description, 30, '...') }}</td>
                                    <td>
                                        <a href="{{ route('drug.edit', $item->id) }}">Edit</a>
                                        <a href="{{ route('drug.destroy', $item->id) }}"
                                            onclick="return confirm('apakah anda yakin ingin menghapus?')">Hapus</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="10">Data tidak ada</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center mt-4">
                        {{ $drug->links('pagination::bootstrap-5') }}
                    </div>
                </div>
                <div class="col-4">
                    <h2 class="my-3">Tambah Data</h2>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('drug.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="image" class="form-label">Choose file</label>
                                    <input type="file" class="form-control" name="image" id="image" />
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Masukan Nama Klasifikasi Obat" />
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="5"
                                        placeholder="Masukan Deskripsi Klasifikasi Obat"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="price"
                                        id="price"
                                        placeholder="Masukan Harga Obat Satuan"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="clasification_id" class="form-label">Clasification</label>
                                    <select
                                        class="form-select form-select-sm"
                                        name="clasification_id"
                                        id="clasification_id"
                                    >
                                        <option value="">-- Pilih Klasifikasi --</option>
                                        @foreach ($clasifications as $clasification)
                                            <option value="{{ $clasification->id }}">{{ $clasification->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
