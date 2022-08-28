@extends('layout.master')
@section('content')
<div class="content">
<div class="container mt-5 bg-white p-4">
    <div class="card">
        <div class="card-header">
          <h2>Form Edit Sewa</h2>
        </div>
        <div class="card-body">
            <form method="post" action="/sewa/{{$sewa->id}}">
                @csrf
                @method('put')
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nama</label>
                  <input type="text" value="{{$sewa->nama}}" name="nama" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                    <input type="date" value="{{$sewa->tanggal}}" name="tanggal" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jadwal</label>
                    <select name="jadwal" id="" class="form-control">
                      <option value="">--Pilih Jadwal--</option>
                      @foreach ($jadwal as $item)
                          <option value="{{$item->id}}" {{$sewa->jadwal_id==$item->id ? 'selected' : ''}}>{{$item->jadwal}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Lapangan</label>
                    <select name="lapangan" id="" class="form-control">
                      <option value="">--Pilih Lapangan--</option>
                      @foreach ($lapangan as $item)
                          <option value="{{$item->id}}" {{$sewa->lapangan_id==$item->id ? 'selected' : ''}}>{{$item->lapangan}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nomor HP</label>
                    <input type="number" value="{{$sewa->nohp}}" name="nohp" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Uang Muka</label>
                    <input type="number" value="{{$sewa->uangmuka}}" name="uangmuka" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Sisa Bayar</label>
                    <input type="number" value="{{$sewa->sisabayar}}" name="sisabayar" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Total Bayar</label>
                    <input type="number" value="{{$sewa->totalbayar}}" name="totalbayar" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Foto</label>
                  <input type="file" name="foto" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="/sewa"class="btn btn-secondary">Batal</a>
              </form>
        </div>
      </div>
</div>
</div>
@endsection