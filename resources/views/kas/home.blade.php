<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Buku Kas Oktober</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h3>Buku Kas Oktober</h3>
                {{--  {{dd($data->first()->toArray())}}  --}}
                <a href="{{url('input-buku-kas')}}" class="btn btn-sm btn-success">Input</a>
                <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nominal</th>
                    <th>Jenis</th>
                    <th>Keterangan</th>
                    <th>Hari / Tanggal</th>
                    <th>Aksi</th>
                </tr>
                {{--  {{dump($data)}}  --}}
                <tr class="info">
                    <td>1</td>
                    <td>Rp. 200.000</td>
                    <td>Pemasukan</td>
                    <td>Gaji Kantor</td>
                    <td>Senin, 12 Oktober 2018</td>
                    <td>
                            <a href="{{url('edit-buku-kas')}}" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                    </td>
                </tr>
                <tr class="warning">
                    <td>2</td>
                    <td>Rp. 50.000</td>
                    <td>Pengeluaran</td>
                    <td>Jajan mie ayam</td>
                    <td>Rabu, 17 Oktober 2018</td>
                    <td>
                            <a href="{{url('edit-buku-kas')}}" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                    </td>
                </tr>
                <th>Total</th>
                <th>Rp. 150.000</th>
                <th>2 Transaksi</th>
                <th>2 Keterangan</th>
                <th colspan="2"> Periode 12 Oktober 2018 s/d 17 Oktober 2018</th>
            </table>
            <a href="{{url('beranda-buku-kas')}}" class="btn btn-sm btn-info">Beranda</a>
                </div>
        </div>
    </div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>