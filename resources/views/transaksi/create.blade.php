@extends('layouts.app')

@section('content')
    <h1>Tambah Transaksi</h1>

    <form action="{{ route('transactions.store') }}" method="POST">
        @csrf
        <div>
            <label for="kode_pemesanan">Kode Pemesanan:</label>
            <input type="text" id="kode_pemesanan" name="kode_pemesanan" required>
        </div>
        <div>
            <label for="tujuan">Tujuan:</label>
            <input type="text" id="tujuan" name="tujuan" required>
        </div>
        <div>
            <label for="penumpang">Penumpang:</label>
            <input type="text" id="penumpang" name="penumpang" required>
        </div>
        <div>
            <label for="tanggal_berangkat">Tanggal Berangkat:</label>
            <input type="date" id="tanggal_berangkat" name="tanggal_berangkat" required>
        </div>
        <button type="submit">Tambah Transaksi</button>
    </form>
@endsection
