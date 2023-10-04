<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
</head>
<body>
    <table style="margin-left:auto;margin-right:auto">
        <h3><strong><u>FORMULIR PENDAFTARAN OPN</u></strong></h3>
    </table>
    <br>
    <table>
        <tr>
            <td>Yang bertanda tangan dibawah ini :</td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>{{ $anggota->name }}</td>
        </tr>
        <tr>
            <td>Tampat, Tanggal Lahir</td>
            <td>:</td>
            <td>{{ $anggota->pendaftaran->tmp_lahir }}, {{ $anggota->pendaftaran->tgl_lahir }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{ $anggota->pendaftaran->gender }}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>{{ $anggota->pendaftaran->agama }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $anggota->alamat }}</td>
        </tr>
        <tr>
            <td>Riwayat Penyakit</td>
            <td>:</td>
            <td>{{ $anggota->pendaftaran->penyakit }}</td>
        </tr>
        <tr>
            <td>No. Telepon/HP Orang Tua</td>
            <td>:</td>
            <td>{{ $anggota->pendaftaran->telepon_ortu }}</td>
        </tr>
    </table>
    <br>
    <table>
        <div class="d-flex justify-content">
            <p>{{ $textfor->text_formulir }}</p>
        </div>
    </table>
    <table>
        {{-- <img src="{{ asset('storage/pendaftaran-gambar/'. $daftar->gambar) }}"> --}}
    </table>
    <table>
        <tr>
        <td width="300"></td>
        <p align="center" width="200">Gorontalo, {{ \Carbon\Carbon::now()->format('d M Y') }} <br>Mengetahui <br><br><br><br><strong><u>{{ $anggota->name }}</u></strong></p>
        </tr>
    </table>
</body>
</html>