<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends Admin_Controller {
/*
| -----------------------------------------------------
| PRODUCT NAME: 	SISTEMA DE INFORMACIÓN Y ADMINISTRACION DE BENEFICIARIOS Y DONACIONES PARA ACA
| -----------------------------------------------------
|  AUTHOR:			YOANNA MORALES
| -----------------------------------------------------
|  AUTHOR:			yoanna_mor@hotmail.com
| -----------------------------------------------------
| COPYRIGHT:		RESERVED BY ACA
| -----------------------------------------------------
| WEBSITE:			http://asociacionalcance.com
| -----------------------------------------------------
*/
	function __construct() {
		parent::__construct();
		$this->load->model('pages_m');
	}

	function index() {
		$this->data['headerassets'] = array(
			'css' => array(
				'assets/wp-menu/assets/css/style.css',
			),
			'js' => array(
				'assets/wp-menu/assets/js/script.js',
				'assets/wp-menu/assets/js/jquery-ui-1.12.1/jquery-ui.min.js',
				'assets/nestedSortable/jquery.mjs.nestedSortable.js',
			)
		);

		$this->data['pages'] = $this->pages_m->get_pages();
		$this->data["subview"] = "example/menu";
        $this->load->view('_layout_main', $this->data);
	}
}

/* End of file class.php */
/* Location: .//D/xampp/htdocs/school/mvc/controllers/class.php */