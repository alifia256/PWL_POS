<!DOCTYPE html>
<html>
    <head>
        <title>Data User</title>
        <style>
            table {
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h2>Data User</h2>
        <table>
            <tr>
                <th>Jumlah Pengguna</th>
            </tr>
            <tr>
                <td>{{$data}}</td>
            </tr>
        </table>
    </body>
</html>
