<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <style>
        table.static{
            position: relative;
            border: 1px solid #545454;
        }
    </style>
    <title>Cetak Data Sewa</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Sewa Lapangan Futsal</b></p>
        <p align="center"><b>Di Zean's Sport Center</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Tanggal</td>
                <td>Jadwal</td>
                <td>Lapangan</td>
                <td>No HP</td>
                <td>Uang Muka</td>
                <td>Sisa Bayar</td>
                <td>Total</td>
            </tr>
            @foreach ($cetaksewa as $item)
            <tr>
                <th scope="row">{{$nomor++}}</th>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->tanggal}}</td>
                    <td>{{$item->jadwals->jadwal}}</td>
                    <td>{{$item->lapangans->lapangan}}</td>
                    <td>{{$item->nohp}}</td>
                    <td>{{$item->uangmuka}}</td>
                    <td>{{$item->sisabayar}}</td>
                    <td>{{$item->totalbayar}}</td>
            </tr>
            @endforeach
            
        </table>
    </div>
    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>