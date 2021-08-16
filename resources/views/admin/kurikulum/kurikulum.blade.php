@extends('layouts.admin.master')
@section('title', 'Kurikulum')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Kurikulum</h1>

        </div>

        <div class="section-body">
            <a href="{{ route('kurikulum.create') }}" class="btn btn-icon icon-left btn-primary" style="margin-bottom:30px"><i
                    class="far fa-edit" ></i > Tambah Kurikulum</a>
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
                            {{ Form::open(['route'=>'kurikulum.index','method'=>'GET'] ) }}
                            @csrf
                            <table class="table " width="100%">

                                <tr>
                                    <th>Mabna</th>
                                    <td>{{ Form::select('kode_mabna',$mabna,$mabna_terpilih,['class'=>'form-control']) }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><button type="submit" class="btn btn-icon btn-success"><i class="fas fa-sync-alt"></i> Refresh Data</button></td>
                                </tr>

                            </table>
                            {{ form::close() }}
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col">Kode Kurikulum</th>
                                        <th scope="col">Kode Pembinaan</th>
                                        <th scope="col">Nama Pembinaan</th>
                                        <th scope="col">Semester</th>
                                        <th scope="col" width="140">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kurikulum as $kuriklm)
                                        <tr>
                                            <th>{{ $kuriklm->kode_kurikulum }}</th>
                                            <td>{{ $kuriklm->nama_pembinaan }}</td>
                                            <td>{{ $kuriklm->nama_mabna }}</td>
                                            <td>{{ $kuriklm->semester }}</td>
                                            <td>
                                                <form action="{{ route('kurikulum.edit', $kuriklm->kode_kurikulum) }}"
                                                    class="float-left" method="get">
                                                    <button type="submit" class="btn btn-icon btn-primary "><i
                                                            class="far fa-edit"></i></button>
                                                </form>
                                                <form
                                                    action="{{ route('kurikulum.destroy', $kuriklm->kode_kurikulum) }}"
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
                            <div>
                                showing
                                {{ $kurikulum->firstItem() }}
                                to
                                {{ $kurikulum->lastItem() }}
                                of
                                {{ $kurikulum->total() }}
                                entries
                            </div>
                            <div class="float-right">
                                {{ $kurikulum->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            {{-- tablde end --}}
        </div>




    @endsection
