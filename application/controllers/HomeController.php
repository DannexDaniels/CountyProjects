<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/11/18
 * Time: 7:15 AM
 */

class HomeController extends CI_Controller
{
    public function index(){

        $this->session->set_userdata('page','others');
        //getting count of projects from the Model
        $data['counter'] = array(
            'running' => $this->projectModel->countProjects('running'),
            'notStarted' => $this->projectModel->countProjects('not started'),
            'finished' => $this->projectModel->countProjects('finished'),
            'all' => $this->projectModel->countProjects('none')
        );
        $data['project'] = $this->projectModel->getAllProjects();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('home',$data);
        $this->load->view('template/footer');
    }
}