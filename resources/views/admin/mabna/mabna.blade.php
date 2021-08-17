@extends('layouts.admin.master')
@section('title', 'Mabna')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Mabna</h1>

        </div>

        <div class="section-body">

            {{-- <a href="{{ route('mabna.create') }}" class="btn btn-icon icon-left btn-primary"
                style="margin-bottom:30px"><i class="far fa-edit"></i> Tambah
                Mabna</a> --}}

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
                            <table class="table table-bordered table-hover " id="datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Kode Mabna</th>
                                        <th scope="col">Nama Mabna</th>
                                        <th scope="col" >Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    {{-- tablde end --}}
                </div>

            </div>


        </div>
    </section>
@endsection


@push('scripts')
<script>
    $(function() {
        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.building.data') }}',
            columns: [{
                    data: 'kode_mabna'
                },
                {
                    data: 'nama_mabna'
                },
                {
                    data: 'action'
                }
            ]
        });
    });
</script>
@endpush
