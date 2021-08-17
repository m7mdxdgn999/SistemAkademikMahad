@extends('layouts.admin.master')
@section('title', 'Pembinaan')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Pembinaan</h1>

        </div>

        <div class="section-body">

            <a href="{{ route('pembinaan.create') }}" class="btn btn-icon icon-left btn-primary" id="tambahPembinaan" style="margin-bottom:30px"><i
                    class="far fa-edit"></i>
                Tambah
                Pembinaan</a>

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


                    {{-- table start --}}
                    <div class="card">
                        <div class="card-body">


                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Kode Pembinaan</th>
                                        <th scope="col">Nama Pembinaan</th>
                                        <th scope="col" width="140">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pembinaan as $pmbn)
                                        <tr>
                                            <td>{{ $pmbn->kode_pembinaan }}</td>
                                            <td>{{ $pmbn->nama_pembinaan }}</td>
                                            <td>
                                                <form action="{{ route('pembinaan.edit', $pmbn->kode_pembinaan) }}"
                                                    class="float-left" method="get">
                                                    <button type="submit" class="btn btn-icon btn-primary"><i
                                                            class="far fa-edit"></i></button>
                                                </form>
                                                <form action="{{ route('pembinaan.destroy', $pmbn->kode_pembinaan) }}" class="float-right" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger "><i
                                                            class="fas fa-trash"></i></button>
                                                            <a href=""></a>
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



        {{-- <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <table id="tables"
                        summary="This table shows how to create responsive tables using Datatables' extended functionality"
                        class="table table-bordered table-hover dt-responsive">
                        <thead>
                            <tr>
                                <th>Country</th>
                                <th>Languages</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> --}}



    @endsection

    @section('script')
        <script>
            $(function() {
                $('#tables').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: 'subject/json',
                    columns: [{
                            data: 'nama_pembinaan',
                            name: 'nama_pembinaan'
                        },
                        {
                            data: 'kode_pembinaan',
                            name: 'kode_pembinaan'
                        },
                        {
                            data: 'mabna_id',
                            name: 'mabna_id'
                        },
                    ]
                });
            });

        </script>
    @endsection
