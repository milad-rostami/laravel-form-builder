<?php

Route::resource('forms', 'FormsController');

Route::resource('forms/{form}/formInstances', 'FormInstancesController');