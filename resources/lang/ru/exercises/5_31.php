<?php

return [
    'title' => "Лишние операции",
    'description' =>
        "Во время вычисления вызова процедуры вычислитель с явным управлением всегда сохраняет и восстанавливает регистр env при вычислении оператора, сохраняет и восстанавливает env при вычислении каждого операнда (кроме последнего), сохраняет и восстанавливает argl при вычислении каждого операнда, а также сохраняет и восстанавливает proc при вычислении последовательности операндов. " .
        "Для каждой из следующих комбинаций скажите, какие из этих операций save и restore излишни и могут быть исключены с помощью механизма preserving:",
];
