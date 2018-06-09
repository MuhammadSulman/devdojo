<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 6/9/2018
 * Time: 5:06 PM
 */

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Devdojo\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Devdojo\Calculator\CalculatorController@subtract');
