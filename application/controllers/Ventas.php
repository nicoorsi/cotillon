<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {

  public function crear(){
    if ( ! $this->session->userdata('esta_logeado') ) {
      // No esta logeado, mensaje de error
      show_404();
    }else {
      $this->load->view('includes/header');
      $this->load->view('pages/ventas/crear');
      $this->load->view('includes/footer_vue1');
      $this->load->view('pages/ventas/scripts_crear');
      $this->load->view('includes/footer_vue2');
    }
  }
}
