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
    Route::post('aluno/alterar/{id}', 'AlunoController@alterar')->name('aluno.alterar');
    Route::post('aluno/inserir', 'AlunoController@inserir')->name('aluno.inserir');
    Route::get('aluno/excluir/{id}', 'AlunoController@excluir')->name('aluno.excluir');
    Route::get('aluno/editar/{id?}', 'AlunoController@editar')->name('aluno.editar');
    //PROFESSOR
    Route::post('professor/alterar/{id}', 'ProfessorController@alterar')->name('professor.alterar');
    Route::post('professor/inserir', 'ProfessorController@inserir')->name('professor.inserir');
    Route::get('professor/excluir/{id}', 'ProfessorController@excluir')->name('professor.excluir');
    Route::get('professor/editar/{id?}', 'ProfessorController@editar')->name('professor.editar');
    Route::get('professor', 'ProfessorController@index')->name('admin.professor');
    //PAGAMENTO
    Route::post('pagamento/alterar/{id}', 'PagamentoController@alterar')->name('pagamento.alterar');
    Route::post('pagamento/inserir', 'PagamentoController@inserir')->name('pagamento.inserir');
    Route::get('pagamento/excluir/{id}', 'PagamentoController@excluir')->name('pagamento.excluir');
    Route::get('pagamento/editar/{id?}', 'PagamentoController@editar')->name('pagamento.editar');
    Route::get('pagamento', 'PagamentoController@index')->name('admin.pagamento');
    // HOME
    Route::get('/', 'AdminController@index')->name('admin.home');
});

Route::get('/', 'Site\SiteController@index')->name('home');


Auth::routes();