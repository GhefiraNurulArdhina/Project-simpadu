@extends('layouts.app')

@section('title', 'New Barang')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New Barang</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Barang</a></div>
                    <div class="breadcrumb-item">New Barang</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('barang.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>New Barang</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Kode Barang</label>
                                <input type="kode_barang"
                                    class="form-control @error('kode_barang')
                                    is-invalid
                                @enderror"
                                    name="kode_barang">
                                @error('kode_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="nama_barang"
                                    class="form-control @error('nama_barang')
                                    is-invalid
                                @enderror"
                                    name="nama_barang">
                                @error('nama_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Satuan</label>
                                <input type="satuan"
                                    class="form-control @error('satuan')
                                    is-invalid
                                @enderror"
                                    name="satuan">
                                @error('satuan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="quantity"
                                    class="form-control @error('quantity')
                                    is-invalid
                                @enderror"
                                    name="quantity">
                                @error('quantity')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class=" d-flex card-footer">
                            <a href="{{ route('barang.index') }}" class="btn btn-primary mr-auto">Kembali Ke Menu Utama</a>
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
