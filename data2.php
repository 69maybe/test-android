<?php
header('Content-Type: application/json; charset=utf-8');

$data = [
    "DS_DIEN_VIEN" => [
        [
            "TEN" => "Yua Mikami",
            "TUOI" => 29,
            "SO_DO_3_VONG" => "107-66-97cm"
        ],
        [
            "TEN" => "Yuna Ogura",
            "TUOI" => 25,
            "SO_DO_3_VONG" => "83-58-85cm"
        ],
        [
            "TEN" => "Nghĩa múp",
            "TUOI" => 21,
            "SO_DO_3_VONG" => "90-90-90cm"
        ]
    ]
];

echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
