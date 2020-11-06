<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends Admin_Controller {
// class Test extends CI_Controller {
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
	public function __construct() 
	{
		parent::__construct();
		if(config_item('demo') == FALSE || ENVIRONMENT == 'production') {
			redirect('dashboard/index');
		}
	}

	public function index()
    {
        $this->load->model('teacherclasses_m');
        dump($this->teacherclasses_m->teacherClass());

	}
}
