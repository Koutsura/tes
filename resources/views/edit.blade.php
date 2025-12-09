<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<body>
    <form action="{{ route('tes.edit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama"> nama : </label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"> tgl_lahir : </label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
            </div>
            <action="">
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</body>
</html>