<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mata Kuliah</title>
</head>
<body>
    <h2>Tambah Mata Kuliah Baru</h2>
    <a href="{{ route('matkul.index') }}">Kembali ke Daftar</a>
    <br><br>

    <form action="{{ route('matkul.store') }}" method="POST">
        @csrf 
        
        <label>Kode Matkul:</label><br>
        <input type="text" name="kode_matkul" required><br><br>

        <label>Nama Matkul:</label><br>
        <input type="text" name="nama_matkul" required><br><br>

        <label>SKS:</label><br>
        <input type="number" name="sks" required><br><br>

        <label>Semester:</label><br>
        <input type="number" name="semester" required><br><br>

        <button type="submit">Simpan Matkul</button>
    </form>
</body>
</html>