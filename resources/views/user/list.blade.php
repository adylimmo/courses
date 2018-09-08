<html>
    <head>
<title>
    Halaman View
</title>
<style>
    th, td {
        border: 1px solid black;
    }
</style>
    </head>
    <body>
<div><h1>N A M A</h1></div>
<table>
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
    </tr>
    @foreach($data as $item)
    <tr>
    @foreach($item as $value)
    <td>{{$value}}</td>
    @endforeach
    </tr>
    @endforeach
</table>
    </body>
</html>