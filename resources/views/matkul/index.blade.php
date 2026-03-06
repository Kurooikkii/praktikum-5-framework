<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table border="1"cellpadding="10">
    <tr>
        <th>NPM</th>
        <th>Nama</th>
        <th>Jurusan</th>
    </tr>

    @forelse($matkul as $mhs)
    <tr>
        <td>{{ $mhs->npm }}</td>
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mhs->jurusan }}</td>
    </tr>
    @empty
    <tr>
        <td colspan="3">Belum ada data Matkul</td>
    </tr>
    @endforelse

</table>

</body>
</html>