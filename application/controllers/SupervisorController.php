<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 7/18/18
 * Time: 5:48 PM
 */

class SupervisorController extends CI_Controller
{
    public function index(){
        $this->session->set_userdata('page','sup');
        $data['supervisor'] = $this->projectModel->getSupervisors();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('supervisors',$data);
        $this->load->view('template/footer');
    }
}