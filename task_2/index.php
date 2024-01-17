<?php

$college = array(
    "Студенты" => array(
        "Никита",
        "Алексей",
        "Дмитрий",
        "Евгений"
    ),
    "Преподаватели" => array(
        "Никита Андреевич",
        "Алексей Иванович",
        "Дмитрий Петрович",
        "Евгений Семенович"
    )
);

foreach ($college as $people => $items) {
    echo "<h1>$people</h1>";
    echo "<ul>";
    foreach ($items as $item) {
        echo "<li>$item</li>";
    };
    echo "</ul>";
}