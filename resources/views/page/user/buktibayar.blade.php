@extends('layout.user')
@section('content')
    <div class="content">
        <div class="container mt-5 bg-white p-4">
            <div class="card">
                <div class="card-header">
                <h2>Form Upload Sewa</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="/upload/buktibayar/{{$sewa->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">No Rek Perusahaan</label>
                            <select>
                                <option value="">AN: Zean's Sport Center <br>No Rek: 7777777777777</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Upload Bukti</label>
                            <input type="file" name="foto" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Sewa</button>
                        <a href="/sewa"class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection