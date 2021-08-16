@extends('layouts.student.master')

@section('title', 'Mahasiswa')
@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Admin Panel</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                <div class="breadcrumb-item">Form</div>
            </div>
        </div>

        <div class="section-body">

            <h2>asgas</h2>


        </div>
    </section>
@endsection

@push('page-scripts')
    <script src=" {{ asset('assets/js/page/modules-sweetalert.js') }}"></script>
@endpush

@push('after-scripts')

    
@endpush
