<?php




// RUTAS DE ACUDIENTES
Route::get('/acudientes','HostessController@index')
     ->name('hostesses.index');
Route::get('/acudientes/nuevo', 'HostessController@create')
     ->name('hostesses.create');
Route::post('/acudientes', 'HostessController@store')
     ->name('hostesses.store');
Route::get('/acudientes/{hostess}', 'HostessController@show')
    ->where('hostess', '[0-9]+')
    ->name('hostesses.show');
Route::get('/acudientes/{hostess}/editar', 'HostessController@edit')
    ->name('hostesses.edit');
Route::put('/acudientes/{hostess}', 'HostessController@update');
Route::delete('/acudientes/{hostess}', 'HostessController@destroy')
    ->name('hostesses.destroy');


//   RUTAS DE DOCENTES
Route::get('/docentes','TeacherController@index')
        ->name('teachers.index');
Route::get('/docentes/nuevo','TeacherController@create')
        ->name('teachers.create');
Route::post('/docentes','TeacherController@store')
        ->name('teachers.store');
Route::get('/docentes/{teacher}','TeacherController@show')
        ->name('teachers.show')
        ->where('teacher','[0-9]');
Route::get('/docentes/{teacher}/editar', 'TeacherController@edit')
        ->name('teachers.edit');
Route::put('/docentes/{teacher}', 'TeacherController@update');
 Route::delete('/docentes/{teacher}', 'TeacherController@destroy')
        ->name('teachers.destroy');


// RUTAS DE ASIGNATURAS
Route::get('/asignaturas','SubjectsController@index')
        ->name('subjects.index');
Route::get('/asignaturas/nuevo','SubjectsController@create')
        ->name('subjects.create');
Route::post('/asignaturas','SubjectsController@store')
        ->name('subjects.store');
 Route::get('/asignaturas/{subject}','SubjectsController@show')
        ->name('subjects.show')
        ->where('subjects','[0-9]');
Route::get('/asignaturas/{subject}/editar', 'SubjectsController@edit')
        ->name('subjects.edit');
Route::put('/asignaturas/{subject}', 'SubjectsController@update');
Route::delete('/asignaturas/{subject}', 'SubjectsController@destroy')
        ->name('subjects.destroy');


// RUTAS DE HORARIOS
Route::get('/horarios','HoursController@index')
        ->name('hours.index');
Route::get('/horarios/nuevo','HoursController@create')
        ->name('hours.create');
Route::post('/horarios','HoursController@store')
        ->name('hours.store');
 Route::get('/horarios/{id}','HoursController@show')
        ->name('hours.show')
        ->where('hours','[0-9]');
Route::get('/horarios/{hour}/editar', 'HoursController@edit')
        ->name('hours.edit');
Route::put('/horarios/{hour}', 'HoursController@update');
Route::delete('/horarios/{hour}', 'HoursController@destroy')
        ->name('hours.destroy');

// RUTAS DE ESTUDIANTES
Route::get('/estudiantes','StudentController@index')
        ->name('students.index');
Route::get('/estudiantes/nuevo','StudentController@create')
        ->name('students.create');
Route::post('/estudiantes','StudentController@store')
        ->name('students.store');
 Route::get('/estudiantes/{id}','StudentController@show')
        ->name('students.show')
        ->where('students','[0-9]');
Route::get('/estudiantes/{student}/editar', 'StudentController@edit')
        ->name('students.edit');
Route::put('/estudiantes/{student}', 'StudentController@update');
Route::delete('/estudiantes/{student}', 'StudentController@destroy')
        ->name('students.destroy');


// RUTAS DE REGISTRO DE ESTUDIANTES
Route::get('/registrarestudiantes','RegisterStudentController@index')
        ->name('registerstudents.index');
Route::get('/registrarestudiantes/nuevo','RegisterStudentController@create')
        ->name('registerstudents.create');
Route::post('/registrarestudiantes','RegisterStudentController@store')
        ->name('registerstudents.store');
 Route::get('/registrarestudiantes/{id}','RegisterStudentController@show')
        ->name('registerstudents.show')
        ->where('registerstudents','[0-9]');
Route::get('/registrarestudiantes/{registerstudent}/editar', 'RegisterStudentController@edit')
        ->name('registerstudents.edit');
Route::put('/registrarestudiantes/{registerstudent}', 'RegisterStudentController@update');
Route::delete('/registrarestudiantes/{registerstudent}', 'RegisterStudentController@destroy')
        ->name('registerstudents.destroy');


