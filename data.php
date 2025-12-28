<?php
// Khai báo trả về JSON
header('Content-Type: application/json; charset=utf-8');

// Dữ liệu trạm sạc
$data = [
    "DS_TRAM_SAC" => [
        [
            "TEN_TRAM" => "Trạm EV01",
            "SO_CONG_SAC" => "5",
            "HOAT_DONG" => "TRUE"
        ],
        [
            "TEN_TRAM" => "Trạm EV02",
            "SO_CONG_SAC" => "8",
            "HOAT_DONG" => "TRUE"
        ]
    ]
];

// Trả JSON
echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
