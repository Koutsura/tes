<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <a href="/tes/create" class="btn btn-primary">tambah data</a>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover align-middle">
            <thead class="table-primary text-center">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">tanggal lahir</th>
                    <th scope="col">ubah atau hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pasien as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->tgl_lahir }}</td>
                        <td class="text-center">
                            <a href="{{ route('tes.edit', $item->id) }}" class="btn btn-sm btn-outline-primary me-1">Edit</a>
                            <form action="{{ route('tes.delete', $item->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>