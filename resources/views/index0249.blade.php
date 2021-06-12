<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<h1 class="my-2" style="text-align: center;">Data Buku</h1>
<table class="table my-2">
    <caption><button type="button" href="/download" class="btn btn-outline-success mx-3">Download</button> </caption>
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Nama Buku</th>
            <th>Jenis Buku</th>
            <th>Tahun Terbit</th>
        </tr>
    </thead>
    <tbody>
      @foreach($data as $dataBuku)
        <tr>
            <th>{{ $dataBuku -> id}}</th>
            <th>{{ $dataBuku -> nama}}</th>
            <th>{{ $dataBuku -> jenis}}</th>
            <th>{{ $dataBuku -> tahun}}</th>
        </tr>
      @endforeach
    </tbody>

</table>
</body>
</html>