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
                
            {{-- {{dump($data)}} --}}
            <h3>Buku Kas Oktober</h3>
                {{--  {{dd($data->first()->toArray())}}  --}}
                <a href="{{url('input-buku-kas')}}" class="btn btn-sm btn-success">Input</a>
                <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                        @foreach($data->first()->toArray() as $key => $item)
                        <th>{{$key}}</th>
                        @endforeach
                        <th>Aksi</th>
                </tr>
                {{--  {{dump($data)}}  --}}
                @foreach($data as $item)
                <tr class="info">
                        @foreach($item->toArray() as $value)
                        <td>{{$value}}</td>
                    @endforeach
                    <td>
                            <a href="{{url('edit-buku-kas')}}" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                    </td>
                </tr>
                @endforeach
                <th>Total</th>
                <th>Rp. {{$jumlah}}</th>
                <th>{{$totallist}} Transaksi</th>
                <th>{{$totallist}} Keterangan</th>
                <th colspan="3"> Periode 12 Oktober 2018 s/d 17 Oktober 2018</th>
            </table>
            <a href="{{url('beranda-buku-kas')}}" class="btn btn-sm btn-info">Beranda</a>
                </div>
        </div>
    </div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>