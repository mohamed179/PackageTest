<?php

Route::get('calculator', function () {
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Mohamed\Calculator\CalculatorController@add');

Route::get('subtract/{a}/{b}', 'Mohamed\Calculator\CalculatorController@subtract');