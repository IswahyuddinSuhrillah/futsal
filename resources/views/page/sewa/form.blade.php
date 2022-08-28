@extends('layout.master')
@section('content')
<div class="content">
<div class="container mt-5 bg-white p-4">
    <div class="card">
        <div class="card-header">
          <h2>Form Tambah Sewa</h2>
        </div>
        <div class="card-body">
            <form method="post" action="/sewa/store">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1">
                </div>
                {{-- <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jadwal</label>
                    <select id="myselect" class="form-control" onchange="gantiharga(event)">
                        <option selected disabled value="-">--Pilih Jadwal--</option>
                        @foreach ($jadwal as $item)
                            <option value="{{$item->harga}}">{{$item->jadwal}}</option>
                        @endforeach
                    </select>
                </div> --}}
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
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Uang Muka</label>
                    <input type="number" name="uangmuka" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Sisa Bayar</label>
                    <input type="number" name="sisabayar" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Total Bayar</label>
                    <input type="number" name="totalbayar" class="form-control" id="exampleInputPassword1">
                </div>
                {{-- <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Total Bayar</label>
                    <input readonly type="number" name="totalbayar" class="form-control" id="harga">
                </div>
                <div hidden class="mb-3">
                    <input type="number" name="harga" class="form-control" id="harga">
                </div> --}}
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Bukti</label>
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
@section('Script')
    {{-- <script>
        console.log($('#myselect').val());
        $('#myselect').change(function){
            document.getElementById('harga').velue = $(this).find(':selected').var();
            document.getElementById('').velue = $(this).find(':selected').text();
        }
    </script>
@endsection --}}