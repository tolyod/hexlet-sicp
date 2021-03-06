<?php

return [
    'title' => "Compile-variable и compile-assignment с командами лексической адресации",
    'description' => [
        '1' =>
        "С помощью find-variable из упражнения ",
        '2' =>
        " перепишите compile-variable и compile-assignment так, чтобы они порождали команды лексической адресации. " .
        "В случаях, когда find-variable возвращает not-found (то есть, когда переменной нет в окружении времени компиляции), нужно заставлять генераторы кода использовать, как и раньше, операции вычислителя для поиска связывания. " .
        "(Единственное место, где может оказаться переменная, не найденная во время компиляции — это глобальное окружение, которое является частью окружения времени выполнения, но не окружения времени компиляции. " .
        "Поэтому, если хотите, можете заставить операции вычислителя искать сразу в глобальном окружении, которое можно получить с помощью операции (op get-global-environment), а не в полном локальном окружении, которое хранится в env.) " .
        "Проверьте измененный компилятор на нескольких простых примерах, например, на вложенной комбинации lambda из начала этого раздела.",
    ],
];
