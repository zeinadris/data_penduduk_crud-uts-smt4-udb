<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak PDF</title>
</head>
<body>
<center>
        <h5>Membuat Laporan PDF dengan DOMPDF Laravel</h5>
        <h6>Data Penduduk Republik Irlandia</h6>
    </center>

    <table border='1'>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Pendidikan</th>
        </tr>
        @php $i=1 @endphp
        @foreach ($data as $penduduk)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $penduduk->nik }}</td>
            <td>{{ $penduduk->nama }}</td>
            <td>{{ $penduduk->alamat }}</td>
            <td>{{ $penduduk->tempat_lahir }}</td>
            <td>{{ $penduduk->tanggal_lahir }}</td>
            <td>{{ $penduduk->jenis_kelamin }}</td>
            <td>{{ $penduduk->agama }}</td>
            <td>{{ $penduduk->pendidikan }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>