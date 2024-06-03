<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\CozinhaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\SaborController;
use App\Http\Middleware\CheckIfLoggedIn;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class,'Index'])->name('index');

Route::post('/login',[LoginController::class,'autenticate'])->name('login');

Route::middleware(CheckIfLoggedIn::class)->group(function () {
    Route::get('/dashboard',[DashboardController::class,'Index'])->name('dashboard');

    Route::get('/funcionarios',[FuncionarioController::class,'index'])->name('funcionarios');
    Route::post('/funcionariosAdd',[FuncionarioController::class,'add'])->name('funcionariosAdd');
    Route::post('/funcionariosUpdate',[FuncionarioController::class,'update'])->name('funcionariosUpdate');
    Route::delete('/funcionariosDel',[FuncionarioController::class,'del'])->name('funcionariosDel');


    Route::get('/clientes',[ClienteController::class,'index'])->name('clientes');
    Route::get('/clientes/add',[ClienteController::class,'addindex'])->name('clientesaddView');
    Route::post('/clientesAdd',[ClienteController::class,'add'])->name('clientesAdd');
    Route::post('/clienteUpdate',[ClienteController::class,'update'])->name('clientesUpdate');
    Route::delete('/clientesDel',[ClienteController::class,'del'])->name('clientesDel');


    Route::get('/pedidos',[PedidoController::class,'index'])->name('pedidos');
    Route::post('/pedidosAdd',[PedidoController::class,'add'])->name('pedidosAdd');
    Route::post('/pedidosConcluir',[PedidoController::class,'councluir'])->name('pedidosConcluir');
    Route::delete('/pedidosDel',[PedidoController::class,'del'])->name('pedidosDel');


    Route::get('/cozinha',[CozinhaController::class,'index'])->name('cozinha');


    Route::get('/config',[ConfigController::class,'index'])->name('config');

    Route::get('/sabor',[SaborController::class,'index'])->name('sabor');
    Route::post('/saborAdd',[SaborController::class,'add'])->name('saborAdd');
    Route::post('/saborUpdate',[SaborController::class,'update'])->name('saborUpdate');
    Route::delete('/saborDel',[SaborController::class,'del'])->name('saborDel');
    
    Route::get('/extra',[ExtraController::class,'index'])->name('extra');
    Route::post('/extraAdd',[ExtraController::class,'add'])->name('extraAdd');
    Route::post('/extraUpdate',[ExtraController::class,'update'])->name('extraUpdate');
    Route::delete('/extraDel',[ExtraController::class,'del'])->name('extraDel');


    Route::get('/relatorio',[RelatorioController::class,'index'])->name('relatorio');

    Route::get('/logout', [LoginController::class,'logout'])->name('logout');
});
