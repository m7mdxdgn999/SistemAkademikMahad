@extends('layouts.admin.master')
@section('title', 'Tahun Akademik')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Tahun Akademik</h1>

        </div>

        <div class="section-body">

            <a href="{{ route('tahun_akademik.create') }}" class="btn btn-icon icon-left btn-primary"
                style="margin-bottom:30px"><i class="far fa-edit"></i> Tambah
                Tahun Akadmik</a>
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
                                        <th scope="col">Kode</th>
                                        <th scope="col">Tahun Akademik</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" width="140">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tahun_akademik as $thn_akademik)
                                        <tr>
                                            <th>{{ $thn_akademik->kode_tahun_akademik }}</th>
                                            <td>{{ $thn_akademik->tahun_akademik }}</td>
                                            <td>{{ $thn_akademik->status }}</td>
                                            <td>
                                                <form
                                                    action="{{ route('tahun_akademik.edit', $thn_akademik->kode_tahun_akademik) }}"
                                                    class="float-left" method="get">
                                                    <button type="submit" class="btn btn-icon btn-primary"><i
                                                            class="far fa-edit"></i></button>
                                                </form>
                                                <form
                                                    action="{{ route('tahun_akademik.destroy', $thn_akademik->kode_tahun_akademik) }}"
                                                    class="float-right" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger"><i
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

@endpush
