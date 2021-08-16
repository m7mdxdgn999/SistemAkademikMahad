@extends('layouts.admin.master')
@section('title', 'Jadwal Pembinaan')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Jadwal Pembinaan</h1>
        </div>

        <div class="section-body">
            <a href="{{ route('jadwal.create') }}" class="btn btn-icon icon-left btn-primary"
                style="margin-bottom:30px"><i class="far fa-edit"></i>
                Tambah
                Jadwal</a>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    @if (session('message'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                {{ session('message') }}
                            </div>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-body">

                            {{ Form::open(['route' => 'jadwal.index', 'method' => 'GET']) }}
                            @csrf

                            <table class="table">

                                <tr>
                                    <th scope="col">Mabna</th>
                                    <th scope="col">
                                        {{ Form::select('kode_mabna', $mabna, $mabna_terpilih, ['class' => 'form-control']) }}
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="col">Semester</th>
                                    <th scope="col">
                                        {{ Form::select('semester', ['genap' => 'Genap', 'ganjil' => 'Ganjil'], $semester_terpilih, ['class' => 'form-control']) }}
                                    </th>
                                </tr>
                                <tr>

                                    <th><button type="submit" class="btn btn-icon btn-success"><i class="fas fa-sync-alt"></i>Refresh Data</button></th>
                                </tr>

                            </table>
                            {{ Form::close() }}


                            <div class="col-12 col-md-12 col-lg-12">
                                <table class="table table-borderless text-center ">
                                    <thead>
                                        <tr>
                                            <th>Hari</th>
                                            <th>Jam</th>
                                            <th>Pembinaan </th>
                                            <th>Dosen </th>
                                            <th>Ruang</th>
                                            <th width="140">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jadwal as $jdwl)
                                            <tr>
                                                <td>{{ $jdwl->hari }}</td>
                                                <td>{{ $jdwl->jam }}</td>
                                                <td>{{ $jdwl->nama_pembinaan }}</td>
                                                <td>{{ $jdwl->nama_dosen }}</td>
                                                <td>{{ $jdwl->ruang }}</td>
                                                <td>
                                                    <form action="{{ route('jadwal.edit', $jdwl->kode_jadwal) }}"
                                                        class="float-left" method="get">
                                                        <button type="submit" class="btn btn-icon btn-primary "><i
                                                                class="far fa-edit"></i></button>
                                                    </form>
                                                    <form
                                                        action="{{ route('jadwal.destroy', $jdwl->kode_jadwal) }}"
                                                        class="float-right"  method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-icon btn-danger"><i
                                                                class="fas fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{-- tablde end --}}

        </div>


        </div>





    @endsection
