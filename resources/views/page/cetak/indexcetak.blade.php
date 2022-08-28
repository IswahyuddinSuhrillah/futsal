@extends('layout.master')
@section('content')
<div class="content">
<div class="container mt-5 bg-white p-4">
    <div class="card">
        <div class="card-header">
          <h2 class="float-start">Data Sewa</h2>
          {{-- <a href="/sewa/form" class="float-end btn btn-primary">Tambah Data</a> --}}
          <a href="/cetaksewa" target="_blank" class="float-end btn btn-secondary">Cetak Data</a>
          <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label">Search</label>
            </div>
            <div class="col-auto">
              <form action="/sewa" method="GET">
              <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jadwal</th>
                <th scope="col">Lapangan</th>
                <th scope="col">Nomor HP</th>
                <th scope="col">Uang Muka</th>
                <th scope="col">Sisa Bayar</th>
                <th scope="col">Total Bayar</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($indexcetak as $item)
                <tr>
                    <th scope="row">{{$nomor++}}</th>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->tanggal}}</td>
                    <td>{{$item->jadwals->jadwal}}</td>
                    <td>{{$item->lapangans->lapangan}}</td>
                    <td>{{$item->nohp}}</td>
                    <td>Rp.{{$item->uangmuka}}</td>
                    <td>Rp.{{$item->sisabayar}}</td>
                    <td>Rp.{{$item->totalbayar}}</td>
                    {{-- <td>
                        <a href="/sewa/edit/{{$item->id}}" class="btn btn-warning btn-sm">Detail</a>
                    </td> --}}
                  </tr>
                @empty
                    <tr class="table-primary">
                        <td colspan="10">Tidak Ada Data</td>
                    </tr>
                @endforelse
             
            </tbody>
          </table>
      </div>
</div>
</div>
@endsection