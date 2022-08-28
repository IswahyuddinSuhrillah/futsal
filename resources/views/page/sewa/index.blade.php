@extends('layout.master')
@section('content')
<div class="content">
<div class="container mt-5 bg-white p-4">
    <div class="card">
        <div class="card-header">
          <h2 class="float-start">Data Sewa</h2>
          <a href="/sewa/form" class="float-end btn btn-primary">Tambah Data</a>
          {{-- <a href="/cetaksewa" target="_blank" class="float-end btn btn-secondary">Cetak Data</a> --}}
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
                {{-- <th scope="col">Bukti</th> --}}
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($sewa as $item)
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
                    {{-- <td>{{$item->foto}}</td> --}}
                    <td>
                        <a href="/sewa/edit/{{$item->id}}" class="btn btn-warning btn-sm">Edit</a>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">
                          Hapus
                        </button>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$item->id}}">
                          Bukti
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Bukti Bayar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <img src="berkas/{{$item->foto}}" height="250" alt="">
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Yakin data sewa <b>{{$item->nama}}</b> ingin dihapus?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <form method="post" action="/sewa/{{$item->id}}">
                                  @csrf
                                  @method('DELETE')
                                <button type="submit" class="btn btn-primary">Hapus</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </td>
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