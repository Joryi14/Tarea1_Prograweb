<?php
    
    Route::get('/',function() { return view('Inicial');});
    Route::get('book1',function() { return view('book1');});
    Route::get('book2',function() { return view('book2');});
    Route::get('book3',function() { return view('book3');});
    Route::get('book4',function() { return view('book4');});
    Route::dispatch();
?>
