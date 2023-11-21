@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Create Surat Keluar</h1>

            <div class="card mb-4">
                <div class="card-body">
                    <form class="row g-3" action="{{route('suratk.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-2">
                            <label for="no" class="form-label">No Surat</label>
                            <input type="text" class="form-control" id="no" name="no" required>
                        </div>
                        <div class="col-md-5">
                            <label for="pengirim" class="form-label">Pengirim</label>
                            <input type="text" class="form-control" id="pengirim" name="pengirim" required>
                        </div>
                        <div class="col-md-5">
                            <label for="ditujukan" class="form-label">Ditujukan</label>
                            <input type="text" class="form-control" id="ditujukan" name="ditujukan" required>
                        </div>
                        <div class="col-md-8">
                            <label for="perihal" class="form-label">Perihal</label>
                            <input type="text" class="form-control" id="perihal" name="perihal" required>
                        </div>
                        <div class="col-md-4">
                            <label for="tgl_surat" class="form-label">Tanggal Surat</label>
                            <input type="date" class="form-control" id="tgl_surat" name="tgl_surat" required>
                        </div>
                        <div class="col-md-6">
                            <label for="status" class="form-label">Status Disposisi</label>
                            <select class="form-select" aria-label="status" name="status" id="status">
                                <option selected disabled>- Choose Status -</option>
                                <option> Belum disposisi </option>
                                <option> Sudah disposisi </option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="jenis" class="form-label">Jenis Surat</label>
                            <select class="form-select" aria-label="jenis" name="jenis" id="jenis">
                                <option selected disabled>- Choose jenis -</option>
                                @foreach ($jenissurat as $j)
                                    <option value="{{$j->id}}" >{{$j->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-8">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="file" class="form-label">File upload</label>
                            <input class="form-control" type="file" name="file" id="file">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('suratk.index')}}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection