<?php

Route::resource('forms', 'FormController');

Route::resource('forms/{form}/formInstances', 'FormInstancesController');