<?php


$router->get('/ChartData', ['middleware'=>'auth','uses'=>'ChartTableController@AllSelect']);
$router->get('/Me', ['middleware'=>'auth','uses'=>'MeTableController@AllSelect']);
$router->post('/Contact', ['middleware'=>'auth','uses'=>'ContactTableController@contactSend']);
$router->get('/footer', ['middleware'=>'auth','uses'=>'FooterTableController@onSelect']);
$router->get('/information', ['middleware'=>'auth','uses'=>'InformationTableController@onSelect']);
$router->get('/service', ['middleware'=>'auth','uses'=>'ServiceTableController@onSelect']);


$router->get('/projectSix', ['middleware'=>'auth','uses'=>'ProjectsTableController@onSix']);
$router->get('/projectAll', ['middleware'=>'auth','uses'=>'ProjectsTableController@onSelectAll']);
$router->post('/projectDetails', ['middleware'=>'auth','uses'=>'ProjectsTableController@onSelectDetails']);


$router->get('/video', ['middleware'=>'auth','uses'=>'HomeTableController@onVideo']);
$router->get('/totalProjects', ['middleware'=>'auth','uses'=>'HomeTableController@onTotal']);
$router->get('/tech', ['middleware'=>'auth','uses'=>'HomeTableController@onTech']);


$router->get('/homeTitle', ['middleware'=>'auth','uses'=>'HomeTableController@onHome']);

