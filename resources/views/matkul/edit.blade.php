<!DOCTYPE html>
<html>
<head>
    <title>Edit Mata Kuliah</title>
</head>
<body>
    <h2>Edit Data Mata Kuliah</h2>
    <a href="{{ route('matkul.index') }}">Kembali ke Daftar</a>
    <br><br>

    <form action="{{ route('matkul.update', $matkul->id) }}" method="POST">
        @csrf
        @method('PUT') 
        
        <label>Kode Matkul:</label><br>
        <input type="text" name="kode_matkul" value="{{ $matkul->kode_matkul }}" required><br><br>

        <label>Nama Matkul:</label><br>
        <input type="text" name="nama_matkul" value="{{ $matkul->nama_matkul }}" required><br><br>

        <label>SKS:</label><br>
        <input type="number" name="sks" value="{{ $matkul->sks }}" required><br><br>

        <label>Semester:</label><br>
        <input type="number" name="semester" value="{{ $matkul->semester }}" required><br><br>

        <button type="submit">Update Matkul</button>
    </form>
</body>
</html>