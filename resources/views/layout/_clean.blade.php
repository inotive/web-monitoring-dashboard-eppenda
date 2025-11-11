@extends('layout.master')

@section('content')
    <!--begin::Clean Dashboard-->
    <div class="d-flex flex-column min-vh-100" style="padding-top: 2rem;">
        <!--begin::Content container-->
        <div class="container-fluid px-4 px-lg-6">
            {{ $slot }}
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Clean Dashboard-->

    @include('partials/_scrolltop')
@endsection
