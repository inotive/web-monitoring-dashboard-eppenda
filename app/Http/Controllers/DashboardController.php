<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);

        $menuDashboard = [
            [
                "label" => "PENDAPATAN DAERAH",
                "children" => [
                    [
                        "label" => "PENDAPATAN ASLI DAERAH (PAD)",
                        'id' => 30240,
                        "children" => [
                            [
                                "label" => "PAJAK DAERAH",
                                'id' => 30241,
                                "children" => [
                                    [
                                        "label" => "REKLAME",
                                        'id' => 30242,
                                    ],
                                    [
                                        "label" => "AIR TANAH",
                                        'id' => 30249,
                                    ],
                                    [
                                        "label" => "SARANG BURUNG WALET",
                                        'id' => 30252,
                                    ],
                                    [
                                        "label" => "MBLB",
                                        'id' => 30255,
                                    ],
                                    [
                                        "label" => "PBB-P2",
                                        'id' => 30270,
                                    ],
                                    [
                                        "label" => "BPHTB",
                                        'id' => 30273,
                                    ],
                                    [
                                        "label" => "PBJT",
                                        'id' => 30278,
                                        "children" => [
                                            ["label" => "PBJT - MAKANAN DAN/ATAU MINUMAN", 'id' => 30279],
                                            ["label" => "PBJT - TENAGA LISTRIK", 'id' => 30281],
                                            ["label" => "PBJT - PERHOTELAN", 'id' => 30284],
                                            ["label" => "PBJT - PARKIR", 'id' => 30286],
                                            ["label" => "PBJT - KESENIAN DAN HIBURAN", 'id' => 30288],
                                        ]
                                    ],
                                    [
                                        "label" => "OPSEN PKB",
                                        'id' => 30294,
                                    ],
                                    [
                                        "label" => "OPSEN BBNKB",
                                        'id' => 30297,
                                    ],
                                ]
                            ],
                            [
                                "label" => "RETRIBUSI DAERAH",
                                'id' => 30300,
                                "children" => [
                                    [
                                        "label" => "RETRIBUSI JASA UMUM",
                                        'id' => 30301,
                                        "children" => [
                                            ["label" => "RETRIBUSI PELAYANAN KESEHATAN", 'id' => 30302],
                                            ["label" => "RETRIBUSI PELAYANAN PERSAMPAHAN/KEBERSIHAN", 'id' => 30323],
                                            ["label" => "RETRIBUSI PELAYANAN PARKIR DI TEPI JALAN UMUM", 'id' => 30332],
                                            ["label" => "RETRIBUSI PELAYANAN PASAR", 'id' => 30334],
                                            ["label" => "RETRIBUSI PENYEDIAAN DAN/ATAU PENYEDOTAN KAKUS", 'id' => 30349],
                                        ]
                                    ],
                                    [
                                        "label" => "RETRIBUSI JASA USAHA",
                                        'id' => 30351,
                                        "children" => [
                                            [
                                                "label" => "RETRIBUSI PENYEDIAAN TEMPAT KHUSUS PARKIR DI LUAR BADAN JALAN",
                                                'id' => 30375,
                                            ],
                                            [
                                                "label" => "RETRIBUSI PENJUALAN HASIL PRODUKSI USAHA PEMERINTAH DAERAH",
                                                'id' => 30377,
                                            ],
                                            [
                                                "label" => "RETRIBUSI PEMANFAATAN ASET DAERAH",
                                                'id' => 30381,
                                            ],
                                            ["label" => "RETRIBUSI PASAR GROSIR DAN/ATAU PERTOKOAN", 'id' => 30356],
                                            ["label" => "RETRIBUSI TEMPAT KHUSUS PARKIR", 'id' => 30364],
                                            ["label" => "RETRIBUSI RUMAH POTONG HEWAN", 'id' => 30368],
                                            ["label" => "RETRIBUSI TEMPAT REKREASI DAN OLAHRAGA", 'id' => 30370],
                                            ["label" => "RETRIBUSI PENJUALAN PRODUKSI USAHA DAERAH", 'id' => 30372],
                                        ],
                                    ],
                                    [
                                        "label" => "RETRIBUSI PERIZINAN TERTENTU",
                                        'id' => 30393,
                                    ],
                                ],
                            ],
                        ],
                    ],
                    [
                        "label" => "PENDAPATAN TRANSFER",
                        'id' => 30481,
                        "children" => [
                            [
                                "label" => "TRANSFER PEMERINTAH PUSAT",
                                'id' => 30482,
                            ],
                            [
                                "label" => "TRANSFER ANTAR DAERAH",
                                'id' => 30516,
                            ],
                        ],
                    ],
                    [
                        "label" => "LAIN-LAIN PENDAPATAN DAERAH YANG SAH",
                        'id' => 30524,
                        "children" => [
                            [
                                "label" => "PENDAPATAN HIBAH",
                                'id' => 30525,
                            ],
                        ],
                    ],
                ],
            ],
        ];


        return view('pages/dashboards.index', compact('menuDashboard'));
    }
}
