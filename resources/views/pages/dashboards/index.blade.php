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
                            <div class="fs-6 text-white mb-1">Badan Pendapatan Daerah Kabupaten Tabalong</div>
                            <div class="fs-7 text-white opacity-75" id="refreshCounter">Memuat data...</div>
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
            <div class="card h-100 shadow-sm" id="padCard">
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
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="d-flex justify-content-center">
                                <div class="position-relative" style="width: 110px; height: 110px;" id="padProgress">
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
                                    <div class="fw-bold fs-6" data-field="target">Rp0</div>
                                </div>
                                <div>
                                    <div class="text-gray-600 fs-8">Realisasi Hari Ini</div>
                                    <div class="fw-bold fs-6" data-field="realisasi-hari-ini">Rp0</div>
                                </div>
                                <div>
                                    <div class="text-gray-600 fs-8">Realisasi</div>
                                    <div class="fw-bold fs-6" data-field="realisasi">Rp0</div>
                                </div>
                                <div>
                                    <div class="text-gray-600 fs-8">Sisa Target</div>
                                    <div class="fw-bold fs-6" data-field="sisa-target">Rp0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dana Transfer Card -->
        <div class="col-12 col-md-4">
            <div class="card h-100 shadow-sm" id="danaTransferCard">
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
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="d-flex justify-content-center">
                                <div class="position-relative" style="width: 110px; height: 110px;" id="danaTransferProgress">
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
                                    <div class="fw-bold fs-6" data-field="target">Rp0</div>
                                </div>
                                <div>
                                    <div class="text-gray-600 fs-8">Realisasi Hari Ini</div>
                                    <div class="fw-bold fs-6" data-field="realisasi-hari-ini">Rp0</div>
                                </div>
                                <div>
                                    <div class="text-gray-600 fs-8">Realisasi</div>
                                    <div class="fw-bold fs-6" data-field="realisasi">Rp0</div>
                                </div>
                                <div>
                                    <div class="text-gray-600 fs-8">Sisa Target</div>
                                    <div class="fw-bold fs-6" data-field="sisa-target">Rp0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pendapatan Lainnya Card -->
        <div class="col-12 col-md-4">
            <div class="card h-100 shadow-sm" id="pendapatanLainnyaCard">
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
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="d-flex justify-content-center">
                                <div class="position-relative" style="width: 110px; height: 110px;" id="pendapatanLainnyaProgress">
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
                                    <div class="fw-bold fs-6" data-field="target">Rp0</div>
                                </div>
                                <div>
                                    <div class="text-gray-600 fs-8">Realisasi Hari Ini</div>
                                    <div class="fw-bold fs-6" data-field="realisasi-hari-ini">Rp0</div>
                                </div>
                                <div>
                                    <div class="text-gray-600 fs-8">Realisasi</div>
                                    <div class="fw-bold fs-6" data-field="realisasi">Rp0</div>
                                </div>
                                <div>
                                    <div class="text-gray-600 fs-8">Sisa Target</div>
                                    <div class="fw-bold fs-6" data-field="sisa-target">Rp0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- laporan --}}
    <div class="card shadow-sm mb-5">
        <div class="card-body py-4 px-3 px-lg-4">
            <div class="mb-3 d-flex align-items-center gap-2">
                <span class="bg-warning rounded-circle d-flex align-items-center justify-content-center" style="width:22px; height:22px;">
                    <i class="ki-duotone ki-element-11 fs-5 text-white">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                        <span class="path6"></span>
                        <span class="path7"></span>
                        <span class="path8"></span>
                        <span class="path9"></span>
                    </i>
                </span>
                <span class="fw-bold fs-6">Laporan Target & Realisasi</span>
            </div>
            <div class="d-flex flex-column gap-3">
                <!-- Total Target -->
                <div class="d-flex align-items-center gap-3">
                    <span class="fs-8 flex-grow-0" style="min-width:130px;">Total Target</span>
                    <div class="flex-grow-1">
                        <div class="progress" style="height:16px; background:#ffe0ed;">
                            <div class="progress-bar" role="progressbar" style="width: 70%; background: linear-gradient(90deg, #ec4899 10%, #f472b6 100%);" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <span class="fw-semibold fs-8 ms-4 text-gray-700" style="white-space:nowrap;">Rp3.537.074.632.209</span>
                </div>
                <!-- Total Sisa Target -->
                <div class="d-flex align-items-center gap-3">
                    <span class="fs-8 flex-grow-0" style="min-width:130px;">Total Sisa Target</span>
                    <div class="flex-grow-1">
                        <div class="progress" style="height:16px; background:#ffe0ed;">
                            <div class="progress-bar" role="progressbar" style="width: 60%; background: linear-gradient(90deg, #ec4899 10%, #f472b6 100%);" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <span class="fw-semibold fs-8 ms-4 text-gray-700" style="white-space:nowrap;">Rp2.131.978.042.209</span>
                </div>
                <!-- Total Realisasi -->
                <div class="d-flex align-items-center gap-3">
                    <span class="fs-8 flex-grow-0" style="min-width:130px;">Total Realisasi</span>
                    <div class="flex-grow-1">
                        <div class="progress" style="height:16px; background:#ffe0ed;">
                            <div class="progress-bar" role="progressbar" style="width: 80%; background: linear-gradient(90deg, #ec4899 10%, #f472b6 100%);" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <span class="fw-semibold fs-8 ms-4 text-gray-700" style="white-space:nowrap;">Rp1.405.096.590.256</span>
                </div>
                <!-- Total Realisasi Hari Ini -->
                <div class="d-flex align-items-center gap-3">
                    <span class="fs-8 flex-grow-0" style="min-width:130px;">Total Realisasi Hari Ini</span>
                    <div class="flex-grow-1">
                        <div class="progress" style="height:16px; background:#ffe0ed;">
                            <div class="progress-bar" role="progressbar" style="width: 90%; background: linear-gradient(90deg, #ec4899 10%, #f472b6 100%);" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <span class="fw-semibold fs-8 ms-4 text-gray-700" style="white-space:nowrap;">Rp1.312.174.432.045</span>
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
                                        <div class="fw-bold fs-5 mb-0" data-tab-field="target">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi Hari Ini -->
                                <div class="col-md-6 col-12">
                                    <div class="border rounded-3 p-3 h-100 bg-white">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi Hari Ini</div>
                                        <div class="fw-bold fs-5 mb-0" data-tab-field="realisasi-hari-ini">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi -->
                                <div class="col-md-6 col-12">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-tab-field="realisasi">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-tab-badge="realisasi" style="background:rgba(41,192,108,0.10); color:#29c06c; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sisa Target -->
                                <div class="col-md-6 col-12">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Sisa Target</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-tab-field="sisa-target">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-tab-badge="sisa-target" style="background:rgba(255,46,79,0.07); color:#ff2e4f; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dana" role="tabpanel" aria-labelledby="dana-tab">
                            <div class="row g-3">
                                <!-- Target -->
                                <div class="col-md-6 col-12">
                                    <div class="border rounded-3 p-3 h-100" style="background: #fff8ea;">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Target</div>
                                        <div class="fw-bold fs-5 mb-0" data-tab-field="dana-target">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi Hari Ini -->
                                <div class="col-md-6 col-12">
                                    <div class="border rounded-3 p-3 h-100 bg-white">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi Hari Ini</div>
                                        <div class="fw-bold fs-5 mb-0" data-tab-field="dana-realisasi-hari-ini">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi -->
                                <div class="col-md-6 col-12">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-tab-field="dana-realisasi">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-tab-badge="dana-realisasi" style="background:rgba(41,192,108,0.10); color:#29c06c; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sisa Target -->
                                <div class="col-md-6 col-12">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Sisa Target</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-tab-field="dana-sisa-target">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-tab-badge="dana-sisa-target" style="background:rgba(255,46,79,0.07); color:#ff2e4f; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="lainnya" role="tabpanel" aria-labelledby="lainnya-tab">
                            <div class="row g-3">
                                <!-- Target -->
                                <div class="col-md-6 col-12">
                                    <div class="border rounded-3 p-3 h-100" style="background: #fff8ea;">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Target</div>
                                        <div class="fw-bold fs-5 mb-0" data-tab-field="lainnya-target">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi Hari Ini -->
                                <div class="col-md-6 col-12">
                                    <div class="border rounded-3 p-3 h-100 bg-white">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi Hari Ini</div>
                                        <div class="fw-bold fs-5 mb-0" data-tab-field="lainnya-realisasi-hari-ini">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi -->
                                <div class="col-md-6 col-12">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-tab-field="lainnya-realisasi">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-tab-badge="lainnya-realisasi" style="background:rgba(41,192,108,0.10); color:#29c06c; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sisa Target -->
                                <div class="col-md-6 col-12">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Sisa Target</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-tab-field="lainnya-sisa-target">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-tab-badge="lainnya-sisa-target" style="background:rgba(255,46,79,0.07); color:#ff2e4f; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        <!-- Tenaga Listrik Tab -->
                        <div class="tab-pane fade show active" id="tenaga-listrik" role="tabpanel" aria-labelledby="tenaga-listrik-tab">
                            <div class="row g-3">
                                <!-- Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100" style="background: #fff8ea;">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Target</div>
                                        <div class="fw-bold fs-5 mb-0" data-pbjt-field="tenaga-listrik-target">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi Hari Ini -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi Hari Ini</div>
                                        <div class="fw-bold fs-5 mb-0" data-pbjt-field="tenaga-listrik-realisasi-hari-ini">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-pbjt-field="tenaga-listrik-realisasi">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-pbjt-badge="tenaga-listrik-realisasi" style="background:rgba(41,192,108,0.10); color:#29c06c; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sisa Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Sisa Target</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-pbjt-field="tenaga-listrik-sisa-target">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-pbjt-badge="tenaga-listrik-sisa-target" style="background:rgba(255,46,79,0.07); color:#ff2e4f; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Makanan/Minuman Tab -->
                        <div class="tab-pane fade" id="makanan" role="tabpanel" aria-labelledby="makanan-tab">
                            <div class="row g-3">
                                <!-- Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100" style="background: #fff8ea;">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Target</div>
                                        <div class="fw-bold fs-5 mb-0" data-pbjt-field="makanan-target">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi Hari Ini -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi Hari Ini</div>
                                        <div class="fw-bold fs-5 mb-0" data-pbjt-field="makanan-realisasi-hari-ini">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-pbjt-field="makanan-realisasi">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-pbjt-badge="makanan-realisasi" style="background:rgba(41,192,108,0.10); color:#29c06c; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sisa Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Sisa Target</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-pbjt-field="makanan-sisa-target">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-pbjt-badge="makanan-sisa-target" style="background:rgba(255,46,79,0.07); color:#ff2e4f; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Perhotelan Tab -->
                        <div class="tab-pane fade" id="perhotelan" role="tabpanel" aria-labelledby="perhotelan-tab">
                            <div class="row g-3">
                                <!-- Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100" style="background: #fff8ea;">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Target</div>
                                        <div class="fw-bold fs-5 mb-0" data-pbjt-field="perhotelan-target">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi Hari Ini -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi Hari Ini</div>
                                        <div class="fw-bold fs-5 mb-0" data-pbjt-field="perhotelan-realisasi-hari-ini">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-pbjt-field="perhotelan-realisasi">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-pbjt-badge="perhotelan-realisasi" style="background:rgba(41,192,108,0.10); color:#29c06c; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sisa Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Sisa Target</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-pbjt-field="perhotelan-sisa-target">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-pbjt-badge="perhotelan-sisa-target" style="background:rgba(255,46,79,0.07); color:#ff2e4f; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Kesenian dan Hiburan Tab -->
                        <div class="tab-pane fade" id="kesenian" role="tabpanel" aria-labelledby="kesenian-tab">
                            <div class="row g-3">
                                <!-- Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100" style="background: #fff8ea;">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Target</div>
                                        <div class="fw-bold fs-5 mb-0" data-pbjt-field="kesenian-target">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi Hari Ini -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi Hari Ini</div>
                                        <div class="fw-bold fs-5 mb-0" data-pbjt-field="kesenian-realisasi-hari-ini">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-pbjt-field="kesenian-realisasi">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-pbjt-badge="kesenian-realisasi" style="background:rgba(41,192,108,0.10); color:#29c06c; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sisa Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Sisa Target</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-pbjt-field="kesenian-sisa-target">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-pbjt-badge="kesenian-sisa-target" style="background:rgba(255,46,79,0.07); color:#ff2e4f; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Parkir Tab -->
                        <div class="tab-pane fade" id="parkir" role="tabpanel" aria-labelledby="parkir-tab">
                            <div class="row g-3">
                                <!-- Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100" style="background: #fff8ea;">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Target</div>
                                        <div class="fw-bold fs-5 mb-0" data-pbjt-field="parkir-target">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi Hari Ini -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi Hari Ini</div>
                                        <div class="fw-bold fs-5 mb-0" data-pbjt-field="parkir-realisasi-hari-ini">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-pbjt-field="parkir-realisasi">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-pbjt-badge="parkir-realisasi" style="background:rgba(41,192,108,0.10); color:#29c06c; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sisa Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Sisa Target</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-pbjt-field="parkir-sisa-target">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-pbjt-badge="parkir-sisa-target" style="background:rgba(255,46,79,0.07); color:#ff2e4f; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        <!-- Air Tanah Tab -->
                        <div class="tab-pane fade show active" id="air-tanah" role="tabpanel" aria-labelledby="air-tanah-tab">
                            <div class="row g-3">
                                <!-- Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100" style="background: #fff8ea;">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Target</div>
                                        <div class="fw-bold fs-5 mb-0" data-lain-field="air-tanah-target">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi Hari Ini -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi Hari Ini</div>
                                        <div class="fw-bold fs-5 mb-0" data-lain-field="air-tanah-realisasi-hari-ini">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-lain-field="air-tanah-realisasi">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-lain-badge="air-tanah-realisasi" style="background:rgba(41,192,108,0.10); color:#29c06c; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sisa Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Sisa Target</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-lain-field="air-tanah-sisa-target">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-lain-badge="air-tanah-sisa-target" style="background:rgba(255,46,79,0.07); color:#ff2e4f; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Reklame Tab -->
                        <div class="tab-pane fade" id="reklame" role="tabpanel" aria-labelledby="reklame-tab">
                            <div class="row g-3">
                                <!-- Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100" style="background: #fff8ea;">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Target</div>
                                        <div class="fw-bold fs-5 mb-0" data-lain-field="reklame-target">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi Hari Ini -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi Hari Ini</div>
                                        <div class="fw-bold fs-5 mb-0" data-lain-field="reklame-realisasi-hari-ini">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-lain-field="reklame-realisasi">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-lain-badge="reklame-realisasi" style="background:rgba(41,192,108,0.10); color:#29c06c; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sisa Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Sisa Target</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-lain-field="reklame-sisa-target">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-lain-badge="reklame-sisa-target" style="background:rgba(255,46,79,0.07); color:#ff2e4f; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Minerba Tab -->
                        <div class="tab-pane fade" id="minerba" role="tabpanel" aria-labelledby="minerba-tab">
                            <div class="row g-3">
                                <!-- Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100" style="background: #fff8ea;">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Target</div>
                                        <div class="fw-bold fs-5 mb-0" data-lain-field="minerba-target">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi Hari Ini -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi Hari Ini</div>
                                        <div class="fw-bold fs-5 mb-0" data-lain-field="minerba-realisasi-hari-ini">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-lain-field="minerba-realisasi">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-lain-badge="minerba-realisasi" style="background:rgba(41,192,108,0.10); color:#29c06c; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sisa Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Sisa Target</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-lain-field="minerba-sisa-target">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-lain-badge="minerba-sisa-target" style="background:rgba(255,46,79,0.07); color:#ff2e4f; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sarang Walet Tab -->
                        <div class="tab-pane fade" id="sarang-walet" role="tabpanel" aria-labelledby="sarang-walet-tab">
                            <div class="row g-3">
                                <!-- Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100" style="background: #fff8ea;">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Target</div>
                                        <div class="fw-bold fs-5 mb-0" data-lain-field="sarang-walet-target">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi Hari Ini -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi Hari Ini</div>
                                        <div class="fw-bold fs-5 mb-0" data-lain-field="sarang-walet-realisasi-hari-ini">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-lain-field="sarang-walet-realisasi">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-lain-badge="sarang-walet-realisasi" style="background:rgba(41,192,108,0.10); color:#29c06c; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sisa Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Sisa Target</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-lain-field="sarang-walet-sisa-target">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-lain-badge="sarang-walet-sisa-target" style="background:rgba(255,46,79,0.07); color:#ff2e4f; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        <!-- MBLB Tab (API Data) -->
                        <div class="tab-pane fade show active" id="mblb" role="tabpanel" aria-labelledby="mblb-tab">
                            <div class="row g-3">
                                <!-- Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100" style="background: #fff8ea;">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Target</div>
                                        <div class="fw-bold fs-5 mb-0" data-opsen-field="mblb-target">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi Hari Ini -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi Hari Ini</div>
                                        <div class="fw-bold fs-5 mb-0" data-opsen-field="mblb-realisasi-hari-ini">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-opsen-field="mblb-realisasi">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-opsen-badge="mblb-realisasi" style="background:rgba(41,192,108,0.10); color:#29c06c; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sisa Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Sisa Target</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-opsen-field="mblb-sisa-target">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-opsen-badge="mblb-sisa-target" style="background:rgba(255,46,79,0.07); color:#ff2e4f; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- PKB Tab (API Data) -->
                        <div class="tab-pane fade" id="pkb" role="tabpanel" aria-labelledby="pkb-tab">
                            <div class="row g-3">
                                <!-- Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100" style="background: #fff8ea;">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Target</div>
                                        <div class="fw-bold fs-5 mb-0" data-opsen-field="pkb-target">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi Hari Ini -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi Hari Ini</div>
                                        <div class="fw-bold fs-5 mb-0" data-opsen-field="pkb-realisasi-hari-ini">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-opsen-field="pkb-realisasi">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-opsen-badge="pkb-realisasi" style="background:rgba(41,192,108,0.10); color:#29c06c; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sisa Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Sisa Target</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-opsen-field="pkb-sisa-target">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-opsen-badge="pkb-sisa-target" style="background:rgba(255,46,79,0.07); color:#ff2e4f; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- BBNKB Tab (API Data) -->
                        <div class="tab-pane fade" id="bbnkb" role="tabpanel" aria-labelledby="bbnkb-tab">
                            <div class="row g-3">
                                <!-- Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100" style="background: #fff8ea;">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Target</div>
                                        <div class="fw-bold fs-5 mb-0" data-opsen-field="bbnkb-target">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi Hari Ini -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white">
                                        <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi Hari Ini</div>
                                        <div class="fw-bold fs-5 mb-0" data-opsen-field="bbnkb-realisasi-hari-ini">Rp0</div>
                                    </div>
                                </div>
                                <!-- Realisasi -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Realisasi</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-opsen-field="bbnkb-realisasi">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-opsen-badge="bbnkb-realisasi" style="background:rgba(41,192,108,0.10); color:#29c06c; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sisa Target -->
                                <div class="col-12 col-md-6">
                                    <div class="border rounded-3 p-3 h-100 bg-white d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-gray-600 fs-8 mb-1" style="margin-bottom:4px!important;">Sisa Target</div>
                                            <div class="fw-bold fs-5 mb-2 mb-md-0" data-opsen-field="bbnkb-sisa-target">Rp0</div>
                                        </div>
                                        <div class="d-flex justify-content-end w-100">
                                            <span class="badge rounded-pill fw-semibold fs-8" data-opsen-badge="bbnkb-sisa-target" style="background:rgba(255,46,79,0.07); color:#ff2e4f; padding:5px 14px;">0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    <script>
        // API Configuration
        const API_BASE_URL = 'https://e-penda.com/api/accounts';
        let refreshCounter = 0;
        let refreshInterval = null;
        const REFRESH_INTERVAL_MS = 30000; // 30 seconds

        // Format number to Indonesian Rupiah
        function formatRupiah(number) {
            if (!number && number !== 0) return 'Rp0';
            // Handle both number and string, including decimals
            const num = typeof number === 'number' ? number : parseFloat(number) || 0;
            // Round to integer for display
            const rounded = Math.round(num);
            return 'Rp' + rounded.toLocaleString('id-ID');
        }

        // Calculate percentage
        function calculatePercentage(realisasi, target) {
            if (!target || target === 0) return 0;
            return Math.round((realisasi / target) * 100);
        }

        // Update circular progress ring
        function updateProgressRing(elementId, percentage) {
            const container = document.getElementById(elementId);
            if (!container) return;

            const element = container.querySelector('.progress-ring-circle:last-child');
            if (!element) return;

            const radius = 48;
            const circumference = 2 * Math.PI * radius;
            const offset = circumference - (percentage / 100) * circumference;

            element.style.strokeDashoffset = offset;

            // Update percentage text
            const percentageText = container.querySelector('.fw-bold.fs-2.text-primary');
            if (percentageText) {
                percentageText.textContent = percentage + '%';
            }
        }

        // Update card data
        function updateCardData(cardId, data) {
            const card = document.getElementById(cardId);
            if (!card) return;

            // Use field names from API response
            const target = data.target_sesudah || data.target || data.total_target || data.target_value || 0;
            const realisasi = data.realisasi_sd_bulan_ini || data.realisasi || data.total_realisasi || data.realisasi_value || 0;
            const realisasiHariIni = data.realisasi_hari_ini || data.realisasiHariIni || data.realisasi_hariini || data.today_realisasi || 0;
            const sisaTarget = data.sisa_target || data.sisaTarget || data.sisa || (target - realisasi) || 0;
            // Use percentage from API if available, otherwise calculate
            const percentage = data.percentage !== undefined && data.percentage !== null
                ? Math.round(data.percentage)
                : calculatePercentage(realisasi, target);

            // Update progress ring (this also updates the percentage text)
            const progressRingId = cardId.replace('Card', 'Progress');
            updateProgressRing(progressRingId, percentage);

            // Update data values
            const targetElement = card.querySelector('[data-field="target"]');
            const realisasiElement = card.querySelector('[data-field="realisasi"]');
            const realisasiHariIniElement = card.querySelector('[data-field="realisasi-hari-ini"]');
            const sisaTargetElement = card.querySelector('[data-field="sisa-target"]');

            if (targetElement) targetElement.textContent = formatRupiah(target);
            if (realisasiElement) realisasiElement.textContent = formatRupiah(realisasi);
            if (realisasiHariIniElement) realisasiHariIniElement.textContent = formatRupiah(realisasiHariIni);
            if (sisaTargetElement) sisaTargetElement.textContent = formatRupiah(sisaTarget);

            // Update badges
            const realisasiBadge = card.querySelector('[data-badge="realisasi"]');
            const sisaTargetBadge = card.querySelector('[data-badge="sisa-target"]');

            if (realisasiBadge) {
                realisasiBadge.textContent = percentage + '%';
                realisasiBadge.className = 'badge rounded-pill fw-semibold fs-8';
                if (percentage >= 80) {
                    realisasiBadge.style.background = 'rgba(41,192,108,0.10)';
                    realisasiBadge.style.color = '#29c06c';
                } else {
                    realisasiBadge.style.background = 'rgba(255,46,79,0.07)';
                    realisasiBadge.style.color = '#ff2e4f';
                }
            }

            if (sisaTargetBadge) {
                const sisaPercentage = calculatePercentage(sisaTarget, target);
                sisaTargetBadge.textContent = (sisaPercentage > 0 ? '-' : '') + Math.abs(sisaPercentage) + '%';
                sisaTargetBadge.className = 'badge rounded-pill fw-semibold fs-8';
                sisaTargetBadge.style.background = 'rgba(255,46,79,0.07)';
                sisaTargetBadge.style.color = '#ff2e4f';
            }
        }

        // Map account type to card ID based on number field
        function mapAccountToCard(account) {
            const number = account.number || account.order_number || '';
            const level = account.level || 0;
            const name = (account.name || account.nama || account.title || '').toLowerCase();

            // Map based on number field (most accurate)
            // Level 2 items with number 4.1, 4.2, 4.3 are the main categories
            if (level === 2) {
                if (number.startsWith('4.1') || number === '4.1') {
                    return 'padCard';
                } else if (number.startsWith('4.2') || number === '4.2') {
                    return 'danaTransferCard';
                } else if (number.startsWith('4.3') || number === '4.3') {
                    return 'pendapatanLainnyaCard';
                }
            }

            // Fallback: Map based on name if number doesn't match
            if (name.includes('pendapatan asli daerah') || name.includes('pad')) {
                return 'padCard';
            } else if (name.includes('pendapatan transfer') || name.includes('transfer')) {
                return 'danaTransferCard';
            } else if (name.includes('lain-lain pendapatan') || name.includes('pendapatan lainnya')) {
                return 'pendapatanLainnyaCard';
            }

            return null;
        }

        // Fetch accounts data from API
        async function fetchAccountsData() {
            try {
                const response = await fetch(API_BASE_URL);
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                const result = await response.json();

                let accounts = [];

                // Handle different response formats
                if (Array.isArray(result)) {
                    accounts = result;
                } else if (result.data && Array.isArray(result.data)) {
                    accounts = result.data;
                } else if (result.accounts && Array.isArray(result.accounts)) {
                    accounts = result.accounts;
                }

                // Track which cards have been updated
                const updatedCards = {
                    padCard: false,
                    danaTransferCard: false,
                    pendapatanLainnyaCard: false
                };

                // Process each account - prioritize level 2 items (main categories)
                // Sort by level to process level 2 items first
                const sortedAccounts = [...accounts].sort((a, b) => {
                    const levelA = a.level || 0;
                    const levelB = b.level || 0;
                    return levelA - levelB;
                });

                sortedAccounts.forEach((account) => {
                    const cardId = mapAccountToCard(account);
                    if (cardId && !updatedCards[cardId]) {
                        // Only update if this card hasn't been updated yet
                        updateCardData(cardId, account);
                        updatedCards[cardId] = true;
                    }
                });

                // Update counter
                refreshCounter++;
                updateRefreshCounter();
            } catch (error) {
                console.error('Error fetching accounts data:', error);
                const counterEl = document.getElementById('refreshCounter');
                if (counterEl) {
                    counterEl.textContent = `Error: ${error.message}`;
                    counterEl.style.color = '#ff6b6b';
                }
            }
        }

        // Fetch account detail by ID
        async function fetchAccountDetail(id) {
            try {
                const response = await fetch(`${API_BASE_URL}/${id}`);
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                const data = await response.json();
                return data;
            } catch (error) {
                console.error('Error fetching account detail:', error);
                return null;
            }
        }

        // Update tab data for PAD tab
        function updatePadTabData(data) {
            const tabPane = document.getElementById('pendapatan');
            if (!tabPane) return;

            // Use field names from API response
            const target = data.target_sesudah || data.target || 0;
            const realisasi = data.realisasi_sd_bulan_ini || data.realisasi || 0;
            const realisasiHariIni = data.realisasi_hari_ini || 0;
            const sisaTarget = data.sisa_target || (target - realisasi) || 0;
            const percentage = data.percentage !== undefined && data.percentage !== null
                ? Math.round(data.percentage)
                : calculatePercentage(realisasi, target);

            // Update fields
            const targetElement = tabPane.querySelector('[data-tab-field="target"]');
            const realisasiElement = tabPane.querySelector('[data-tab-field="realisasi"]');
            const realisasiHariIniElement = tabPane.querySelector('[data-tab-field="realisasi-hari-ini"]');
            const sisaTargetElement = tabPane.querySelector('[data-tab-field="sisa-target"]');

            if (targetElement) targetElement.textContent = formatRupiah(target);
            if (realisasiElement) realisasiElement.textContent = formatRupiah(realisasi);
            if (realisasiHariIniElement) realisasiHariIniElement.textContent = formatRupiah(realisasiHariIni);
            if (sisaTargetElement) sisaTargetElement.textContent = formatRupiah(sisaTarget);

            // Update badges
            const realisasiBadge = tabPane.querySelector('[data-tab-badge="realisasi"]');
            const sisaTargetBadge = tabPane.querySelector('[data-tab-badge="sisa-target"]');

            if (realisasiBadge) {
                realisasiBadge.textContent = percentage + '%';
                if (percentage >= 80) {
                    realisasiBadge.style.background = 'rgba(41,192,108,0.10)';
                    realisasiBadge.style.color = '#29c06c';
                } else {
                    realisasiBadge.style.background = 'rgba(255,46,79,0.07)';
                    realisasiBadge.style.color = '#ff2e4f';
                }
            }

            if (sisaTargetBadge) {
                const sisaPercentage = calculatePercentage(sisaTarget, target);
                sisaTargetBadge.textContent = (sisaPercentage > 0 ? '-' : '') + Math.abs(sisaPercentage) + '%';
                if (sisaPercentage > 0) {
                    sisaTargetBadge.style.background = 'rgba(255,46,79,0.07)';
                    sisaTargetBadge.style.color = '#ff2e4f';
                } else {
                    sisaTargetBadge.style.background = 'rgba(41,192,108,0.10)';
                    sisaTargetBadge.style.color = '#29c06c';
                }
            }
        }

        // Fetch PAD tab data
        async function fetchPadTabData() {
            try {
                const data = await fetchAccountDetail(30240);
                if (data) {
                    // Handle different response formats
                    const accountData = data.data || data;
                    updatePadTabData(accountData);
                }
            } catch (error) {
                console.error('Error fetching PAD tab data:', error);
            }
        }

        // Update Dana Transfer tab data
        function updateDanaTabData(data) {
            const tabPane = document.getElementById('dana');
            if (!tabPane) return;

            // Use field names from API response
            const target = data.target_sesudah || data.target || 0;
            const realisasi = data.realisasi_sd_bulan_ini || data.realisasi || 0;
            const realisasiHariIni = data.realisasi_hari_ini || 0;
            const sisaTarget = data.sisa_target || (target - realisasi) || 0;
            const percentage = data.percentage !== undefined && data.percentage !== null
                ? Math.round(data.percentage)
                : calculatePercentage(realisasi, target);

            // Update fields
            const targetElement = tabPane.querySelector('[data-tab-field="dana-target"]');
            const realisasiElement = tabPane.querySelector('[data-tab-field="dana-realisasi"]');
            const realisasiHariIniElement = tabPane.querySelector('[data-tab-field="dana-realisasi-hari-ini"]');
            const sisaTargetElement = tabPane.querySelector('[data-tab-field="dana-sisa-target"]');

            if (targetElement) targetElement.textContent = formatRupiah(target);
            if (realisasiElement) realisasiElement.textContent = formatRupiah(realisasi);
            if (realisasiHariIniElement) realisasiHariIniElement.textContent = formatRupiah(realisasiHariIni);
            if (sisaTargetElement) sisaTargetElement.textContent = formatRupiah(sisaTarget);

            // Update badges
            const realisasiBadge = tabPane.querySelector('[data-tab-badge="dana-realisasi"]');
            const sisaTargetBadge = tabPane.querySelector('[data-tab-badge="dana-sisa-target"]');

            if (realisasiBadge) {
                realisasiBadge.textContent = percentage + '%';
                if (percentage >= 80) {
                    realisasiBadge.style.background = 'rgba(41,192,108,0.10)';
                    realisasiBadge.style.color = '#29c06c';
                } else {
                    realisasiBadge.style.background = 'rgba(255,46,79,0.07)';
                    realisasiBadge.style.color = '#ff2e4f';
                }
            }

            if (sisaTargetBadge) {
                const sisaPercentage = calculatePercentage(sisaTarget, target);
                sisaTargetBadge.textContent = (sisaPercentage > 0 ? '-' : '') + Math.abs(sisaPercentage) + '%';
                if (sisaPercentage > 0) {
                    sisaTargetBadge.style.background = 'rgba(255,46,79,0.07)';
                    sisaTargetBadge.style.color = '#ff2e4f';
                } else {
                    sisaTargetBadge.style.background = 'rgba(41,192,108,0.10)';
                    sisaTargetBadge.style.color = '#29c06c';
                }
            }
        }

        // Fetch Dana Transfer tab data
        async function fetchDanaTabData() {
            try {
                const data = await fetchAccountDetail(30481);
                if (data) {
                    // Handle different response formats
                    const accountData = data.data || data;
                    updateDanaTabData(accountData);
                }
            } catch (error) {
                console.error('Error fetching Dana Transfer tab data:', error);
            }
        }

        // Update Pendapatan Lainnya yang Sah tab data
        function updateLainnyaTabData(data) {
            const tabPane = document.getElementById('lainnya');
            if (!tabPane) return;

            // Use field names from API response
            const target = data.target_sesudah || data.target || 0;
            const realisasi = data.realisasi_sd_bulan_ini || data.realisasi || 0;
            const realisasiHariIni = data.realisasi_hari_ini || 0;
            const sisaTarget = data.sisa_target || (target - realisasi) || 0;
            const percentage = data.percentage !== undefined && data.percentage !== null
                ? Math.round(data.percentage)
                : calculatePercentage(realisasi, target);

            // Update fields
            const targetElement = tabPane.querySelector('[data-tab-field="lainnya-target"]');
            const realisasiElement = tabPane.querySelector('[data-tab-field="lainnya-realisasi"]');
            const realisasiHariIniElement = tabPane.querySelector('[data-tab-field="lainnya-realisasi-hari-ini"]');
            const sisaTargetElement = tabPane.querySelector('[data-tab-field="lainnya-sisa-target"]');

            if (targetElement) targetElement.textContent = formatRupiah(target);
            if (realisasiElement) realisasiElement.textContent = formatRupiah(realisasi);
            if (realisasiHariIniElement) realisasiHariIniElement.textContent = formatRupiah(realisasiHariIni);
            if (sisaTargetElement) sisaTargetElement.textContent = formatRupiah(sisaTarget);

            // Update badges
            const realisasiBadge = tabPane.querySelector('[data-tab-badge="lainnya-realisasi"]');
            const sisaTargetBadge = tabPane.querySelector('[data-tab-badge="lainnya-sisa-target"]');

            if (realisasiBadge) {
                realisasiBadge.textContent = percentage + '%';
                if (percentage >= 80) {
                    realisasiBadge.style.background = 'rgba(41,192,108,0.10)';
                    realisasiBadge.style.color = '#29c06c';
                } else {
                    realisasiBadge.style.background = 'rgba(255,46,79,0.07)';
                    realisasiBadge.style.color = '#ff2e4f';
                }
            }

            if (sisaTargetBadge) {
                const sisaPercentage = calculatePercentage(sisaTarget, target);
                sisaTargetBadge.textContent = (sisaPercentage > 0 ? '-' : '') + Math.abs(sisaPercentage) + '%';
                if (sisaPercentage > 0) {
                    sisaTargetBadge.style.background = 'rgba(255,46,79,0.07)';
                    sisaTargetBadge.style.color = '#ff2e4f';
                } else {
                    sisaTargetBadge.style.background = 'rgba(41,192,108,0.10)';
                    sisaTargetBadge.style.color = '#29c06c';
                }
            }
        }

        // Fetch Pendapatan Lainnya yang Sah tab data
        async function fetchLainnyaTabData() {
            try {
                const data = await fetchAccountDetail(30524);
                if (data) {
                    // Handle different response formats
                    const accountData = data.data || data;
                    updateLainnyaTabData(accountData);
                }
            } catch (error) {
                console.error('Error fetching Pendapatan Lainnya yang Sah tab data:', error);
            }
        }

        // Fetch Dana Transfer card data
        async function fetchDanaTransferCardData() {
            try {
                const data = await fetchAccountDetail(30481);
                if (data) {
                    // Handle different response formats
                    const accountData = data.data || data;
                    updateCardData('danaTransferCard', accountData);
                }
            } catch (error) {
                console.error('Error fetching Dana Transfer card data:', error);
            }
        }

        // Fetch Pendapatan Lainnya yang Sah card data
        async function fetchPendapatanLainnyaCardData() {
            try {
                const data = await fetchAccountDetail(30524);
                if (data) {
                    // Handle different response formats
                    const accountData = data.data || data;
                    updateCardData('pendapatanLainnyaCard', accountData);
                }
            } catch (error) {
                console.error('Error fetching Pendapatan Lainnya yang Sah card data:', error);
            }
        }

        // Update PBJT tab data (generic function)
        function updatePbjtTabData(tabId, data) {
            const tabPane = document.getElementById(tabId);
            if (!tabPane) return;

            // Use field names from API response
            const target = data.target_sesudah || data.target || 0;
            const realisasi = data.realisasi_sd_bulan_ini || data.realisasi || 0;
            const realisasiHariIni = data.realisasi_hari_ini || 0;
            const sisaTarget = data.sisa_target || (target - realisasi) || 0;
            const percentage = data.percentage !== undefined && data.percentage !== null
                ? Math.round(data.percentage)
                : calculatePercentage(realisasi, target);

            // Update fields
            const targetElement = tabPane.querySelector(`[data-pbjt-field="${tabId}-target"]`);
            const realisasiElement = tabPane.querySelector(`[data-pbjt-field="${tabId}-realisasi"]`);
            const realisasiHariIniElement = tabPane.querySelector(`[data-pbjt-field="${tabId}-realisasi-hari-ini"]`);
            const sisaTargetElement = tabPane.querySelector(`[data-pbjt-field="${tabId}-sisa-target"]`);

            if (targetElement) targetElement.textContent = formatRupiah(target);
            if (realisasiElement) realisasiElement.textContent = formatRupiah(realisasi);
            if (realisasiHariIniElement) realisasiHariIniElement.textContent = formatRupiah(realisasiHariIni);
            if (sisaTargetElement) sisaTargetElement.textContent = formatRupiah(sisaTarget);

            // Update badges
            const realisasiBadge = tabPane.querySelector(`[data-pbjt-badge="${tabId}-realisasi"]`);
            const sisaTargetBadge = tabPane.querySelector(`[data-pbjt-badge="${tabId}-sisa-target"]`);

            if (realisasiBadge) {
                realisasiBadge.textContent = percentage + '%';
                if (percentage >= 80) {
                    realisasiBadge.style.background = 'rgba(41,192,108,0.10)';
                    realisasiBadge.style.color = '#29c06c';
                } else {
                    realisasiBadge.style.background = 'rgba(255,46,79,0.07)';
                    realisasiBadge.style.color = '#ff2e4f';
                }
            }

            if (sisaTargetBadge) {
                const sisaPercentage = calculatePercentage(sisaTarget, target);
                sisaTargetBadge.textContent = (sisaPercentage > 0 ? '-' : '') + Math.abs(sisaPercentage) + '%';
                if (sisaPercentage > 0) {
                    sisaTargetBadge.style.background = 'rgba(255,46,79,0.07)';
                    sisaTargetBadge.style.color = '#ff2e4f';
                } else {
                    sisaTargetBadge.style.background = 'rgba(41,192,108,0.10)';
                    sisaTargetBadge.style.color = '#29c06c';
                }
            }
        }

        // Fetch PBJT tab data
        async function fetchPbjtTabData(tabId, accountId) {
            try {
                const data = await fetchAccountDetail(accountId);
                if (data) {
                    // Handle different response formats
                    const accountData = data.data || data;
                    updatePbjtTabData(tabId, accountData);
                }
            } catch (error) {
                console.error(`Error fetching PBJT tab data for ${tabId}:`, error);
            }
        }

        // Fetch all PBJT tabs data
        async function fetchAllPbjtTabsData() {
            await Promise.all([
                fetchPbjtTabData('tenaga-listrik', 30450),
                fetchPbjtTabData('makanan', 30448),
                fetchPbjtTabData('perhotelan', 30453),
                fetchPbjtTabData('kesenian', 30457),
                fetchPbjtTabData('parkir', 30455)
            ]);
        }

        // Update Objek Pajak Lain tab data (generic function)
        function updateLainTabData(tabId, data) {
            const tabPane = document.getElementById(tabId);
            if (!tabPane) return;

            // Use field names from API response
            const target = data.target_sesudah || data.target || 0;
            const realisasi = data.realisasi_sd_bulan_ini || data.realisasi || 0;
            const realisasiHariIni = data.realisasi_hari_ini || 0;
            const sisaTarget = data.sisa_target || (target - realisasi) || 0;
            const percentage = data.percentage !== undefined && data.percentage !== null
                ? Math.round(data.percentage)
                : calculatePercentage(realisasi, target);

            // Update fields
            const targetElement = tabPane.querySelector(`[data-lain-field="${tabId}-target"]`);
            const realisasiElement = tabPane.querySelector(`[data-lain-field="${tabId}-realisasi"]`);
            const realisasiHariIniElement = tabPane.querySelector(`[data-lain-field="${tabId}-realisasi-hari-ini"]`);
            const sisaTargetElement = tabPane.querySelector(`[data-lain-field="${tabId}-sisa-target"]`);

            if (targetElement) targetElement.textContent = formatRupiah(target);
            if (realisasiElement) realisasiElement.textContent = formatRupiah(realisasi);
            if (realisasiHariIniElement) realisasiHariIniElement.textContent = formatRupiah(realisasiHariIni);
            if (sisaTargetElement) sisaTargetElement.textContent = formatRupiah(sisaTarget);

            // Update badges
            const realisasiBadge = tabPane.querySelector(`[data-lain-badge="${tabId}-realisasi"]`);
            const sisaTargetBadge = tabPane.querySelector(`[data-lain-badge="${tabId}-sisa-target"]`);

            if (realisasiBadge) {
                realisasiBadge.textContent = percentage + '%';
                if (percentage >= 80) {
                    realisasiBadge.style.background = 'rgba(41,192,108,0.10)';
                    realisasiBadge.style.color = '#29c06c';
                } else {
                    realisasiBadge.style.background = 'rgba(255,46,79,0.07)';
                    realisasiBadge.style.color = '#ff2e4f';
                }
            }

            if (sisaTargetBadge) {
                const sisaPercentage = calculatePercentage(sisaTarget, target);
                sisaTargetBadge.textContent = (sisaPercentage > 0 ? '-' : '') + Math.abs(sisaPercentage) + '%';
                if (sisaPercentage > 0) {
                    sisaTargetBadge.style.background = 'rgba(255,46,79,0.07)';
                    sisaTargetBadge.style.color = '#ff2e4f';
                } else {
                    sisaTargetBadge.style.background = 'rgba(41,192,108,0.10)';
                    sisaTargetBadge.style.color = '#29c06c';
                }
            }
        }

        // Fetch Objek Pajak Lain tab data
        async function fetchLainTabData(tabId, accountId) {
            try {
                const data = await fetchAccountDetail(accountId);
                if (data) {
                    // Handle different response formats
                    const accountData = data.data || data;
                    updateLainTabData(tabId, accountData);
                }
            } catch (error) {
                console.error(`Error fetching Objek Pajak Lain tab data for ${tabId}:`, error);
            }
        }

        // Fetch all Objek Pajak Lain tabs data
        async function fetchAllLainTabsData() {
            await Promise.all([
                fetchLainTabData('air-tanah', 30249),
                fetchLainTabData('reklame', 30242),
                fetchLainTabData('minerba', 30255),
                fetchLainTabData('sarang-walet', 30252)
            ]);
        }

        // Update OPSEN tab data (generic function)
        function updateOpsenTabData(tabId, data) {
            const tabPane = document.getElementById(tabId);
            if (!tabPane) return;

            // Use field names from API response
            const target = data.target_sesudah || data.target || 0;
            const realisasi = data.realisasi_sd_bulan_ini || data.realisasi || 0;
            const realisasiHariIni = data.realisasi_hari_ini || 0;
            const sisaTarget = data.sisa_target || (target - realisasi) || 0;
            const percentage = data.percentage !== undefined && data.percentage !== null
                ? Math.round(data.percentage)
                : calculatePercentage(realisasi, target);

            // Update fields
            const targetElement = tabPane.querySelector(`[data-opsen-field="${tabId}-target"]`);
            const realisasiElement = tabPane.querySelector(`[data-opsen-field="${tabId}-realisasi"]`);
            const realisasiHariIniElement = tabPane.querySelector(`[data-opsen-field="${tabId}-realisasi-hari-ini"]`);
            const sisaTargetElement = tabPane.querySelector(`[data-opsen-field="${tabId}-sisa-target"]`);

            if (targetElement) targetElement.textContent = formatRupiah(target);
            if (realisasiElement) realisasiElement.textContent = formatRupiah(realisasi);
            if (realisasiHariIniElement) realisasiHariIniElement.textContent = formatRupiah(realisasiHariIni);
            if (sisaTargetElement) sisaTargetElement.textContent = formatRupiah(sisaTarget);

            // Update badges
            const realisasiBadge = tabPane.querySelector(`[data-opsen-badge="${tabId}-realisasi"]`);
            const sisaTargetBadge = tabPane.querySelector(`[data-opsen-badge="${tabId}-sisa-target"]`);

            if (realisasiBadge) {
                realisasiBadge.textContent = percentage + '%';
                if (percentage >= 80) {
                    realisasiBadge.style.background = 'rgba(41,192,108,0.10)';
                    realisasiBadge.style.color = '#29c06c';
                } else {
                    realisasiBadge.style.background = 'rgba(255,46,79,0.07)';
                    realisasiBadge.style.color = '#ff2e4f';
                }
            }

            if (sisaTargetBadge) {
                const sisaPercentage = calculatePercentage(sisaTarget, target);
                sisaTargetBadge.textContent = (sisaPercentage > 0 ? '-' : '') + Math.abs(sisaPercentage) + '%';
                if (sisaPercentage > 0) {
                    sisaTargetBadge.style.background = 'rgba(255,46,79,0.07)';
                    sisaTargetBadge.style.color = '#ff2e4f';
                } else {
                    sisaTargetBadge.style.background = 'rgba(41,192,108,0.10)';
                    sisaTargetBadge.style.color = '#29c06c';
                }
            }
        }

        // Fetch OPSEN tab data
        async function fetchOpsenTabData(tabId, accountId) {
            try {
                const data = await fetchAccountDetail(accountId);
                if (data) {
                    // Handle different response formats
                    const accountData = data.data || data;
                    updateOpsenTabData(tabId, accountData);
                }
            } catch (error) {
                console.error(`Error fetching OPSEN tab data for ${tabId}:`, error);
            }
        }

        // Fetch MBLB tab data
        async function fetchMblbTabData() {
            await fetchOpsenTabData('mblb', 30255);
        }

        // Fetch PKB tab data
        async function fetchPkbTabData() {
            await fetchOpsenTabData('pkb', 30294);
        }

        // Fetch BBNKB tab data
        async function fetchBbnkbTabData() {
            await fetchOpsenTabData('bbnkb', 30297);
        }

        // Fetch all OPSEN tabs data
        async function fetchAllOpsenTabsData() {
            await Promise.all([
                fetchMblbTabData(),
                fetchPkbTabData(),
                fetchBbnkbTabData()
            ]);
        }

        // Update refresh counter display
        function updateRefreshCounter() {
            const counterElement = document.getElementById('refreshCounter');
            if (counterElement) {
                const now = new Date();
                const timeString = now.toLocaleTimeString('id-ID', {
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit'
                });
                counterElement.textContent = `Terakhir diupdate: ${timeString} (Refresh ke-${refreshCounter})`;
                counterElement.style.color = 'rgba(255, 255, 255, 0.75)';
            }
        }

        // Start auto-refresh
        function startAutoRefresh() {
            if (refreshInterval) {
                clearInterval(refreshInterval);
            }
            refreshInterval = setInterval(() => {
                fetchAccountsData();
                fetchPadTabData(); // Also refresh PAD tab data
                fetchDanaTabData(); // Also refresh Dana Transfer tab data
                fetchLainnyaTabData(); // Also refresh Pendapatan Lainnya yang Sah tab data
                fetchDanaTransferCardData(); // Also refresh Dana Transfer card data
                fetchPendapatanLainnyaCardData(); // Also refresh Pendapatan Lainnya yang Sah card data
                fetchAllPbjtTabsData(); // Also refresh all PBJT tabs data
                fetchAllLainTabsData(); // Also refresh all Objek Pajak Lain tabs data
                fetchAllOpsenTabsData(); // Also refresh all OPSEN tabs data
            }, REFRESH_INTERVAL_MS);
        }

        // Stop auto-refresh
        function stopAutoRefresh() {
            if (refreshInterval) {
                clearInterval(refreshInterval);
                refreshInterval = null;
            }
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Initial data fetch
            fetchAccountsData();

            // Fetch PAD tab data
            fetchPadTabData();

            // Fetch Dana Transfer tab data
            fetchDanaTabData();

            // Fetch Pendapatan Lainnya yang Sah tab data
            fetchLainnyaTabData();

            // Fetch Dana Transfer card data
            fetchDanaTransferCardData();

            // Fetch Pendapatan Lainnya yang Sah card data
            fetchPendapatanLainnyaCardData();

            // Fetch all PBJT tabs data
            fetchAllPbjtTabsData();

            // Fetch all Objek Pajak Lain tabs data
            fetchAllLainTabsData();

            // Fetch all OPSEN tabs data
            fetchAllOpsenTabsData();

            // Start auto-refresh
            startAutoRefresh();

            // Cleanup on page unload
            window.addEventListener('beforeunload', function() {
                stopAutoRefresh();
            });
        });
    </script>
    <!--begin::Row-->
    <!--end::Row-->
</x-default-layout>
