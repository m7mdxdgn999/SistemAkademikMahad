@extends('layouts.admin.master')
@section('title', 'Mabna')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Mabna</h1>

        </div>

        <div class="section-body">

            <a href="{{ route('mabna.create') }}" class="btn btn-icon icon-left btn-primary"
                style="margin-bottom:30px"><i class="far fa-edit"></i> Tambah
                Mabna</a>

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
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col">Kode Mabna</th>
                                        <th scope="col">Nama Mabna</th>
                                        <th scope="col" width="140">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mabna as $mbn)
                                        <tr>
                                            <th>{{ $mbn->kode_mabna }}</th>
                                            <td>{{ $mbn->nama_mabna }}</td>
                                            <td>
                                                <form action="{{ route('mabna.edit', $mbn->kode_mabna) }}" method="get" class="float-left">
                                                    <button type="submit" class="btn btn-icon btn-primary "><i
                                                            class="far fa-edit"></i></button>
                                                </form>
                                                <form action="{{ route('mabna.destroy', $mbn->kode_mabna) }}"
                                                    class="float-right" method="post">
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
    </section>
@endsection

@push('page-scripts')
    <script src=" {{ asset('assets/js/page/modules-sweetalert.js') }}"></script>
@endpush

@push('after-scripts')

@endpush
