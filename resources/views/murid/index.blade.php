<!DOCTYPE html>
<html>
<head>
    <title>Data Murid</title>
</head>
<body>
    <h1>Data Murid XII RPL C</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIS</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($murids as $murid)
            <tr>
                <td>{{ $murid->nama }}</td>
                <td>{{ $murid->nis }}</td>
                <td>{{ $murid->alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
