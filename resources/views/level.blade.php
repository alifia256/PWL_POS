<!DOCTYPE html>
<html>
    <head>
        <head>
            <title>Data Level Pengguna</title>
        </head>
    </head>
    <body>
        <h1>Data Level Pengguna</h1>
        <table border="1" cellpading="2" cellSpacing="0">
            <tr>
                <th>ID</th>
                <th>Kode Level</th>
                <th>Nama Level</th>
            </tr>
            @foreach ($data as $d)
            <tr>
                <th>{{ $d->level_id}}</th>
                <th>{{ $d->level_kode}}</th>
                <th>{{ $d->level_nama}}</th>
            </tr>
            @endforeach
        </table>
    </body>
</html>
