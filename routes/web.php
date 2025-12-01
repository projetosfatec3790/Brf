<?php
use App\Models\Ator;
use App\Models\Genero;
use App\Models\Nacionalidade;
use App\Models\Produtora;
use App\Models\Filme;
use App\Models\Diretor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/Edmir', function () {
    echo 'Olá Edmir';
});

Route::get('/filmes/{filme}', function($filme) {
    echo 'Acessando dados do filme: '. $filme;
});

Route::view('/conheca', 'sobre');


Route::get('/generos', function() {
    $minhaVariavel = Genero::all();
    dd($minhaVariavel);
});


Route::get('/atores', function () {
    $atores = Ator::all();
    return view('list-atores', compact('atores')); 
})->name('atores.index');

Route::get('/detalhes-ator/{ator}', function(Ator $ator){
    return view('detalhes-ator', compact('ator'));
})->name('detalhes-ator');

Route::get('/', function() {
    $filmes = Filme::all();
    return view('lista-filmes', compact('filmes'));
})->name('filmes.index');


Route::get('/detalhes-filme/{filme}',
function(Filme $filme){
 return view('detalhes-filme', compact('filme'));
})->name('detalhes-filme');

Route::get('/produtoras', function () {
    $produtoras = Produtora::all();
    return view('list-produtoras', compact('produtoras')); 
})->name('produtoras.index');

Route::get('/detalhes-produtora/{produtora}', function(Produtora $produtora){
return view('detalhes-produtora', compact('produtora'));
})->name('detalhes-produtora');

Route::get('/nacionalidades', function () {
    $nacionalidades = Nacionalidade::all();
    return view('list-nacionalidades', compact('nacionalidades')); 
})->name('nacionalidades.index');

Route::get('/detalhes-nacionalidade/{nacionalidade}', function(Nacionalidade $nacionalidade){
    return view('detalhes-nacionalidade', compact('nacionalidade'));
})->name('detalhes-nacionalidade');

Route::get('/diretores', function () {
    $diretores = Diretor::all();
    return view('list-diretores', compact('diretores')); 
})->name('diretores.index');

Route::get('/detalhes-diretor/{diretor}', function(Diretor $diretor){
    return view('detalhes-diretor', compact('diretor'));
})->name('detalhes-diretor');

Route::get('/generos', function () {
    $generos = Genero::all();
     return view('list-generos', compact('generos')); 
})->name('generos.index');

Route::get('/detalhes-genero/{genero}', function(Genero $genero){
    return view('detalhes-genero', compact('genero'));
})->name('detalhes-genero');

Route::view('/criar', 'criar')->name('criar');

Route::view('/login','login')->name('login');

Route::post('/logar', function (Request $request) {
    dd($request);
})->name('logar');