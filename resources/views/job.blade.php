@extends('master')

@section('konten')

    <div>
        <center>
            <h1>Data Job</h1>
        </center>
        <center>
            <a href="{{ route('tambahJob') }}">+ &nbsp; Tambah Job</a>
            <br />
            <table>
                <thead>
                    <tr>
                        <th>ID Jobdesk</th>
                        <th>Nama Jobdesk</th>
                        <th>Bidang</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_job as $job)
                    <tr>
                        <td>{{ $job->id_job }}</td>
                        <td>{{ $job->job }}</td>
                        <td>{{ $job->bidang }}</td>
                        <td>
                            <a href="{{ route('editJob', ['id_job'=>$job->id_job]) }}">Edit</a> |
                            <a href="{{ route('proses_hapusJob', ['id_job'=>$job->id_job]) }}"
                                onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </center>
    </div>
@endsection
