<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <table style="margin-left:auto;margin-right:auto; text-align:center">
        <h5><strong><u>DAFTAR MAHASISWA<br>KELUARGA MAHASISWA INDONESIA BANGGAI LAUT (KMI-BALUT) PROVINSI GORONTALO</u></strong></h5>
    </table>
    <table border="2" style="border-collapse: collapse; font-size: 14px;" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Perguruan Tinggi/Jurusan</th>
                <th>Asal Kecamatan/Desa</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pendaftaran as $pendaftar)
            <tr>
                <td style="text-align: center">{{ $loop->iteration }}</td>
                <td>{{ $pendaftar->anggota->name }}</td>
                <td>{{ $pendaftar->universitas }}/{{ $pendaftar->jurusan }}</td>
                <td>{{ $pendaftar->kecamatan }}/{{ $pendaftar->alamat }}</td>
                <td>{{ $pendaftar->status }}</td>
            @endforeach
        </tbody>
    </table>
</body>
</html>