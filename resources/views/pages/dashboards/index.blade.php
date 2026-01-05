<x-clean-layout>

    @section('title')
        Dashboard
    @endsection

    <!-- Header Banner -->
    <div class="row mb-4 mb-md-5">
        <div class="col-12">
            <div class="rounded-4 overflow-hidden"
                style="background: linear-gradient(90deg,#FF8C00  0%, #FFB700 100%); min-height: 80px;">
                <div class="container-fluid">
                    <div class="row align-items-center py-3 py-md-4">
                        <!-- Left: Date & Department -->
                        <div
                            class="col-12 col-md-8 d-flex flex-column justify-content-center text-center text-md-start mb-3 mb-md-0">
                            <div class="fw-semibold fs-5 text-white mb-1" id="currentDateTime">Memuat...</div>
                            <div class="fs-6 text-white mb-1">Badan Pendapatan Daerah Kabupaten Tabalong</div>
                            <div class="fs-7 text-white opacity-75" id="refreshCounter">Memuat data...</div>
                        </div>
                        <!-- Right: Logo -->
                        <div
                            class="col-12 col-md-4 d-flex align-items-end justify-content-center justify-content-md-end">
                            <img src="{{ asset('icon/icon.png') }}" alt="Logo Tabalong" class="img-fluid"
                                style="height:100px; max-width:180px; width:auto; object-fit:contain; margin-top:1rem; margin-bottom:-1.5rem;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Pendapatan Daerah Summary -->
    <!-- Total Pendapatan Daerah Card -->
    <div class="row g-4 mb-4 mb-md-5">
        <div class="col-12">
            <div class="card h-100 shadow-sm border-0" id="totalPendapatanCard" style="border-radius: 12px;">
                <div class="card-body py-4 px-3 px-lg-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center"
                                style="width:40px;height:40px;">
                                <i class="ki-duotone ki-chart-simple fs-2 text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </div>
                            <span class="fw-bold fs-6 text-gray-800">Total Pendapatan Daerah</span>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4">
                            <div class="d-flex justify-content-center">
                                <div class="position-relative" style="width: 140px; height: 140px;"
                                    id="totalPendapatanProgress">
                                    <svg class="progress-ring" width="140" height="140">
                                        <circle class="progress-ring-circle" stroke="#e5e7eb" stroke-width="14"
                                            fill="transparent" r="58" cx="70" cy="70" />
                                        <circle class="progress-ring-circle" stroke="#3b82f6" stroke-width="14"
                                            fill="transparent" r="58" cx="70" cy="70"
                                            stroke-dasharray="364.42" stroke-dashoffset="364.42" stroke-linecap="round"
                                            id="total-pendapatan-ring" />
                                    </svg>
                                    <div class="position-absolute top-50 start-50 translate-middle text-center">
                                        <div class="fw-bold fs-1 text-gray-800" id="summary-total-percentage">0%</div>
                                        <div class="fs-7 text-gray-600">Realisasi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="p-3 rounded" style="background: #fff8ea;">
                                        <div class="text-gray-600 fs-8 mb-1">Total Target</div>
                                        <div class="fw-bold fs-5 text-gray-800" id="summary-total-target">Rp0</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 rounded bg-light">
                                        <div class="d-flex justify-content-between align-items-start mb-1">
                                            <div class="text-gray-600 fs-8">Total Realisasi</div>
                                            <span class="badge rounded-pill fw-semibold fs-8"
                                                id="summary-realisasi-badge"
                                                style="background:rgba(41,192,108,0.15); color:#29c06c; padding:3px 8px;">0%</span>
                                        </div>
                                        <div class="fw-bold fs-5 text-gray-800" id="summary-total-realisasi">Rp0</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 rounded bg-light">
                                        <div class="d-flex justify-content-between align-items-start mb-1">
                                            <div class="text-gray-600 fs-8">Total Sisa Target</div>
                                            <span class="badge rounded-pill fw-semibold fs-8"
                                                id="summary-sisa-target-badge"
                                                style="background:rgba(255,46,79,0.15); color:#ff2e4f; padding:3px 8px;">0%</span>
                                        </div>
                                        <div class="fw-bold fs-5 text-gray-800" id="summary-total-sisa-target">Rp0</div>
                                    </div>
                                </div>
                            </div>
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
            <div class="card h-100 shadow-sm border-0" id="padCard"
                style="border-radius: 12px; border: 2px dashed #3b82f6;">
                <div class="card-body py-4 px-3 px-lg-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center"
                                style="width:40px;height:40px;">
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
                            <span class="fw-bold fs-6 text-gray-800">Pendapatan Asli Daerah</span>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="d-flex justify-content-center">
                                <div class="position-relative" style="width: 110px; height: 110px;" id="padProgress">
                                    <svg class="progress-ring" width="110" height="110">
                                        <circle class="progress-ring-circle" stroke="#e5e7eb" stroke-width="11"
                                            fill="transparent" r="48" cx="55" cy="55" />
                                        <circle class="progress-ring-circle" stroke="#3b82f6" stroke-width="11"
                                            fill="transparent" r="48" cx="55" cy="55"
                                            stroke-dasharray="301.59" stroke-dashoffset="36.19"
                                            stroke-linecap="round" />
                                    </svg>
                                    <div class="position-absolute top-50 start-50 translate-middle text-center">
                                        <div class="fw-bold fs-2 text-gray-800" id="padProgressText">0%</div>
                                        <div class="fs-7 text-gray-600">Realisasi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column gap-2">
                                <div class="p-2 rounded" style="background: #fff8ea;">
                                    <div class="text-gray-600 fs-8 mb-1">Target</div>
                                    <div class="fw-bold fs-6 text-gray-800" data-field="target"
                                        id="summary-total-target">Rp0</div>
                                </div>
                                <div class="p-2 rounded bg-white d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="text-gray-600 fs-8 mb-1">Realisasi</div>
                                        <div class="fw-bold fs-6 text-gray-800" data-field="realisasi">Rp0</div>
                                    </div>
                                    <span class="badge rounded-pill fw-semibold fs-8" data-badge="realisasi"
                                        style="background:rgba(41,192,108,0.15); color:#29c06c; padding:4px 10px;">0%</span>
                                </div>
                                <div class="p-2 rounded bg-white d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="text-gray-600 fs-8 mb-1">Sisa Target</div>
                                        <div class="fw-bold fs-6 text-gray-800" data-field="sisa-target">Rp0</div>
                                    </div>
                                    <span class="badge rounded-pill fw-semibold fs-8" data-badge="sisa-target"
                                        style="background:rgba(255,46,79,0.15); color:#ff2e4f; padding:4px 10px;">0%</span>
                                </div>
                            </div>
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
            <div class="card h-100 shadow-sm border-0" id="padCard"
                style="border-radius: 12px; border: 2px dashed #3b82f6;">
                <div class="card-body py-4 px-3 px-lg-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center"
                                style="width:40px;height:40px;">
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
                            <span class="fw-bold fs-6 text-gray-800">Pendapatan Asli Daerah (PAD)</span>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="d-flex justify-content-center">
                                <div class="position-relative" style="width: 110px; height: 110px;" id="padProgress">
                                    <svg class="progress-ring" width="110" height="110">
                                        <circle class="progress-ring-circle" stroke="#e5e7eb" stroke-width="11"
                                            fill="transparent" r="48" cx="55" cy="55" />
                                        <circle class="progress-ring-circle" stroke="#3b82f6" stroke-width="11"
                                            fill="transparent" r="48" cx="55" cy="55"
                                            stroke-dasharray="301.59" stroke-dashoffset="36.19"
                                            stroke-linecap="round" />
                                    </svg>
                                    <div class="position-absolute top-50 start-50 translate-middle text-center">
                                        <div class="fw-bold fs-2 text-gray-800" id="padProgressText">0%</div>
                                        <div class="fs-7 text-gray-600">Realisasi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column gap-2">
                                <div class="p-2 rounded" style="background: #fff8ea;">
                                    <div class="text-gray-600 fs-8 mb-1">Target</div>
                                    <div class="fw-bold fs-6 text-gray-800" data-field="target">Rp0</div>
                                </div>
                                <div class="p-2 rounded bg-white d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="text-gray-600 fs-8 mb-1">Realisasi</div>
                                        <div class="fw-bold fs-6 text-gray-800" data-field="realisasi">Rp0</div>
                                    </div>
                                    <span class="badge rounded-pill fw-semibold fs-8" data-badge="realisasi"
                                        style="background:rgba(41,192,108,0.15); color:#29c06c; padding:4px 10px;">0%</span>
                                </div>
                                <div class="p-2 rounded bg-white d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="text-gray-600 fs-8 mb-1">Sisa Target</div>
                                        <div class="fw-bold fs-6 text-gray-800" data-field="sisa-target">Rp0</div>
                                    </div>
                                    <span class="badge rounded-pill fw-semibold fs-8" data-badge="sisa-target"
                                        style="background:rgba(255,46,79,0.15); color:#ff2e4f; padding:4px 10px;">0%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dana Transfer Card -->
        <div class="col-12 col-md-4">
            <div class="card h-100 shadow-sm border-0" id="danaTransferCard" style="border-radius: 12px;">
                <div class="card-body py-4 px-3 px-lg-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center"
                                style="width:40px;height:40px;">
                                <i class="ki-duotone ki-folder fs-2 text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <span class="fw-bold fs-6 text-gray-800">Dana Transfer</span>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="d-flex justify-content-center">
                                <div class="position-relative" style="width: 110px; height: 110px;"
                                    id="danaTransferProgress">
                                    <svg class="progress-ring" width="110" height="110">
                                        <circle class="progress-ring-circle" stroke="#e5e7eb" stroke-width="11"
                                            fill="transparent" r="48" cx="55" cy="55" />
                                        <circle class="progress-ring-circle" stroke="#3b82f6" stroke-width="11"
                                            fill="transparent" r="48" cx="55" cy="55"
                                            stroke-dasharray="301.59" stroke-dashoffset="36.19"
                                            stroke-linecap="round" />
                                    </svg>
                                    <div class="position-absolute top-50 start-50 translate-middle text-center">
                                        <div class="fw-bold fs-2 text-gray-800" id="danaTransferProgressText">0%</div>
                                        <div class="fs-7 text-gray-600">Realisasi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column gap-2">
                                <div class="p-2 rounded" style="background: #fff8ea;">
                                    <div class="text-gray-600 fs-8 mb-1">Target</div>
                                    <div class="fw-bold fs-6 text-gray-800" data-field="target">Rp0</div>
                                </div>
                                <div class="p-2 rounded bg-white d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="text-gray-600 fs-8 mb-1">Realisasi</div>
                                        <div class="fw-bold fs-6 text-gray-800" data-field="realisasi">Rp0</div>
                                    </div>
                                    <span class="badge rounded-pill fw-semibold fs-8" data-badge="realisasi"
                                        style="background:rgba(41,192,108,0.15); color:#29c06c; padding:4px 10px;">0%</span>
                                </div>
                                <div class="p-2 rounded bg-white d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="text-gray-600 fs-8 mb-1">Sisa Target</div>
                                        <div class="fw-bold fs-6 text-gray-800" data-field="sisa-target">Rp0</div>
                                    </div>
                                    <span class="badge rounded-pill fw-semibold fs-8" data-badge="sisa-target"
                                        style="background:rgba(255,46,79,0.15); color:#ff2e4f; padding:4px 10px;">0%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pendapatan Lainnya Card -->
        <div class="col-12 col-md-4">
            <div class="card h-100 shadow-sm border-0" id="pendapatanLainnyaCard" style="border-radius: 12px;">
                <div class="card-body py-4 px-3 px-lg-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center"
                                style="width:40px;height:40px;">
                                <i class="ki-duotone ki-flag fs-2 text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <span class="fw-bold fs-6 text-gray-800">Pendapatan Lainnya yang Sah</span>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="d-flex justify-content-center">
                                <div class="position-relative" style="width: 110px; height: 110px;"
                                    id="pendapatanLainnyaProgress">
                                    <svg class="progress-ring" width="110" height="110">
                                        <circle class="progress-ring-circle" stroke="#e5e7eb" stroke-width="11"
                                            fill="transparent" r="48" cx="55" cy="55" />
                                        <circle class="progress-ring-circle" stroke="#3b82f6" stroke-width="11"
                                            fill="transparent" r="48" cx="55" cy="55"
                                            stroke-dasharray="301.59" stroke-dashoffset="36.19"
                                            stroke-linecap="round" />
                                    </svg>
                                    <div class="position-absolute top-50 start-50 translate-middle text-center">
                                        <div class="fw-bold fs-2 text-gray-800" id="pendapatanLainnyaProgressText">0%
                                        </div>
                                        <div class="fs-7 text-gray-600">Realisasi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column gap-2">
                                <div class="p-2 rounded" style="background: #fff8ea;">
                                    <div class="text-gray-600 fs-8 mb-1">Target</div>
                                    <div class="fw-bold fs-6 text-gray-800" data-field="target">Rp0</div>
                                </div>
                                <div class="p-2 rounded bg-white d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="text-gray-600 fs-8 mb-1">Realisasi</div>
                                        <div class="fw-bold fs-6 text-gray-800" data-field="realisasi">Rp0</div>
                                    </div>
                                    <span class="badge rounded-pill fw-semibold fs-8" data-badge="realisasi"
                                        style="background:rgba(41,192,108,0.15); color:#29c06c; padding:4px 10px;">0%</span>
                                </div>
                                <div class="p-2 rounded bg-white d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="text-gray-600 fs-8 mb-1">Sisa Target</div>
                                        <div class="fw-bold fs-6 text-gray-800" data-field="sisa-target">Rp0</div>
                                    </div>
                                    <span class="badge rounded-pill fw-semibold fs-8" data-badge="sisa-target"
                                        style="background:rgba(255,46,79,0.15); color:#ff2e4f; padding:4px 10px;">0%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- tab data pendapatan daerah --}}

    <!-- Top Navigation Tabs -->
    <div class="mb-4 w-100"
        style="background-color: #ffffff; padding: 12px 16px; border-radius: 8px; max-width: 43%;">
        <div class="bg-white rounded-2 shadow-sm px-2 py-2">
            <ul class="nav mb-0 flex-wrap gap-2" id="dashboardMainTabs" role="tablist"
                style="flex-wrap: wrap; width: 100%;">
                @foreach ($menuDashboard[0]['children'] as $index => $item)
                    <li class="nav-item" role="presentation" style="display: inline-block;">
                        <button class="nav-link fw-semibold fs-8 px-4 py-2 {{ $index === 0 ? 'active' : '' }}"
                            id="{{ \Str::slug($item['label'], '_') }}-tab-btn" data-bs-toggle="tab"
                            data-panel-id="{{ $index === 0 ? 'panel-pad' : ($index === 1 ? 'panel-transfer' : 'panel-other') }}"
                            type="button"
                            style="
                                                                                    color: {{ $index === 0 ? '#fff' : '#374151' }};
                                                                                    background-color: {{ $index === 0 ? '#3b82f6' : 'transparent' }};
                                                                                    border: none;
                                                                                    border-radius: 6px;
                                                                                    transition: background 0.2s, color 0.2s;
                                                                                    min-width: 132px;
                                                                                    white-space: normal;">
                            {{ $item['label'] }}
                        </button>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div id="panel-tabs-content">
        @foreach ($menuDashboard[0]['children'] as $index => $mainItem)
            @php
                $panelId = $index === 0 ? 'panel-pad' : ($index === 1 ? 'panel-transfer' : 'panel-other');
                $isActive = $index === 0;
                $hasChildren = isset($mainItem['children']) && !empty($mainItem['children']);
            @endphp

            <div id="{{ $panelId }}" class="tab-panel {{ $isActive ? 'tab-panel-active' : '' }}"
                style="{{ $isActive ? '' : 'display: none;' }}">
                @if ($hasChildren)
                    <!-- Section 1: Cards from children level 1 (without nav tabs) -->
                    <div class="card shadow-sm border-0 mb-5" style="border-radius: 12px;">
                        {{-- //header section --}}
                        <div class="card-body p-4">
                            <h1 class="fw-bold fs-4 text-gray-800 mt-4 mb-6">{{ $mainItem['label'] }}</h1>
                            <!-- Summary Section for section 1 -->
                            @php
                                $summaryAccountId = isset($mainItem['id']) ? $mainItem['id'] : null;
                            @endphp
                            <div class="row g-3 mb-4" data-summary-account-id="{{ $summaryAccountId }}"
                                data-summary-id="{{ $index }}">
                                <div class="col-12 col-md-4">
                                    <div class="card shadow-sm border-0 position-relative">
                                        <div class="card-body py-3 px-4">
                                            <div class="text-gray-600 fs-7 mb-2">Target</div>
                                            <div class="fw-bold fs-5 text-gray-800"
                                                data-summary="target-{{ $index }}">Rp0</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="card shadow-sm border-0" style="border-radius: 12px;">
                                        <div class="card-body py-3 px-4">
                                            <div class="d-flex justify-content-between align-items-start mb-2">
                                                <div class="text-gray-600 fs-7">Realisasi</div>
                                                <span class="badge rounded-pill fw-semibold fs-8"
                                                    data-summary-badge="realisasi-{{ $index }}"
                                                    style="background:rgba(41,192,108,0.15); color:#29c06c; padding:4px 10px;">0%</span>
                                            </div>
                                            <div class="fw-bold fs-5 text-gray-800"
                                                data-summary="realisasi-{{ $index }}">Rp0
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="card shadow-sm border-0" style="border-radius: 12px;">
                                        <div class="card-body py-3 px-4">
                                            <div class="d-flex justify-content-between align-items-start mb-2">
                                                <div class="text-gray-600 fs-7">Sisa Target</div>
                                                <span class="badge rounded-pill fw-semibold fs-8"
                                                    data-summary-badge="sisa-target-{{ $index }}"
                                                    style="background:rgba(255,46,79,0.15); color:#ff2e4f; padding:4px 10px;">0%</span>
                                            </div>
                                            <div class="fw-bold fs-5 text-gray-800"
                                                data-summary="sisa-target-{{ $index }}">Rp0
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-4">
                                @foreach ($mainItem['children'] as $cardIndex => $cardItem)
                                    {{-- //header section --}}
                                    @php
                                        $cardId = 'progress-' . $index . '-' . $cardIndex;
                                        $cardSlug = \Illuminate\Support\Str::slug($cardItem['label']);
                                        $accountId = isset($cardItem['id']) ? $cardItem['id'] : null;
                                    @endphp
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="card shadow-sm border-0 h-100" style="border-radius: 12px;"
                                            data-account-id="{{ $accountId }}"
                                            data-card-slug="{{ $cardSlug }}">
                                            <div class="card-body py-4 px-3">
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <span class="fw-bold fs-6 text-gray-800"
                                                        style="line-height: 1.2;">
                                                        {{ $cardItem['label'] }}
                                                    </span>
                                                    <div class="bg-warning rounded d-flex align-items-center justify-content-center"
                                                        style="width:32px;height:32px;">
                                                        <i class="ki-duotone ki-check-square fs-3 text-white">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                        </i>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-center mb-3">
                                                    <div class="position-relative mb-2"
                                                        style="width:100px; height:100px;" id="{{ $cardId }}">
                                                        <svg class="progress-ring" width="100" height="100">
                                                            <circle class="progress-ring-circle" stroke="#e5e7eb"
                                                                stroke-width="10" fill="transparent" r="42"
                                                                cx="50" cy="50" />
                                                            <circle class="progress-ring-circle" stroke="#3b82f6"
                                                                stroke-width="10" fill="transparent" r="42"
                                                                cx="50" cy="50"
                                                                stroke-dasharray="263.89" stroke-dashoffset="263.89"
                                                                stroke-linecap="round" />
                                                        </svg>
                                                        <div
                                                            class="position-absolute top-50 start-50 translate-middle text-center">
                                                            <div class="fw-bold fs-3 text-gray-800">0%</div>
                                                        </div>
                                                    </div>
                                                    <div class="fs-7 text-gray-600">Realisasi</div>
                                                </div>
                                                <div class="d-flex flex-column gap-2">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="text-gray-600 fs-7">Target</span>
                                                        <span class="fw-bold fs-7 text-gray-800"
                                                            data-card-field="{{ $cardSlug }}-target">Rp0</span>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="text-gray-600 fs-7">Realisasi</span>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="fw-bold fs-7 text-gray-800"
                                                                data-card-field="{{ $cardSlug }}-realisasi">Rp0</span>
                                                            <span class="badge rounded-pill fw-semibold fs-8"
                                                                data-card-badge="{{ $cardSlug }}-realisasi"
                                                                style="background:rgba(41,192,108,0.15); color:#29c06c; padding:3px 8px;">0%</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="text-gray-600 fs-7">Sisa Target</span>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="fw-bold fs-7 text-gray-800"
                                                                data-card-field="{{ $cardSlug }}-sisa-target">Rp0</span>
                                                            <span class="badge rounded-pill fw-semibold fs-8"
                                                                data-card-badge="{{ $cardSlug }}-sisa-target"
                                                                style="background:rgba(255,46,79,0.15); color:#ff2e4f; padding:3px 8px;">0%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            {{-- Grafik Realisasi Section --}}
                            <div class="row mt-5">
                                <div class="col-12">
                                    <div class="card shadow-sm border-0" style="border-radius: 12px;">
                                        <div class="card-body p-4">
                                            <h3 class="fw-bold fs-4 text-gray-800 mb-4">Grafik Realisasi
                                                {{ $mainItem['label'] }}
                                            </h3>
                                            <div id="chart-{{ $index }}" style="width: 100%; height: 400px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @php
                        // Check if children level 1 have children level 2
                        $hasLevel2Children = false;
                        foreach ($mainItem['children'] as $level1Item) {
                            if (isset($level1Item['children']) && !empty($level1Item['children'])) {
                                $hasLevel2Children = true;
                                break;
                            }
                        }
                    @endphp

                    @if ($hasLevel2Children)
                        <!-- Section 2: New section with nav tabs from children level 1 -->
                        <div class="mt-5 pt-4" style="border-top: 2px solid #e5e7eb; width: 100%;">
                            {{-- //header section --}}
                            <!-- Sub Navigation Tabs from children level 1 (Pill-style) -->
                            <div class="mb-4" style="width: 30%;">
                                <div class="bg-white rounded shadow-sm px-2 py-2" style="border-radius: 10px;">
                                    <ul class="nav mb-0 flex-nowrap gap-2" id="subTabs-{{ $index }}"
                                        role="tablist" style="overflow-x: auto; width: 100%;">
                                        @foreach ($mainItem['children'] as $level1Index => $level1Item)
                                            @if (isset($level1Item['children']) && !empty($level1Item['children']))
                                                <li class="flex-fill" role="presentation">
                                                    <button
                                                        class="fw-semibold px-3 py-2 w-100 text-start {{ $level1Index === 0 ? 'active' : '' }}"
                                                        id="sub-tab-{{ $index }}-{{ $level1Index }}-btn"
                                                        data-sub-tab-index="{{ $level1Index }}"
                                                        data-parent-index="{{ $index }}" type="button"
                                                        style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                        border-radius: 6px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                        border: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                                        {{ $level1Index === 0
                                                                                                                                                                                                                                                                                                                                                                                                                                                            ? 'color: #fff; background-color: #3b82f6;'
                                                                                                                                                                                                                                                                                                                                                                                                                                                            : 'color: #6b7280; background-color: transparent;' }}
                                                                                                                                                                                                                                                                                                                                                                                                                                                    ">
                                                        {{ $level1Item['label'] }}
                                                    </button>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    </ul>
                                </div>
                            </div>

                            <!-- Sub Tab Content -->
                            <div id="sub-tab-content-{{ $index }}">
                                @foreach ($mainItem['children'] as $level1Index => $level1Item)
                                    <div id="sub-tab-panel-{{ $index }}-{{ $level1Index }}"
                                        class="sub-tab-panel"
                                        style="{{ $level1Index === 0 ? '' : 'display: none;' }}">

                                        <!-- Nav tabs from children level 2, then cards from children level 3 -->
                                        @if (isset($level1Item['children']) && !empty($level1Item['children']))
                                            <!-- Card Container with Tabs Level 2 inside -->
                                            <div class="card shadow-sm border-0" style="border-radius: 12px;">
                                                <div class="card-body p-4">
                                                    <!-- Nav Tabs from children level 2 (inside card) -->
                                                    <div class="mb-4">
                                                        <ul class="nav nav-tabs custom-tabs"
                                                            id="level2Tabs-{{ $index }}-{{ $level1Index }}"
                                                            role="tablist"
                                                            style="border-bottom: 2px solid #e5e7eb; display: flex;">
                                                            @foreach ($level1Item['children'] as $level2Index => $level2Item)
                                                                <li class="nav-item" role="presentation">
                                                                    <button
                                                                        class="nav-link fw-semibold px-3 py-2 {{ $level2Index === 0 ? 'active' : '' }}"
                                                                        id="level2-tab-{{ $index }}-{{ $level1Index }}-{{ $level2Index }}-btn"
                                                                        data-level2-tab-index="{{ $level2Index }}"
                                                                        data-level1-index="{{ $level1Index }}"
                                                                        data-parent-index="{{ $index }}"
                                                                        type="button"
                                                                        style="{{ $level2Index === 0 ? 'color: #3b82f6; border-bottom: 3px solid #3b82f6; margin-bottom: -2px; background-color: rgba(59, 130, 246, 0.05);' : 'color: #6b7280;' }}">
                                                                        {{ $level2Item['label'] }}
                                                                    </button>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>

                                                    <!-- Level 2 Tab Content -->
                                                    <div
                                                        id="level2-tab-content-{{ $index }}-{{ $level1Index }}">
                                                        @foreach ($level1Item['children'] as $level2Index => $level2Item)
                                                            <div id="level2-tab-panel-{{ $index }}-{{ $level1Index }}-{{ $level2Index }}"
                                                                class="level2-tab-panel"
                                                                style="{{ $level2Index === 0 ? '' : 'display: none;' }}">

                                                                <!-- Section Title -->
                                                                <div class="mb-4">
                                                                    <h2 class="fw-bold fs-2 text-gray-800 mb-0">
                                                                        {{ $level2Item['label'] }}
                                                                    </h2>
                                                                </div>

                                                                <!-- Summary Section for level 2 tab -->
                                                                @php
                                                                    $level2SummaryAccountId = isset($level2Item['id'])
                                                                        ? $level2Item['id']
                                                                        : null;
                                                                @endphp
                                                                <div class="row g-3 mb-4"
                                                                    data-summary-account-id="{{ $level2SummaryAccountId }}"
                                                                    data-summary-id="{{ $index }}-{{ $level1Index }}-{{ $level2Index }}">
                                                                    <div class="col-12 col-md-4">
                                                                        <div
                                                                            class="card shadow-sm border-0 position-relative">
                                                                            <div class="card-body py-3 px-4">
                                                                                <div class="text-gray-600 fs-7 mb-2">
                                                                                    Target</div>
                                                                                <div class="fw-bold fs-5 text-gray-800"
                                                                                    data-summary="target-{{ $index }}-{{ $level1Index }}-{{ $level2Index }}">
                                                                                    Rp0</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-md-4">
                                                                        <div class="card shadow-sm border-0"
                                                                            style="border-radius: 12px;">
                                                                            <div class="card-body py-3 px-4">
                                                                                <div
                                                                                    class="d-flex justify-content-between align-items-start mb-2">
                                                                                    <div class="text-gray-600 fs-7">
                                                                                        Realisasi</div>
                                                                                    <span
                                                                                        class="badge rounded-pill fw-semibold fs-8"
                                                                                        data-summary-badge="realisasi-{{ $index }}-{{ $level1Index }}-{{ $level2Index }}"
                                                                                        style="background:rgba(41,192,108,0.15); color:#29c06c; padding:4px 10px;">0%</span>
                                                                                </div>
                                                                                <div class="fw-bold fs-5 text-gray-800"
                                                                                    data-summary="realisasi-{{ $index }}-{{ $level1Index }}-{{ $level2Index }}">
                                                                                    Rp0</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-md-4">
                                                                        <div class="card shadow-sm border-0"
                                                                            style="border-radius: 12px;">
                                                                            <div class="card-body py-3 px-4">
                                                                                <div
                                                                                    class="d-flex justify-content-between align-items-start mb-2">
                                                                                    <div class="text-gray-600 fs-7">
                                                                                        Sisa Target</div>
                                                                                    <span
                                                                                        class="badge rounded-pill fw-semibold fs-8"
                                                                                        data-summary-badge="sisa-target-{{ $index }}-{{ $level1Index }}-{{ $level2Index }}"
                                                                                        style="background:rgba(255,46,79,0.15); color:#ff2e4f; padding:4px 10px;">0%</span>
                                                                                </div>
                                                                                <div class="fw-bold fs-5 text-gray-800"
                                                                                    data-summary="sisa-target-{{ $index }}-{{ $level1Index }}-{{ $level2Index }}">
                                                                                    Rp0</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Cards from children level 3 -->
                                                                @if (isset($level2Item['children']) && !empty($level2Item['children']))
                                                                    <div class="row g-4">
                                                                        @foreach ($level2Item['children'] as $level3Index => $level3Item)
                                                                            @php
                                                                                $cardId =
                                                                                    'progress-' .
                                                                                    $index .
                                                                                    '-' .
                                                                                    $level1Index .
                                                                                    '-' .
                                                                                    $level2Index .
                                                                                    '-' .
                                                                                    $level3Index;
                                                                                $cardSlug = \Illuminate\Support\Str::slug(
                                                                                    $level3Item['label'],
                                                                                );
                                                                                $accountId = isset($level3Item['id'])
                                                                                    ? $level3Item['id']
                                                                                    : null;
                                                                            @endphp
                                                                            <div class="col-12 col-sm-6 col-lg-3">
                                                                                <div class="card shadow-sm border-0 h-100"
                                                                                    style="border-radius: 12px;"
                                                                                    data-account-id="{{ $accountId }}"
                                                                                    data-card-slug="{{ $cardSlug }}">
                                                                                    <div class="card-body py-4 px-3">
                                                                                        <div
                                                                                            class="d-flex align-items-center justify-content-between mb-3">
                                                                                            <span
                                                                                                class="fw-bold fs-6 text-gray-800"
                                                                                                style="line-height: 1.2;">
                                                                                                {{ $level3Item['label'] }}
                                                                                            </span>
                                                                                            <div class="bg-warning rounded d-flex align-items-center justify-content-center"
                                                                                                style="width:32px;height:32px;">
                                                                                                <i
                                                                                                    class="ki-duotone ki-check-square fs-3 text-white">
                                                                                                    <span
                                                                                                        class="path1"></span>
                                                                                                    <span
                                                                                                        class="path2"></span>
                                                                                                    <span
                                                                                                        class="path3"></span>
                                                                                                    <span
                                                                                                        class="path4"></span>
                                                                                                </i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="d-flex flex-column align-items-center mb-3">
                                                                                            <div class="position-relative mb-2"
                                                                                                style="width:100px; height:100px;"
                                                                                                id="{{ $cardId }}">
                                                                                                <svg class="progress-ring"
                                                                                                    width="100"
                                                                                                    height="100">
                                                                                                    <circle
                                                                                                        class="progress-ring-circle"
                                                                                                        stroke="#e5e7eb"
                                                                                                        stroke-width="10"
                                                                                                        fill="transparent"
                                                                                                        r="42"
                                                                                                        cx="50"
                                                                                                        cy="50" />
                                                                                                    <circle
                                                                                                        class="progress-ring-circle"
                                                                                                        stroke="#3b82f6"
                                                                                                        stroke-width="10"
                                                                                                        fill="transparent"
                                                                                                        r="42"
                                                                                                        cx="50"
                                                                                                        cy="50"
                                                                                                        stroke-dasharray="263.89"
                                                                                                        stroke-dashoffset="263.89"
                                                                                                        stroke-linecap="round" />
                                                                                                </svg>
                                                                                                <div
                                                                                                    class="position-absolute top-50 start-50 translate-middle text-center">
                                                                                                    <div
                                                                                                        class="fw-bold fs-3 text-gray-800">
                                                                                                        0%</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fs-7 text-gray-600">
                                                                                                Realisasi</div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="d-flex flex-column gap-2">
                                                                                            <div
                                                                                                class="d-flex justify-content-between align-items-center">
                                                                                                <span
                                                                                                    class="text-gray-600 fs-7">Target</span>
                                                                                                <span
                                                                                                    class="fw-bold fs-7 text-gray-800"
                                                                                                    data-card-field="{{ $cardSlug }}-target">Rp0</span>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-flex justify-content-between align-items-center">
                                                                                                <span
                                                                                                    class="text-gray-600 fs-7">Realisasi</span>
                                                                                                <div
                                                                                                    class="d-flex align-items-center gap-2">
                                                                                                    <span
                                                                                                        class="fw-bold fs-7 text-gray-800"
                                                                                                        data-card-field="{{ $cardSlug }}-realisasi">Rp0</span>
                                                                                                    <span
                                                                                                        class="badge rounded-pill fw-semibold fs-8"
                                                                                                        data-card-badge="{{ $cardSlug }}-realisasi"
                                                                                                        style="background:rgba(41,192,108,0.15); color:#29c06c; padding:3px 8px;">0%</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-flex justify-content-between align-items-center">
                                                                                                <span
                                                                                                    class="text-gray-600 fs-7">Sisa
                                                                                                    Target</span>
                                                                                                <div
                                                                                                    class="d-flex align-items-center gap-2">
                                                                                                    <span
                                                                                                        class="fw-bold fs-7 text-gray-800"
                                                                                                        data-card-field="{{ $cardSlug }}-sisa-target">Rp0</span>
                                                                                                    <span
                                                                                                        class="badge rounded-pill fw-semibold fs-8"
                                                                                                        data-card-badge="{{ $cardSlug }}-sisa-target"
                                                                                                        style="background:rgba(255,46,79,0.15); color:#ff2e4f; padding:3px 8px;">0%</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>

                                                                    {{-- Grafik Realisasi untuk Level 2 --}}
                                                                    <div class="row mt-5">
                                                                        <div class="col-12">
                                                                            <div class="card shadow-sm border-0"
                                                                                style="border-radius: 12px; background: #f8f9fa;">
                                                                                <div class="card-body p-4">
                                                                                    <h4
                                                                                        class="fw-bold fs-5 text-gray-800 mb-4">
                                                                                        Grafik Realisasi
                                                                                        {{ $level2Item['label'] }}
                                                                                    </h4>
                                                                                    <div id="chart-{{ $index }}-{{ $level1Index }}-{{ $level2Index }}"
                                                                                        style="width: 100%; height: 400px;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <!-- No children level 2, show message -->
                                            <div class="row g-4">
                                                <div class="col-12">
                                                    <div class="alert alert-info mb-0">
                                                        <strong>{{ $level1Item['label'] }}</strong>
                                                        <p class="mb-0">Konten untuk {{ $level1Item['label'] }} akan
                                                            ditampilkan di sini.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @else
                    <!-- No children, show message -->
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="alert alert-info mb-0">
                                <strong>{{ $mainItem['label'] }}</strong>
                                <p class="mb-0">Konten untuk {{ $mainItem['label'] }} akan ditampilkan di sini.</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
    </div>

    <!-- Panel: Isi Konten Pada Tab - Default PAD Aktif -->

    <!-- JavaScript untuk Tab Navigation -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all main tab buttons
            const allMainTabButtons = document.querySelectorAll('#dashboardMainTabs .nav-link');

            // Get all panels
            const panelPad = document.getElementById('panel-pad');
            const panelTransfer = document.getElementById('panel-transfer');
            const panelOther = document.getElementById('panel-other');

            // Function to switch main tabs
            function switchMainTab(activePanel, activeButton) {
                // Hide all panels
                if (panelPad) {
                    panelPad.style.display = 'none';
                    panelPad.classList.remove('tab-panel-active');
                }
                if (panelTransfer) {
                    panelTransfer.style.display = 'none';
                    panelTransfer.classList.remove('tab-panel-active');
                }
                if (panelOther) {
                    panelOther.style.display = 'none';
                    panelOther.classList.remove('tab-panel-active');
                }

                // Remove active class from all buttons
                allMainTabButtons.forEach(tab => {
                    tab.classList.remove('active');
                    tab.style.color = '#6b7280';
                    tab.style.backgroundColor = 'transparent';
                    tab.style.border = 'none';
                    tab.style.borderRadius = '6px';
                });

                // Show active panel and add active class
                if (activePanel) {
                    activePanel.style.display = 'block';
                    activePanel.classList.add('tab-panel-active');
                }

                // Add active class to active button
                if (activeButton) {
                    activeButton.classList.add('active');
                    activeButton.style.color = '#ffffff';
                    activeButton.style.backgroundColor = '#3b82f6';
                    activeButton.style.border = 'none';
                    activeButton.style.borderRadius = '6px';
                }
            }

            // Add click event listeners for all main tabs
            allMainTabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const panelId = this.getAttribute('data-panel-id');
                    let targetPanel = null;

                    // Map panel IDs to panel elements
                    if (panelId === 'panel-pad') {
                        targetPanel = panelPad;
                    } else if (panelId === 'panel-transfer') {
                        targetPanel = panelTransfer;
                    } else if (panelId === 'panel-other') {
                        targetPanel = panelOther;
                    }

                    if (targetPanel) {
                        switchMainTab(targetPanel, this);
                    }
                });
            });

            // Initialize first tab as active on page load
            const firstTabButton = allMainTabButtons[0];
            if (firstTabButton && panelPad) {
                switchMainTab(panelPad, firstTabButton);
            }

            // Dynamic Sub Tab Navigation for all main tabs
            function initSubTabs(parentIndex) {
                const subTabButtons = document.querySelectorAll(
                    `#subTabs-${parentIndex} button[data-sub-tab-index]`);
                const subTabContent = document.getElementById(`sub-tab-content-${parentIndex}`);

                if (!subTabContent || subTabButtons.length === 0) return;

                subTabButtons.forEach(btn => {
                    btn.addEventListener('click', function() {
                        const subTabIndex = this.getAttribute('data-sub-tab-index');
                        const parentIdx = this.getAttribute('data-parent-index');

                        // Remove active from all sub tabs in this parent
                        const allSubTabs = document.querySelectorAll(
                            `#subTabs-${parentIdx} button[data-sub-tab-index]`);
                        allSubTabs.forEach(tab => {
                            tab.classList.remove('active');
                            tab.style.color = '#6b7280';
                            tab.style.backgroundColor = 'transparent';
                            tab.style.border = 'none';
                            tab.style.borderRadius = '6px';
                        });

                        // Hide all sub tab panels in this parent
                        const allSubPanels = subTabContent.querySelectorAll('.sub-tab-panel');
                        allSubPanels.forEach(panel => {
                            panel.style.display = 'none';
                        });

                        // Show selected sub tab panel
                        const selectedPanel = document.getElementById(
                            `sub-tab-panel-${parentIdx}-${subTabIndex}`);
                        if (selectedPanel) {
                            selectedPanel.style.display = 'block';
                        }

                        // Add active to clicked tab
                        this.classList.add('active');
                        this.style.color = '#ffffff';
                        this.style.backgroundColor = '#3b82f6';
                        this.style.border = 'none';
                        this.style.borderRadius = '6px';
                    });
                });
            }

            // Initialize sub tabs for all main tabs (0, 1, 2, etc.)
            for (let i = 0; i < 10; i++) {
                initSubTabs(i);
            }

            // Dynamic Level 2 Tab Navigation
            function initLevel2Tabs(parentIndex, level1Index) {
                const level2TabButtons = document.querySelectorAll(
                    `#level2Tabs-${parentIndex}-${level1Index} button[data-level2-tab-index]`);
                const level2TabContent = document.getElementById(
                    `level2-tab-content-${parentIndex}-${level1Index}`);

                if (!level2TabContent || level2TabButtons.length === 0) return;

                level2TabButtons.forEach(btn => {
                    btn.addEventListener('click', function() {
                        const level2TabIndex = this.getAttribute('data-level2-tab-index');
                        const level1Idx = this.getAttribute('data-level1-index');
                        const parentIdx = this.getAttribute('data-parent-index');

                        // Remove active from all level 2 tabs
                        const allLevel2Tabs = document.querySelectorAll(
                            `#level2Tabs-${parentIdx}-${level1Idx} button[data-level2-tab-index]`
                        );
                        allLevel2Tabs.forEach(tab => {
                            tab.classList.remove('active');
                            tab.style.color = '#6b7280';
                            tab.style.borderBottom = 'none';
                            tab.style.backgroundColor = 'transparent';
                            tab.style.marginBottom = '0';
                        });

                        // Hide all level 2 tab panels
                        const allLevel2Panels = level2TabContent.querySelectorAll(
                            '.level2-tab-panel');
                        allLevel2Panels.forEach(panel => {
                            panel.style.display = 'none';
                        });

                        // Show selected level 2 tab panel
                        const selectedPanel = document.getElementById(
                            `level2-tab-panel-${parentIdx}-${level1Idx}-${level2TabIndex}`);
                        if (selectedPanel) {
                            selectedPanel.style.display = 'block';
                        }

                        // Add active to clicked tab
                        this.classList.add('active');
                        this.style.color = '#3b82f6';
                        this.style.borderBottom = '3px solid #3b82f6';
                        this.style.marginBottom = '-2px';
                        this.style.backgroundColor = 'rgba(59, 130, 246, 0.05)';
                    });
                });
            }

            // Initialize level 2 tabs for all combinations
            for (let i = 0; i < 10; i++) {
                for (let j = 0; j < 10; j++) {
                    initLevel2Tabs(i, j);
                }
            }

        });
    </script>

    <!-- 2x2 Grid Layout -->


    <!-- Second Row -->

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
            border-bottom: 2px solid #e5e7eb;
            margin-bottom: 0;
            display: flex;
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
            color: #3b82f6;
            background: transparent;
            border: none;
        }

        .custom-tabs .nav-link.active {
            color: #3b82f6;
            background: transparent;
            border: none;
        }

        .custom-tabs .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            right: 0;
            height: 3px;
            background: #3b82f6;
            border-radius: 2px 2px 0 0;
        }

        .custom-tabs .nav-link:not(.active) {
            color: #6b7280;
        }

        .custom-tabs .nav-link:not(.active):hover {
            color: #3b82f6;
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
            .px-lg-5 {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }

            .card-body .row>[class^="col-"] {
                margin-bottom: 1rem;
            }

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
        let refreshInterval = 1000;
        const REFRESH_INTERVAL_MS = 30000; // 30 seconds

        // Store totals for summary calculation
        let totals = {
            target: 0,
            realisasi: 0,
            realisasiHariIni: 0,
            sisaTarget: 0
        };

        // Store individual card values
        let cardValues = {
            padCard: {
                target: 0,
                realisasi: 0,
                realisasiHariIni: 0,
                sisaTarget: 0
            },
            danaTransferCard: {
                target: 0,
                realisasi: 0,
                realisasiHariIni: 0,
                sisaTarget: 0
            },
            pendapatanLainnyaCard: {
                target: 0,
                realisasi: 0,
                realisasiHariIni: 0,
                sisaTarget: 0
            }
        };

        // Format number to Indonesian Rupiah
        function formatRupiah(number) {
            if (!number && number !== 0) return 'Rp0';
            // Handle both number and string, including decimals
            const num = typeof number === 'number' ? number : parseFloat(number) || 0;
            // Round to integer for display
            const rounded = Math.round(num);
            return 'Rp' + rounded.toLocaleString('id-ID');
        }

        // Animate number with jQuery (counter.js style)
        function animateNumber(element, endValue, options = {}) {
            if (!element) return;

            const endNum = typeof endValue === 'number' ? endValue : parseFloat(endValue) || 0;
            const roundedEnd = Math.round(endNum);

            // IMMEDIATELY set the value first to ensure it shows
            element.textContent = formatRupiah(roundedEnd);

            // Check if jQuery is available
            if (typeof $ === 'undefined' || typeof $.fn.animate === 'undefined') {
                console.warn('jQuery not available, skipping animation');
                return;
            }

            const $element = $(element);

            // Get current value from element (after setting it)
            const currentText = element.textContent || 'Rp0';
            const currentValue = parseFloat(currentText.replace(/[^0-9,-]/g, '').replace(/\./g, '').replace(',', '.')) || 0;

            // Skip animation if values are the same
            if (Math.round(currentValue) === roundedEnd) {
                return;
            }

            // Stop any existing animation on this element
            $element.stop(true, true);

            // Animate using jQuery (visual enhancement only)
            try {
                $({
                    counter: 0
                }).animate({
                    counter: roundedEnd
                }, {
                    duration: options.duration || 1500,
                    easing: options.easing || 'swing',
                    step: function() {
                        const val = Math.round(this.counter);
                        element.textContent = formatRupiah(val);
                    },
                    complete: function() {
                        element.textContent = formatRupiah(roundedEnd);
                        if (options.onComplete) options.onComplete();
                    }
                });
            } catch (error) {
                console.warn('Animation error, setting value directly:', error);
                element.textContent = formatRupiah(roundedEnd);
            }
        }

        // Animate percentage with jQuery
        function animatePercentage(element, endValue, options = {}) {
            if (!element) return;

            const endNum = typeof endValue === 'number' ? endValue : parseFloat(endValue) || 0;

            // IMMEDIATELY set the value first to ensure it shows
            element.textContent = (options.prefix || '') + endNum + '%';

            // Check if jQuery is available
            if (typeof $ === 'undefined' || typeof $.fn.animate === 'undefined') {
                console.warn('jQuery not available for percentage animation');
                return;
            }

            const $element = $(element);
            const currentText = element.textContent || '0%';
            const currentValue = parseFloat(currentText.replace(/[^0-9-]/g, '')) || 0;

            // Skip if same
            if (currentValue === endNum) {
                return;
            }

            // Stop any existing animation
            $element.stop(true, true);

            // Animate using jQuery (visual enhancement only)
            try {
                $({
                    counter: 0
                }).animate({
                    counter: endNum
                }, {
                    duration: options.duration || 1000,
                    easing: options.easing || 'swing',
                    step: function() {
                        const val = Math.round(this.counter);
                        element.textContent = (options.prefix || '') + val + '%';
                    },
                    complete: function() {
                        element.textContent = (options.prefix || '') + endNum + '%';
                        if (options.onComplete) options.onComplete();
                    }
                });
            } catch (error) {
                console.warn('Percentage animation error:', error);
                element.textContent = (options.prefix || '') + endNum + '%';
            }
        }

        // Calculate percentage
        function calculatePercentage(realisasi, target) {
            if (!target || target === 0) return 0;
            return Math.round((realisasi / target) * 100);
        }

        // Update circular progress ring
        function updateProgressRing(elementId, percentage) {
            const container = document.getElementById(elementId);
            if (!container) {
                console.warn(`updateProgressRing: Container not found: ${elementId}`);
                return;
            }

            const element = container.querySelector('.progress-ring-circle:last-child');
            if (!element) {
                console.warn(`updateProgressRing: Progress ring circle not found in ${elementId}`);
                return;
            }

            const radius = 48;
            const circumference = 2 * Math.PI * radius;
            const offset = circumference - (percentage / 100) * circumference;

            element.style.strokeDashoffset = offset;

            // Update percentage text - first try by ID (more specific), then by class selector
            const textId = elementId.replace('Progress', 'ProgressText');
            let percentageText = document.getElementById(textId);

            if (!percentageText) {
                // Fallback to class selector within container
                percentageText = container.querySelector('.fw-bold.fs-2.text-gray-800');
            }

            if (percentageText) {
                console.log(`updateProgressRing: Updating ${elementId} percentage to ${percentage}%`);
                percentageText.textContent = Math.round(percentage) + '%';
            } else {
                console.warn(`updateProgressRing: Percentage text element not found for ${elementId}`);
            }
        }

        // Update total summary display
        function updateTotalSummary() {
            const totalTargetEl = document.getElementById('summary-total-target');
            const totalRealisasiEl = document.getElementById('summary-total-realisasi');
            const totalSisaTargetEl = document.getElementById('summary-total-sisa-target');
            const realisasiBadgeEl = document.getElementById('summary-realisasi-badge');
            const sisaTargetBadgeEl = document.getElementById('summary-sisa-target-badge');
            const totalPercentageEl = document.getElementById('summary-total-percentage');
            const totalRingEl = document.getElementById('total-pendapatan-ring');

            if (totalTargetEl) animateNumber(totalTargetEl, totals.target);
            if (totalRealisasiEl) animateNumber(totalRealisasiEl, totals.realisasi);
            if (totalSisaTargetEl) animateNumber(totalSisaTargetEl, totals.sisaTarget);

            // Calculate percentage
            const percentage = totals.target > 0 ? Math.round((totals.realisasi / totals.target) * 100) : 0;

            // Update pie chart ring
            if (totalRingEl) {
                const circumference = 364.42; // 2 * PI * 58
                const offset = circumference - (percentage / 100) * circumference;
                totalRingEl.style.strokeDashoffset = Math.max(0, offset);
                totalRingEl.style.transition = 'stroke-dashoffset 0.8s ease';
            }

            // Update percentage text
            if (totalPercentageEl) {
                totalPercentageEl.textContent = percentage + '%';
            }

            // Update badges
            if (realisasiBadgeEl && totals.target > 0) {
                animatePercentage(realisasiBadgeEl, percentage);
            }

            if (sisaTargetBadgeEl && totals.target > 0) {
                const sisaPercentage = Math.round((totals.sisaTarget / totals.target) * 100);
                const displayValue = sisaPercentage > 0 ? -Math.abs(sisaPercentage) : Math.abs(sisaPercentage);
                animatePercentage(sisaTargetBadgeEl, displayValue, {
                    prefix: displayValue < 0 ? '' : ''
                });
            }
        }

        // Update card data
        function updateCardData(cardId, data) {
            const card = document.getElementById(cardId);
            if (!card) {
                console.warn(`updateCardData: Card not found: ${cardId}`);
                return;
            }

            console.log(`updateCardData: Updating ${cardId} with data:`, data);

            // Use field names from API response
            const target = data.target_sesudah || data.target || data.total_target || data.target_value || 0;
            const realisasi = data.realisasi_sd_bulan_ini || data.realisasi || data.total_realisasi || data
                .realisasi_value || 0;
            const realisasiHariIni = data.realisasi_hari_ini || data.realisasiHariIni || data.realisasi_hariini || data
                .today_realisasi || 0;
            const sisaTarget = data.sisa_target || data.sisaTarget || data.sisa || (target - realisasi) || 0;
            // Use percentage from API if available, otherwise calculate
            const percentage = data.percentage !== undefined && data.percentage !== null ?
                Math.round(data.percentage) :
                calculatePercentage(realisasi, target);

            console.log(
                `updateCardData: ${cardId} - Target: ${target}, Realisasi: ${realisasi}, SisaTarget: ${sisaTarget}, Percentage: ${percentage}`
            );

            // Update progress ring (this also updates the percentage text)
            const progressRingId = cardId.replace('Card', 'Progress');
            updateProgressRing(progressRingId, percentage);

            // Update data values with animations
            const targetElement = card.querySelector('[data-field="target"]');
            const realisasiElement = card.querySelector('[data-field="realisasi"]');
            const sisaTargetElement = card.querySelector('[data-field="sisa-target"]');

            console.log(`updateCardData: ${cardId} - Elements found:`, {
                targetElement: !!targetElement,
                realisasiElement: !!realisasiElement,
                sisaTargetElement: !!sisaTargetElement
            });

            if (targetElement) animateNumber(targetElement, target);
            if (realisasiElement) animateNumber(realisasiElement, realisasi);
            if (sisaTargetElement) animateNumber(sisaTargetElement, sisaTarget);

            // Update badges with animations
            const realisasiBadge = card.querySelector('[data-badge="realisasi"]');
            const sisaTargetBadge = card.querySelector('[data-badge="sisa-target"]');

            if (realisasiBadge) {
                animatePercentage(realisasiBadge, percentage);
                realisasiBadge.style.background = 'rgba(41,192,108,0.15)';
                realisasiBadge.style.color = '#29c06c';
            }

            if (sisaTargetBadge) {
                const sisaPercentage = calculatePercentage(sisaTarget, target);
                const displayValue = sisaPercentage > 0 ? -Math.abs(sisaPercentage) : Math.abs(sisaPercentage);
                animatePercentage(sisaTargetBadge, displayValue, {
                    prefix: displayValue < 0 ? '' : ''
                });
                sisaTargetBadge.style.background = 'rgba(255,46,79,0.15)';
                sisaTargetBadge.style.color = '#ff2e4f';
            }

            // Store values for summary calculation
            if (cardId === 'padCard' || cardId === 'danaTransferCard' || cardId === 'pendapatanLainnyaCard') {
                cardValues[cardId] = {
                    target: target,
                    realisasi: realisasi,
                    realisasiHariIni: realisasiHariIni,
                    sisaTarget: sisaTarget
                };

                // Recalculate totals
                totals.target = cardValues.padCard.target + cardValues.danaTransferCard.target + cardValues
                    .pendapatanLainnyaCard.target;
                totals.realisasi = cardValues.padCard.realisasi + cardValues.danaTransferCard.realisasi + cardValues
                    .pendapatanLainnyaCard.realisasi;
                totals.realisasiHariIni = cardValues.padCard.realisasiHariIni + cardValues.danaTransferCard
                    .realisasiHariIni + cardValues.pendapatanLainnyaCard.realisasiHariIni;
                totals.sisaTarget = cardValues.padCard.sisaTarget + cardValues.danaTransferCard.sisaTarget + cardValues
                    .pendapatanLainnyaCard.sisaTarget;

                // Update summary after a short delay
                setTimeout(updateTotalSummary, 100);
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
            } catch (error) {
                console.error('Error fetching accounts data:', error);
                throw error; // Re-throw to be handled by wrapper
            }
        }

        // Helper function to delay execution
        function delay(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }

        // Cache untuk menyimpan semua data accounts
        let accountsDataCache = null;
        let accountsDataCacheTime = null;
        const CACHE_DURATION = 30000; // Cache valid selama 30 detik

        // Fetch all accounts data from /api/accounts endpoint
        async function fetchAllAccountsData() {
            try {
                console.log('Fetching data from:', API_BASE_URL);
                const response = await fetch(API_BASE_URL);

                if (!response.ok) {
                    throw new Error(`HTTP ${response.status}: ${response.statusText}`);
                }

                const result = await response.json();
                console.log('API Response:', result);

                // Handle different response formats
                let accountsData = [];

                if (Array.isArray(result)) {
                    // Response is directly an array
                    accountsData = result;
                } else if (result.data && Array.isArray(result.data)) {
                    // Response has data property that is an array
                    accountsData = result.data;
                } else if (result.data && typeof result.data === 'object') {
                    // Response has data property that is a single object
                    console.log('Response is a single object, not an array');
                    // Fallback: fetch individual accounts
                    return await fetchIndividualAccountsData();
                } else {
                    console.warn('Unknown response format:', result);
                    return await fetchIndividualAccountsData();
                }

                console.log('Accounts Data (array):', accountsData);

                // Create a map for quick lookup by ID
                const accountsMap = {};
                if (Array.isArray(accountsData) && accountsData.length > 0) {
                    accountsData.forEach(account => {
                        if (account.id) {
                            accountsMap[account.id] = account;
                        }
                    });
                    console.log('Accounts Map created with', Object.keys(accountsMap).length, 'accounts');
                } else {
                    console.warn('accountsData is empty or not an array, using fallback');
                    return await fetchIndividualAccountsData();
                }

                accountsDataCache = accountsMap;
                accountsDataCacheTime = Date.now();

                return accountsMap;
            } catch (error) {
                console.error('Error fetching all accounts data:', error);
                // Show error in UI
                const counterEl = document.getElementById('refreshCounter');
                if (counterEl) {
                    counterEl.textContent = `Error loading data: ${error.message}`;
                    counterEl.style.color = '#ff6b6b';
                }
                // Try fallback
                return await fetchIndividualAccountsData();
            }
        }

        // Fallback: Fetch individual account data for required account IDs
        async function fetchIndividualAccountsData() {
            console.log('Using fallback: fetching individual accounts');

            // List of required account IDs from the menu structure
            const requiredAccountIds = [
                // Main categories
                30240, // PAD
                30481, // Dana Transfer
                30524, // Pendapatan Lainnya

                // PAD children
                30241, // Pajak Daerah
                30300, // Retribusi Daerah
                30397, // Hasil Pengelolaan Kekayaan Daerah
                30427, // Lain-lain PAD yang Sah

                // Pajak Daerah children
                30242, // PBB-P2
                30248, // BPHTB
                30251, // Pajak Reklame
                30254, // Pajak Air Tanah
                30255, // MBLB
                30260, // Pajak Sarang Burung Walet
                30263, // PBJT

                // PBJT children
                30264, // Makanan/Minuman
                30267, // Tenaga Listrik
                30270, // Hotel
                30273, // Parkir
                30276, // Kesenian/Hiburan
                30279, // Jasa Perhotelan

                // Opsen
                30294, // Opsen PKB
                30297, // Opsen BBNKB

                // Dana Transfer children
                30482, // Dana Perimbangan
                30496, // Transfer Antar Daerah

                // Pendapatan Lainnya
                30525, // Pendapatan Hibah
            ];

            const accountsMap = {};

            // Fetch accounts in batches to avoid rate limiting
            const batchSize = 5;
            for (let i = 0; i < requiredAccountIds.length; i += batchSize) {
                const batch = requiredAccountIds.slice(i, i + batchSize);

                const batchPromises = batch.map(async (id) => {
                    try {
                        const response = await fetch(`${API_BASE_URL}/${id}`);
                        if (response.ok) {
                            const result = await response.json();
                            const accountData = result.data || result;
                            if (accountData && accountData.id) {
                                accountsMap[accountData.id] = accountData;
                                console.log(`Fetched account ${id}:`, accountData.name);
                            }
                        }
                    } catch (error) {
                        console.warn(`Failed to fetch account ${id}:`, error);
                    }
                });

                await Promise.all(batchPromises);

                // Small delay between batches to avoid rate limiting
                if (i + batchSize < requiredAccountIds.length) {
                    await delay(200);
                }
            }

            console.log('Individual fetch complete. Accounts Map has', Object.keys(accountsMap).length, 'accounts');

            accountsDataCache = accountsMap;
            accountsDataCacheTime = Date.now();

            return accountsMap;
        }

        // Get account data by ID from cache
        function getAccountDataById(id) {
            // Check if cache exists and is still valid
            if (accountsDataCache && accountsDataCacheTime) {
                const cacheAge = Date.now() - accountsDataCacheTime;
                if (cacheAge < CACHE_DURATION) {
                    return accountsDataCache[id] || null;
                }
            }
            return null;
        }

        // Fetch account detail by ID (fallback if cache is not available)
        async function fetchAccountDetail(id, retries = 3) {
            // First try to get from cache
            const cachedData = getAccountDataById(id);
            if (cachedData) {
                return {
                    data: cachedData
                };
            }

            // If not in cache, fetch individually (fallback)
            for (let attempt = 0; attempt < retries; attempt++) {
                try {
                    const response = await fetch(`${API_BASE_URL}/${id}`);

                    // Handle 429 Too Many Requests
                    if (response.status === 429) {
                        const retryAfter = response.headers.get('Retry-After');
                        const waitTime = retryAfter ? parseInt(retryAfter) * 1000 : Math.pow(2, attempt) *
                            1000; // Exponential backoff

                        if (attempt < retries - 1) {
                            console.warn(`Rate limited for account ${id}. Retrying after ${waitTime}ms...`);
                            await delay(waitTime);
                            continue;
                        } else {
                            console.error(`Rate limited for account ${id}. Max retries reached.`);
                            return null;
                        }
                    }

                    if (!response.ok) {
                        throw new Error(`HTTP ${response.status}: ${response.statusText}`);
                    }

                    const data = await response.json();
                    return data;
                } catch (error) {
                    if (attempt < retries - 1) {
                        const waitTime = Math.pow(2, attempt) * 1000; // Exponential backoff
                        console.warn(
                            `Error fetching account ${id} (attempt ${attempt + 1}/${retries}). Retrying after ${waitTime}ms...`,
                            error);
                        await delay(waitTime);
                    } else {
                        console.error(`Error fetching account detail for ID ${id}:`, error);
                        return null;
                    }
                }
            }
            return null;
        }

        // Update progress ring by element ID
        function updateProgressRingById(elementId, percentage) {
            const container = document.getElementById(elementId);
            if (!container) return;

            const element = container.querySelector('.progress-ring-circle:last-child');
            if (!element) return;

            const radius = 42;
            const circumference = 2 * Math.PI * radius;
            const offset = circumference - (percentage / 100) * circumference;

            element.style.strokeDashoffset = offset;

            // Update percentage text with animation
            const percentageText = container.querySelector('.fw-bold.fs-3.text-gray-800');
            if (percentageText) {
                animatePercentage(percentageText, percentage);
            }
        }

        // Update card data by account ID
        function updateCardDataById(accountId, data) {
            // Find all cards with this account ID
            const cards = document.querySelectorAll(`[data-account-id="${accountId}"]`);
            if (cards.length === 0) return;

            // Use field names from API response
            const target = data.target_sesudah || data.target || data.total_target || data.target_value || 0;
            const realisasi = data.realisasi_sd_bulan_ini || data.realisasi || data.total_realisasi || data
                .realisasi_value || 0;
            const sisaTarget = data.sisa_target || data.sisaTarget || data.sisa || (target - realisasi) || 0;
            const percentage = data.percentage !== undefined && data.percentage !== null ?
                Math.round(data.percentage) :
                calculatePercentage(realisasi, target);

            cards.forEach(card => {
                // Find progress ring ID (it's in a div with id starting with 'progress-')
                const progressRingContainer = card.querySelector('[id^="progress-"]');
                if (progressRingContainer) {
                    updateProgressRingById(progressRingContainer.id, percentage);
                }

                // Get card slug from data-card-slug attribute
                const cardSlug = card.getAttribute('data-card-slug');
                if (cardSlug) {
                    // Update target
                    const targetEl = card.querySelector(`[data-card-field="${cardSlug}-target"]`);
                    if (targetEl) animateNumber(targetEl, target);

                    // Update realisasi
                    const realisasiEl = card.querySelector(`[data-card-field="${cardSlug}-realisasi"]`);
                    if (realisasiEl) animateNumber(realisasiEl, realisasi);

                    // Update sisa target
                    const sisaTargetEl = card.querySelector(`[data-card-field="${cardSlug}-sisa-target"]`);
                    if (sisaTargetEl) animateNumber(sisaTargetEl, sisaTarget);

                    // Update badges
                    const realisasiBadge = card.querySelector(`[data-card-badge="${cardSlug}-realisasi"]`);
                    if (realisasiBadge) {
                        animatePercentage(realisasiBadge, percentage);
                        realisasiBadge.style.background = 'rgba(41,192,108,0.15)';
                        realisasiBadge.style.color = '#29c06c';
                    }

                    const sisaTargetBadge = card.querySelector(`[data-card-badge="${cardSlug}-sisa-target"]`);
                    if (sisaTargetBadge) {
                        const sisaPercentage = calculatePercentage(sisaTarget, target);
                        const displayValue = sisaPercentage > 0 ? -Math.abs(sisaPercentage) : Math.abs(
                            sisaPercentage);
                        animatePercentage(sisaTargetBadge, displayValue, {
                            prefix: displayValue < 0 ? '' : ''
                        });
                        sisaTargetBadge.style.background = 'rgba(255,46,79,0.15)';
                        sisaTargetBadge.style.color = '#ff2e4f';
                    }
                }
            });
        }

        // Update summary data by ID
        function updateSummaryDataById(summaryId, data) {
            const target = data.target_sesudah || data.target || data.total_target || data.target_value || 0;
            const realisasi = data.realisasi_sd_bulan_ini || data.realisasi || data.total_realisasi || data
                .realisasi_value || 0;
            const sisaTarget = data.sisa_target || data.sisaTarget || data.sisa || (target - realisasi) || 0;
            const percentage = data.percentage !== undefined && data.percentage !== null ?
                Math.round(data.percentage) :
                calculatePercentage(realisasi, target);

            // Update summary elements
            const targetEl = document.querySelector(`[data-summary="target-${summaryId}"]`);
            if (targetEl) animateNumber(targetEl, target);

            const realisasiEl = document.querySelector(`[data-summary="realisasi-${summaryId}"]`);
            if (realisasiEl) animateNumber(realisasiEl, realisasi);

            const sisaTargetEl = document.querySelector(`[data-summary="sisa-target-${summaryId}"]`);
            if (sisaTargetEl) animateNumber(sisaTargetEl, sisaTarget);

            // Update badges
            const realisasiBadge = document.querySelector(`[data-summary-badge="realisasi-${summaryId}"]`);
            if (realisasiBadge) {
                animatePercentage(realisasiBadge, percentage);
            }

            const sisaTargetBadge = document.querySelector(`[data-summary-badge="sisa-target-${summaryId}"]`);
            if (sisaTargetBadge) {
                const sisaPercentage = calculatePercentage(sisaTarget, target);
                const displayValue = sisaPercentage > 0 ? -Math.abs(sisaPercentage) : Math.abs(sisaPercentage);
                animatePercentage(sisaTargetBadge, displayValue, {
                    prefix: displayValue < 0 ? '' : ''
                });
            }
        }

        // Update card data by account ID from cache
        function updateCardDataFromCache(accountId) {
            const accountData = getAccountDataById(parseInt(accountId));
            if (accountData) {
                updateCardDataById(accountId, accountData);
            }
        }

        // Update summary data by account ID from cache
        function updateSummaryDataFromCache(accountId, summaryId) {
            const accountData = getAccountDataById(parseInt(accountId));
            if (accountData) {
                updateSummaryDataById(summaryId, accountData);
            }
        }

        // Fetch all cards data from menu structure (using cache)
        async function fetchAllCardsData() {
            console.log('fetchAllCardsData: Starting...');

            // Check if cache exists
            if (!accountsDataCache) {
                console.warn('fetchAllCardsData: Cache is empty, skipping update');
                return;
            }

            console.log('fetchAllCardsData: Cache has', Object.keys(accountsDataCache).length, 'accounts');

            // Get all cards with data-account-id attribute
            const cards = document.querySelectorAll('[data-account-id]');
            console.log('fetchAllCardsData: Found', cards.length, 'cards with data-account-id');

            const accountIds = new Set();

            cards.forEach(card => {
                const accountId = card.getAttribute('data-account-id');
                if (accountId && accountId !== 'null' && accountId !== '') {
                    accountIds.add(parseInt(accountId));
                }
            });

            console.log('fetchAllCardsData: Updating', accountIds.size, 'unique account IDs:', Array.from(accountIds));

            // Update all cards from cache
            accountIds.forEach(accountId => {
                const accountData = getAccountDataById(accountId);
                if (accountData) {
                    console.log(`Updating card for account ${accountId}:`, accountData);
                    updateCardDataFromCache(accountId);
                } else {
                    console.warn(`No data found in cache for account ${accountId}`);
                }
            });

            console.log('fetchAllCardsData: Complete');
        }

        // Fetch all summary data from menu structure (using cache)
        async function fetchAllSummaryData() {
            console.log('fetchAllSummaryData: Starting...');

            // Check if cache exists
            if (!accountsDataCache) {
                console.warn('fetchAllSummaryData: Cache is empty, skipping update');
                return;
            }

            // Get all summary containers with data-summary-account-id attribute
            const summaryContainers = document.querySelectorAll('[data-summary-account-id]');
            console.log('fetchAllSummaryData: Found', summaryContainers.length, 'summary containers');

            summaryContainers.forEach(container => {
                const accountId = container.getAttribute('data-summary-account-id');
                const summaryId = container.getAttribute('data-summary-id');

                if (accountId && accountId !== 'null' && accountId !== '' && summaryId) {
                    const accountData = getAccountDataById(parseInt(accountId));
                    if (accountData) {
                        console.log(`Updating summary ${summaryId} for account ${accountId}:`, accountData);
                        updateSummaryDataFromCache(parseInt(accountId), summaryId);
                    } else {
                        console.warn(`No data found in cache for account ${accountId}`);
                    }
                }
            });

            console.log('fetchAllSummaryData: Complete');
        }

        // Update tab data for PAD tab
        function updatePadTabData(data) {
            const tabPane = document.getElementById('pendapatan');
            if (!tabPane) return;

            // Use field names from API response
            const target = data.target_sesudah || data.target || 0;
            const realisasi = data.realisasi_sd_bulan_ini || 0;
            const realisasiHariIni = data.realisasi_hari_ini || 0;
            const sisaTarget = data.sisa_target || (target - realisasi) || 0;
            const percentage = data.percentage !== undefined && data.percentage !== null ?
                Math.round(data.percentage) :
                calculatePercentage(realisasi, target);

            // Update fields with animations
            const targetElement = tabPane.querySelector('[data-tab-field="target"]');
            const realisasiElement = tabPane.querySelector('[data-tab-field="realisasi"]');
            const realisasiHariIniElement = tabPane.querySelector('[data-tab-field="realisasi-hari-ini"]');
            const sisaTargetElement = tabPane.querySelector('[data-tab-field="sisa-target"]');

            if (targetElement) animateNumber(targetElement, target);
            if (realisasiElement) animateNumber(realisasiElement, realisasi);
            if (realisasiHariIniElement) animateNumber(realisasiHariIniElement, realisasiHariIni);
            if (sisaTargetElement) animateNumber(sisaTargetElement, sisaTarget);

            // Update badges with animations
            const realisasiBadge = tabPane.querySelector('[data-tab-badge="realisasi"]');
            const sisaTargetBadge = tabPane.querySelector('[data-tab-badge="sisa-target"]');

            if (realisasiBadge) {
                animatePercentage(realisasiBadge, percentage);
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
                const displayValue = (sisaPercentage > 0 ? -1 : 1) * Math.abs(sisaPercentage);
                animatePercentage(sisaTargetBadge, displayValue, {
                    prefix: sisaPercentage > 0 ? '-' : ''
                });
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

                    console.log(accountData);
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
            const percentage = data.percentage !== undefined && data.percentage !== null ?
                Math.round(data.percentage) :
                calculatePercentage(realisasi, target);

            // Update fields with animations
            const targetElement = tabPane.querySelector('[data-tab-field="dana-target"]');
            const realisasiElement = tabPane.querySelector('[data-tab-field="dana-realisasi"]');
            const realisasiHariIniElement = tabPane.querySelector('[data-tab-field="dana-realisasi-hari-ini"]');
            const sisaTargetElement = tabPane.querySelector('[data-tab-field="dana-sisa-target"]');

            if (targetElement) animateNumber(targetElement, target);
            if (realisasiElement) animateNumber(realisasiElement, realisasi);
            if (realisasiHariIniElement) animateNumber(realisasiHariIniElement, realisasiHariIni);
            if (sisaTargetElement) animateNumber(sisaTargetElement, sisaTarget);

            // Update badges with animations
            const realisasiBadge = tabPane.querySelector('[data-tab-badge="dana-realisasi"]');
            const sisaTargetBadge = tabPane.querySelector('[data-tab-badge="dana-sisa-target"]');

            if (realisasiBadge) {
                animatePercentage(realisasiBadge, percentage);
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
                const displayValue = (sisaPercentage > 0 ? -1 : 1) * Math.abs(sisaPercentage);
                animatePercentage(sisaTargetBadge, displayValue, {
                    prefix: sisaPercentage > 0 ? '-' : ''
                });
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
            const percentage = data.percentage !== undefined && data.percentage !== null ?
                Math.round(data.percentage) :
                calculatePercentage(realisasi, target);

            // Update fields
            const targetElement = tabPane.querySelector('[data-tab-field="lainnya-target"]');
            const realisasiElement = tabPane.querySelector('[data-tab-field="lainnya-realisasi"]');
            const realisasiHariIniElement = tabPane.querySelector('[data-tab-field="lainnya-realisasi-hari-ini"]');
            const sisaTargetElement = tabPane.querySelector('[data-tab-field="lainnya-sisa-target"]');

            if (targetElement) animateNumber(targetElement, target);
            if (realisasiElement) animateNumber(realisasiElement, realisasi);
            if (realisasiHariIniElement) animateNumber(realisasiHariIniElement, realisasiHariIni);
            if (sisaTargetElement) animateNumber(sisaTargetElement, sisaTarget);

            // Update badges with animations
            const realisasiBadge = tabPane.querySelector('[data-tab-badge="lainnya-realisasi"]');
            const sisaTargetBadge = tabPane.querySelector('[data-tab-badge="lainnya-sisa-target"]');

            if (realisasiBadge) {
                animatePercentage(realisasiBadge, percentage);
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
                const displayValue = (sisaPercentage > 0 ? -1 : 1) * Math.abs(sisaPercentage);
                animatePercentage(sisaTargetBadge, displayValue, {
                    prefix: sisaPercentage > 0 ? '-' : ''
                });
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
            const percentage = data.percentage !== undefined && data.percentage !== null ?
                Math.round(data.percentage) :
                calculatePercentage(realisasi, target);

            // Update fields
            const targetElement = tabPane.querySelector(`[data-pbjt-field="${tabId}-target"]`);
            const realisasiElement = tabPane.querySelector(`[data-pbjt-field="${tabId}-realisasi"]`);
            const realisasiHariIniElement = tabPane.querySelector(`[data-pbjt-field="${tabId}-realisasi-hari-ini"]`);
            const sisaTargetElement = tabPane.querySelector(`[data-pbjt-field="${tabId}-sisa-target"]`);

            if (targetElement) animateNumber(targetElement, target);
            if (realisasiElement) animateNumber(realisasiElement, realisasi);
            if (realisasiHariIniElement) animateNumber(realisasiHariIniElement, realisasiHariIni);
            if (sisaTargetElement) animateNumber(sisaTargetElement, sisaTarget);

            // Update badges with animations
            const realisasiBadge = tabPane.querySelector(`[data-pbjt-badge="${tabId}-realisasi"]`);
            const sisaTargetBadge = tabPane.querySelector(`[data-pbjt-badge="${tabId}-sisa-target"]`);

            if (realisasiBadge) {
                animatePercentage(realisasiBadge, percentage);
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
                const displayValue = (sisaPercentage > 0 ? -1 : 1) * Math.abs(sisaPercentage);
                animatePercentage(sisaTargetBadge, displayValue, {
                    prefix: sisaPercentage > 0 ? '-' : ''
                });
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
                fetchPbjtTabData('tenaga-listrik', 30281),
                fetchPbjtTabData('makanan', 30279),
                fetchPbjtTabData('perhotelan', 30284),
                fetchPbjtTabData('kesenian', 30288),
                fetchPbjtTabData('parkir', 30286)
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
            const percentage = data.percentage !== undefined && data.percentage !== null ?
                Math.round(data.percentage) :
                calculatePercentage(realisasi, target);

            // Update fields
            const targetElement = tabPane.querySelector(`[data-lain-field="${tabId}-target"]`);
            const realisasiElement = tabPane.querySelector(`[data-lain-field="${tabId}-realisasi"]`);
            const realisasiHariIniElement = tabPane.querySelector(`[data-lain-field="${tabId}-realisasi-hari-ini"]`);
            const sisaTargetElement = tabPane.querySelector(`[data-lain-field="${tabId}-sisa-target"]`);

            if (targetElement) animateNumber(targetElement, target);
            if (realisasiElement) animateNumber(realisasiElement, realisasi);
            if (realisasiHariIniElement) animateNumber(realisasiHariIniElement, realisasiHariIni);
            if (sisaTargetElement) animateNumber(sisaTargetElement, sisaTarget);

            // Update badges with animations
            const realisasiBadge = tabPane.querySelector(`[data-lain-badge="${tabId}-realisasi"]`);
            const sisaTargetBadge = tabPane.querySelector(`[data-lain-badge="${tabId}-sisa-target"]`);

            if (realisasiBadge) {
                animatePercentage(realisasiBadge, percentage);
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
                const displayValue = (sisaPercentage > 0 ? -1 : 1) * Math.abs(sisaPercentage);
                animatePercentage(sisaTargetBadge, displayValue, {
                    prefix: sisaPercentage > 0 ? '-' : ''
                });
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
            const percentage = data.percentage !== undefined && data.percentage !== null ?
                Math.round(data.percentage) :
                calculatePercentage(realisasi, target);

            // Update fields
            const targetElement = tabPane.querySelector(`[data-opsen-field="${tabId}-target"]`);
            const realisasiElement = tabPane.querySelector(`[data-opsen-field="${tabId}-realisasi"]`);
            const realisasiHariIniElement = tabPane.querySelector(`[data-opsen-field="${tabId}-realisasi-hari-ini"]`);
            const sisaTargetElement = tabPane.querySelector(`[data-opsen-field="${tabId}-sisa-target"]`);

            if (targetElement) animateNumber(targetElement, target);
            if (realisasiElement) animateNumber(realisasiElement, realisasi);
            if (realisasiHariIniElement) animateNumber(realisasiHariIniElement, realisasiHariIni);
            if (sisaTargetElement) animateNumber(sisaTargetElement, sisaTarget);

            // Update badges with animations
            const realisasiBadge = tabPane.querySelector(`[data-opsen-badge="${tabId}-realisasi"]`);
            const sisaTargetBadge = tabPane.querySelector(`[data-opsen-badge="${tabId}-sisa-target"]`);

            if (realisasiBadge) {
                animatePercentage(realisasiBadge, percentage);
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
                const displayValue = (sisaPercentage > 0 ? -1 : 1) * Math.abs(sisaPercentage);
                animatePercentage(sisaTargetBadge, displayValue, {
                    prefix: sisaPercentage > 0 ? '-' : ''
                });
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

        // Store chart instances
        const chartInstances = {};

        // Create AmCharts bar chart for realization
        function createRealizationChart(chartId, data) {
            // Dispose existing chart if any
            if (chartInstances[chartId]) {
                chartInstances[chartId].dispose();
            }

            const chartDiv = document.getElementById(chartId);
            if (!chartDiv) return null;

            // Create chart instance
            const root = am5.Root.new(chartId);

            // Set themes
            root.setThemes([
                am5themes_Animated.new(root)
            ]);

            // Create chart
            const chart = root.container.children.push(am5xy.XYChart.new(root, {
                panX: false,
                panY: false,
                wheelX: "panX",
                wheelY: "zoomX",
                layout: root.verticalLayout,
                paddingLeft: 0,
                paddingRight: 0
            }));

            // Create axes
            const yAxis = chart.yAxes.push(am5xy.CategoryAxis.new(root, {
                categoryField: "category",
                renderer: am5xy.AxisRendererY.new(root, {
                    minGridDistance: 20,
                    cellStartLocation: 0.1,
                    cellEndLocation: 0.9
                })
            }));

            yAxis.data.setAll(data);

            const xAxis = chart.xAxes.push(am5xy.ValueAxis.new(root, {
                renderer: am5xy.AxisRendererX.new(root, {}),
                min: 0
            }));

            // Add series for Target
            const targetSeries = chart.series.push(am5xy.ColumnSeries.new(root, {
                name: "Target",
                xAxis: xAxis,
                yAxis: yAxis,
                valueXField: "target",
                categoryYField: "category",
                fill: am5.color(0xFFB700),
                stroke: am5.color(0xFFB700),
                tooltip: am5.Tooltip.new(root, {
                    labelText: "Target: Rp{valueX}"
                })
            }));

            targetSeries.columns.template.setAll({
                height: am5.percent(70),
                strokeOpacity: 0
            });

            targetSeries.data.setAll(data);

            // Add series for Realisasi
            const realisasiSeries = chart.series.push(am5xy.ColumnSeries.new(root, {
                name: "Realisasi",
                xAxis: xAxis,
                yAxis: yAxis,
                valueXField: "realisasi",
                categoryYField: "category",
                fill: am5.color(0x3b82f6),
                stroke: am5.color(0x3b82f6),
                tooltip: am5.Tooltip.new(root, {
                    labelText: "Realisasi: Rp{valueX} ({percentage}%)"
                })
            }));

            realisasiSeries.columns.template.setAll({
                height: am5.percent(70),
                strokeOpacity: 0
            });

            realisasiSeries.data.setAll(data);

            // Add legend
            const legend = chart.children.push(am5.Legend.new(root, {
                centerX: am5.percent(50),
                x: am5.percent(50)
            }));

            legend.data.setAll(chart.series.values);

            // Make stuff animate on load
            chart.appear(1000, 100);

            // Store chart instance
            chartInstances[chartId] = root;

            return root;
        }

        // Update chart data
        function updateChartData(chartId, data) {
            if (chartInstances[chartId]) {
                // Chart exists, update data
                const root = chartInstances[chartId];
                const chart = root.container.children.values[0];

                if (chart && chart.series) {
                    chart.series.values.forEach((series, index) => {
                        series.data.setAll(data);
                    });

                    const yAxis = chart.yAxes.values[0];
                    if (yAxis) {
                        yAxis.data.setAll(data);
                    }
                }
            } else {
                // Chart doesn't exist, create it
                createRealizationChart(chartId, data);
            }
        }

        // Fetch and update chart data for a specific account and its children
        async function fetchChartDataForAccount(accountId, chartId) {
            try {
                // Get account data from cache
                const accountData = getAccountDataById(parseInt(accountId));

                if (!accountData || !accountData.children) {
                    console.log(`No children data for account ${accountId}`);
                    return;
                }

                // Prepare chart data from children
                const chartData = [];

                for (const child of accountData.children) {
                    const target = child.target_sesudah || child.target || 0;
                    const realisasi = child.realisasi_sd_bulan_ini || child.realisasi || 0;
                    const percentage = target > 0 ? Math.round((realisasi / target) * 100) : 0;

                    chartData.push({
                        category: child.name || child.label || 'Unknown',
                        target: target,
                        realisasi: realisasi,
                        percentage: percentage
                    });
                }

                // Update or create chart
                if (chartData.length > 0) {
                    updateChartData(chartId, chartData);
                }
            } catch (error) {
                console.error(`Error fetching chart data for account ${accountId}:`, error);
            }
        }

        // Update current date and time display
        function updateDateTime() {
            const dateTimeElement = document.getElementById('currentDateTime');
            if (dateTimeElement) {
                const now = new Date();

                // Array nama hari dalam Bahasa Indonesia
                const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

                // Array nama bulan dalam Bahasa Indonesia
                const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                    'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                ];

                const dayName = days[now.getDay()];
                const date = now.getDate();
                const monthName = months[now.getMonth()];
                const year = now.getFullYear();

                // Format jam:menit:detik dengan leading zero
                const hours = String(now.getHours()).padStart(2, '0');
                const minutes = String(now.getMinutes()).padStart(2, '0');
                const seconds = String(now.getSeconds()).padStart(2, '0');

                // Format: "Senin, 15 September 2025 - 17:25:30"
                const dateTimeString = `${dayName}, ${date} ${monthName} ${year} - ${hours}:${minutes}:${seconds}`;

                dateTimeElement.textContent = dateTimeString;
            }
        }

        // Update refresh counter display
        function updateRefreshCounter() {
            const counterElement = document.getElementById('refreshCounter');
            if (counterElement) {
                const now = new Date();

                // Format jam:menit:detik dengan leading zero (17:11:32)
                const hours = String(now.getHours()).padStart(2, '0');
                const minutes = String(now.getMinutes()).padStart(2, '0');
                const seconds = String(now.getSeconds()).padStart(2, '0');
                const timeString = `${hours}:${minutes}:${seconds}`;

                counterElement.textContent = `Terakhir diupdate: ${timeString} (Refresh ke-${refreshCounter})`;
                counterElement.style.color = 'rgba(255, 255, 255, 0.75)';
            }
        }

        // Wrapper function to execute fetch with counter
        async function fetchWithCounter(fetchFunction, functionName) {
            try {
                await fetchFunction();
                refreshCounter++;
                updateRefreshCounter();
            } catch (error) {
                console.error(`Error in ${functionName}:`, error);
                const counterEl = document.getElementById('refreshCounter');
                if (counterEl) {
                    counterEl.textContent = `Error: ${error.message}`;
                    counterEl.style.color = '#ff6b6b';
                }
            }
        }

        // Start auto-refresh
        function startAutoRefresh() {
            if (refreshInterval) {
                clearInterval(refreshInterval);
            }
            refreshInterval = setInterval(() => {
                // Fetch all data in sequence to avoid race conditions
                fetchWithCounter(async () => {
                    // First, refresh the cache
                    await fetchAllAccountsData();

                    // Then update all cards and summaries from cache
                    await fetchAllCardsData();
                    await fetchAllSummaryData();
                }, 'refreshAllData');
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
            // Update date and time immediately
            updateDateTime();

            // Update date and time every second (1000ms) for real-time clock
            setInterval(updateDateTime, 1000);

            // Initial data fetch - run sequentially to avoid race conditions
            fetchWithCounter(async () => {
                // Step 1: Fetch and cache all accounts data
                await fetchAllAccountsData();

                // Step 2: Update all cards from cache
                await fetchAllCardsData();

                // Step 3: Update all summaries from cache
                await fetchAllSummaryData();
            }, 'initialDataLoad');

            // Initialize charts after data is loaded (with delay to ensure data is available)
            setTimeout(async () => {
                // Wait for all accounts data to be cached
                if (!accountsDataCache) {
                    await fetchAllAccountsData();
                }

                // Initialize charts for main categories (PAD, Transfer, Lainnya)
                // Chart for PAD (index 0)
                fetchChartDataForAccount(30240, 'chart-0');

                // Chart for Transfer (index 1)
                fetchChartDataForAccount(30481, 'chart-1');

                // Chart for Lainnya (index 2)
                fetchChartDataForAccount(30524, 'chart-2');

                // Initialize charts for level 2 tabs
                // PAD -> Pajak Daerah (chart-0-0-0)
                fetchChartDataForAccount(30241, 'chart-0-0-0');

                // PAD -> Retribusi Daerah -> Retribusi Jasa Umum (chart-0-1-0)
                fetchChartDataForAccount(30301, 'chart-0-1-0');

                // PAD -> Retribusi Daerah -> Retribusi Jasa Usaha (chart-0-1-1)
                fetchChartDataForAccount(30351, 'chart-0-1-1');
            }, 3000); // Wait 3 seconds for data to be fetched

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
</x-clean-layout>
