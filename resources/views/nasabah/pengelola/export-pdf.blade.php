<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laporan Data Nasabah</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 6px; text-align: left; }
        h2 { text-align: center; margin-bottom: 10px; }
    </style>
</head>
<body>
    <h2>Laporan Data Nasabah</h2>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="bg-primary text-white">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Foto</th>
                <th>Peran</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nasabah as $item)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->telepon }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>
                    <img src="{{ public_path('foto_nasabah/' . $item->foto) }}" width="60" alt="Foto {{ $item->nama }}">
                    </td>
                    <td>
                    @if ($item->peran == 'Pengelola')
                    <span class="badge badge-dark">
                    {{ $item->peran }}
                    </span>
                    @else
                    <span class="badge badge-info">
                    {{ $item->peran }}
                    </span>
                    @endif
                    </td>
                    <td>
                    @if ($item->is_status == false)
                    <span class="badge badge-danger">
                    Pasif
                    </span>
                    @else
                    <span class="badge badge-success">
                    Aktif
                    </span>
                    @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>