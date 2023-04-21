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
    <!-- <table class="table .table-bordered">
        <tr>
            <td>NIK : </td>
            <td><input type="text" name="nik" require="require"></td>
        </tr>
        <tr>
            <td>Nama : </td>
            <td><input type="text" name="nama" require="require"></td>
        </tr>
        <tr>
            <td>Alamat : </td>
            <td><input type="text" name="alamat" require="require"></td>
        </tr>
        <tr>
            <td>Tempat Lahir : </td>
            <td><input type="text" name="tempat_lahir" require="require"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir : </td>
            <td><input type="date" name="tanggal_lahir" require="require"></td>
        </tr>
        
    
        <tr>
            <td><label for="penddidikan">Pendidikan : </label></td>
            <td>
            <select name="pendidikan" id="pendidikan">
            <option value="S-3">S-3</option>
            <option value="S-2">S-2</option>
            <option value="S-1">S-1</option>
            <option value="D-3">D-3</option>
            <option value="SMA/SMK">SMA/SMK</option>
            <option value="SMP">SMP</option>
            <option value="SD">SD</option>
            </select>
            </td>
        </tr>
    </table> -->
            <p>Agama : </p>
            <input type="radio" id="islam" name="agama" value="Islam" require="require">
            <label for="islam">Islam</label>
            <input type="radio" id="kristen" name="agama" value="Kristen" require="require">
            <label for="kristen">Kristen</label>
            <input type="radio" id="katholik" name="agama" value="Katholik" require="require">
            <label for="katholik">Katholik</label>
            <input type="radio" id="hindu" name="agama" value="Hindu" require="require">
            <label for="hindu">Hindu</label>
            <input type="radio" id="budha" name="agama" value="Budha" require="require">
            <label for="budha">Budha</label>
            <input type="radio" id="konghucu" name="agama" value="Konghucu" require="require">
            <label for="konghucu">Konghucu</label><br><br>
    <input type="submit" value="Simpan Data" class="btn btn-primary">
</form>
</div>
@endsection
</body>
</html>