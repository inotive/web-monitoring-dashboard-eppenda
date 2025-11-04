<x-default-layout>

    @section('title')
        Dashboard
    @endsection

    <!-- Header Banner -->
    <div class="row mb-4 mb-md-5">
        <div class="col-12">
            <div class="rounded-4 overflow-hidden" style="background: linear-gradient(90deg,#FF8C00  0%, #FFB700 100%); min-height: 80px; padding: 0;">
                <div class="container-fluid px-0">
                    <div class="row align-items-center px-3 px-md-5 py-4 py-md-5 gx-0">
                        <!-- Left: Date & Department -->
                        <div class="col-12 col-md-8 d-flex flex-column justify-content-center text-center text-md-start mb-3 mb-md-0">
                            <div class="fw-semibold fs-5 text-white mb-1">Senin, 15 September 2025</div>
                            <div class="fs-6 text-white">Badan Pendapatan Daerah Kabupaten Tabalong</div>
                        </div>
                        <!-- Right: Logo -->
                        <div class="col-12 col-md-4 d-flex align-items-end justify-content-center justify-content-md-end">
                            <img
                                src="{{ asset('icon/icon.png') }}"
                                alt="Logo Tabalong"
                                class="img-fluid"
                                style="height:100px; max-width:180px; width:auto; object-fit:contain; margin-top:1rem; margin-bottom:-1.5rem;"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Row - Main Data Cards -->
    <div class="row g-4 mb-4 mb-md-5">
        <!-- PAD Card -->
        <div class="col-12 col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body py-4 px-3 px-lg-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center" style="width:40px;height:40px;">
                                <i class="ki-duotone ki-pin fs-2 text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                    <span class="path7"></span>
                                    <span class="path8"></span>
                                </i>
                            </div>
                            <span class="fw-bold fs-6">Pendapatan Asli Daerah (PAD)</span>
                        </div>
                        <button class="btn btn-light-warning btn-sm rounded-3 fw-bold px-3">
                            <i class="ki-duotone ki-setting-2 fs-5 me-1"></i> Pengaturan
                        </button>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="d-flex justify-content-center">
                                <div class="position-relative" style="width: 110px; height: 110px;">
                                    <svg class="progress-ring" width="110" height="110">
                                        <circle class="progress-ring-circle" stroke="#e5e7eb" stroke-width="11" fill="transparent" r="48" cx="55" cy="55"/>
                                        <circle class="progress-ring-circle" stroke="#3b82f6" stroke-width="11" fill="transparent" r="48" cx="55" cy="55"
                                            stroke-dasharray="301.59" stroke-dashoffset="36.19" stroke-linecap="round"/>
                                    </svg>
                                    <div class="position-absolute top-50 start-50 translate-middle text-center">
                                        <div class="fw-bold fs-2 text-primary">88%</div>
                                        <div class="fs-7 text-muted">Realisasi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column gap-2">
                                <div>
                                    <div class="text-gray-600 fs-8">Target</div>
                                    <div class="fw-bold fs-6">Rp335.877.042.225</div>
                                </div>
                                <div>
                                    <div class="text-gray-600 fs-8">Realisasi Hari Ini</div>
                                    <div class="fw-bold fs-6">Rp335.877.042.225</div>
                                </div>
                                <div>
                                    <div class="text-gray-600 fs-8">Realisasi</div>
                                    <div class="fw-bold fs-6">Rp335.877.042.225</div>
                                </div>
                                <div>
                                    <div class="text-gray-600 fs-8">Sisa Target</div>
                                    <div class="fw-bold fs-6">Rp335.877.042.225</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dana Transfer Card -->
        <div class="col-12 col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body py-4 px-3 px-lg-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center" style="width:40px;height:40px;">
                                <i class="ki-duotone ki-document fs-2 text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <span class="fw-bold fs-6">Dana Transfer</span>
                        </div>
                        <button class="btn btn-light-warning btn-sm rounded-3 fw-bold px-3">
                            <i class="ki-duotone ki-setting-2 fs-5 me-1"></i> Pengaturan
                        </button>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="d-flex justify-content-center">
                                <div class="position-relative" style="width: 110px; height: 110px;">
                                    <svg class="progress-ring" width="110" height="110">
                                        <circle class="progress-ring-circle" stroke="#e5e7eb" stroke-width="11" fill="transparent" r="48" cx="55" cy="55"/>
                                        <circle class="progress-ring-circle" stroke="#3b82f6" stroke-width="11" fill="transparent" r="48" cx="55" cy="55"
                                            stroke-dasharray="301.59" stroke-dashoffset="36.19" stroke-linecap="round"/>
                                    </svg>
                                    <div class="position-absolute top-50 start-50 translate-middle text-center">
                                        <div class="fw-bold fs-2 text-primary">88%</div>
                                        <div class="fs-7 text-muted">Realisasi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column gap-2">
                                <div>
                                    <div class="text-gray-600 fs-8">Target</div>
                                    <div class="fw-bold fs-6">Rp335.877.042.225</div>
                                </div>
                                <div>
                                    <div class="text-gray-600 fs-8">Realisasi Hari Ini</div>
                                    <div class="fw-bold fs-6">Rp335.877.042.225</div>
                                </div>
                                <div>
                                    <div class="text-gray-600 fs-8">Realisasi</div>
                                    <div class="fw-bold fs-6">Rp335.877.042.225</div>
                                </div>
                                <div>
                                    <div class="text-gray-600 fs-8">Sisa Target</div>
                                    <div class="fw-bold fs-6">Rp335.877.042.225</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pendapatan Lainnya Card -->
        <div class="col-12 col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body py-4 px-3 px-lg-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center" style="width:40px;height:40px;">
                                <i class="ki-duotone ki-document fs-2 text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <span class="fw-bold fs-6">Pendapatan Lainnya yang Sah</span>
                        </div>
                        <button class="btn btn-light-warning btn-sm rounded-3 fw-bold px-3">
                            <i class="ki-duotone ki-setting-2 fs-5 me-1"></i> Pengaturan
                        </button>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="d-flex justify-content-center">
                                <div class="position-relative" style="width: 110px; height: 110px;">
                                    <svg class="progress-ring" width="110" height="110">
                                        <circle class="progress-ring-circle" stroke="#e5e7eb" stroke-width="11" fill="transparent" r="48" cx="55" cy="55"/>
                                        <circle class="progress-ring-circle" stroke="#3b82f6" stroke-width="11" fill="transparent" r="48" cx="55" cy="55"
                                            stroke-dasharray="301.59" stroke-dashoffset="36.19" stroke-linecap="round"/>
                                    </svg>
                                    <div class="position-absolute top-50 start-50 translate-middle text-center">
                                        <div class="fw-bold fs-2 text-primary">88%</div>
                                        <div class="fs-7 text-muted">Realisasi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column gap-2">
                                <div>
                                    <div class="text-gray-600 fs-8">Target</div>
                                    <div class="fw-bold fs-6">Rp335.877.042.225</div>
                                </div>
                                <div>
                                    <div class="text-gray-600 fs-8">Realisasi Hari Ini</div>
                                    <div class="fw-bold fs-6">Rp335.877.042.225</div>
                                </div>
                                <div>
                                    <div class="text-gray-600 fs-8">Realisasi</div>
                                    <div class="fw-bold fs-6">Rp335.877.042.225</div>
                                </div>
                                <div>
                                    <div class="text-gray-600 fs-8">Sisa Target</div>
                                    <div class="fw-bold fs-6">Rp335.877.042.225</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
        </div>
    </div>

    <!-- 2x2 Grid Layout -->
    <div class="row g-4 mb-4 mb-md-5">
        <!-- Top Left - Grafik Pendapatan Daerah -->
        <div class="col-lg-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body py-4 px-3 px-lg-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center" style="width:28px;height:28px;">
                                <i class="ki-duotone ki-pin fs-2 text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                    <span class="path7"></span>
                                    <span class="path8"></span>
                                </i>
                            </div>
                            <span class="fw-bold fs-5">Grafik Pendapatan Daerah</span>
                        </div>
                        <button class="btn btn-light-warning btn-sm rounded-3 fw-bold px-3">
                            <i class="ki-duotone ki-setting-2 fs-5 me-1"></i> Pengaturan
                        </button>
                    </div>
                    <!-- Begin Tabs -->
                    <ul class="nav nav-tabs mb-4 custom-tabs" id="padTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active fw-semibold" id="pendapatan-tab" data-bs-toggle="tab" data-bs-target="#pendapatan" type="button" role="tab" aria-controls="pendapatan" aria-selected="true">
                                Pendapatan Asli Daerah (PAD)
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-semibold" id="dana-tab" data-bs-toggle="tab" data-bs-target="#dana" type="button" role="tab" aria-controls="dana" aria-selected="false">
                                Dana Transfer
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-semibold" id="lainnya-tab" data-bs-toggle="tab" data-bs-target="#lainnya" type="button" role="tab" aria-controls="lainnya" aria-selected="false">
                                Pendapatan Lainnya yang Sah
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="padTabsContent">
                        <div class="tab-pane fade show active" id="pendapatan" role="tabpanel" aria-labelledby="pendapatan-tab">
                            <div class="row g-3">
                                <!-- Target -->
                                <div class="col-md-6 col-12">
                                    <div class="border rounded-3 p-3 h-100" style="background: #fff8ea;">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Target</div>
                                        <div class="fw-bold fs-5 mb-0">Rp335.877.042.225</div>
                                    </div>
                                </div>
                                <!-- Realisasi Hari Ini -->
                                <div class="col-md-6 col-12">
                                    <div class="border rounded-3 p-3 h-100 bg-white">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi Hari Ini</div>
                                        <div class="fw-bold fs-5 mb-0">Rp335.877.042.225</div>
                                    </div>
                                </div>
                                <!-- Realisasi -->
                                <div class="col-md-6 col-12">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0">Rp335.877.042.225</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" style="background:rgba(41,192,108,0.10); color:#29c06c; padding:5px 14px;">88%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sisa Target -->
                                <div class="col-md-6 col-12">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Sisa Target</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0">Rp335.877.042.225</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" style="background:rgba(255,46,79,0.07); color:#ff2e4f; padding:5px 14px;">-12%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dana" role="tabpanel" aria-labelledby="dana-tab">
                            <div class="alert alert-info py-4">Data Dana Transfer tidak tersedia.</div>
                        </div>
                        <div class="tab-pane fade" id="lainnya" role="tabpanel" aria-labelledby="lainnya-tab">
                            <div class="alert alert-info py-4">Data Pendapatan Lainnya belum tersedia.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Right - PBJT -->
        <div class="col-lg-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body py-4 px-3 px-lg-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center" style="width:28px;height:28px;">
                                <i class="ki-duotone ki-calendar fs-2 text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </div>
                            <span class="fw-bold fs-5">Panduan Lengkap Pajak Barang dan Jasa Tertentu (PBJT)</span>
                        </div>
                        <button class="btn btn-light-warning btn-sm rounded-3 fw-bold px-3">
                            <i class="ki-duotone ki-setting-2 fs-5 me-1"></i> Pengaturan
                        </button>
                    </div>
                    <!-- Begin Tabs -->
                    <ul class="nav nav-tabs mb-4 custom-tabs" id="pbjtTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active fw-semibold" id="tenaga-listrik-tab" data-bs-toggle="tab" data-bs-target="#tenaga-listrik" type="button" role="tab" aria-controls="tenaga-listrik" aria-selected="true">
                                Tenaga Listrik
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-semibold" id="makanan-tab" data-bs-toggle="tab" data-bs-target="#makanan" type="button" role="tab" aria-controls="makanan" aria-selected="false">
                                Makanan/Minuman
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-semibold" id="perhotelan-tab" data-bs-toggle="tab" data-bs-target="#perhotelan" type="button" role="tab" aria-controls="perhotelan" aria-selected="false">
                                Perhotelan
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-semibold" id="kesenian-tab" data-bs-toggle="tab" data-bs-target="#kesenian" type="button" role="tab" aria-controls="kesenian" aria-selected="false">
                                Kesenian dan Hiburan
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-semibold" id="parkir-tab" data-bs-toggle="tab" data-bs-target="#parkir" type="button" role="tab" aria-controls="parkir" aria-selected="false">
                                Parkir
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pbjtTabsContent">
                        <div class="tab-pane fade show active" id="tenaga-listrik" role="tabpanel" aria-labelledby="tenaga-listrik-tab">
                            <div class="row g-3">
                                <!-- Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100" style="background: #fff8ea;">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Target</div>
                                        <div class="fw-bold fs-5 mb-0">Rp335.877.042.225</div>
                                    </div>
                                </div>
                                <!-- Realisasi Hari Ini -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi Hari Ini</div>
                                        <div class="fw-bold fs-5 mb-0">Rp335.877.042.225</div>
                                    </div>
                                </div>
                                <!-- Realisasi -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0">Rp335.877.042.225</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" style="background:rgba(41,192,108,0.10); color:#29c06c; padding:5px 14px;">88%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sisa Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Sisa Target</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0">Rp335.877.042.225</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" style="background:rgba(255,46,79,0.07); color:#ff2e4f; padding:5px 14px;">-12%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="makanan" role="tabpanel" aria-labelledby="makanan-tab">
                            <div class="alert alert-info py-4">Data Makanan/Minuman tidak tersedia.</div>
                        </div>
                        <div class="tab-pane fade" id="perhotelan" role="tabpanel" aria-labelledby="perhotelan-tab">
                            <div class="alert alert-info py-4">Data Perhotelan tidak tersedia.</div>
                        </div>
                        <div class="tab-pane fade" id="kesenian" role="tabpanel" aria-labelledby="kesenian-tab">
                            <div class="alert alert-info py-4">Data Kesenian dan Hiburan tidak tersedia.</div>
                        </div>
                        <div class="tab-pane fade" id="parkir" role="tabpanel" aria-labelledby="parkir-tab">
                            <div class="alert alert-info py-4">Data Parkir tidak tersedia.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Row -->
    <div class="row g-4 mb-4 mb-md-5">
        <!-- Bottom Left - Objek Pajak Lain -->
        <div class="col-lg-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body py-4 px-3 px-lg-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center" style="width:28px;height:28px;">
                                <i class="ki-duotone ki-check-square fs-2 text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </div>
                            <span class="fw-bold fs-5">Objek Pajak Lain</span>
                        </div>
                        <button class="btn btn-light-warning btn-sm rounded-3 fw-bold px-3">
                            <i class="ki-duotone ki-setting-2 fs-5 me-1"></i> Pengaturan
                        </button>
                    </div>
                    <!-- Begin Tabs -->
                    <ul class="nav nav-tabs mb-4 custom-tabs" id="lainTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active fw-semibold" id="air-tanah-tab" data-bs-toggle="tab" data-bs-target="#air-tanah" type="button" role="tab" aria-controls="air-tanah" aria-selected="true">
                                Air Tanah
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-semibold" id="reklame-tab" data-bs-toggle="tab" data-bs-target="#reklame" type="button" role="tab" aria-controls="reklame" aria-selected="false">
                                Reklame
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-semibold" id="minerba-tab" data-bs-toggle="tab" data-bs-target="#minerba" type="button" role="tab" aria-controls="minerba" aria-selected="false">
                                Minerba
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-semibold" id="sarang-walet-tab" data-bs-toggle="tab" data-bs-target="#sarang-walet" type="button" role="tab" aria-controls="sarang-walet" aria-selected="false">
                                Sarang Walet
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="lainTabsContent">
                        <div class="tab-pane fade show active" id="air-tanah" role="tabpanel" aria-labelledby="air-tanah-tab">
                            <div class="row g-3">
                                <!-- Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100" style="background: #fff8ea;">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Target</div>
                                        <div class="fw-bold fs-5 mb-0">Rp335.877.042.225</div>
                                    </div>
                                </div>
                                <!-- Realisasi Hari Ini -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi Hari Ini</div>
                                        <div class="fw-bold fs-5 mb-0">Rp335.877.042.225</div>
                                    </div>
                                </div>
                                <!-- Realisasi -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0">Rp335.877.042.225</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" style="background:rgba(41,192,108,0.10); color:#29c06c; padding:5px 14px;">88%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sisa Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Sisa Target</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0">Rp335.877.042.225</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" style="background:rgba(255,46,79,0.07); color:#ff2e4f; padding:5px 14px;">-12%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reklame" role="tabpanel" aria-labelledby="reklame-tab">
                            <div class="alert alert-info py-4">Data Reklame tidak tersedia.</div>
                        </div>
                        <div class="tab-pane fade" id="minerba" role="tabpanel" aria-labelledby="minerba-tab">
                            <div class="alert alert-info py-4">Data Minerba tidak tersedia.</div>
                        </div>
                        <div class="tab-pane fade" id="sarang-walet" role="tabpanel" aria-labelledby="sarang-walet-tab">
                            <div class="alert alert-info py-4">Data Sarang Walet tidak tersedia.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Right - OPSEN -->
        <div class="col-lg-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body py-4 px-3 px-lg-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center" style="width:28px;height:28px;">
                                <i class="ki-duotone ki-dollar fs-2 text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                    <span class="path7"></span>
                                    <span class="path8"></span>
                                </i>
                            </div>
                            <span class="fw-bold fs-5">Pungutan Pajak Menurut Presentase Tertentu (OPSEN)</span>
                        </div>
                        <button class="btn btn-light-warning btn-sm rounded-3 fw-bold px-3">
                            <i class="ki-duotone ki-setting-2 fs-5 me-1"></i> Pengaturan
                        </button>
                    </div>
                    <!-- Begin Tabs -->
                    <ul class="nav nav-tabs mb-4 custom-tabs" id="opsenTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active fw-semibold" id="mblb-tab" data-bs-toggle="tab" data-bs-target="#mblb" type="button" role="tab" aria-controls="mblb" aria-selected="true">
                                MBLB
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-semibold" id="pkb-tab" data-bs-toggle="tab" data-bs-target="#pkb" type="button" role="tab" aria-controls="pkb" aria-selected="false">
                                PKB
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-semibold" id="bbnkb-tab" data-bs-toggle="tab" data-bs-target="#bbnkb" type="button" role="tab" aria-controls="bbnkb" aria-selected="false">
                                BBNKB
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="opsenTabsContent">
                        <div class="tab-pane fade show active" id="mblb" role="tabpanel" aria-labelledby="mblb-tab">
                            <div class="row g-3">
                                <!-- Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100" style="background: #fff8ea;">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Target</div>
                                        <div class="fw-bold fs-5 mb-0">Rp335.877.042.225</div>
                                    </div>
                                </div>
                                <!-- Realisasi Hari Ini -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi Hari Ini</div>
                                        <div class="fw-bold fs-5 mb-0">Rp335.877.042.225</div>
                                    </div>
                                </div>
                                <!-- Realisasi -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0">Rp335.877.042.225</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" style="background:rgba(41,192,108,0.10); color:#29c06c; padding:5px 14px;">88%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sisa Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Sisa Target</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0">Rp335.877.042.225</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" style="background:rgba(255,46,79,0.07); color:#ff2e4f; padding:5px 14px;">-12%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pkb" role="tabpanel" aria-labelledby="pkb-tab">
                            <div class="alert alert-info py-4">Data PKB tidak tersedia.</div>
                        </div>
                        <div class="tab-pane fade" id="bbnkb" role="tabpanel" aria-labelledby="bbnkb-tab">
                            <div class="alert alert-info py-4">Data BBNKB tidak tersedia.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <style>
        /* Circular Progress Ring */
        .progress-ring {
            transform: rotate(-90deg);
        }

        .progress-ring-circle {
            transition: stroke-dashoffset 0.35s;
            transform-origin: 50% 50%;
        }

        /* Custom Tab Styling */
        .custom-tabs {
            border-bottom: 1px solid #e5e7eb;
            margin-bottom: 0;
        }

        .custom-tabs .nav-link {
            border: none;
            background: transparent;
            color: #6b7280;
            font-weight: 600;
            padding: 12px 16px;
            margin-right: 8px;
            border-radius: 0;
            position: relative;
            transition: all 0.3s ease;
        }

        .custom-tabs .nav-link:hover {
            color: #f59e0b;
            background: transparent;
            border: none;
        }

        .custom-tabs .nav-link.active {
            color: #f59e0b;
            background: transparent;
            border: none;
        }

        .custom-tabs .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            right: 0;
            height: 3px;
            background: #f59e0b;
            border-radius: 2px 2px 0 0;
        }

        .custom-tabs .nav-link:not(.active) {
            color: #374151;
        }

        .custom-tabs .nav-link:not(.active):hover {
            color: #f59e0b;
        }

        /* Secondary active state (like Dana Transfer in the image) */
        .custom-tabs .nav-link.secondary-active {
            background: #f3f4f6;
            color: #111827;
            border-radius: 6px;
        }

        .custom-tabs .nav-link.secondary-active::after {
            display: none;
        }

        /* Inactive state */
        .custom-tabs .nav-link.inactive {
            color: #6b7280;
        }

        @media (max-width: 575.98px) {
            .px-lg-5 { padding-left: 1rem !important; padding-right: 1rem !important; }
            .card-body .row > [class^="col-"] { margin-bottom:1rem; }
            .custom-tabs .nav-link {
                padding: 8px 12px;
                font-size: 0.875rem;
            }
        }
    </style>
    <!--begin::Row-->
    <!--end::Row-->
</x-default-layout>
