<?php

Route::group(['prefix'=>'admin'], function (){
    Route::get('/admin', function () {
        echo "Đây là trang amin";
    });
});

