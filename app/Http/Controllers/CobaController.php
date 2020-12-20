<?php
namespace App\Http\Controllers; 
namespace Coba;

use App\Http\Controllers\Controller;
use App\Models\Coba;

/**
 * @Created by github.com/A2RJ
 * Description of class.
 * Copy namespace below and replace namespace Coba;
 * namespace App\Http\Controllers;
 * delete namespace Coba;
 */
class CobaController extends Controller
{
	/**
	 * Description of class.
	 *
	 * @Created by github.com/A2RJ
	 */
	public function __construct()
	{
		$model = new Coba();
	}


	/**
	 * Description of class.
	 *
	 * @Created by github.com/A2RJ
	 */
	public function Coba($id)
	{
		CRUD
	}
}
