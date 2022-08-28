@extends('layout.master')
@section('content')
<div class="content">
<div class="container mt-5 bg-white p-4">
    <div class="card">
        <div class="card-header">
          <h2>Form Tambah Lapangan</h2>
        </div>
        <div class="card-body">
            <form method="post" action="/lapangan/store">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Lapangan</label>
                  <input type="text" name="lapangan" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="/lapangan"class="btn btn-secondary">Batal</a>
              </form>
        </div>
      </div>
</div>
</div>
@endsection