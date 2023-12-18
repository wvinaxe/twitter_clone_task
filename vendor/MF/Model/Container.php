<?php

namespace MF\Model;

use App\Connection;

class Container{

	public static function getModel($model){


		$class = "\\App\\Models\\".ucfirst($model);

		//retornar o modelo e conexão solicitados já instaciados

		$conn = Connection::getDb();

		return new $class($conn);

	}
}

?>
