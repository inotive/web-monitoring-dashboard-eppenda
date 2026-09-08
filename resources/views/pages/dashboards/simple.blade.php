<x-clean-layout :title="'Dashboard Pajak'">
    @php
        // Main cards configuration
        $mainCards = [
            [
                'id' => 'pad',
                'account_id' => 30240,
                'title' => 'Pendapatan Asli Daerah (PAD)',
                'icon' => 'ki-pin',
                'color' => '#3b82f6',
                'children' => [
                    ['id' => 'pajak', 'account_id' => 30241, 'title' => 'Pajak Daerah', 'color' => '#6366f1'],
                    ['id' => 'retribusi', 'account_id' => 30300, 'title' => 'Retribusi Daerah', 'color' => '#8b5cf6'],
                    [
                        'id' => 'kekayaan',
                        'account_id' => 30398,
                        'title' => 'Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan',
                        'color' => '#a855f7',
                    ],
                    [
                        'id' => 'lain-pad',
                        'account_id' => 30402,
                        'title' => 'Lain-Lain PAD yang Sah',
                        'color' => '#d946ef',
                    ],
                ],
            ],
            [
                'id' => 'transfer',
                'account_id' => 30481,
                'title' => 'Dana Transfer',
                'icon' => 'ki-folder',
                'color' => '#f59e0b',
                'children' => [
                    [
                        'id' => 'pusat',
                        'account_id' => 30482,
                        'title' => 'Transfer Pemerintah Pusat',
                        'color' => '#f97316',
                    ],
                    ['id' => 'antar', 'account_id' => 30516, 'title' => 'Transfer Antar Daerah', 'color' => '#fb923c'],
                ],
            ],
            [
                'id' => 'lainnya',
                'account_id' => 30524,
                'title' => 'Pendapatan Lainnya yang Sah',
                'icon' => 'ki-chart-simple',
                'color' => '#10b981',
                'children' => [
                    ['id' => 'hibah', 'account_id' => 30525, 'title' => 'Pendapatan Hibah', 'color' => '#34d399'],
                ],
            ],
        ];

        // Pajak Daerah sub-items
        $pajakItems = [
            ['id' => 'reklame', 'account_id' => 30242, 'title' => 'Reklame'],
            ['id' => 'air-tanah', 'account_id' => 30249, 'title' => 'Air Tanah'],
            ['id' => 'sarang-walet', 'account_id' => 30252, 'title' => 'Sarang Burung Walet'],
            ['id' => 'mblb', 'account_id' => 30255, 'title' => 'MBLB'],
            ['id' => 'pbb-p2', 'account_id' => 30270, 'title' => 'PBB-P2'],
            ['id' => 'bphtb', 'account_id' => 30273, 'title' => 'BPHTB'],
            ['id' => 'pbjt', 'account_id' => 30278, 'title' => 'PBJT'],
            ['id' => 'opsen-pkb', 'account_id' => 30294, 'title' => 'OPSEN PKB'],
            ['id' => 'opsen-bbnkb', 'account_id' => 30297, 'title' => 'OPSEN BBNKB'],
        ];

        // PBJT sub-items
        $pbjtItems = [
            ['id' => 'pbjt-makanan', 'account_id' => 30279, 'title' => 'PBJT Makanan dan Minuman'],
            ['id' => 'pbjt-listrik', 'account_id' => 30281, 'title' => 'PBJT Tenaga Listrik'],
            ['id' => 'pbjt-hotel', 'account_id' => 30284, 'title' => 'PBJT Perhotelan'],
            ['id' => 'pbjt-parkir', 'account_id' => 30286, 'title' => 'PBJT Parkir'],
            ['id' => 'pbjt-hiburan', 'account_id' => 30288, 'title' => 'PBJT Kesenian dan Hiburan'],
        ];

        // Retribusi Daerah sub-items
        $retribusiItems = [
            ['id' => 'retribusi-jasa-umum', 'account_id' => 30301, 'title' => 'Retribusi Jasa Umum'],
            ['id' => 'retribusi-jasa-usaha', 'account_id' => 30351, 'title' => 'Retribusi Jasa Usaha'],
            ['id' => 'retribusi-perizinan', 'account_id' => 30393, 'title' => 'Retribusi Perizinan Tertentu'],
        ];
    @endphp

    <style>
        /* ========================================
           SKELETON LOADING ANIMATION
           ======================================== */
        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }

            100% {
                background-position: 200% 0;
            }
        }

        .skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite;
            border-radius: 8px;
        }

        .skeleton-text {
            height: 24px;
            margin-bottom: 8px;
        }

        .skeleton-text-lg {
            height: 32px;
            width: 80%;
        }

        .skeleton-text-sm {
            height: 16px;
            width: 40%;
        }

        .skeleton-circle {
            width: 140px;
            height: 140px;
            border-radius: 50%;
        }

        .skeleton-box {
            height: 80px;
            border-radius: 12px;
        }

        .loading .data-content {
            display: none !important;
        }

        .loading .skeleton-wrapper {
            display: block !important;
        }

        .skeleton-wrapper {
            display: none;
        }

        .loading>.data-content {
            display: none !important;
        }

        .loading>.skeleton-wrapper {
            display: block !important;
        }

        /* Specific selectors for sections */
        .section-card.loading .data-content,
        .section-card.loading>.data-content {
            display: none !important;
        }

        .section-card.loading .skeleton-wrapper,
        .section-card.loading>.skeleton-wrapper {
            display: block !important;
        }

        .main-card.loading .data-content,
        .main-card.loading>.data-content {
            display: none !important;
        }

        .main-card.loading .skeleton-wrapper,
        .main-card.loading>.skeleton-wrapper {
            display: block !important;
        }

        /* ========================================
           HEADER STYLES
           ======================================== */
        .dashboard-header {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            border-radius: 16px;
            padding: 20px 28px;
            margin-bottom: 16px;
            color: white;
            box-shadow: 0 10px 40px rgba(245, 158, 11, 0.25);
        }

        .dashboard-header h1 {
            font-size: 1.5rem;
            letter-spacing: -0.5px;
            margin-bottom: 4px !important;
            color: #ffffff;
        }

        .dashboard-header h2 {
            font-size: 1rem;
            letter-spacing: -0.3px;
            margin-bottom: 4px !important;
            color: rgba(255, 255, 255, 0.9);
        }

        .dashboard-header p {
            color: rgba(255, 255, 255, 0.8);
        }

        @media (min-width: 768px) {
            .dashboard-header h1 {
                font-size: 1.75rem;
            }

            .dashboard-header h2 {
                font-size: 1.1rem;
            }
        }

        /* ========================================
           MAIN CARD STYLES (Compact)
           ======================================== */
        .main-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
            padding: 16px 20px;
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.04);
        }

        .main-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 36px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
        }

        .card-icon {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
        }

        .card-icon i {
            font-size: 16px !important;
        }

        .card-title {
            font-size: 14px;
            font-weight: 700;
            color: #1f2937;
            margin: 0;
        }

        /* Progress Ring Container */
        .progress-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .progress-ring-wrapper {
            position: relative;
            width: 100px;
            height: 100px;
        }

        .progress-ring-lg {
            width: 100px;
            height: 100px;
        }

        .progress-ring-lg circle {
            transition: stroke-dashoffset 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
        }

        .progress-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .progress-percent {
            font-size: 22px;
            font-weight: 700;
            color: #1f2937;
        }

        .progress-label {
            font-size: 12px;
            color: #6b7280;
            margin-top: 6px;
            font-weight: 500;
        }

        /* Data Boxes */
        .data-box {
            padding: 10px 14px;
            border-radius: 10px;
            margin-bottom: 8px;
        }

        .data-box:last-child {
            margin-bottom: 0;
        }

        .data-box-target {
            background: #fef3c7;
        }

        .data-box-realisasi {
            background: #f9fafb;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .data-box-sisa {
            background: #f9fafb;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .data-label {
            font-size: 11px;
            color: #6b7280;
            margin-bottom: 4px;
            font-weight: 500;
        }

        .data-value {
            font-size: 14px;
            font-weight: 700;
            color: #1f2937;
        }

        .data-value-lg {
            font-size: 15px;
        }

        /* Badges */
        .badge-success {
            background: rgba(16, 185, 129, 0.15);
            color: #059669;
            padding: 4px 10px;
            border-radius: 16px;
            font-size: 11px;
            font-weight: 600;
        }

        .badge-danger {
            background: rgba(239, 68, 68, 0.12);
            color: #dc2626;
            padding: 4px 10px;
            border-radius: 16px;
            font-size: 11px;
            font-weight: 600;
        }

        /* ========================================
           MINI CARD STYLES
           ======================================== */
        .mini-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 2px 16px rgba(0, 0, 0, 0.05);
            padding: 20px;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.04);
            height: 100%;
        }

        .mini-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 28px rgba(0, 0, 0, 0.1);
        }

        .mini-progress-ring {
            width: 90px;
            height: 90px;
        }

        .mini-progress-ring circle {
            transition: stroke-dashoffset 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
        }

        /* ========================================
           SECTION STYLES
           ======================================== */
        .section-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.05);
            margin-bottom: 24px;
            overflow: hidden;
        }

        .section-header {
            padding: 20px 28px;
            border-bottom: 1px solid #f0f0f0;
            cursor: pointer;
            transition: background 0.2s;
        }

        .section-header:hover {
            background: #fafafa;
        }

        .section-body {
            padding: 28px;
        }

        .section-collapsed .section-body {
            display: none;
        }

        .section-toggle {
            transition: transform 0.3s;
        }

        .section-collapsed .section-toggle {
            transform: rotate(-90deg);
        }

        /* ========================================
           TABS
           ======================================== */
        .main-tabs-wrapper {
            display: flex;
            gap: 0;
            border-bottom: 2px solid #e5e7eb;
        }

        .main-tab {
            padding: 12px 24px;
            background: transparent;
            color: #6b7280;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            border: none;
            border-bottom: 3px solid transparent;
            margin-bottom: -2px;
            transition: all 0.2s;
        }

        .main-tab:hover {
            color: #3b82f6;
        }

        .main-tab.active {
            color: #3b82f6;
            border-bottom-color: #3b82f6;
        }

        /* Detail Tabs */
        .detail-tabs-wrapper {
            display: flex;
            gap: 0;
            background: #f9fafb;
            border-radius: 16px 16px 0 0;
            overflow: hidden;
        }

        .detail-tab {
            flex: 1;
            padding: 14px 20px;
            background: transparent;
            color: #6b7280;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            border: none;
            border-bottom: 3px solid transparent;
            transition: all 0.2s;
            text-align: center;
        }

        .detail-tab:hover {
            background: #f3f4f6;
            color: #3b82f6;
        }

        .detail-tab.active {
            background: white;
            color: #3b82f6;
            border-bottom-color: #3b82f6;
        }

        .custom-tabs {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-bottom: 24px;
        }

        .custom-tab {
            padding: 10px 18px;
            border-radius: 10px;
            background: #f3f4f6;
            color: #6b7280;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
            border: none;
        }

        .custom-tab:hover {
            background: #e5e7eb;
        }

        .custom-tab.active {
            background: #3b82f6;
            color: white;
        }

        /* Card Icon Small */
        .card-icon-sm {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Chart.js Ring Wrapper Small */
        .chartjs-ring-wrapper-sm {
            position: relative;
            width: 120px;
            height: 120px;
            margin: 0 auto;
        }

        .progress-percent-sm {
            font-size: 18px;
            font-weight: 700;
            color: #1f2937;
        }

        /* ========================================
           SUMMARY CARDS
           ======================================== */
        .summary-card {
            background: white;
            border-radius: 14px;
            padding: 20px 24px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
            border: 1px solid rgba(0, 0, 0, 0.04);
        }

        /* ========================================
           RESPONSIVE
           ======================================== */
        @media (max-width: 992px) {
            .main-card .row {
                flex-direction: column;
            }

            .progress-container {
                margin-bottom: 16px;
            }
        }

        @media (max-width: 768px) {
            .dashboard-header {
                padding: 16px 20px;
            }

            .main-card {
                padding: 14px;
            }

            .data-value {
                font-size: 13px;
            }

            .progress-ring-lg {
                width: 80px;
                height: 80px;
            }

            .progress-percent {
                font-size: 18px;
            }
        }

        /* ========================================
           CSS CIRCULAR PROGRESS (Thick Ring)
           ======================================== */
        .circular-progress-wrapper {
            position: relative;
            width: 100px;
            height: 100px;
        }

        .circular-progress {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.8s ease;
        }

        .circular-progress-inner {
            width: 65px;
            height: 65px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .circular-progress-inner .progress-percent {
            font-size: 22px;
            font-weight: 700;
            color: #1f2937;
        }

        /* Chart.js Ring Wrapper */
        .chartjs-ring-wrapper {
            position: relative;
            width: 120px;
            height: 120px;
        }

        .chartjs-center-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .chartjs-center-text .progress-percent {
            font-size: 18px;
            font-weight: 700;
            color: #1f2937;
        }

        /* ========================================
           INTERACTIVE ENHANCEMENTS - NEW CSS
           ======================================== */

        /* --- Card Color Left Border & Glow --- */
        .main-card {
            border-left: 4px solid var(--card-color, #e5e7eb) !important;
            position: relative;
            overflow: hidden;
        }

        .main-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--card-color, #e5e7eb), transparent);
            opacity: 0.4;
            pointer-events: none;
        }

        .main-card:hover {
            box-shadow: 0 12px 40px rgba(0,0,0,0.10), 0 0 0 2px var(--card-color, #e5e7eb22) !important;
        }

        .mini-card {
            border-left: 3px solid var(--card-color, #e5e7eb) !important;
            position: relative;
        }

        /* --- Status Pill --- */
        .status-pill {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.3px;
            transition: all 0.4s ease;
            opacity: 0;
            transform: translateY(4px);
        }

        .status-pill.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .status-pill .status-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .status-pill.on-track {
            background: rgba(16,185,129,0.12);
            color: #059669;
        }

        .status-pill.on-track .status-dot {
            background: #10b981;
            box-shadow: 0 0 0 3px rgba(16,185,129,0.25);
            animation: pulseGreen 2s infinite;
        }

        .status-pill.at-risk {
            background: rgba(245,158,11,0.12);
            color: #b45309;
        }

        .status-pill.at-risk .status-dot {
            background: #f59e0b;
            animation: pulseAmber 2s infinite;
        }

        .status-pill.behind {
            background: rgba(239,68,68,0.10);
            color: #dc2626;
        }

        .status-pill.behind .status-dot {
            background: #ef4444;
        }

        @keyframes pulseGreen {
            0%, 100% { box-shadow: 0 0 0 0 rgba(16,185,129,0.5); }
            50% { box-shadow: 0 0 0 5px rgba(16,185,129,0); }
        }

        @keyframes pulseAmber {
            0%, 100% { box-shadow: 0 0 0 0 rgba(245,158,11,0.5); }
            50% { box-shadow: 0 0 0 5px rgba(245,158,11,0); }
        }

        /* --- Mini Progress Bar --- */
        .mini-progress-bar-wrap {
            height: 4px;
            background: #e5e7eb;
            border-radius: 4px;
            overflow: hidden;
            margin-top: 6px;
        }

        .mini-progress-bar-fill {
            height: 100%;
            border-radius: 4px;
            width: 0%;
            transition: width 1s cubic-bezier(0.4, 0, 0.2, 1);
            background: linear-gradient(90deg, var(--bar-color, #3b82f6), var(--bar-color-end, #6366f1));
        }

        /* --- Live Refresh Dot --- */
        .live-dot-wrapper {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 11px;
            font-weight: 600;
            color: rgba(255,255,255,0.85);
        }

        .live-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #4ade80;
            flex-shrink: 0;
            transition: background 0.3s;
        }

        .live-dot.fetching {
            background: #facc15;
            animation: pulseLive 1s infinite;
        }

        .live-dot.done {
            background: #4ade80;
            animation: none;
        }

        @keyframes pulseLive {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.4; transform: scale(0.7); }
        }

        /* --- Header shimmer overlay --- */
        .dashboard-header {
            position: relative;
            overflow: hidden;
        }

        .dashboard-header::after {
            content: '';
            position: absolute;
            top: -50%; left: -75%;
            width: 50%; height: 200%;
            background: linear-gradient(
                105deg,
                transparent 0%,
                rgba(255,255,255,0.08) 50%,
                transparent 100%
            );
            animation: headerShimmer 4s infinite linear;
            pointer-events: none;
        }

        @keyframes headerShimmer {
            0% { left: -75%; }
            100% { left: 125%; }
        }

        /* --- Tab Slide Animation --- */
        .detail-tab-content {
            animation: fadeSlideIn 0.28s ease both;
        }

        @keyframes fadeSlideIn {
            from { opacity: 0; transform: translateY(8px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .detail-tab.active {
            background: white;
            color: #3b82f6;
            border-bottom-color: #3b82f6;
            box-shadow: 0 -2px 8px rgba(59,130,246,0.10);
        }

        .custom-tab.active {
            background: linear-gradient(135deg, #3b82f6, #6366f1);
            color: white;
            box-shadow: 0 4px 12px rgba(59,130,246,0.30);
            transform: translateY(-1px);
        }

        /* --- Number pop effect --- */
        @keyframes popIn {
            0%   { transform: scale(1); }
            40%  { transform: scale(1.08); }
            100% { transform: scale(1); }
        }

        .pop-animate {
            animation: popIn 0.3s ease;
        }

        /* --- Card "click to scroll" ripple feedback --- */
        .main-card {
            cursor: pointer;
        }

        .main-card:active {
            transform: scale(0.99);
        }

        /* --- Dynamic badge gradients --- */
        .badge-success {
            background: linear-gradient(135deg, rgba(16,185,129,0.15), rgba(52,211,153,0.10));
            color: #059669;
        }

        .badge-danger {
            background: linear-gradient(135deg, rgba(239,68,68,0.12), rgba(252,165,165,0.08));
            color: #dc2626;
        }

        /* --- Section card accent --- */
        .section-card {
            border-top: 3px solid transparent;
            background-clip: padding-box;
        }

        /* --- Pulse ring on chart container when loading --- */
        .chartjs-ring-wrapper.chart-entering {
            animation: chartPop 0.5s cubic-bezier(0.34,1.56,0.64,1) both;
        }

        @keyframes chartPop {
            from { transform: scale(0.7); opacity: 0; }
            to   { transform: scale(1); opacity: 1; }
        }
    </style>

    <!-- ========================================
         HEADER
         ======================================== -->
    <div class="dashboard-header">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ asset('PandaSmart.png') }}" alt="Logo Tabalong" style="height: 70px;"
                    class="d-none d-md-block">
                <div>
                    <h1 class="fw-bolder mb-0 text-white"
                        style="letter-spacing: 1px; font-size: 2.8rem; text-shadow: 1px 1px 3px rgba(0,0,0,0.15);">PANDA
                        SMART</h1>
                    <p class="mb-0 text-white fw-semibold mt-1" style="font-size: 0.9rem; letter-spacing: 0.5px;">
                        OPTIMALISASI PENGELOLAAN PENDAPATAN MELALUI INTEGRASI EKOSISTEM DIGITAL PEMBUKUAN DAN PELAPORAN
                    </p>
                    <span id="refreshStatus" class="d-none"></span>
                    <!-- Live Dot Indicator -->
                    <div class="live-dot-wrapper mt-2">
                        <div class="live-dot fetching" id="liveDot"></div>
                        <span id="liveStatus">Memuat data...</span>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column align-items-end gap-2">
                <!-- Date / Time on Top -->
                <h5 class="fw-bolder mb-0 text-white" id="currentDateTime"
                    style="text-shadow: 1px 1px 2px rgba(0,0,0,0.15);">Memuat...</h5>

                <!-- Dropdown and Logo side-by-side below the Date -->
                <div class="d-flex align-items-center gap-3">
                    <!-- Year Filter Dropdown -->
                    <div class="bg-white rounded-3 px-3 py-2 shadow-sm">
                        <div class="d-flex align-items-center gap-2">
                            <span class="fw-bold" style="color: #d97706; font-size: 13px;">Tahun:</span>
                            <select id="yearFilter" class="form-select form-select-sm border-0 fw-bold"
                                style="color: #d97706; background-color: #FEF3C7; min-width: 85px; cursor: pointer;">
                                @php $currentYear = date('Y'); @endphp
                                <option value="{{ $currentYear }}" selected>{{ $currentYear }}</option>
                                <option value="{{ $currentYear - 1 }}">{{ $currentYear - 1 }}</option>
                                <option value="{{ $currentYear - 2 }}">{{ $currentYear - 2 }}</option>
                            </select>
                        </div>
                    </div>
                    <img src="{{ asset('logo-tabalong-smart.png') }}" alt="Logo Tabalong Smart"
                        style="height: 65px; background: white; padding: 8px; border-radius: 12px;"
                        class="d-none d-md-block">
                    <img src="{{ asset('Logo-Tabalong-Blue-Print-Latar-Hijau2-226x300.png') }}" alt="Logo Tabalong"
                        style="height: 65px; background: white; padding: 8px; border-radius: 12px;"
                        class="d-none d-md-block">
                </div>
            </div>
        </div>
    </div>

    <!-- ========================================
         TOTAL SUMMARY
         ======================================== -->
    <div class="row g-3 mb-3">
        <div class="col-12">
            <div class="main-card loading" id="card-total-pendapatan">
                <!-- Skeleton Loading -->
                <div class="skeleton-wrapper">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <div class="skeleton" style="width: 36px; height: 36px; border-radius: 10px;"></div>
                        <div class="skeleton skeleton-text" style="width: 180px; height: 20px;"></div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-2 col-4 text-center">
                            <div class="skeleton skeleton-circle mx-auto" style="width: 100px; height: 100px;"></div>
                        </div>
                        <div class="col-md-10 col-8">
                            <div class="skeleton skeleton-box mb-2" style="height: 45px;"></div>
                            <div class="skeleton skeleton-box mb-2" style="height: 45px;"></div>
                            <div class="skeleton skeleton-box" style="height: 45px;"></div>
                        </div>
                    </div>
                </div>

                <!-- Actual Content -->
                <div class="data-content">
                    <!-- Card Header -->
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="ki-duotone ki-chart-simple fs-4 text-white">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </div>
                        <h5 class="card-title">Total Pendapatan Daerah</h5>
                        <div class="ms-auto">
                            <span class="status-pill" id="pill-total-pendapatan"><span class="status-dot"></span><span class="pill-label">Memuat</span></span>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="row align-items-center">
                        <!-- Progress Ring (Chart.js) -->
                        <div class="col-md-2 col-4">
                            <div class="progress-container">
                                <div class="chartjs-ring-wrapper">
                                    <canvas id="chart-total-pendapatan" width="120" height="120"></canvas>
                                    <div class="chartjs-center-text">
                                        <span class="progress-percent" id="summaryPercentage">0%</span>
                                    </div>
                                </div>
                                <div class="progress-label">Realisasi</div>
                            </div>
                        </div>

                        <!-- Data Boxes -->
                        <div class="col-md-10 col-8">
                            <div class="d-flex flex-column gap-1">
                                <!-- Target -->
                                <div class="data-box data-box-target">
                                    <div class="data-label">Total Target</div>
                                    <div class="data-value data-value-lg" id="summaryTarget">Rp0</div>
                                </div>

                                <!-- Realisasi -->
                                <div class="data-box data-box-realisasi">
                                    <div style="flex: 1;">
                                        <div class="data-label">Total Realisasi</div>
                                        <div class="data-value" id="summaryRealisasi">Rp0</div>
                                        <div class="mini-progress-bar-wrap">
                                            <div class="mini-progress-bar-fill" id="bar-total-pendapatan" style="--bar-color:#3b82f6;--bar-color-end:#6366f1;"></div>
                                        </div>
                                    </div>
                                    <span class="badge-success" id="summaryRealisasiBadge">0%</span>
                                </div>

                                <!-- Sisa Target -->
                                <div class="data-box data-box-sisa">
                                    <div>
                                        <div class="data-label">Total Sisa Target</div>
                                        <div class="data-value" id="summarySisa">Rp0</div>
                                    </div>
                                    <span class="badge-danger" id="summarySisaBadge">0%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================================
         MAIN CARDS (PAD, Transfer, Lainnya)
         ======================================== -->
    <div class="row g-3 mb-3">
        @foreach ($mainCards as $card)
            <div class="col-lg-4 col-md-6">
                <div class="main-card loading" id="card-{{ $card['id'] }}" data-account-id="{{ $card['account_id'] }}"
                    style="--card-color: {{ $card['color'] }};"
                    onclick="scrollToDetail('{{ $card['id'] }}')">
                    <!-- Skeleton Loading -->
                    <div class="skeleton-wrapper">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <div class="skeleton" style="width: 36px; height: 36px; border-radius: 10px;"></div>
                            <div class="skeleton skeleton-text" style="width: 140px;"></div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4 text-center">
                                <div class="skeleton skeleton-circle mx-auto" style="width: 80px; height: 80px;"></div>
                            </div>
                            <div class="col-8">
                                <div class="skeleton skeleton-box mb-2" style="height: 50px;"></div>
                                <div class="skeleton skeleton-box mb-2" style="height: 50px;"></div>
                                <div class="skeleton skeleton-box" style="height: 50px;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Actual Content -->
                    <div class="data-content">
                        <!-- Card Header -->
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="ki-duotone {{ $card['icon'] }} fs-4 text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <h5 class="card-title">{{ $card['title'] }}</h5>
                            <div class="ms-auto">
                                <span class="status-pill" id="pill-{{ $card['id'] }}"><span class="status-dot"></span><span class="pill-label">...</span></span>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="row align-items-center">
                            <!-- Progress Ring (Chart.js) -->
                            <div class="col-4">
                                <div class="progress-container">
                                    <div class="chartjs-ring-wrapper">
                                        <canvas id="chart-{{ $card['id'] }}" width="120" height="120"></canvas>
                                        <div class="chartjs-center-text">
                                            <span class="progress-percent" id="percent-{{ $card['id'] }}">0%</span>
                                        </div>
                                    </div>
                                    <div class="progress-label">Realisasi</div>
                                </div>
                            </div>

                            <!-- Data Boxes -->
                            <div class="col-8">
                                <!-- Target -->
                                <div class="data-box data-box-target">
                                    <div class="data-label">Target</div>
                                    <div class="data-value data-value-lg" id="target-{{ $card['id'] }}">Rp0</div>
                                </div>

                                <!-- Realisasi -->
                                <div class="data-box data-box-realisasi">
                                    <div style="flex: 1;">
                                        <div class="data-label">Realisasi</div>
                                        <div class="data-value" id="realisasi-{{ $card['id'] }}">Rp0</div>
                                        <div class="mini-progress-bar-wrap">
                                            <div class="mini-progress-bar-fill" id="bar-{{ $card['id'] }}" style="--bar-color:{{ $card['color'] }};--bar-color-end:{{ $card['color'] }};"></div>
                                        </div>
                                    </div>
                                    <span class="badge-success" id="realisasi-badge-{{ $card['id'] }}">0%</span>
                                </div>

                                <!-- Sisa Target -->
                                <div class="data-box data-box-sisa">
                                    <div>
                                        <div class="data-label">Sisa Target</div>
                                        <div class="data-value" id="sisa-{{ $card['id'] }}">Rp0</div>
                                    </div>
                                    <span class="badge-danger" id="sisa-badge-{{ $card['id'] }}">-0%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- ========================================
         DETAIL PENDAPATAN SECTION (PAD, Transfer, Lainnya)
         ======================================== -->
    <div class="section-card mb-3 loading" id="section-detail-pendapatan">
        <!-- Skeleton Loading -->
        <div class="skeleton-wrapper" style="display: block;">
            <div class="detail-tabs-wrapper">
                <div class="skeleton" style="height: 45px; flex: 1;"></div>
                <div class="skeleton" style="height: 45px; flex: 1;"></div>
                <div class="skeleton" style="height: 45px; flex: 1;"></div>
            </div>
            <div class="p-4">
                <div class="skeleton skeleton-text mb-3" style="width: 200px; height: 24px;"></div>
                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <div class="skeleton" style="height: 70px; border-radius: 12px;"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="skeleton" style="height: 70px; border-radius: 12px;"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="skeleton" style="height: 70px; border-radius: 12px;"></div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6 col-lg-3">
                        <div class="skeleton" style="height: 280px; border-radius: 16px;"></div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="skeleton" style="height: 280px; border-radius: 16px;"></div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="skeleton" style="height: 280px; border-radius: 16px;"></div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="skeleton" style="height: 280px; border-radius: 16px;"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actual Content -->
        <div class="data-content" style="display: none;">
            <!-- Main Tabs -->
            <div class="detail-tabs-wrapper">
                <button class="detail-tab active" data-detail-tab="detail-pad" onclick="switchDetailTab('detail-pad')">
                    Pendapatan Asli Daerah (PAD)
                </button>
                <button class="detail-tab" data-detail-tab="detail-transfer"
                    onclick="switchDetailTab('detail-transfer')">
                    Dana Transfer
                </button>
                <button class="detail-tab" data-detail-tab="detail-lainnya" onclick="switchDetailTab('detail-lainnya')">
                    Pendapatan Lainnya yang Sah
                </button>
            </div>

            <!-- PAD Detail Content -->
            <div class="detail-tab-content" id="detail-tab-detail-pad">
                <div class="section-header d-flex justify-content-between align-items-center"
                    onclick="toggleSection('section-detail-pendapatan')">
                    <h5 class="fw-bold mb-0">Pendapatan Asli Daerah</h5>
                <i class="ki-duotone ki-down fs-3 section-toggle"><span class="path1"></span></i>
                </div>
                <div class="section-body">
                    <!-- Summary Row -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <div class="p-3 rounded-3" style="background: #f0f9ff;">
                                <div class="text-muted fs-7 mb-1">Target</div>
                                <div class="fw-bold fs-5" id="pad-detail-target">Rp0</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3" style="background: #f0fdf4;">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="text-muted fs-7">Realisasi</span>
                                    <span class="badge-success fs-8" id="pad-detail-realisasi-badge">0%</span>
                                </div>
                                <div class="fw-bold fs-5" id="pad-detail-realisasi">Rp0</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3" style="background: #fef2f2;">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="text-muted fs-7">Sisa Target</span>
                                    <span class="badge-danger fs-8" id="pad-detail-sisa-badge">-0%</span>
                                </div>
                                <div class="fw-bold fs-5" id="pad-detail-sisa">Rp0</div>
                            </div>
                        </div>
                    </div>

                    <!-- PAD Children Cards -->
                    <div class="row g-3">
                        @foreach ($mainCards[0]['children'] as $child)
                            <div class="col-md-6 col-lg-3">
                                <div class="mini-card" id="card-detail-{{ $child['id'] }}">
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <div class="card-icon-sm" style="background: {{ $child['color'] }};">
                                            <i class="ki-duotone ki-chart-simple fs-6 text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </div>
                                        <h6 class="fw-bold mb-0 fs-7">{{ $child['title'] }}</h6>
                                    </div>
                                    <div class="text-center mb-3">
                                        <div class="chartjs-ring-wrapper-sm">
                                            <canvas id="chart-detail-{{ $child['id'] }}" width="120" height="120"></canvas>
                                            <div class="chartjs-center-text">
                                                <span class="progress-percent-sm"
                                                    id="percent-detail-{{ $child['id'] }}">0%</span>
                                            </div>
                                        </div>
                                        <div class="text-muted fs-8 mt-1">Realisasi</div>
                                    </div>
                                    <div class="d-flex flex-column gap-1">
                                        <div class="data-box data-box-target py-2">
                                            <div class="data-label">Target</div>
                                            <div class="data-value" id="target-detail-{{ $child['id'] }}">Rp0</div>
                                        </div>
                                        <div class="data-box data-box-realisasi py-2">
                                            <div>
                                                <div class="data-label">Realisasi</div>
                                                <div class="data-value" id="realisasi-detail-{{ $child['id'] }}">Rp0
                                                </div>
                                            </div>
                                            <span class="badge-success"
                                                id="realisasi-badge-detail-{{ $child['id'] }}">0%</span>
                                        </div>
                                        <div class="data-box data-box-sisa py-2">
                                            <div>
                                                <div class="data-label">Sisa Target</div>
                                                <div class="data-value" id="sisa-detail-{{ $child['id'] }}">Rp0
                                                </div>
                                            </div>
                                            <span class="badge-danger" id="sisa-badge-detail-{{ $child['id'] }}">-0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Dana Transfer Detail Content -->
            <div class="detail-tab-content d-none" id="detail-tab-detail-transfer">
                <div class="section-header d-flex justify-content-between align-items-center">
                    <h5 class="fw-bold mb-0">Dana Transfer</h5>
                <i class="ki-duotone ki-down fs-3 section-toggle"><span class="path1"></span></i>
                </div>
                <div class="section-body">
                    <!-- Summary Row -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <div class="p-3 rounded-3" style="background: #fef3c7;">
                                <div class="text-muted fs-7 mb-1">Target</div>
                                <div class="fw-bold fs-5" id="transfer-detail-target">Rp0</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3" style="background: #f0fdf4;">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="text-muted fs-7">Realisasi</span>
                                    <span class="badge-success fs-8" id="transfer-detail-realisasi-badge">0%</span>
                                </div>
                                <div class="fw-bold fs-5" id="transfer-detail-realisasi">Rp0</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3" style="background: #fef2f2;">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="text-muted fs-7">Sisa Target</span>
                                    <span class="badge-danger fs-8" id="transfer-detail-sisa-badge">-0%</span>
                                </div>
                                <div class="fw-bold fs-5" id="transfer-detail-sisa">Rp0</div>
                            </div>
                        </div>
                    </div>

                    <!-- Transfer Children Cards -->
                    <div class="row g-3">
                        @foreach ($mainCards[1]['children'] as $child)
                            <div class="col-md-6">
                                <div class="mini-card" id="card-detail-{{ $child['id'] }}">
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <div class="card-icon-sm" style="background: {{ $child['color'] }};">
                                            <i class="ki-duotone ki-folder fs-6 text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <h6 class="fw-bold mb-0 fs-7">{{ $child['title'] }}</h6>
                                    </div>
                                    <div class="text-center mb-3">
                                        <div class="chartjs-ring-wrapper-sm">
                                            <canvas id="chart-detail-{{ $child['id'] }}" width="120" height="120"></canvas>
                                            <div class="chartjs-center-text">
                                                <span class="progress-percent-sm"
                                                    id="percent-detail-{{ $child['id'] }}">0%</span>
                                            </div>
                                        </div>
                                        <div class="text-muted fs-8 mt-1">Realisasi</div>
                                    </div>
                                    <div class="d-flex flex-column gap-1">
                                        <div class="data-box data-box-target py-2">
                                            <div class="data-label">Target</div>
                                            <div class="data-value" id="target-detail-{{ $child['id'] }}">Rp0</div>
                                        </div>
                                        <div class="data-box data-box-realisasi py-2">
                                            <div>
                                                <div class="data-label">Realisasi</div>
                                                <div class="data-value" id="realisasi-detail-{{ $child['id'] }}">Rp0
                                                </div>
                                            </div>
                                            <span class="badge-success"
                                                id="realisasi-badge-detail-{{ $child['id'] }}">0%</span>
                                        </div>
                                        <div class="data-box data-box-sisa py-2">
                                            <div>
                                                <div class="data-label">Sisa Target</div>
                                                <div class="data-value" id="sisa-detail-{{ $child['id'] }}">Rp0
                                                </div>
                                            </div>
                                            <span class="badge-danger" id="sisa-badge-detail-{{ $child['id'] }}">-0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Pendapatan Lainnya Detail Content -->
            <div class="detail-tab-content d-none" id="detail-tab-detail-lainnya">
                <div class="section-header d-flex justify-content-between align-items-center">
                    <h5 class="fw-bold mb-0">Pendapatan Lainnya yang Sah</h5>
                <i class="ki-duotone ki-down fs-3 section-toggle"><span class="path1"></span></i>
                </div>
                <div class="section-body">
                    <!-- Summary Row -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <div class="p-3 rounded-3" style="background: #d1fae5;">
                                <div class="text-muted fs-7 mb-1">Target</div>
                                <div class="fw-bold fs-5" id="lainnya-detail-target">Rp0</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3" style="background: #f0fdf4;">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="text-muted fs-7">Realisasi</span>
                                    <span class="badge-success fs-8" id="lainnya-detail-realisasi-badge">0%</span>
                                </div>
                                <div class="fw-bold fs-5" id="lainnya-detail-realisasi">Rp0</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3" style="background: #fef2f2;">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="text-muted fs-7">Sisa Target</span>
                                    <span class="badge-danger fs-8" id="lainnya-detail-sisa-badge">-0%</span>
                                </div>
                                <div class="fw-bold fs-5" id="lainnya-detail-sisa">Rp0</div>
                            </div>
                        </div>
                    </div>

                    <!-- Lainnya Children Cards -->
                    <div class="row g-3">
                        @foreach ($mainCards[2]['children'] as $child)
                            <div class="col-md-6 col-lg-4">
                                <div class="mini-card" id="card-detail-{{ $child['id'] }}">
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <div class="card-icon-sm" style="background: {{ $child['color'] }};">
                                            <i class="ki-duotone ki-gift fs-6 text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <h6 class="fw-bold mb-0 fs-7">{{ $child['title'] }}</h6>
                                    </div>
                                    <div class="text-center mb-3">
                                        <div class="chartjs-ring-wrapper-sm">
                                            <canvas id="chart-detail-{{ $child['id'] }}" width="120" height="120"></canvas>
                                            <div class="chartjs-center-text">
                                                <span class="progress-percent-sm"
                                                    id="percent-detail-{{ $child['id'] }}">0%</span>
                                            </div>
                                        </div>
                                        <div class="text-muted fs-8 mt-1">Realisasi</div>
                                    </div>
                                    <div class="d-flex flex-column gap-1">
                                        <div class="data-box data-box-target py-2">
                                            <div class="data-label">Target</div>
                                            <div class="data-value" id="target-detail-{{ $child['id'] }}">Rp0</div>
                                        </div>
                                        <div class="data-box data-box-realisasi py-2">
                                            <div>
                                                <div class="data-label">Realisasi</div>
                                                <div class="data-value" id="realisasi-detail-{{ $child['id'] }}">Rp0
                                                </div>
                                            </div>
                                            <span class="badge-success"
                                                id="realisasi-badge-detail-{{ $child['id'] }}">0%</span>
                                        </div>
                                        <div class="data-box data-box-sisa py-2">
                                            <div>
                                                <div class="data-label">Sisa Target</div>
                                                <div class="data-value" id="sisa-detail-{{ $child['id'] }}">Rp0
                                                </div>
                                            </div>
                                            <span class="badge-danger" id="sisa-badge-detail-{{ $child['id'] }}">-0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================================
         PAJAK & RETRIBUSI DAERAH SECTION
         ======================================== -->
    <div class="section-card loading" id="section-pajak-retribusi">
        <!-- Skeleton Loading -->
        <div class="skeleton-wrapper" style="display: block;">
            <div class="p-4">
                <div class="skeleton skeleton-text mb-4" style="width: 200px; height: 24px;"></div>
                <div class="d-flex gap-2 mb-4">
                    <div class="skeleton" style="width: 120px; height: 40px; border-radius: 8px;"></div>
                    <div class="skeleton" style="width: 140px; height: 40px; border-radius: 8px;"></div>
                </div>
                <div class="d-flex gap-2 flex-wrap mb-4">
                    @for ($i = 0; $i < 9; $i++)
                        <div class="skeleton" style="width: 100px; height: 36px; border-radius: 10px;"></div>
                    @endfor
                </div>
                <div class="row align-items-center">
                    <div class="col-md-2 col-4">
                        <div class="skeleton skeleton-circle mx-auto" style="width: 100px; height: 100px;"></div>
                    </div>
                    <div class="col-md-10 col-8">
                        <div class="skeleton mb-2" style="height: 50px; border-radius: 10px;"></div>
                        <div class="skeleton mb-2" style="height: 50px; border-radius: 10px;"></div>
                        <div class="skeleton" style="height: 50px; border-radius: 10px;"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actual Content -->
        <div class="data-content" style="display: none;">
            <div class="section-header d-flex justify-content-between align-items-center"
                onclick="toggleSection('section-pajak-retribusi')">
                <h5 class="fw-bold mb-0">Pajak & Retribusi Daerah</h5>
                <i class="ki-duotone ki-down fs-3 section-toggle"><span class="path1"></span></i>
            </div>
            <div class="section-body">
                <!-- Main Tabs (Pajak Daerah / Retribusi Daerah) -->
                <div class="main-tabs-wrapper mb-4">
                    <button class="main-tab active" data-main-tab="pajak-daerah"
                        onclick="switchMainTab('pajak-daerah')">
                        Pajak Daerah
                    </button>
                    <button class="main-tab" data-main-tab="retribusi-daerah"
                        onclick="switchMainTab('retribusi-daerah')">
                        Retribusi Daerah
                    </button>
                </div>

                <!-- Pajak Daerah Content -->
                <div class="main-tab-content" id="main-tab-pajak-daerah">
                    <!-- Sub Tabs -->
                    <div class="custom-tabs" id="pajak-tabs">
                        @foreach ($pajakItems as $index => $item)
                            <button class="custom-tab {{ $index === 0 ? 'active' : '' }}" data-tab="{{ $item['id'] }}"
                                onclick="switchTab('pajak-tabs', '{{ $item['id'] }}')">
                                {{ $item['title'] }}
                            </button>
                        @endforeach
                    </div>

                    <!-- Tab Content -->
                    @foreach ($pajakItems as $index => $item)
                        <div class="tab-content {{ $index !== 0 ? 'd-none' : '' }}" id="tab-{{ $item['id'] }}">
                            <div class="row align-items-center">
                                <!-- Progress Ring (Chart.js Doughnut) -->
                                <div class="col-md-2 col-4">
                                    <div class="progress-container">
                                        <div class="chartjs-ring-wrapper">
                                            <canvas id="chart-pajak-{{ $item['id'] }}" width="120" height="120"></canvas>
                                            <div class="chartjs-center-text">
                                                <span class="progress-percent"
                                                    id="percent-pajak-{{ $item['id'] }}">0%</span>
                                            </div>
                                        </div>
                                        <div class="progress-label">Realisasi</div>
                                    </div>
                                </div>

                                <!-- Data Boxes -->
                                <div class="col-md-10 col-8">
                                    <div class="d-flex flex-column gap-1">
                                        <!-- Target -->
                                        <div class="data-box data-box-target">
                                            <div class="data-label">Target</div>
                                            <div class="data-value data-value-lg" id="target-pajak-{{ $item['id'] }}">
                                                Rp0
                                            </div>
                                        </div>

                                        <!-- Realisasi -->
                                        <div class="data-box data-box-realisasi">
                                            <div>
                                                <div class="data-label">Realisasi</div>
                                                <div class="data-value" id="realisasi-pajak-{{ $item['id'] }}">Rp0
                                                </div>
                                            </div>
                                            <span class="badge-success"
                                                id="realisasi-badge-pajak-{{ $item['id'] }}">0%</span>
                                        </div>

                                        <!-- Sisa Target -->
                                        <div class="data-box data-box-sisa">
                                            <div>
                                                <div class="data-label">Sisa Target</div>
                                                <div class="data-value" id="sisa-pajak-{{ $item['id'] }}">Rp0</div>
                                            </div>
                                            <span class="badge-danger" id="sisa-badge-pajak-{{ $item['id'] }}">0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Retribusi Daerah Content -->
                <div class="main-tab-content d-none" id="main-tab-retribusi-daerah">
                    <!-- Sub Tabs -->
                    <div class="custom-tabs" id="retribusi-tabs">
                        @foreach ($retribusiItems as $index => $item)
                            <button class="custom-tab {{ $index === 0 ? 'active' : '' }}" data-tab="{{ $item['id'] }}"
                                onclick="switchTab('retribusi-tabs', '{{ $item['id'] }}')">
                                {{ $item['title'] }}
                            </button>
                        @endforeach
                    </div>

                    <!-- Tab Content -->
                    @foreach ($retribusiItems as $index => $item)
                        <div class="tab-content retribusi-tab-content {{ $index !== 0 ? 'd-none' : '' }}"
                            id="tab-{{ $item['id'] }}">
                            <div class="row align-items-center">
                                <!-- Progress Ring (Chart.js Doughnut) -->
                                <div class="col-md-3 col-5">
                                    <div class="progress-container">
                                        <div class="chartjs-ring-wrapper">
                                            <canvas id="chart-retribusi-{{ $item['id'] }}" width="120"
                                                height="120"></canvas>
                                            <div class="chartjs-center-text">
                                                <span class="progress-percent"
                                                    id="percent-retribusi-{{ $item['id'] }}">0%</span>
                                            </div>
                                        </div>
                                        <div class="progress-label">Realisasi</div>
                                    </div>
                                </div>

                                <!-- Data Boxes -->
                                <div class="col-md-9 col-7">
                                    <div class="d-flex flex-column gap-2">
                                        <!-- Target -->
                                        <div class="data-box data-box-target">
                                            <div class="data-label">Target</div>
                                            <div class="data-value data-value-lg" id="target-retribusi-{{ $item['id'] }}">
                                                Rp0
                                            </div>
                                        </div>

                                        <!-- Realisasi -->
                                        <div class="data-box data-box-realisasi">
                                            <div>
                                                <div class="data-label">Realisasi</div>
                                                <div class="data-value" id="realisasi-retribusi-{{ $item['id'] }}">
                                                    Rp0
                                                </div>
                                            </div>
                                            <span class="badge-success"
                                                id="realisasi-badge-retribusi-{{ $item['id'] }}">0%</span>
                                        </div>

                                        <!-- Sisa Target -->
                                        <div class="data-box data-box-sisa">
                                            <div>
                                                <div class="data-label">Sisa Target</div>
                                                <div class="data-value" id="sisa-retribusi-{{ $item['id'] }}">Rp0
                                                </div>
                                            </div>
                                            <span class="badge-danger" id="sisa-badge-retribusi-{{ $item['id'] }}">0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- ========================================
         PBJT SECTION
         ======================================== -->
    <div class="section-card d-none" id="section-pbjt">
        <div class="section-header d-flex justify-content-between align-items-center"
            onclick="toggleSection('section-pbjt')">
            <h5 class="fw-bold mb-0">PBJT</h5>
            <i class="ki-duotone ki-down fs-3 section-toggle"><span class="path1"></span></i>
        </div>
        <div class="section-body">
            <!-- PBJT Summary -->
            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <div class="p-4 rounded-3" style="background: #f0f9ff;">
                        <div class="text-muted fs-7 mb-2">Target</div>
                        <div class="fw-bold fs-4" id="pbjt-total-target">Rp0</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-3" style="background: #f0fdf4;">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted fs-7">Realisasi</span>
                            <span class="badge-success" id="pbjt-total-realisasi-badge">0%</span>
                        </div>
                        <div class="fw-bold fs-4" id="pbjt-total-realisasi">Rp0</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-3" style="background: #fef2f2;">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted fs-7">Sisa Target</span>
                            <span class="badge-danger" id="pbjt-total-sisa-badge">-0%</span>
                        </div>
                        <div class="fw-bold fs-4" id="pbjt-total-sisa">Rp0</div>
                    </div>
                </div>
            </div>

            <!-- PBJT Cards -->
            <div class="row g-3">
                @foreach ($pbjtItems as $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="mini-card loading" id="card-{{ $item['id'] }}"
                            data-account-id="{{ $item['account_id'] }}">
                            <div class="skeleton-wrapper">
                                <div class="skeleton skeleton-text mb-3"></div>
                                <div class="skeleton skeleton-circle mx-auto my-3" style="width: 80px; height: 80px;">
                                </div>
                                <div class="skeleton skeleton-text mb-2"></div>
                                <div class="skeleton skeleton-text mb-2"></div>
                                <div class="skeleton skeleton-text"></div>
                            </div>
                            <div class="data-content">
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <div class="rounded-2 bg-primary" style="width: 10px; height: 10px;"></div>
                                    <h6 class="fw-bold mb-0 fs-7">{{ $item['title'] }}</h6>
                                </div>
                                <div class="text-center mb-3">
                                    <div class="position-relative d-inline-block">
                                        <svg class="mini-progress-ring" viewBox="0 0 90 90">
                                            <circle cx="45" cy="45" r="36" fill="none" stroke="#e5e7eb" stroke-width="8" />
                                            <circle id="ring-{{ $item['id'] }}" cx="45" cy="45" r="36" fill="none"
                                                stroke="#3b82f6" stroke-width="8" stroke-linecap="round"
                                                stroke-dasharray="226.19" stroke-dashoffset="226.19" />
                                        </svg>
                                        <div class="position-absolute top-50 start-50 translate-middle text-center">
                                            <div class="fw-bold fs-5" id="percent-{{ $item['id'] }}">0%</div>
                                        </div>
                                    </div>
                                    <div class="text-muted fs-8 mt-1">Realisasi</div>
                                </div>
                                <div class="d-flex flex-column gap-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-muted fs-8">Target</span>
                                        <span class="fw-semibold fs-8" id="target-{{ $item['id'] }}">Rp0</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-muted fs-8">Realisasi</span>
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="fw-semibold fs-8" id="realisasi-{{ $item['id'] }}">Rp0</span>
                                            <span class="badge-success" style="padding: 2px 8px; font-size: 11px;"
                                                id="realisasi-badge-{{ $item['id'] }}">0%</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-muted fs-8">Sisa Target</span>
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="fw-semibold fs-8" id="sisa-{{ $item['id'] }}">Rp0</span>
                                            <span class="badge-danger" style="padding: 2px 8px; font-size: 11px;"
                                                id="sisa-badge-{{ $item['id'] }}">-0%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>

    <script>
        // ============================================
        // CONFIGURATION
        // ============================================
        const API_BASE = 'https://e-penda.com/api/accounts';
        let selectedYear = new Date().getFullYear(); // Mengikuti tahun sekarang
        const CURRENT_YEAR = new Date().getFullYear();
        const REFRESH_INTERVAL = 30000;

        // Chart.js instances storage
        const pajakCharts = {};
        const retribusiCharts = {};
        const mainCharts = {}; // For Total Pendapatan, PAD, Transfer, Lainnya
        const detailCharts = {}; // For PAD, Transfer, Lainnya children



        // All account IDs to fetch - Removed as no longer used

        // NUMBER to card mapping (using number field, not ID - karena ID berubah setiap tahun)
        const CARD_MAPPING = {
            // Main Categories
            '4': 'total-pendapatan',     // PENDAPATAN DAERAH (Level 1)
            '4.1': 'pad',                 // PAD
            '4.2': 'transfer',            // PENDAPATAN TRANSFER
            '4.3': 'lainnya',             // LAIN-LAIN PENDAPATAN DAERAH YANG SAH
            // PAD children
            '4.1.01': 'pajak',            // Pajak Daerah
            '4.1.02': 'retribusi',        // Retribusi Daerah
            '4.1.03': 'kekayaan',         // Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan
            '4.1.04': 'lain-pad',         // Lain-Lain PAD yang Sah
            // Transfer children
            '4.2.01': 'pusat',            // Pendapatan Transfer Pemerintah Pusat
            '4.2.02': 'antar',            // Pendapatan Transfer Antar Daerah
            // Lainnya children
            '4.3.01': 'hibah',            // Pendapatan Hibah
            // Pajak Daerah items
            '4.1.01.09': 'reklame',       // Pajak Reklame
            '4.1.01.12': 'air-tanah',     // Pajak Air Tanah
            '4.1.01.13': 'sarang-walet',  // Pajak Sarang Burung Walet
            '4.1.01.14': 'mblb',          // Pajak Mineral Bukan Logam dan Batuan
            '4.1.01.15': 'pbb-p2',        // Pajak Bumi dan Bangunan
            '4.1.01.16': 'bphtb',         // Bea Perolehan Hak Atas Tanah dan Bangunan (Assumed from order)
            '4.1.01.19': 'pbjt',          // Pajak Barang dan Jasa Tertentu (PBJT)
            '4.1.01.20': 'opsen-pkb',     // Opsen Pajak Kendaraan Bermotor
            '4.1.01.21': 'opsen-bbnkb',   // Opsen Bea Balik Nama Kendaraan Bermotor
            // PBJT sub-items
            '4.1.01.19.01': 'pbjt-makanan',  // PBJT-Makanan dan Minuman
            '4.1.01.19.02': 'pbjt-listrik',  // PBJT-Tenaga Listrik
            '4.1.01.19.03': 'pbjt-hotel',    // PBJT-Perhotelan
            '4.1.01.19.04': 'pbjt-parkir',   // PBJT-Parkir
            '4.1.01.19.05': 'pbjt-hiburan',  // PBJT-Kesenian dan Hiburan
            // Retribusi Daerah
            '4.1.02.01': 'retribusi-jasa-umum',   // Retribusi Jasa Umum
            '4.1.02.02': 'retribusi-jasa-usaha',  // Retribusi Jasa Usaha
            '4.1.02.03': 'retribusi-perizinan'    // Retribusi Perizinan Tertentu
        };

        // Store accounts data by number instead of ID
        const accountsDataByNumber = {};

        // Ring configurations
        const RING_CONFIG = {
            main: {
                radius: 58,
                circumference: 364.42
            },
            mini: {
                radius: 36,
                circumference: 226.19
            }
        };

        let accountsData = {};
        let refreshCount = 0;

        // ============================================
        // UTILITY FUNCTIONS
        // ============================================

        function formatRupiah(num) {
            if (!num && num !== 0) return 'Rp0';
            const rounded = Math.round(num);
            return 'Rp' + rounded.toLocaleString('id-ID');
        }

        function updateDateTime() {
            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

            let dateTimeString;

            if (selectedYear >= CURRENT_YEAR) {
                // Current year: show realtime date/time
                const now = new Date();
                const dayName = days[now.getDay()];
                const date = now.getDate();
                const monthName = months[now.getMonth()];
                const year = now.getFullYear();
                const hours = String(now.getHours()).padStart(2, '0');
                const minutes = String(now.getMinutes()).padStart(2, '0');
                const seconds = String(now.getSeconds()).padStart(2, '0');
                dateTimeString = `${dayName}, ${date} ${monthName} ${year} - ${hours}:${minutes}:${seconds}`;
            } else {
                // Past year: show December 31st of that year
                const displayDate = new Date(selectedYear, 11, 31);
                const dayName = days[displayDate.getDay()];
                dateTimeString = `${dayName}, 31 Desember ${selectedYear}`;
            }

            document.getElementById('currentDateTime').textContent = dateTimeString;
        }

        // ============================================
        // UI FUNCTIONS
        // ============================================

        function toggleSection(sectionId) {
            const section = document.getElementById(sectionId);
            section.classList.toggle('section-collapsed');
        }

        function switchMainTab(tabId) {
            // Update main tab buttons
            document.querySelectorAll('.main-tab').forEach(tab => {
                tab.classList.remove('active');
                if (tab.dataset.mainTab === tabId) {
                    tab.classList.add('active');
                }
            });

            // Show/hide main tab content
            document.querySelectorAll('.main-tab-content').forEach(content => {
                content.classList.add('d-none');
            });
            document.getElementById(`main-tab-${tabId}`).classList.remove('d-none');

            // Re-render charts when switching to retribusi tab (Chart.js needs visible canvas)
            if (tabId === 'retribusi-daerah') {
                setTimeout(() => {
                    updateRetribusiTabs();
                }, 100);
            }
        }

        function switchDetailTab(tabId) {
            // Update detail tab buttons
            document.querySelectorAll('.detail-tab').forEach(tab => {
                tab.classList.remove('active');
                if (tab.dataset.detailTab === tabId) {
                    tab.classList.add('active');
                }
            });

            // Show/hide detail tab content with slide animation
            document.querySelectorAll('.detail-tab-content').forEach(content => {
                content.classList.add('d-none');
            });
            const target = document.getElementById(`detail-tab-${tabId}`);
            if (target) {
                target.classList.remove('d-none');
                // Re-trigger animation
                target.style.animation = 'none';
                void target.offsetWidth;
                target.style.animation = '';
            }
        }

        function switchTab(tabGroupId, tabId) {
            const tabGroup = document.getElementById(tabGroupId);
            const tabs = tabGroup.querySelectorAll('.custom-tab');

            tabs.forEach(tab => {
                tab.classList.remove('active');
                if (tab.dataset.tab === tabId) {
                    tab.classList.add('active');
                }
            });

            // Determine which tab contents to toggle based on tab group
            const isRetribusi = tabGroupId === 'retribusi-tabs';
            const contentSelector = isRetribusi ? '.retribusi-tab-content' : '.tab-content:not(.retribusi-tab-content)';

            document.querySelectorAll(contentSelector).forEach(content => {
                content.classList.add('d-none');
            });
            document.getElementById(`tab-${tabId}`).classList.remove('d-none');

            // Show/hide PBJT section based on selected tab (only for pajak tabs)
            if (!isRetribusi) {
                const pbjtSection = document.getElementById('section-pbjt');
                if (pbjtSection) {
                    if (tabId === 'pbjt') {
                        pbjtSection.classList.remove('d-none');
                    } else {
                        pbjtSection.classList.add('d-none');
                    }
                }
            }
        }

        function updateProgressRing(cardId, percentage, config = RING_CONFIG.main) {
            const ring = document.getElementById(`ring-${cardId}`);
            const percentText = document.getElementById(`percent-${cardId}`);

            if (ring) {
                const offset = config.circumference - (percentage / 100) * config.circumference;
                ring.style.strokeDashoffset = Math.max(0, offset);
            }

            if (percentText) {
                percentText.textContent = Math.round(percentage) + '%';
            }
        }

        function removeLoading(cardId) {
            const card = document.getElementById(`card-${cardId}`);
            if (card) {
                card.classList.remove('loading');
                // Also update inline styles
                const skeleton = card.querySelector('.skeleton-wrapper');
                const content = card.querySelector('.data-content');
                if (skeleton) skeleton.style.display = 'none';
                if (content) content.style.display = '';
            }
        }

        function removeSectionLoading(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                section.classList.remove('loading');
                // Also update inline styles
                const skeleton = section.querySelector('.skeleton-wrapper');
                const content = section.querySelector('.data-content');
                if (skeleton) skeleton.style.display = 'none';
                if (content) content.style.display = '';
            }
        }

        function setEl(id, value) {
            const el = document.getElementById(id);
            if (el) el.textContent = value;
        }

        // Count up animation for currency values
        function animateValue(elementId, endValue, duration = 1000) {
            const el = document.getElementById(elementId);
            if (!el) return;

            // Get current value from element (parse existing number)
            const currentText = el.textContent || 'Rp0';
            const startValue = parseInt(currentText.replace(/[^0-9-]/g, '')) || 0;

            // If values are the same, no need to animate
            if (startValue === endValue) {
                el.textContent = formatRupiah(endValue);
                return;
            }

            const startTime = performance.now();
            const diff = endValue - startValue;

            function update(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);

                // Easing function (ease-out)
                const easeOut = 1 - Math.pow(1 - progress, 3);

                const currentValue = Math.round(startValue + (diff * easeOut));
                el.textContent = formatRupiah(currentValue);

                if (progress < 1) {
                    requestAnimationFrame(update);
                } else {
                    // Pop effect when animation completes
                    el.classList.remove('pop-animate');
                    void el.offsetWidth; // Force reflow
                    el.classList.add('pop-animate');
                    setTimeout(() => el.classList.remove('pop-animate'), 350);
                }
            }

            requestAnimationFrame(update);
        }

        // Count up animation for percentage values (supports 1 decimal place)
        function animatePercent(elementId, endValue, prefix = '', suffix = '%', duration = 800) {
            const el = document.getElementById(elementId);
            if (!el) return;

            // Get current value from element (parse as float)
            const currentText = el.textContent || '0';
            const startValue = parseFloat(currentText.replace(/[^0-9.-]/g, '')) || 0;

            // If values are the same, no need to animate
            if (Math.abs(startValue - endValue) < 0.01) {
                el.textContent = prefix + endValue.toFixed(1) + suffix;
                return;
            }

            const startTime = performance.now();
            const diff = endValue - startValue;

            function update(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);

                // Easing function (ease-out)
                const easeOut = 1 - Math.pow(1 - progress, 3);

                const currentValue = startValue + (diff * easeOut);
                el.textContent = prefix + currentValue.toFixed(1) + suffix;

                if (progress < 1) {
                    requestAnimationFrame(update);
                }
            }

            requestAnimationFrame(update);
        }

        // ============================================
        // DATA UPDATE FUNCTIONS
        // ============================================

        // Card colors mapping
        const CARD_COLORS = {
            'pad': '#3b82f6',
            'transfer': '#f59e0b',
            'lainnya': '#10b981'
        };

        function updateCard(cardId, data) {
            if (!data) return;

            // Always use target_sesudah (target after) as the target value
            const target = data.target_sesudah || 0;
            const realisasi = data.total_sd_bulan_ini || 0;
            const sisaTarget = target - realisasi; // Calculate sisa target
            const percentage = data.percentage || (target > 0 ? (realisasi / target) * 100 : 0);

            // Animate currency values
            animateValue(`target-${cardId}`, target);
            animateValue(`realisasi-${cardId}`, realisasi);
            animateValue(`sisa-${cardId}`, sisaTarget);

            // Animate percentage values
            animatePercent(`realisasi-badge-${cardId}`, percentage);
            animatePercent(`percent-${cardId}`, percentage);

            // Calculate sisa percentage and update badge with correct logic
            const sisaPct = target > 0 ? Math.abs((sisaTarget / target) * 100) : 0;
            const isOverTarget = sisaTarget < 0; // Negative sisa = over target = GOOD

            const sisaBadge = document.getElementById(`sisa-badge-${cardId}`);
            if (sisaBadge) {
                if (isOverTarget) {
                    // Over target (sisa negatif) = GOOD = GREEN with +
                    animatePercent(`sisa-badge-${cardId}`, sisaPct, '+');
                    sisaBadge.className = 'badge-success';
                } else {
                    // Under target (sisa positif) = NEEDS ATTENTION = RED with -
                    animatePercent(`sisa-badge-${cardId}`, sisaPct, '-');
                    sisaBadge.className = 'badge-danger';
                }
            }

            // Update Chart.js for main cards
            const isMain = ['pad', 'transfer', 'lainnya'].includes(cardId);
            if (isMain) {
                updateMainChart(cardId, percentage, CARD_COLORS[cardId]);
                // Update mini progress bar for main cards
                updateMiniBar(cardId, percentage, CARD_COLORS[cardId]);
                // Update status pill
                updateStatusPill(cardId, percentage);
            } else {
                updateProgressRing(cardId, percentage, RING_CONFIG.mini);
            }
            removeLoading(cardId);
        }

        // Create or update Chart.js doughnut chart for main cards
        function updateMainChart(chartId, percentage, color) {
            const canvas = document.getElementById(`chart-${chartId}`);
            if (!canvas) return;

            // Cap percentage at 100 for chart display, but show actual value in text
            const displayPct = Math.min(percentage, 100);
            const remaining = Math.max(0, 100 - displayPct);

            // Determine if this is first-time (for chart-entering animation)
            const isNew = !mainCharts[chartId];

            if (mainCharts[chartId]) {
                // Update existing chart
                mainCharts[chartId].data.datasets[0].data = [displayPct, remaining];
                mainCharts[chartId].update();
            } else {
                // Create new chart with rich tooltips
                const ctx = canvas.getContext('2d');
                mainCharts[chartId] = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                            data: [displayPct, remaining],
                            backgroundColor: [color, '#e5e7eb'],
                            borderWidth: 0,
                            borderRadius: 5
                        }]
                    },
                    options: {
                        responsive: false,
                        maintainAspectRatio: true,
                        cutout: '65%',
                        plugins: {
                            legend: { display: false },
                            tooltip: {
                                enabled: true,
                                backgroundColor: 'rgba(15,23,42,0.92)',
                                titleColor: '#94a3b8',
                                bodyColor: '#f1f5f9',
                                bodyFont: { size: 13, weight: '700' },
                                titleFont: { size: 11 },
                                padding: 12,
                                cornerRadius: 10,
                                callbacks: {
                                    label: function(context) {
                                        const val = context.dataIndex === 0 ? displayPct : remaining;
                                        return ` ${val.toFixed(1)}%`;
                                    },
                                    title: function(context) {
                                        return context[0].dataIndex === 0 ? 'Realisasi' : 'Sisa Target';
                                    }
                                }
                            }
                        },
                        animation: {
                            animateRotate: true,
                            duration: 900,
                            easing: 'easeOutQuart'
                        }
                    }
                });
            }

            // Trigger chart-entering CSS animation on first render
            if (isNew) {
                const wrapper = canvas.closest('.chartjs-ring-wrapper');
                if (wrapper) {
                    wrapper.classList.add('chart-entering');
                    setTimeout(() => wrapper.classList.remove('chart-entering'), 600);
                }
            }
        }

        function updateSummary() {
            // Use account number '4' (PENDAPATAN DAERAH) for total - not ID since it changes per year
            const data = accountsDataByNumber['4'];
            if (!data) {
                console.log('No data found for PENDAPATAN DAERAH (number: 4)');
                return;
            }

            const totalTarget = data.target_sesudah || 0;
            const totalRealisasi = data.total_sd_bulan_ini || 0;
            const totalSisa = totalTarget - totalRealisasi;
            const realisasiPct = data.percentage || (totalTarget > 0 ? (totalRealisasi / totalTarget) * 100 : 0);
            const sisaPct = totalTarget > 0 ? Math.abs((totalSisa / totalTarget) * 100) : 0;
            const isOverTarget = totalSisa < 0; // Negative sisa = over target = GOOD

            // Animate currency values
            animateValue('summaryTarget', totalTarget);
            animateValue('summaryRealisasi', totalRealisasi);
            animateValue('summarySisa', totalSisa);

            // Animate percentage values
            animatePercent('summaryRealisasiBadge', realisasiPct);
            animatePercent('summaryPercentage', realisasiPct);

            // Update sisa badge with correct logic
            const sisaBadge = document.getElementById('summarySisaBadge');
            if (sisaBadge) {
                if (isOverTarget) {
                    // Over target (sisa negatif) = GOOD = GREEN with +
                    animatePercent('summarySisaBadge', sisaPct, '+');
                    sisaBadge.className = 'badge-success';
                } else {
                    // Under target (sisa positif) = NEEDS ATTENTION = RED with -
                    animatePercent('summarySisaBadge', sisaPct, '-');
                    sisaBadge.className = 'badge-danger';
                }
            }

            // Update Chart.js for Total Pendapatan
            updateMainChart('total-pendapatan', realisasiPct, '#3b82f6');

            // Update mini progress bar for summary
            updateMiniBar('total-pendapatan', realisasiPct, '#3b82f6');

            // Update status pill for summary
            updateStatusPill('total-pendapatan', realisasiPct);

            // Remove loading state
            removeLoading('total-pendapatan');
        }

        function updatePajakTabs() {
            // Use number instead of ID for mapping
            const pajakNumbers = {
                'reklame': '4.1.01.09',
                'air-tanah': '4.1.01.12',
                'sarang-walet': '4.1.01.13',
                'mblb': '4.1.01.14',
                'pbb-p2': '4.1.01.15',
                'bphtb': '4.1.01.16',
                'pbjt': '4.1.01.19',
                'opsen-pkb': '4.1.01.20',
                'opsen-bbnkb': '4.1.01.21'
            };

            Object.entries(pajakNumbers).forEach(([tabId, accountNumber]) => {
                const data = accountsDataByNumber[accountNumber];
                if (data) {
                    const target = data.target_sesudah || 0;
                    const realisasi = data.total_sd_bulan_ini || 0;
                    const sisaTarget = target - realisasi;
                    const percentage = data.percentage || 0;
                    const sisaPct = target > 0 ? Math.abs((sisaTarget / target) * 100) : 0;
                    const isOverTarget = sisaTarget < 0;

                    // Animate currency values
                    animateValue(`target-pajak-${tabId}`, target);
                    animateValue(`realisasi-pajak-${tabId}`, realisasi);
                    animateValue(`sisa-pajak-${tabId}`, sisaTarget);

                    // Animate percentage values
                    animatePercent(`realisasi-badge-pajak-${tabId}`, percentage);
                    animatePercent(`percent-pajak-${tabId}`, percentage);

                    const sisaBadge = document.getElementById(`sisa-badge-pajak-${tabId}`);
                    if (sisaBadge) {
                        animatePercent(`sisa-badge-pajak-${tabId}`, sisaPct, isOverTarget ? '+' : '-');
                        sisaBadge.className = isOverTarget ? 'badge-success' : 'badge-danger';
                    }

                    // Update Chart.js doughnut
                    updatePajakChart(tabId, percentage);
                }
            });
        }

        // Create or update Chart.js doughnut chart for Pajak tabs
        function updatePajakChart(tabId, percentage) {
            const canvas = document.getElementById(`chart-pajak-${tabId}`);
            if (!canvas) return;

            // Cap percentage at 100 for chart display
            const displayPct = Math.min(percentage, 100);
            const remaining = Math.max(0, 100 - displayPct);

            if (pajakCharts[tabId]) {
                // Update existing chart
                pajakCharts[tabId].data.datasets[0].data = [displayPct, remaining];
                pajakCharts[tabId].update('none');
            } else {
                // Create new chart
                const ctx = canvas.getContext('2d');
                pajakCharts[tabId] = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                            data: [displayPct, remaining],
                            backgroundColor: ['#3b82f6', '#e5e7eb'],
                            borderWidth: 0,
                            borderRadius: 5
                        }]
                    },
                    options: {
                        responsive: false,
                        maintainAspectRatio: true,
                        cutout: '65%', // Controls thickness - lower = thicker ring
                        plugins: {
                            legend: {
                                display: false
                            },
                            tooltip: {
                                enabled: false
                            }
                        },
                        animation: {
                            animateRotate: true,
                            duration: 800
                        }
                    }
                });
            }
        }

        function updateRetribusiTabs() {
            // Use number instead of ID for mapping
            const retribusiNumbers = {
                'retribusi-jasa-umum': '4.1.02.01',
                'retribusi-jasa-usaha': '4.1.02.02',
                'retribusi-perizinan': '4.1.02.03'
            };

            Object.entries(retribusiNumbers).forEach(([tabId, accountNumber]) => {
                const data = accountsDataByNumber[accountNumber];
                if (data) {
                    const target = data.target_sesudah || 0;
                    const realisasi = data.total_sd_bulan_ini || 0;
                    const sisaTarget = target - realisasi;
                    const percentage = data.percentage || 0;
                    const sisaPct = target > 0 ? Math.abs((sisaTarget / target) * 100) : 0;
                    const isOverTarget = sisaTarget < 0;

                    // Animate currency values
                    animateValue(`target-retribusi-${tabId}`, target);
                    animateValue(`realisasi-retribusi-${tabId}`, realisasi);
                    animateValue(`sisa-retribusi-${tabId}`, sisaTarget);

                    // Animate percentage values
                    animatePercent(`realisasi-badge-retribusi-${tabId}`, percentage);
                    animatePercent(`percent-retribusi-${tabId}`, percentage);

                    const sisaBadge = document.getElementById(`sisa-badge-retribusi-${tabId}`);
                    if (sisaBadge) {
                        animatePercent(`sisa-badge-retribusi-${tabId}`, sisaPct, isOverTarget ? '+' : '-');
                        sisaBadge.className = isOverTarget ? 'badge-success' : 'badge-danger';
                    }

                    // Update Chart.js doughnut
                    updateRetribusiChart(tabId, percentage);
                }
            });
        }

        // Create or update Chart.js doughnut chart for Retribusi tabs
        function updateRetribusiChart(tabId, percentage) {
            const canvas = document.getElementById(`chart-retribusi-${tabId}`);
            if (!canvas) return;

            // Cap percentage at 100 for chart display
            const displayPct = Math.min(percentage, 100);
            const remaining = Math.max(0, 100 - displayPct);

            // Destroy existing chart if exists to ensure proper re-render
            if (retribusiCharts[tabId]) {
                retribusiCharts[tabId].destroy();
                delete retribusiCharts[tabId];
            }

            // Create new chart
            const ctx = canvas.getContext('2d');
            retribusiCharts[tabId] = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [displayPct, remaining],
                        backgroundColor: ['#8b5cf6', '#e5e7eb'],
                        borderWidth: 0,
                        borderRadius: 5
                    }]
                },
                options: {
                    responsive: false,
                    maintainAspectRatio: true,
                    cutout: '65%',
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            enabled: false
                        }
                    },
                    animation: {
                        animateRotate: true,
                        duration: 800
                    }
                }
            });
        }

        // Create or update Chart.js doughnut chart for detail children
        function updateDetailChart(chartId, percentage, color) {
            const canvas = document.getElementById(`chart-detail-${chartId}`);
            if (!canvas) return;

            // Cap percentage at 100 for chart display
            const displayPct = Math.min(percentage, 100);
            const remaining = Math.max(0, 100 - displayPct);

            if (detailCharts[chartId]) {
                // Update existing chart
                detailCharts[chartId].data.datasets[0].data = [displayPct, remaining];
                detailCharts[chartId].update('none');
            } else {
                // Create new chart
                const ctx = canvas.getContext('2d');
                detailCharts[chartId] = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                            data: [displayPct, remaining],
                            backgroundColor: [color, '#e5e7eb'],
                            borderWidth: 0,
                            borderRadius: 5
                        }]
                    },
                    options: {
                        responsive: false,
                        maintainAspectRatio: true,
                        cutout: '65%',
                        plugins: {
                            legend: {
                                display: false
                            },
                            tooltip: {
                                enabled: false
                            }
                        },
                        animation: {
                            animateRotate: true,
                            duration: 800
                        }
                    }
                });
            }
        }

        // Update detail section (PAD, Transfer, Lainnya children)
        function updateDetailSection() {
            // PAD Detail Summary - using number '4.1' instead of ID
            const padData = accountsDataByNumber['4.1'];
            if (padData) {
                const target = padData.target_sesudah || 0;
                const realisasi = padData.total_sd_bulan_ini || 0;
                const sisaTarget = target - realisasi;
                const percentage = padData.percentage || 0;
                const sisaPct = target > 0 ? Math.abs((sisaTarget / target) * 100) : 0;
                const isOverTarget = sisaTarget < 0;

                animateValue('pad-detail-target', target);
                animateValue('pad-detail-realisasi', realisasi);
                animateValue('pad-detail-sisa', sisaTarget);
                animatePercent('pad-detail-realisasi-badge', percentage);

                const padSisaBadge = document.getElementById('pad-detail-sisa-badge');
                if (padSisaBadge) {
                    animatePercent('pad-detail-sisa-badge', sisaPct, isOverTarget ? '+' : '-');
                    padSisaBadge.className = isOverTarget ? 'badge-success' : 'badge-danger';
                }
            }

            // PAD Children - using number instead of ID
            const padChildren = {
                'pajak': { number: '4.1.01', color: '#6366f1' },
                'retribusi': { number: '4.1.02', color: '#8b5cf6' },
                'kekayaan': { number: '4.1.03', color: '#a855f7' },
                'lain-pad': { number: '4.1.04', color: '#d946ef' }
            };

            Object.entries(padChildren).forEach(([childId, config]) => {
                const data = accountsDataByNumber[config.number];
                if (data) {
                    const target = data.target_sesudah || 0;
                    const realisasi = data.total_sd_bulan_ini || 0;
                    const sisaTarget = target - realisasi;
                    const percentage = data.percentage || 0;
                    const sisaPct = target > 0 ? Math.abs((sisaTarget / target) * 100) : 0;
                    const isOverTarget = sisaTarget < 0;

                    animateValue(`target-detail-${childId}`, target);
                    animateValue(`realisasi-detail-${childId}`, realisasi);
                    animateValue(`sisa-detail-${childId}`, sisaTarget);
                    animatePercent(`realisasi-badge-detail-${childId}`, percentage);

                    const sisaBadge = document.getElementById(`sisa-badge-detail-${childId}`);
                    if (sisaBadge) {
                        animatePercent(`sisa-badge-detail-${childId}`, sisaPct, isOverTarget ? '+' : '-');
                        sisaBadge.className = isOverTarget ? 'badge-success' : 'badge-danger';
                    }
                    animatePercent(`percent-detail-${childId}`, percentage);

                    updateDetailChart(childId, percentage, config.color);
                }
            });

            // Transfer Detail Summary - using number '4.2' instead of ID
            const transferData = accountsDataByNumber['4.2'];
            if (transferData) {
                const target = transferData.target_sesudah || 0;
                const realisasi = transferData.total_sd_bulan_ini || 0;
                const sisaTarget = target - realisasi;
                const percentage = transferData.percentage || 0;
                const sisaPct = target > 0 ? Math.abs((sisaTarget / target) * 100) : 0;
                const isOverTarget = sisaTarget < 0;

                animateValue('transfer-detail-target', target);
                animateValue('transfer-detail-realisasi', realisasi);
                animateValue('transfer-detail-sisa', sisaTarget);
                animatePercent('transfer-detail-realisasi-badge', percentage);

                const transferSisaBadge = document.getElementById('transfer-detail-sisa-badge');
                if (transferSisaBadge) {
                    animatePercent('transfer-detail-sisa-badge', sisaPct, isOverTarget ? '+' : '-');
                    transferSisaBadge.className = isOverTarget ? 'badge-success' : 'badge-danger';
                }
            }

            // Transfer Children - using number instead of ID
            const transferChildren = {
                'pusat': { number: '4.2.01', color: '#f97316' },
                'antar': { number: '4.2.02', color: '#fb923c' }
            };

            Object.entries(transferChildren).forEach(([childId, config]) => {
                const data = accountsDataByNumber[config.number];
                if (data) {
                    const target = data.target_sesudah || 0;
                    const realisasi = data.total_sd_bulan_ini || 0;
                    const sisaTarget = target - realisasi;
                    const percentage = data.percentage || 0;
                    const sisaPct = target > 0 ? Math.abs((sisaTarget / target) * 100) : 0;
                    const isOverTarget = sisaTarget < 0;

                    animateValue(`target-detail-${childId}`, target);
                    animateValue(`realisasi-detail-${childId}`, realisasi);
                    animateValue(`sisa-detail-${childId}`, sisaTarget);
                    animatePercent(`realisasi-badge-detail-${childId}`, percentage);

                    const sisaBadge = document.getElementById(`sisa-badge-detail-${childId}`);
                    if (sisaBadge) {
                        animatePercent(`sisa-badge-detail-${childId}`, sisaPct, isOverTarget ? '+' : '-');
                        sisaBadge.className = isOverTarget ? 'badge-success' : 'badge-danger';
                    }
                    animatePercent(`percent-detail-${childId}`, percentage);

                    updateDetailChart(childId, percentage, config.color);
                }
            });

            // Lainnya Detail Summary - using number '4.3' instead of ID
            const lainnyaData = accountsDataByNumber['4.3'];
            if (lainnyaData) {
                const target = lainnyaData.target_sesudah || 0;
                const realisasi = lainnyaData.total_sd_bulan_ini || 0;
                const sisaTarget = target - realisasi;
                const percentage = lainnyaData.percentage || 0;
                const sisaPct = target > 0 ? Math.abs((sisaTarget / target) * 100) : 0;
                const isOverTarget = sisaTarget < 0;

                animateValue('lainnya-detail-target', target);
                animateValue('lainnya-detail-realisasi', realisasi);
                animateValue('lainnya-detail-sisa', sisaTarget);
                animatePercent('lainnya-detail-realisasi-badge', percentage);

                const lainnyaSisaBadge = document.getElementById('lainnya-detail-sisa-badge');
                if (lainnyaSisaBadge) {
                    animatePercent('lainnya-detail-sisa-badge', sisaPct, isOverTarget ? '+' : '-');
                    lainnyaSisaBadge.className = isOverTarget ? 'badge-success' : 'badge-danger';
                }
            }

            // Lainnya Children - using number instead of ID
            const lainnyaChildren = {
                'hibah': { number: '4.3.01', color: '#34d399' }
            };

            Object.entries(lainnyaChildren).forEach(([childId, config]) => {
                const data = accountsDataByNumber[config.number];
                if (data) {
                    const target = data.target_sesudah || 0;
                    const realisasi = data.total_sd_bulan_ini || 0;
                    const sisaTarget = target - realisasi;
                    const percentage = data.percentage || 0;
                    const sisaPct = target > 0 ? Math.abs((sisaTarget / target) * 100) : 0;
                    const isOverTarget = sisaTarget < 0;

                    animateValue(`target-detail-${childId}`, target);
                    animateValue(`realisasi-detail-${childId}`, realisasi);
                    animateValue(`sisa-detail-${childId}`, sisaTarget);
                    animatePercent(`realisasi-badge-detail-${childId}`, percentage);

                    const sisaBadge = document.getElementById(`sisa-badge-detail-${childId}`);
                    if (sisaBadge) {
                        animatePercent(`sisa-badge-detail-${childId}`, sisaPct, isOverTarget ? '+' : '-');
                        sisaBadge.className = isOverTarget ? 'badge-success' : 'badge-danger';
                    }
                    animatePercent(`percent-detail-${childId}`, percentage);

                    updateDetailChart(childId, percentage, config.color);
                }
            });
        }

        function updatePbjtSection() {
            // Use number '4.1.01.19' for PBJT instead of ID
            const pbjtData = accountsDataByNumber['4.1.01.19'];
            if (pbjtData) {
                const target = pbjtData.target_sesudah || 0;
                const realisasi = pbjtData.total_sd_bulan_ini || 0;
                const sisaTarget = target - realisasi;
                const sisaPct = target > 0 ? Math.abs((sisaTarget / target) * 100) : 0;
                const isOverTarget = sisaTarget < 0;

                animateValue('pbjt-total-target', target);
                animateValue('pbjt-total-realisasi', realisasi);
                animateValue('pbjt-total-sisa', sisaTarget);
                animatePercent('pbjt-total-realisasi-badge', pbjtData.percentage || 0);

                const pbjtSisaBadge = document.getElementById('pbjt-total-sisa-badge');
                if (pbjtSisaBadge) {
                    animatePercent('pbjt-total-sisa-badge', sisaPct, isOverTarget ? '+' : '-');
                    pbjtSisaBadge.className = isOverTarget ? 'badge-success' : 'badge-danger';
                }
            }
        }

        // ============================================
        // DATA FETCHING
        // ============================================

        async function fetchAllAccounts() {
            try {
                // Use dynamic year from selectedYear
                const apiUrl = `https://e-penda.com/api/accounts/list-accounts?year=${selectedYear}`;
                console.log('Fetching data for year:', selectedYear, 'URL:', apiUrl);
                const response = await fetch(apiUrl);
                if (!response.ok) throw new Error(`HTTP ${response.status}`);
                const result = await response.json();
                return result.data || [];
            } catch (error) {
                console.error('Error fetching accounts list:', error);
                throw error;
            }
        }

        async function refreshAllData() {
            refreshCount++;
            setEl('refreshStatus', `Memuat data... (Refresh ke-${refreshCount})`);
            setLiveDot('fetching');

            try {
                // Fetch all accounts at once
                const allAccounts = await fetchAllAccounts();

                // Debug: log first account to see field names
                if (allAccounts.length > 0) {
                    console.log('Sample account data:', allAccounts[0]);
                    console.log('All field names:', Object.keys(allAccounts[0]));
                }

                // Reset each response so missing accounts cannot retain old values.
                Object.keys(accountsData).forEach(key => delete accountsData[key]);
                Object.keys(accountsDataByNumber).forEach(key => delete accountsDataByNumber[key]);
                Object.keys(CARD_MAPPING).forEach(number => {
                    accountsDataByNumber[number] = {
                        number,
                        target_sesudah: 0,
                        total_sd_bulan_ini: 0,
                        percentage: 0,
                    };
                });

                // Process the data - use NUMBER as key instead of ID
                allAccounts.forEach(account => {
                    const accountNumber = account.number || account.order_number;
                    const accountId = account.id;

                    // Store by both ID and Number for compatibility
                    accountsData[accountId] = account;
                    accountsDataByNumber[accountNumber] = account;

                });

                // Render every card, including zero values for missing accounts.
                Object.entries(CARD_MAPPING).forEach(([number, cardId]) => {
                    if (cardId !== 'total-pendapatan') {
                        updateCard(cardId, accountsDataByNumber[number]);
                    }
                });

                updateSummary();
                updateDetailSection();
                updatePajakTabs();
                updateRetribusiTabs();
                updatePbjtSection();

                // Remove all loading states after all data is loaded
                removeSectionLoading('section-detail-pendapatan');
                removeSectionLoading('section-pajak-retribusi');

                const now = new Date();
                const timeStr =
                    `${String(now.getHours()).padStart(2, '0')}:${String(now.getMinutes()).padStart(2, '0')}:${String(now.getSeconds()).padStart(2, '0')}`;
                setEl('refreshStatus', `Terakhir diupdate: ${timeStr} (Refresh ke-${refreshCount}) - Tahun ${selectedYear}`);

                // Set live dot to done state
                setLiveDot('done', `Data terkini pukul ${timeStr}`);

            } catch (error) {
                console.error('Error:', error);
                setEl('refreshStatus', `Error: ${error.message}`);
                setLiveDot('done', 'Gagal memuat data');
            }
        }

        // ============================================
        // INITIALIZATION
        // ============================================

        document.addEventListener('DOMContentLoaded', function () {
            // Initialize year filter dropdown
            const yearFilterDropdown = document.getElementById('yearFilter');
            if (yearFilterDropdown) {
                // Set initial value
                yearFilterDropdown.value = selectedYear;

                // Add change event listener
                yearFilterDropdown.addEventListener('change', async function () {
                    const newYear = parseInt(this.value);
                    console.log('Year changed from', selectedYear, 'to', newYear);

                    // Update selected year
                    selectedYear = newYear;

                    // Show loading state
                    setEl('refreshStatus', `Memuat data tahun ${selectedYear}...`);

                    // Add loading class to ALL cards and sections
                    document.querySelectorAll('.main-card, .section-card, .mini-card').forEach(el => {
                        el.classList.add('loading');
                    });

                    // Also add loading to section bodies
                    document.querySelectorAll('.section-body').forEach(el => {
                        el.style.opacity = '0.5';
                    });

                    // Clear ALL cached data (both by ID and by Number)
                    Object.keys(accountsData).forEach(key => delete accountsData[key]);
                    Object.keys(accountsDataByNumber).forEach(key => delete accountsDataByNumber[key]);

                    // Reset refresh counter for new year
                    refreshCount = 0;

                    // Update date/time display based on year
                    updateDateTime();

                    // Refresh data with new year
                    await refreshAllData();

                    // Restore section body opacity
                    document.querySelectorAll('.section-body').forEach(el => {
                        el.style.opacity = '1';
                    });
                });
            }

            updateDateTime();
            setInterval(updateDateTime, 1000);

            setTimeout(() => refreshAllData(), 600);
            setInterval(refreshAllData, REFRESH_INTERVAL);
        });
    </script>

    <script>
        // ============================================
        // INTERACTIVE HELPER FUNCTIONS
        // ============================================

        /**
         * Update the status pill for a card based on its percentage.
         * >= 80% = On Track (green), 50-80% = At Risk (amber), < 50% = Behind (red)
         */
        function updateStatusPill(cardId, percentage) {
            const pill = document.getElementById(`pill-${cardId}`);
            if (!pill) return;

            let statusClass, label;
            if (percentage >= 80) {
                statusClass = 'on-track';
                label = '✓ On Track';
            } else if (percentage >= 50) {
                statusClass = 'at-risk';
                label = '⚡ At Risk';
            } else {
                statusClass = 'behind';
                label = '⚠ Perlu Perhatian';
            }

            pill.className = `status-pill ${statusClass}`;
            const labelEl = pill.querySelector('.pill-label');
            if (labelEl) labelEl.textContent = label;

            // Trigger visible transition with slight delay
            setTimeout(() => pill.classList.add('visible'), 80);
        }

        /**
         * Update the mini progress bar fill for a given element ID.
         */
        function updateMiniBar(barId, percentage, color) {
            const bar = document.getElementById(`bar-${barId}`);
            if (!bar) return;
            const capped = Math.min(percentage, 100);
            // Use requestAnimationFrame to ensure transition fires
            requestAnimationFrame(() => {
                bar.style.setProperty('--bar-color', color || '#3b82f6');
                bar.style.setProperty('--bar-color-end', color || '#6366f1');
                setTimeout(() => { bar.style.width = capped + '%'; }, 50);
            });
        }

        /**
         * Set live dot state.
         * @param {'fetching'|'done'} state
         * @param {string} [message] - Optional status message
         */
        function setLiveDot(state, message) {
            const dot = document.getElementById('liveDot');
            const status = document.getElementById('liveStatus');
            if (!dot) return;

            dot.className = 'live-dot ' + state;
            if (status && message) {
                status.textContent = message;
            } else if (status && state === 'fetching') {
                status.textContent = 'Memuat data...';
            }
        }

        /**
         * Click-to-scroll: clicking a main card scrolls to its detail tab.
         */
        function scrollToDetail(cardId) {
            const tabMap = {
                'pad': 'detail-pad',
                'transfer': 'detail-transfer',
                'lainnya': 'detail-lainnya'
            };
            const tabId = tabMap[cardId];
            if (!tabId) return;

            // Switch to the correct detail tab
            switchDetailTab(tabId);

            // Scroll to the detail section
            const section = document.getElementById('section-detail-pendapatan');
            if (section) {
                section.scrollIntoView({ behavior: 'smooth', block: 'start' });

                // Add a brief highlight flash on the section
                section.style.transition = 'box-shadow 0.3s ease';
                section.style.boxShadow = '0 0 0 3px rgba(59,130,246,0.4)';
                setTimeout(() => {
                    section.style.boxShadow = '';
                }, 1200);
            }
        }
    </script>
</x-clean-layout>
