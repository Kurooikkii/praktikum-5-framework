<!DOCTYPE html>
<html>
<head>
    <title>Data Mata Kuliah</title>
</head>
<body>
    <h2>Daftar Mata Kuliah</h2>
    <a href="{{ route('matkul.create') }}">Tambah Matkul</a>
    
    @if ($message = Session::get('success'))
        <p><strong>{{ $message }}</strong></p>
    @endif

    <table border="1" cellpadding="10">
        <tr>
            <th>Kode</th>
            <th>Nama Matkul</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>
        @foreach ($matkuls as $m)
        <tr>
            <td>{{ $m->kode_matkul }}</td>
            <td>{{ $m->nama_matkul }}</td>
            <td>{{ $m->sks }}</td>
            <td>{{ $m->semester }}</td>
            <td>
                <form action="{{ route('matkul.destroy', $m->id) }}" method="POST">
                    <a href="{{ route('matkul.edit', $m->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>