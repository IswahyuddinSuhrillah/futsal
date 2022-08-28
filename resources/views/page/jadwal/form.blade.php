@extends('layout.master')
@section('content')
<div class="content">
<div class="container mt-5 bg-white p-4">
    <div class="card">
        <div class="card-header">
          <h2>Form Tambah Tarif</h2>
        </div>
        <div class="card-body">
            <form method="post" action="/jadwal/store">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Jadwal</label>
                  <input type="time" name="jadwal" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                    <input type="text" name="harga" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="/jadwal"class="btn btn-secondary">Batal</a>
              </form>
        </div>
      </div>
</div>
</div>
@endsection