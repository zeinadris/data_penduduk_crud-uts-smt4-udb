<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kependudukan;

use App\Exports\KependudukanExport;

use Maatwebsite\Excel\Facades\Excel;

use DB;
use PDF;

class KependudukanController extends Controller
{
    //
    public function show(){
        $data=Kependudukan::All();
        return view('index', ['data'=>$data]);
    }

    // public function show(){
    //     $data=DB::table('kependudukan')->get();
    //     return view('index', ['data'=>$data]);
    // }

    public function insert(){

        return view('insert');
    }

    public function save(request $request){
        $data=array(
            "nik"=>$request->nik,
            "nama"=>$request->nama,
            "alamat"=>$request->alamat,
            "tempat_lahir"=>$request->tempat_lahir,
            "tanggal_lahir"=>$request->tanggal_lahir,
            "jenis_kelamin"=>$request->jenis_kelamin,
            "agama"=>$request->agama,
            "pendidikan"=>$request->pendidikan
        );

        $data=Kependudukan::create($data);
        if($data){
            return redirect('/index')->with(array('status'=>true, 'Berhasil Tambah Data'));
        } else{
            return json_encode(array('status'=>false, 'pesan'=>"Gagal Tambah Data"));
        }
    }

    public function ubah(request $request){
        $data=Kependudukan::where("nik", $request->nik)->update(array(
            "nama"=>$request->nama,
            "alamat"=>$request->alamat,
            "tempat_lahir"=>$request->tempat_lahir,
            "tanggal_lahir"=>$request->tanggal_lahir,
            "jenis_kelamin"=>$request->jenis_kelamin,
            "agama"=>$request->agama,
            "pendidikan"=>$request->pendidikan
        ));
        if($data){
            return redirect('/index')->with(array('status'=>true, 'Berhasil Ubah Data'));
        } else{
            return json_encode(array('status'=>false, 'pesan'=>"Gagal Ubah Data"));
        }
    }

    public function edit($nik) {
        $data=Kependudukan::where("nik", $nik)->get();
        return view('edit', ['data'=>$data]);
    }

    public function delete($nik){
        $data=Kependudukan::where("nik", $nik)->delete();

        if($data){
            return redirect('/index')->with(array('status'=>true, 'Berhasil Hapus Data'));
        } else{
            return json_encode(array('status'=>false, 'pesan'=>"Gagal Hapus Data"));
        }
    }

    public function print_pdf(){

        $data = Kependudukan::all();

        $pdf = PDF::loadview('pdf',['data'=>$data]);
        return $pdf->download('laporan-data-penduduk.pdf');
    }

    public function export_excel(){
        return Excel::download(new KependudukanExport, 'data-kependudukan.xlsx');
    }
}
