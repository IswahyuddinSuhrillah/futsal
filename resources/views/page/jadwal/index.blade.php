@extends('layout.master')
@section('content')
<div class="content">
<div class="container mt-5 bg-white p-4">
    <div class="card">
        <div class="card-header">
          <h2 class="float-start">Data Tarif</h2>
          <a href="/jadwal/form" class="float-end btn btn-primary">Tambah Data</a>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Jadwal</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($jadwal as $item)
                <tr>
                    <th scope="row">{{$nomor++}}</th>
                    <td>{{$item->jadwal}}</td>
                    <td>{{$item->harga}}</td>
                    <td>
                        <a href="/jadwal/edit/{{$item->id}}" class="btn btn-warning btn-sm">Edit</a>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">
                          Hapus
                        </button>

                        <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Yakin data jadwal <b>{{$item->jadwal}}</b> ingin dihapus?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <form method="post" action="/jadwal/{{$item->id}}">
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
                        <td colspan="4">Tidak Ada Data</td>
                    </tr>
                @endforelse
             
            </tbody>
          </table>
      </div>
</div>
</div>
@endsection