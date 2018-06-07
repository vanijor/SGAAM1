<?php
Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'],function(){
    //PROFESSOR
    Route::post('professor/alterar/{id}', 'ProfessorController@alterar')->name('professor.alterar');
    Route::post('professor/inserir', 'ProfessorController@inserir')->name('professor.inserir');
    Route::get('professor/excluir/{id}', 'ProfessorController@excluir')->name('professor.excluir');
    Route::get('professor/editar/{id?}', 'ProfessorController@editar')->name('professor.editar');
    Route::get('professor', 'ProfessorController@index')->name('admin.professor');
    //PLANO
    Route::post('plano/alterar/{id}', 'PlanoController@alterar')->name('plano.alterar');
    Route::post('plano/inserir', 'PlanoController@inserir')->name('plano.inserir');
    Route::get('plano/excluir/{id}', 'PlanoController@excluir')->name('plano.excluir');
    Route::get('plano/editar/{id?}', 'PlanoController@editar')->name('plano.editar');
    Route::get('plano', 'PlanoController@index')->name('admin.plano');
    //MODALIDADE
    Route::post('modalidade/alterar/{id}', 'ModalidadeController@alterar')->name('modalidade.alterar');
    Route::post('modalidade/inserir', 'ModalidadeController@inserir')->name('modalidade.inserir');
    Route::get('modalidade/excluir/{id}', 'ModalidadeController@excluir')->name('modalidade.excluir');
    Route::get('modalidade/editar/{id?}', 'ModalidadeController@editar')->name('modalidade.editar');
    Route::get('modalidade', 'ModalidadeController@index')->name('admin.modalidade');
    //ALUNO
    Route::post('aluno/alterar/{id}', 'AlunoController@alterar')->name('aluno.alterar');
    Route::post('aluno/inserir', 'AlunoController@inserir')->name('aluno.inserir');
    Route::get('aluno/excluir/{id}', 'AlunoController@excluir')->name('aluno.excluir');
    Route::get('aluno/editar/{id?}', 'AlunoController@editar')->name('aluno.editar');
    Route::get('aluno', 'AlunoController@index')->name('admin.aluno');
    //CHAMADA
    Route::post('chamada/inserir', 'ChamadaController@inserir')->name('chamada.inserir');
    Route::get('chamada', 'ChamadaController@index')->name('admin.chamada');
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