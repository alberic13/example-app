<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #666;
        }
        .print-button {
            text-align: center;
            margin: 20px 0;
        }
        .print-button button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .print-button button:hover {
            background-color: #0056b3;
        }
        @media print {
            .print-button {
                display: none;
            }
            body {
                margin: 0;
                padding: 15px;
            }
            table {
                page-break-inside: auto;
            }
            tr {
                page-break-inside: avoid;
                page-break-after: auto;
            }
            thead {
                display: table-header-group;
            }
        }
    </style>
</head>
<body>
    <h2>Data Siswa</h2>
    
    <div class="print-button">
        <button onclick="window.print()">Cetak PDF</button>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Dibuat pada</th>
                <th>Diperbarui pada</th>
            </tr>
        </thead>
        <tbody>
            @forelse($siswa as $index => $s)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->alamat }}</td>
                    <td>{{ $s->jenis_kelamin }}</td>
                    <td>{{ $s->timestamp_created_at }}</td>
                    <td>{{ $s->timestamp_updated_at }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align: center;">Tidak ada data siswa</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    
    <div class="footer">
        Dicetak pada: {{ date('Y-m-d H:i:s') }}
    </div>
    
    <script>
        // Auto-print when the page loads (uncomment if you want it to automatically show the print dialog)
        // window.onload = function() {
        //     window.print();
        // }
    </script>
</body>
</html>
