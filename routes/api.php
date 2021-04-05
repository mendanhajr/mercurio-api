<?php
//use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


/**
 * ROTAS DE LOGIN E AUTENTICAÇÃO
 */
Route::post('login', 'Auth\AuthenticateController@authenticate');
$this->post('autenticacao/refresh', 'Auth\AuthenticateController@refreshToken');
$this->get('autenticacao', 'Auth\AuthenticateController@getAuthenticatedUser');

$this->group(['namespace' => 'Api', 'middleware' => 'auth:api'], function(){
    Route::apiResources(
        [
            'despesas' => 'DespesaController',
            'catalogo' => 'CatalogoDespesaController',
        ]
    );
    $this->get('despesa/{id_despesa}/catalogo-despesa', 'DespesaController@catalogoDespesas');
});
