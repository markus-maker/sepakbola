<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Page extends MY_Controller {
  public function welcome(){
    redirect('gol/delok');
  }
  public function thanks(){
    redirect('gol/data_gol');
  }

  //mynotescode.com/form-login-dengan-codeigniter-mysql/
}