<?php
$this->group(['middleware' => ['auth'], 'namespace' => 'Admin'],function(){
    $this->get('admin/professor', 'ProfessorController@index')->name('admin.professor');
    $this->get('admin', 'AdminController@index')->name('admin.home');
});

$this->get('/', 'Site\SiteController@index')->name('home');


Auth::routes();
