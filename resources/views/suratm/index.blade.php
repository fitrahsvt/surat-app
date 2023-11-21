@extends('layouts.main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="my-4">Surat Masuk</h1>
        <a href="{{route('suratm.create')}}" class="btn btn-primary mb-2"><i class="fa-solid fa-plus"></i> Create</a>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No. Surat</th>
                            <th>Tanggal Surat</th>
                            <th>Jenis Surat</th>
                            <th>Ditujukan</th>
                            <th>Deskripsi</th>
                            <th>Berkas</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suratm as $s)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$s->no}}</td>
                            <td>{{$s->tgl_surat}}</td>
                            <td>{{$s->jenis_surat->name}}</td>
                            <td>{{$s->ditujukan}}</td>
                            <td>{{$s->deskripsi}}</td>
                            <td>
                                <a href="{{ route('suratm.download', $s->berkas) }}">{{$s->berkas}}</a>
                            </td>
                            <td>{{$s->status}}</td>
                            <td>
                                <form action="{{route('suratm.destroy', $s->id)}}" method="POST" onsubmit="return confirm('Anda yakin menghapus ini?');">
                                    <div class="d-flex align-items-center">
                                        <a type="button" class="btn btn-warning" href="{{route('suratm.edit', $s->id)}}" style="margin-right: 8px;"><i class="fa-solid fa-pen-to-square"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
