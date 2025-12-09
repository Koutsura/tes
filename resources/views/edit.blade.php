<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>

    <h3>Edit Pasien</h3>

    <form action="{{ route('tes.update', $pasien->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Nama:</label>
            <input type="text" name="nama" value="{{ $pasien->nama }}" required>
        </div>

        <div>
            <label>Tanggal Lahir:</label>
            <input type="date" name="tgl_lahir" value="{{ $pasien->tgl_lahir }}" required>
        </div>

        <button type="submit">Update</button>
    </form>

</body>
</html>
