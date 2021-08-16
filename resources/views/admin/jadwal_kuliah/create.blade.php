@extends('layouts.admin.master')
@section('title', 'Input Data Jadwal Pembinaan')

@section('content')
    <section class="section">

        {{-- header start --}}
        <div class="section-header">
            <h1>Input Data Jadwal Pembinaan</h1>

        </div>
        {{-- header end --}}

        {{-- body start --}}
        <div class="section-body">

            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4>Input Data Jadwal Pembinaan</h4>
                        </div>
                        <div class="card-body">


                            <form action="{{ route('jadwal.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_jadwal">Kode Jadwal</label>
                                            <input type="text" class="form-control @error('kode_jadwal') is-invalid @enderror "  name="kode_jadwal">
                                            @error('kode_jadwal')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_mabna">Mabna</label>
                                                {{ Form::select ('kode_mabna',$mabna,null,['class'=>'form-control']) }}
                                                {{ Form::hidden('kode_tahun_akademik',$tahun_akademik->kode_tahun_akademik) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_pembinaan">Pembinaan</label>
                                                {{ Form::select ('kode_pembinaan',$pembinaan,null,['class'=>'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="semester">Semester</label>
                                            {{ Form::select('semester',['genap'=>'Genap','ganjil'=>'Ganjil'],null,['class'=>'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_dosen">Dosen</label>
                                            {{ Form::select('kode_dosen',$dosen,null,['class'=>'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="ruang">Ruangang</label>
                                            <input type="text" class="form-control @error('jam') is-invalid @enderror "  name="ruang">
                                            @error('ruang')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="jam"> Jam</label>
                                            <input type="text" class="form-control @error('jam') is-invalid @enderror "  name="jam">
                                            @error('nip')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="hari"> Hari</label>
                                            <input type="text" class="form-control @error('hari') is-invalid @enderror "  name="hari">
                                            @error('nip')
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
