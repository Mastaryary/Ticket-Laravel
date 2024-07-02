@extends('layouts.app')

@section('content')
    <h1>Daftar Transaksi</h1>

    <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3">Tambah Transaksi</a>

    @if ($transactions->isEmpty())
        <p>Tidak ada transaksi.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Pemesanan</th>
                    <th>Tujuan</th>
                    <th>Penumpang</th>
                    <th>Tanggal Berangkat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $index => $transaction)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $transaction->kode_pemesanan }}</td>
                        <td>{{ $transaction->tujuan }}</td>
                        <td>{{ $transaction->penumpang }}</td>
                        <td>{{ $transaction->tanggal_berangkat->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('transactions.edit', $transaction->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
