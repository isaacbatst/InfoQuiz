<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'IndexController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Rotas das Questões
$route['questao'] = "QuestaoController";
$route['questao-index'] = "QuestaoController/index";
$route['questao-novo'] = "QuestaoController/novo";
$route['questao-salvar'] = "QuestaoController/salvar";
$route['questao-editar/(:num)'] = "QuestaoController/editar/$1";
$route['questao-atualizar'] = "QuestaoController/atualizar";
$route['questao-excluir/(:num)'] = "QuestaoController/excluir/$1";

//Rotas dos Usuários
$route['usuario'] = "UsuarioController";
$route['usuario-index'] = "UsuarioController/index";
$route['usuario-novo'] = "UsuarioController/novo";
$route['usuario-salvar'] = "UsuarioController/salvar";
$route['usuario-editar/(:num)'] = "UsuarioController/editar/$1";
$route['usuario-atualizar'] = "UsuarioController/atualizar";
$route['usuario-excluir/(:num)'] = "UsuarioController/excluir/$1";

//Rota index principal
$route['index'] = "IndexController";
$route['index-index'] = "IndexController/index";

//Rota Login
$route['login-autenticar'] = "LoginController/autenticar";
$route['login-logout'] = "LoginController/logout";

//Rota Questionário
$route['questionario-index/(:num)'] = "QuestionarioController/index/$1";

