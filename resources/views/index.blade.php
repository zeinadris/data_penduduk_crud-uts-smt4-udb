<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penduduk</title>
</head>
<body>
    <h2>Data Penduduk Uganda</h2>

    <a href="/insert" class="btn btn-info my-3"> + Penduduk Baru</a>
        <a href="/index/print_pdf" target="_blank" class="btn btn-warning my-3">CETAK PDF</a>
        <a href="/index/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>

        <table border='2' class="table table-bordered table-hover table-striped">
            <thead class="bg-success">
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Agama</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
            @foreach ($data as  $kependudukan)
            <tr class="bg-info">
                <td>{{ $kependudukan->nik }}</td>
                <td>{{ $kependudukan->nama }}</td>
                <td>{{ $kependudukan->alamat }}</td>
                <td>{{ $kependudukan->tempat_lahir }}</td>
                <td>{{ $kependudukan->tanggal_lahir }}</td>
                <td>{{ $kependudukan->agama }}</td>
                <td>{{ $kependudukan->pendidikan }}</td>
                <td>
                    <a href="/index/edit/{{ $kependudukan->nik }}" class="btn btn-warning"><i class="fas fa-eye-dropper"></i>Edit</a> |

                        @method('delete')
                    {{ csrf_field() }}
                    <a class="btn btn-danger" onclick="return confirm('Anda Yakin ingin menghapus data ini ?')" href="/delete/{{ $kependudukan->nik }}"><i class="fa fa-trash"></i>Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
</body>
</html>