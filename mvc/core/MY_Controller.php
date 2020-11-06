<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property document_m $document_m
 * @property email_m $email_m
 * @property error_m $error_m
 */
class MY_Controller extends CI_Controller {
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
    public $data = [];

    public function __construct()
    {
        parent::__construct();
        $this->load->config('iniconfig');
        $this->data['errors'] = [];

        if ( !$this->config->config_install() ) {
            redirect(site_url('install'));
        }
    }
}

