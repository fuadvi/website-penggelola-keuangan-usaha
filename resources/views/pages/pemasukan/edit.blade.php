@extends('layouts.admin')

@section('content')
        <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit {{ $item->keterangan }}</h1>
    </div>


    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif

        <div class="card">
            <div class="card-body">
                <form action="{{route('pemasukan.update', $item->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nominal">Nominal</label>
                        <input type="number" name="nominal" id="nominal" placeholder="Nominal" value="{{ $item->nominal }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" id="keterangan" placeholder="Keterangan" value="{{ $item->keterangan }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="kategori">kategori</label>
                        <input type="text" name="kategori" id="kategori" placeholder="kategori" value="{{ $item->kategori }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="tanggal_pemasukan">Tanggal Pemasukan</label>
                        <input type="date" name="tanggal_pemasukan" id="tanggal_pemasukan" value="{{ $item->tanggal_pemasukan }}" class="form-control">
                    </div>


                    <button type="submit" class="btn btn-primary btn-block">Ubah</button>

                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection