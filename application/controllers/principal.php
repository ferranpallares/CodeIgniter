<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class primaria extends CI_Controller {


public function Index()
{
$this->load->view('menu');
}
public function create(){
echo 'Per crear Usuaris';
//$this->load->view('create');
}
public function edit(){
//$this->load->view('edit');
echo 'Per modificar Usuaris';
}
public function delete(){
//$this->load->view('delete');
echo 'Per eliminar Usuaris';
}

}


