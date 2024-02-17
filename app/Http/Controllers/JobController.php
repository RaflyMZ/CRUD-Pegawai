<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Job;
use Session;

class JobController extends Controller
{ 
    public function index()
    {
        $data_job = Job::get();
        $data = [
            'data_job' => $data_job
        ];
        return view('job',$data);
    }

    public function tambahJob() {
        return view('tambahJob');
    }

    public function proses_tambahJob(Request $request) {
        $id_job = $request->id_job;
        $job = $request->job;
        $bidang = $request->bidang;

        Job::create([
            'id_job' => $id_job,
            'job' => $job,
            'bidang' => $bidang,
        ]);

        Session::flash('message_tambah_job', 'Data Job Berhasil Ditambah');
        return redirect('job');
    }

    public function editJob(Request $request) {
        $id_job = $request->query('id_job');
        $data_job = Job::where('id_job', $id_job)->first();
        $data = [
            'data_job' => $data_job
        ];
        return view('editJob', $data);
    }

    public function proses_editJob(Request $request) {
        $id_job = $request->id_job;
        $job = $request->job;
        $bidang = $request->bidang;

        $data_job = Job::find($job);
        $data_job->job = $job;
        $data_job->bidang = $bidang;

        $data_job->save();

        Session::flash('message_edit_job', 'Data Job Berhasil Diedit');
        return redirect('job');
    }

    public function proses_hapus_job(Request $request) {
        $id_job = $request->query('id_job');
        $data_job = Job::destroy($id_job);
        $data = [
            'data_job' => $data_job
        ];
        return redirect('job');
    }

}
