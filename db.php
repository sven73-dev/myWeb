<?php
    //Создаем подключение 
    $db = new PDO('mysql:host=127.0.0.1:3306;dbname=sim-project;charset=utf8', 'root', 'root');

    //Описываем запрос к бд
    $sql = "SELECT * FROM products";

    //Выполняем запрос, результат сохраняем в переменную $result
    $result = $db->query($sql);

    //Преобразовываем результат в ассоциативный массив и записываем в $products
    $products = $result->fetchAll(PDO::FETCH_ASSOC);

    //Распечатываем массив $products
    echo"<pre>";
    print_r($products);
    echo"</pre>";

