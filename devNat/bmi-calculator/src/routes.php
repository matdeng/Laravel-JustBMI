<?php

Route::get('bmicalculator', function(){
	echo 'Hello from the BMI Calculator package!';
});

Route::get('bmi/{a}/{b}', 'Devnat\BmiCalculator\BmiCalculatorController@bmi');
