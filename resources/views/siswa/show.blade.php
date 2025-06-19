<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .info-group {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .value {
            margin-bottom: 15px;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 4px;
        }
        .btn {
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;
            margin-right: 5px;
            font-size: 14px;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
        }
        .btn-success {
            background-color: #28a745;
            color: white;
        }
        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Detail Siswa</h1>
    
    <div class="info-group">
        <div class="label">Nama:</div>
        <div class="value">{{ $siswa->nama }}</div>
    </div>
    
    <div class="info-group">
        <div class="label">Alamat:</div>
        <div class="value">{{ $siswa->alamat }}</div>
    </div>
    
    <div class="info-group">
        <div class="label">Jenis Kelamin:</div>
        <div class="value">{{ $siswa->jenis_kelamin }}</div>
    </div>
    
    <div class="info-group">
        <div class="label">Dibuat pada:</div>
        <div class="value">{{ $siswa->timestamp_created_at }}</div>
    </div>
    
    <div class="info-group">
        <div class="label">Diperbarui pada:</div>
        <div class="value">{{ $siswa->timestamp_updated_at }}</div>
    </div>
    
    <div>
        <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-success">Edit</a>
        <a href="{{ route('admin') }}" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>
