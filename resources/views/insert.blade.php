<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Penduduk</title>
</head>
<body>
@extends('template')
@section('content')

<div class="container">
<h3>Halaman Tambah Data Penduduk</h3>

<a href="/index" class="btn btn-warning">Kembali</a>
<br>
<br>
<form action="/index/store" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="nik">NIK:</label>
      <input type="text" class="form-control" id="nik" placeholder="Masukan NIK" name="nik" require="require">
    </div>
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" require="require">
    </div>
    <div class="form-group">
      <label for="alamat">Alamat:</label>
      <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat" require="require">
    </div>
    <div class="form-group">
      <label for="tempat_lahir">Tempat Lahir:</label>
      <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukan Tempat Lahir" name="tempat_lahir" require="require">
    </div>
    <div class="form-group">
      <label for="tanggal_lahir">Tanggal Lahir:</label>
      <input type="date" class="form-control" id="tanggal_lahir" placeholder="Masukan Tanggal Lahir" name="tanggal_lahir" require="require">
    </div>
    <div class="form-group">
    <label for="penddidikan">Pendidikan : </label>
            
            <select name="pendidikan" id="pendidikan">
            <option value="S-3">S-3</option>
            <option value="S-2">S-2</option>
            <option value="S-1">S-1</option>
            <option value="D-3">D-3</option>
            <option value="SMA/SMK">SMA/SMK</option>
            <option value="SMP">SMP</option>
            <option value="SD">SD</option>
            </select>
            
    </div>
    <label for="">Jenis Kelamin : </label>
    <div class="form-check">
              <input type="radio" class="form-check-input" id="radio7" name="jenis_kelamin" value="Laki - laki" checked>
              <label class="form-check-label" for="radio7">Laki - laki</label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="radio8" name="jenis_kelamin" value="Perempuan">
              <label class="form-check-label" for="radio8">Perempuan</label>
            </div><br>
    
    <label for="">Agama : </label>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="radio1" name="agama" value="Islam" checked>
              <label class="form-check-label" for="radio1">Islam</label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="radio2" name="agama" value="Kristen">
              <label class="form-check-label" for="radio2">Kristen</label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="radio3" name="agama" value="Katholik">
              <label class="form-check-label" for="radio3">Katholik</label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="radio4" name="agama" value="Hindu">
              <label class="form-check-label" for="radio4">Hindu</label>
            </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="radio5" name="agama" value="Buddha">
                <label class="form-check-label" for="radio5">Buddha</label>
                </div>
              <div class="form-check">
              <input type="radio" class="form-check-input" id="radio6" name="agama" value="Konghucu">
              <label class="form-check-label" for="radio6">Konghucu</label>
            </div><br>
    <input type="submit" value="Simpan Data" class="btn btn-primary mt-3">
</form>
</div>
@endsection
</body>
</html>