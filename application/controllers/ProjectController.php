<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/18/18
 * Time: 1:10 AM
 */

class ProjectController extends CI_Controller
{
    public function index(){
        $data['project'] = $this->projectModel->getProjects();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('projects',$data);
        $this->load->view('template/footer');
    }

}