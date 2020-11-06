<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup extends Admin_Controller {
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
	protected $_memoryLimit = '1024M';

	function __construct() {
		parent::__construct();
		$language = $this->session->userdata('lang');
        $this->load->model("teacher_m");
        $this->load->model("parents_m");
        $this->load->model("student_m");
        $this->load->model("user_m");
        $this->load->model("book_m");
		$this->lang->load('backup', $language);
	}

	public function index() {
		ini_set('memory_limit', $this->_memoryLimit);
		if ($_POST) {
			if(config_item('demo') == FALSE) {
				$this->load->dbutil();
				$prefs = array(
					'format'    => 'zip',
	            	'filename'  => 'mybackup.sql'
	          	);
				$backup  = $this->dbutil->backup($prefs);
				$this->load->helper('download');
				force_download('mybackup.zip', $backup);
				redirect(base_url('backup/index'));
			} else {
				$this->session->set_flashdata('error', 'In demo backup module is disable!');
				redirect(base_url('backup/index'));
			}
		} else {
		    $this->data["subview"] = "backup/index";
		    $this->load->view('_layout_main', $this->data);
		}
	}
}