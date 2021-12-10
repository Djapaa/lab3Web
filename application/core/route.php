<?php

/*
Класс-маршрутизатор для определения запрашиваемой страницы.
> цепляет классы контроллеров и моделей;
> создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
*/
class Route
{

	public function run()
	{
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		$controller_name = 'main';
		$action_name = 'index';
		// получаем имя контроллера
		if ( !empty($routes[1]) )
		{	
			$controller_name = $routes[1];
			
		}
		//получаем имя экшена
		if ( !empty($routes[2]) )
		{
			$action_name = $routes[2];
		}
		
		$model_name = 'model_'.$controller_name;
		$controller_name = 'controller_'.$controller_name;
		$action_name = 'action_'.$action_name;

		$controller_file = ROOT. '/controllers/' .
		$controller_name . '.php';
		if(file_exists($controller_file)){
			include_once($controller_file);}
		else {
            header('Location: /404_view');
             }

		$model_file = ROOT. '/models/' .
		$model_name . '.php';
		if(file_exists($model_file)){
			include_once ($model_file);}
			// $controller = new $controller_name;
			// $action = $action_name;
			// if(method_exists($controller, $action))
			// {
			// 	// вызываем действие контроллера
			// 	$controller->$action();
			// }
			$action = $action_name;
			$controllerObject = New $controller_name;
			
			if($resalt = $controllerObject-> $action())
			{
				$resalt = $controllerObject-> $action();
			}

			else {

                // header('Location: /404_view');

            }

			// function ErrorPage404()
            // {
            //     $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
            //     header('HTTP/1.1 404 Not Found');
            //     header("Status: 404 Not Found");
            //     header('Location:'.$host.'404');
            // }

        }
	}

	// static function start()
	// {
	// 	// контроллер и действие по умолчанию
	// 	$controller_name = 'Main';
	// 	$action_name = 'index';
		
	// 	$routes = explode('/', $_SERVER['REQUEST_URI']);
	// 	echo $_SERVER['REQUEST_URI'];
	// 	var_dump($routes);
	// 	// получаем имя контроллера
	// 	if ( !empty($routes[1]) )
	// 	{	
	// 		$controller_name = $routes[1];
	// 	}
		
	// 	// получаем имя экшена
	// 	if ( !empty($routes[2]) )
	// 	{
	// 		$action_name = $routes[2];
	// 	}

	// 	// добавляем префиксы
	// 	$model_name = 'model_'.$controller_name;
	// 	$controller_name = 'controller_'.$controller_name;
	// 	$action_name = 'action_'.$action_name;

		
	// 	echo "Model: $model_name <br>";
	// 	echo "Controller: $controller_name <br>";
	// 	echo "Action: $action_name <br>";
	

	// 	// подцепляем файл с классом модели (файла модели может и не быть)

	// 	$model_file = strtolower($model_name).'.php';
	// 	$model_path = "application/models/".$model_file;
	// 	echo $model_path;
	// 	if(file_exists($model_path))
	// 	{
	// 		include "application/models/".$model_file;
	// 	}

	// 	// подцепляем файл с классом контроллера
	// 	$controller_file = strtolower($controller_name).'.php';
	// 	$controller_path = "application/controllers/".$controller_file;
	// 	if(file_exists($controller_path))
	// 	{
	// 		include "application/controllers/".$controller_file;
	// 	}
	// 	else
	// 	{
	// 		/*
	// 		правильно было бы кинуть здесь исключение,
	// 		но для упрощения сразу сделаем редирект на страницу 404
	// 		*/
	// 		Route::ErrorPage404();
	// 	}
		
	// 	// создаем контроллер
	// 	$controller = new $controller_name;
	// 	$action = $action_name;
	// 	var_dump( $controller);
	// 	if(method_exists($controller, $action))
	// 	{
	// 		// вызываем действие контроллера
	// 		$controller->$action();
			

	// 	}
	// 	else
	// 	{
	// 		// здесь также разумнее было бы кинуть исключение
	// 		Route::ErrorPage404();
	// 	}
		
	// }

	// function ErrorPage404()
	// {
    //     $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
    //     header('HTTP/1.1 404 Not Found');
	// 	header("Status: 404 Not Found");
	// 	header('Location:'.$host.'404');
    // }
