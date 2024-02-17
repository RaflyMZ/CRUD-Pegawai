<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Pegawai;
use Session;

class PegawaiController extends Controller
{ 
    public function index()
    {
        $data_pegawai = Pegawai::get();
        $data = [
            'data_pegawai' => $data_pegawai
        ];
        return view('pegawai',$data);
    }

    public function tambahPegawai() {
        return view('tambahPegawai');
    }

    public function proses_tambahPegawai(Request $request) {
        $id_pegawai = $request->id_pegawai;
        $nama_pegawai = $request->nama_pegawai;
        $jenis_kelamin = $request->jenis_kelamin;
        $job = $request->job;
        $no_telepon = $request->no_telepon;

        Pegawai::create([
            'id_pegawai' => $id_pegawai,
            'nama_pegawai' => $nama_pegawai,
            'jenis_kelamin' => $jenis_kelamin,
            'job' => $job,
            'no_telepon' => $no_telepon,
        ]);

        Session::flash('message_tambah_pegawai', 'Data Pegawai Berhasil Ditambah');
        return redirect('pegawai');
    }

    public function editPegawai(Request $request) {
        $id_pegawai = $request->query('id_pegawai');
        $data_pegawai = Pegawai::where('id_pegawai', $id_pegawai)->first();
        $data = [
            'data_pegawai' => $data_pegawai
        ];
        return view('editPegawai', $data);
    }

    public function proses_editPegawai(Request $request) {
        $id_pegawai = $request->id_pegawai;
        $nama_pegawai = $request->nama_pegawai;
        $jenis_kelamin = $request->jenis_kelamin;
        $job = $request->job;
        $no_telepon = $request->no_telepon;

        $data_pegawai = Pegawai::find($id_pegawai);
        $data_pegawai->nama_pegawai = $nama_pegawai;
        $data_pegawai->jenis_kelamin = $jenis_kelamin;
        $data_pegawai->job = $job;
        $data_pegawai->no_telepon = $no_telepon;

        $data_pegawai->save();

        Session::flash('message_edit_pegawai', 'Data Pegawai Berhasil Diedit');
        return redirect('pegawai');
    }

    public function proses_hapusPegawai(Request $request) {
        $id_pegawai = $request->query('id_pegawai');
        $data_pegawai = Pegawai::destroy($id_pegawai);
        $data = [
            'data_pegawai' => $data_pegawai
        ];
        return redirect('pegawai');
    }

}
