<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Article Pertama</title>
</head>
<body>
    <div class="container">
        <div class="row">
                {{--  {{dd($data->first()->toArray())}}  --}}
                <h3>Artikel</h3>
            <table class="table table-bordered">
                <tr>
                    @foreach($data->first()->toArray() as $key => $item)
                    <th>{{$key}}</th>
                    @endforeach
                    <th>Aksi</th>
                </tr>
                @php($idx = 0)
                @foreach($data as $item)
                {{--  {{dump($data)}}  --}}
                <tr>
                    @foreach($item->toArray() as $value)
                    @php($idx++)
                    <td>{{$value}}</td>
                    @if($idx == count($item->toArray()))
                    <td>
                            <a href="{{url('article/'.$item->id.'/edit')}}" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                            <a href="{{url('article/'.$item->id.'/hapus')}}" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                    </td>
                    @endif
                    @endforeach
                </tr>
                @php($idx = 0)
                @endforeach
            </table>
        </div>
    </div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>