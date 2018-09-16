<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Edit Buku Kas</title>
</head>
<body><div class="container">
        <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nominal</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="30000">
                </div>
                <div class="form-group">
                        <label for="exampleInputEmail1">Jenis</label>
                <select class="form-control">
                        <option>Pemasukan</option>
                        <option>Pengeluaran</option>
                      </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Keterangan</label>
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <a href="{{url('buku-kas')}}" class="btn btn-sm btn-info">Submit</a>
              </form>
              </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>