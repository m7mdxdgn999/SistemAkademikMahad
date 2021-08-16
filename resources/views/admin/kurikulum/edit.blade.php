@extends('layouts.admin.master')
@section('title', 'Edit Data Kurikulum')

@section('content')
    <section class="section">

        {{-- header start --}}
        <div class="section-header">
            <h1>Edit Data Kurikulum</h1>

        </div>
        {{-- header end --}}

        {{-- body start --}}
        <div class="section-body">

            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Data Kurikulum</h4>
                        </div>
                        <div class="card-body">
                            
                            <form action="{{ route('kurikulum.update', $kurikulum->kode_kurikulum) }}" method="post">
                                                          
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_kurikulum">Kode Kurikulum</label>                                            
                                                {{ Form::text ('kode_kurikulum',$kurikulum->kode_kurikulum,['class'=>'form-control','placeholder'=>'Kode Kurikulum']) }}                                           
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_mabna">Mabna</label>
                                            {{ Form::select('kode_mabna',$mabna,$kurikulum->kode_mabna,['class'=>'form-control']) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_pembinaan">Pembiaan</label>
                                            {{ Form::select('kode_pembinaan',$pembinaan,$kurikulum->kode_pembinaan,['class'=>'form-control']) }}
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="semester">Semester</label>
                                            <select class="form-control form-control-sm" name="semester">                                                     
                                                    <option value="genap">Genap</option>
                                                    <option value="ganjil">Ganjil</option>                                                                                          
                                            </select>
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
