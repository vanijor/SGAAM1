<?php
Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'],function(){
    //CARGO
    Route::post('cargo/alterar/{id}', 'CargoController@alterar')->name('cargo.alterar');
    Route::post('cargo/inserir', 'CargoController@inserir')->name('cargo.inserir');
    Route::get('cargo/excluir/{id}', 'CargoController@excluir')->name('cargo.excluir');
    Route::get('cargo/editar/{id?}', 'CargoController@editar')->name('cargo.editar');
    Route::get('cargo', 'CargoController@index')->name('admin.cargo');
    //FUNCIONARIO
    Route::post('funcionario/alterar/{id}', 'FuncionarioController@alterar')->name('funcionario.alterar');
    Route::post('funcionario/inserir', 'FuncionarioController@inserir')->name('funcionario.inserir');
    Route::get('funcionario/excluir/{id}', 'FuncionarioController@excluir')->name('funcionario.excluir');
    Route::get('funcionario/editar/{id?}', 'FuncionarioController@editar')->name('funcionario.editar');
    Route::get('funcionario', 'FuncionarioController@index')->name('admin.funcionario');
    //PLANO
    Route::get('plano', 'PlanoController@index')->name('admin.plano');
    Route::get('pagamento', 'PagamentoController@index')->name('admin.pagamento');
    //MODALIDADE
    Route::post('modalidade/alterar/{id}', 'ModalidadeController@alterar')->name('modalidade.alterar');
    Route::post('modalidade/inserir', 'ModalidadeController@inserir')->name('modalidade.inserir');
    Route::get('modalidade/excluir/{id}', 'ModalidadeController@excluir')->name('modalidade.excluir');
    Route::get('modalidade/editar/{id?}', 'ModalidadeController@editar')->name('modalidade.editar');
    Route::get('modalidade', 'ModalidadeController@index')->name('admin.modalidade');
    //ALUNO
    Route::get('aluno', 'AlunoController@index')->name('admin.aluno');
    Route::get('professor', 'ProfessorController@index')->name('admin.professor');
    Route::get('/', 'AdminController@index')->name('admin.home');
});

Route::get('/', 'Site\SiteController@index')->name('home');


Auth::routes();