@extends('layouts.admin.master')
@section('title', 'Edit Data Mahasantri')

@section('content')
    <section class="section">

        {{-- header start --}}
        <div class="section-header">
            <h1>Edit Data Mahasantri</h1>
        </div>
        {{-- header end --}}

        {{-- body start --}}
        <div class="section-body">

            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Mahasiswa</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('student.update',$mahasiswa->nim) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nama_mahasiswa">Nama Lengkap</label>
                                            <input type="text" class="form-control @error('nama_mahasiswa') is-invalid                                                    
                                                        @enderror" 
                                                name="nama_mahasiswa" @if (old('nama_mahasiswa')) value="{{ old('nama_mahasiswa') }}" @else value="{{ $mahasiswa->nama_mahasiswa }}" @endif>
                                            @error('nama_mahasiswa')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control @error('email') is-invalid                                                    
                                                @enderror" 
                                                name="email"  @if (old('email')) value="{{ old('email') }}" @else value="{{ $mahasiswa->email }}" @endif>
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="fakultas_jurusan_semester"> Fakultas/ Jurusan</label>
                                            <input type="text"
                                                class="form-control @error('fakultas_jurusan_semester') is-invalid @enderror "
                                                name="fakultas_jurusan_semester" @if (old('fakultas_jurusan_semester')) value="{{ old('fakultas_jurusan_semester') }}" @else value="{{ $mahasiswa->fakultas_jurusan_semester }}" @endif>
                                            @error('fakultas_jurusan_semester')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="tempat_tanggal_lahir">Tempat dan tanggal lahir</label>
                                            <input type="text"
                                                class="form-control @error('tempat_tanggal_lahir') is-invalid @enderror "
                                                name="tempat_tanggal_lahir" @if (old('tempat_tanggal_lahir')) value="{{ old('tempat_tanggal_lahir') }}" @else value="{{ $mahasiswa->tempat_tanggal_lahir }}" @endif>
                                            @error('tempat_tanggal_lahir')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class=" mb-3">
                                            <label for="nama_org_tua">Nama Orang Tua</label>
                                            <input type="text"
                                                class="form-control @error('nama_org_tua') is-invalid @enderror"
                                                name="nama_org_tua" @if (old('nama_org_tuar')) value="{{ old('nama_org_tua') }}" @else value="{{ $mahasiswa->nama_org_tua }}" @endif>
                                            @error('nama_org_tua')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat_lengkap">Alamat</label>
                                            <input type="text"
                                                class="form-control @error('alamat_lengkap') is-invalid @enderror"
                                                name="alamat_lengkap" @if (old('alamat_lengkap')) value="{{ old('alamat_lengkap') }}" @else value="{{ $mahasiswa->alamat_lengkap }}" @endif>
                                            @error('alamat_lengkap')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nim">NIM</label>
                                            <input type="text" class="form-control @error('nim') is-invalid @enderror "
                                                name="nim" @if (old('nim')) value="{{ old('nim') }}" @else value="{{ $mahasiswa->nim }}" @endif>
                                            @error('nim')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror " name="password">
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_hp_mahasantri">No hp</label>
                                            <input type="text"
                                                class="form-control @error('no_hp_mahasantri') is-invalid @enderror "
                                                 name="no_hp_mahasantri" @if (old('no_hp_mahasantri')) value="{{ old('no_hp_mahasantri') }}" @else value="{{ $mahasiswa->no_hp_mahasantri }}" @endif>
                                            @error('no_hp_mahasantri')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="jalur_masuk"  >Jalur
                                                Masuk:</label>
                                            <select class="form-control" name="jalur_masuk">
                                                <option value="SNMPTN">SNMPTN</option>
                                                <option value="SPAN PTKIN">SPAN PTKIN </option>
                                                <option value="SBMPTN">SBMPTN</option>
                                                <option value="UMPTKIN">UMPTKIN</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_hp_org_tua">No Hp Orang Tua / Wali</label>
                                            <input type="text"
                                                class="form-control @error('no_hp_org_tua') is-invalid @enderror "
                                                 name="no_hp_org_tua" @if (old('no_hp_org_tua')) value="{{ old('no_hp_org_tua') }}" @else value="{{ $mahasiswa->no_hp_org_tua }}" @endif>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kode_mabna">Mabna:</label>
                                            <select class="form-control"  name="kode_mabna">
                                                @foreach($mabna as $mabna)
                                                <option value="{{ $mabna->kode_mabna }}">{{ $mabna->nama_mabna }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit" id="submit"
                                        name="submit">Submit</button>
                                    <button class="btn btn-secondary" type="reset">Reset</button>
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
