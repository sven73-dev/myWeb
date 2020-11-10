<?php
    $iphone = [
        "title" => "iPhone XR",
        "price" => 48000,
        "description" => "Телефон" 
    ];

    $ipad = [
        "title" => "iPad",
        "price" => 32000,
        "description" => "Планшет" 
    ];

    $macbook = [
        "title" => "MacBook PRO",
        "price" => 132000,
        "description" => "Ноутбук" 
    ];

    $products = [$iphone, $ipad, $macbook];

    echo("<pre>");

    foreach ($products as $product) {
        echo("<ul>");
        foreach ($product as $key => $info) {
            echo("<li>$key => $info</li>");
        }
        echo("</ul>");
    }
?>