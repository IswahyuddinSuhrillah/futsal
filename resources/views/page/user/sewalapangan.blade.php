@extends('layout.user')
@section('content')
<div class="content">
<div class="container mt-5 bg-white p-4">
    <div class="card">
        <div class="card-header">
          <h2>Form Sewa Lapangan</h2>
        </div>
        <div class="card-body">
            <form method="post" action="/sewa/user">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jadwal</label>
                    <select name="jadwal" id="" class="form-control">
                        <option value="">--Pilih Jadwal--</option>
                        @foreach ($jadwal as $item)
                            <option value="{{$item->id}}">{{$item->jadwal}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Lapangan</label>
                    <select name="lapangan" id="" class="form-control">
                        <option value="">--Pilih Lapangan--</option>
                        @foreach ($lapangan as $item)
                            <option value="{{$item->id}}">{{$item->lapangan}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nomor HP</label>
                    <input type="number" name="nohp" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3" hidden>
                    <label for="exampleInputPassword1" class="form-label">Uang Muka</label>
                    <input type="number" name="uangmuka" readonly value=0 class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3" hidden>
                    <label for="exampleInputPassword1" class="form-label">Sisa Bayar</label>
                    <input type="number" name="sisabayar" readonly value=0 class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Total Bayar</label>
                    <input type="number" name="totalbayar" readonly value=150000 class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Sewa</button>
                <a href="/sewa"class="btn btn-secondary">Batal</a>
              </form>
        </div>
      </div>
</div>
</div>
@endsection