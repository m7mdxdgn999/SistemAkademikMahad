@extends('layouts.admin.master')
@section('title', 'Dosen')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Dosen</h1>

        </div>

        <div class="section-body">

            <a href="{{ route('dosen.create') }}" class="btn btn-icon icon-left btn-primary"
                style="margin-bottom:30px"><i class="far fa-edit"></i>
                Tambah
               Dosen</a> 
            
            <a href="{{ route('export.excel') }}" class="btn btn-icon icon-left btn-success"
                style="margin-bottom:30px"><i class="far fa-file-excel"></i>
                Export Ke Excel</a> 

            <a href="{{ route('export.pdf') }}" class="btn btn-icon icon-left btn-success"
                style="margin-bottom:30px"><i class="far fa-file-excel"></i>
                Export Ke Pdf</a> 

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

                    {{-- </div> --}}
                    {{-- tablde end --}}

                    {{-- table start --}}
                    <div class="card">
                        <div class="card-body">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col">Kode Dosen</th>
                                        <th scope="col">NIP</th>
                                        <th scope="col">Nama Dosen</th>
                                        <th scope="col">Mabna</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">No Hp</th>
                                        <th scope="col" width="140">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dosen as $dsn)
                                        <tr>
                                            <td>{{ $dsn->kode_dosen }}</td>
                                            <td>{{ $dsn->nip }}</td>
                                            <td>{{ $dsn->nama_dosen }}</td>
                                            <td>{{ $dsn->nama_mabna }}</td>
                                            <td>{{ $dsn->email }}</td>
                                            <td>{{ $dsn->no_hp_dosen }}</td>
                                            <td>
                                                <form action="{{ route('dosen.edit', $dsn->nip) }}"
                                                    class="float-left" method="get">
                                                    <button type="submit" class="btn btn-icon btn-primary"><i
                                                            class="far fa-edit"></i></button>
                                                </form>
                                                <form action="{{ route('dosen.delete', $dsn->nip) }}"
                                                    class="float-right " method="post">
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

                    {{-- tablde end --}}

                </div>

            </div>


        </div>





    @endsection
