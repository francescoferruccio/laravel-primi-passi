<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {

    $numBox = 1;

    if ($numBox > 0) {
      if ($numBox == 1) {
        $messaggio = 'Guarda che bello questo quadratino!';
      } else if ($numBox > 1){
        $messaggio = 'Guarda che belli questi ' . $numBox . ' quadratini!';
      }

      return view('home', compact('numBox', 'messaggio'));
    } else {
      return view('home');
    }


});

Route::get('/about', function() {
  return view('about');
});

Route::get('/contact', function() {
  return view('contact');
});
