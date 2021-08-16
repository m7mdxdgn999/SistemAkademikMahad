@extends('layouts.admin.master')
@section('title', 'Admin Panel')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Profile</h1>
        </div>

        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="../assets/img/avatar/avatar-1.png"
                                class="rounded-circle profile-widget-picture">
                            <div class="profile-widget-items">
                            </div>
                        </div>
                        <div class="profile-widget-description">
                            <div class="profile-widget-name">{{ $student->nama_mahasiswa }}<div
                                    class="text-muted d-inline font-weight-normal">
                                    <div class="slash"></div>{{ $student->building_id }}
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form method="post" class="needs-validation" novalidate="">
                            <div class="card-header">
                                <h4>Edit Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="nama_mahasiswa">Nama Lengkap</label>
                                        <input type="text" class="form-control @error('nama_mahasiswa') is-invalid                                                    
                                                                    @enderror" id="nama_mahasiswa"
                                            placeholder="Nama Lengkap" name="nama_mahasiswa" @if (old('nama_mahasiswa')) value="{{ old('nama_mahasiswa') }}" @else value="{{ $student->nama_mahasiswa }}" @endif readonly>
                                        @error('nama_mahasiswa')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="fakultas_jurusan_semester"> Fakultas/ Jurusan</label>
                                        <input type="text"
                                            class="form-control @error('fakultas_jurusan_semester') is-invalid @enderror "
                                            id="fakultas_jurusan_semester" placeholder="Fakultas/Jurusan"
                                            name="fakultas_jurusan_semester" @if (old('fakultas_jurusan_semester')) value="{{ old('fakultas_jurusan_semester') }}" @else value="{{ $student->fakultas_jurusan_semester }}" @endif readonly>
                                        @error('fakultas_jurusan_semester')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="tempat_tanggal_lahir">Tempat dan tanggal lahir</label>
                                        <input type="text"
                                            class="form-control @error('tempat_tanggal_lahir') is-invalid @enderror "
                                            id="tempat_tanggal_lahir" placeholder="Tempat dan Tanggal Lahir"
                                            name="tempat_tanggal_lahir" @if (old('tempat_tanggal_lahir')) value="{{ old('tempat_tanggal_lahir') }}" @else value="{{ $student->tempat_tanggal_lahir }}" @endif readonly>
                                        @error('tempat_tanggal_lahir')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="nama_org_tua">Nama Orang Tua</label>
                                        <input type="text" class="form-control @error('nama_org_tua') is-invalid @enderror"
                                            id="nama_org_tua" placeholder="Nama Orang Tua" name="nama_org_tua" @if (old('nama_org_tuar')) value="{{ old('nama_org_tua') }}" @else value="{{ $student->nama_org_tua }}" @endif readonly>
                                        @error('nama_org_tua')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="alamat_lengkap">Alamat</label>
                                        <input type="text"
                                            class="form-control @error('alamat_lengkap') is-invalid @enderror"
                                            id="alamat_lengkap" placeholder="Alamat" name="alamat_lengkap" @if (old('alamat_lengkap')) value="{{ old('alamat_lengkap') }}" @else value="{{ $student->alamat_lengkap }}" @endif readonly>
                                        @error('alamat_lengkap')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="nim">NIM</label>
                                        <input type="text" class="form-control @error('nim') is-invalid @enderror " id="nim"
                                            placeholder="NIM" name="nim" @if (old('nim')) value="{{ old('nim') }}" @else value="{{ $student->nim }}" @endif readonly>
                                        @error('nim')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="no_hp_mahasantri">No hp</label>
                                        <input type="text"
                                            class="form-control @error('no_hp_mahasantri') is-invalid @enderror "
                                            id="no_hp_mahasantri" placeholder="No hp" name="no_hp_mahasantri" @if (old('no_hp_mahasantri')) value="{{ old('no_hp_mahasantri') }}" @else value="{{ $student->no_hp_mahasantri }}" @endif readonly>
                                        @error('no_hp_mahasantri')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="no_hp_org_tua">No Hp Orang Tua / Wali</label>
                                        <input type="text"
                                            class="form-control @error('no_hp_org_tua') is-invalid @enderror "
                                            placeholder="No HP Orang Tua/Wali" name="no_hp_org_tua" @if (old('no_hp_org_tua')) value="{{ old('no_hp_org_tua') }}" @else value="{{ $student->no_hp_org_tua }}" @endif readonly> 
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="jalur_masuk">Jalur Masuk:</label>
                                        <input type="text"
                                            class="form-control @error('jalur_masuk') is-invalid @enderror "
                                            placeholder="No HP Orang Tua/Wali" name="jalur_masuk" @if (old('jalur_masuk')) value="{{ old('jalur_masuk') }}" @else value="{{ $student->jalur_masuk }}" @endif readonly>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="building_id">Mabna:</label>
                                        {{ Form::select ('building_id',$buildings,$student->building_id,['class'=>'form-control','readonly'],['readonly'])}}
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Cetak</button>
                            </div>
                        </form>
                    </div>
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
