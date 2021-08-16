@extends('layouts.admin.master')
@section('title', 'Admin Panel')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Mahasiswa</h1>
        </div>

        <div class="section-body">

            <a href="{{ route('student.create') }}" class="btn btn-icon icon-left btn-primary"
                style="margin-bottom:30px"><i class="far fa-edit"></i>
                Tambah
                Mahasiswa</a>

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
                                        <th scope="col" width="100">NIM</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Mabna</th>
                                        <th scope="col">Profile</th>
                                        <th scope="col" width="140">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mahasiswa as $mhs)
                                        <tr>
                                            <td scope="row">{{ $mhs->nim }}</td>
                                            <td> {{ $mhs->nama_mahasiswa }}</td>
                                            <td>{{ $mhs->nama_mabna }}</td>
                                            <td>
                                                <form action="{{ route('student.show', $mhs->nim) }}"
                                                    class="float-start swal-confirm"  method="get">
                                                    @csrf
                                                    <button type="submit" class="btn btn-warning"><i class="fas fa-eye"></i></button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{ route('student.edit', $mhs->nim) }}"
                                                    class="float-left" method="get">
                                                    <button type="submit" class="btn btn-icon btn-primary"><i
                                                            class="far fa-edit"></i></button>
                                                </form>
                                                <form action="{{ route('student.destroy', $mhs->nim) }}"
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
                            <div>
                                showing
                                {{ $mahasiswa->firstItem() }}
                                to
                                {{ $mahasiswa->lastItem() }}
                                of
                                {{ $mahasiswa->total() }}
                                entries
                            </div>
                            <div class="float-right">
                                {{ $mahasiswa->links() }}
                            </div>
                            

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
