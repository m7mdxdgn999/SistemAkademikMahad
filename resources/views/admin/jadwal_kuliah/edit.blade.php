@extends('layouts.admin.master')
@section('title', 'Edit Data Jadwal Pembinaan')

@section('content')
    <section class="section">

        {{-- header start --}}
        <div class="section-header">
            <h1>Edit Data Jadwal Pembinaan</h1>

        </div>
        {{-- header end --}}

        {{-- body start --}}
        <div class="section-body">

            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Data Jadwal Pembinaan</h4>
                        </div>
                        <div class="card-body">


                            <form action="{{ route('jadwal.update',$jadwal->kode_jadwal) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_jadwal">Kode Jadwal</label>
                                            <input type="text" class="form-control @error('kode_jadwal') is-invalid @enderror "  name="kode_jadwal" value="{{ $jadwal->kode_jadwal }}">
                                            @error('kode_jadwal')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_mabna">Mabna</label>
                                                {{ Form::select ('kode_mabna',$mabna,$jadwal->kode_mabna,['class'=>'form-control']) }}
                                                {{ Form::hidden('kode_tahun_akademik',$tahun_akademik->kode_tahun_akademik) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_pembinaan">Pembinaan</label>
                                                {{ Form::select ('kode_pembinaan',$pembinaan,$jadwal->kode_pembinaan,['class'=>'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="semester">Semester</label>
                                            {{ Form::select('semester',['genap'=>'Genap','ganjil'=>'Ganjil'],$jadwal->semester,['class'=>'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_dosen">Musyrif</label>
                                            {{ Form::select('kode_dosen',$dosen,$jadwal->kode_dosen,['class'=>'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="ruang">Ruangang</label>
                                            <input type="text" class="form-control @error('jam') is-invalid @enderror "  name="ruang" value="{{ $jadwal->ruang }}">
                                            @error('ruang')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="jam"> Jam</label>
                                            <input type="text" class="form-control @error('jam') is-invalid @enderror "  name="jam" value="{{ $jadwal->jam }}">
                                            @error('jam')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="hari"> Hari</label>
                                            <input type="text" class="form-control @error('hari') is-invalid @enderror "   name="hari" value="{{ $jadwal->hari }}">
                                            @error('hari')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>



                                </div>

                                <div class="card-footer text-right">
                                    {{ Form::submit('Submit',['class'=>'btn btn-primary mr-1']) }}
                                </div>
                            </form>
                        </div>

                    </div>

                </div>


            </div>
            {{-- body end --}}
    </section>
@endsection

@push('page-scripts')

@endpush
