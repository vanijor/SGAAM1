<?php
$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'],function(){
    $this->get('plano', 'PlanoController@index')->name('admin.plano');
    $this->get('pagamento', 'PagamentoController@index')->name('admin.pagamento');
    $this->get('modalidade', 'ModalidadeController@index')->name('admin.modalidade');
    $this->get('aluno', 'AlunoController@index')->name('admin.aluno');
    $this->get('professor', 'ProfessorController@index')->name('admin.professor');
    $this->get('/', 'AdminController@index')->name('admin.home');
});

$this->get('/', 'Site\SiteController@index')->name('home');


Auth::routes();
