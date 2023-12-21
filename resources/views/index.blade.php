@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body row">
                            <div class="col-md-8 text-start">
                                <h5>Surat Masuk</h5>
                                <p class="mb-0">{{$suratmcount}} Surat</p>
                            </div>
                            <div class="col-md-4 text-end">
                                <i class="fa-solid fa-inbox fa-xl"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{route('suratm.index')}}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body row">
                            <div class="col-md-8 text-start">
                                <h5>Surat Keluar</h5>
                                <p class="mb-0">{{$suratkcount}} Surat</p>
                            </div>
                            <div class="col-md-4 text-end">
                                <i class="fa-solid fa-paper-plane fa-xl"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{route('suratk.index')}}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body row">
                            <div class="col-md-8 text-start">
                                <h5>Disposisi Surat</h5>
                                <p class="mb-0">{{$disposisicount}} Surat</p>
                            </div>
                            <div class="col-md-4 text-end">
                                <i class="fa-solid fa-file-signature fa-xl"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{route('disposisi.index')}}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body row">
                            <div class="col-md-8 text-start">
                                <h5>User</h5>
                                <p class="mb-0">{{$usercount}} Pengguna</p>
                            </div>
                            <div class="col-md-4 text-end">
                                <i class="fa-solid fa-users fa-xl"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{route('user.index')}}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
