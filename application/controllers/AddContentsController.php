<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/11/18
 * Time: 11:56 AM
 */

class AddContentsController extends CI_Controller
{
    public function addSupervisor(){
        $supCount = $this->projectModel->countSupervisors() + 1;

        $submit = $this->input->post('submit');
        if (isset($submit)){
            $data = array(
                'supervisor_id' => 'SUP'.$supCount,
                'fname' => $this->input->post('fname'),
                'mname' => $this->input->post('mname'),
                'lname' => $this->input->post('lname'),
                'title' => $this->input->post('title'),
                'organization' => $this->input->post('organization'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email')
            );

            //sending the data to the model
            $this->projectModel->insertSupervisor($data);
            redirect('home');
        }else{
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/navbar');
            $this->load->view('add-content/addSupervisor');
            $this->load->view('template/footer');
        }

    }

    public function addProject(){
        $projCount = $this->projectModel->countProjects('none') + 1;

        $submit = $this->input->post('submit');
        if (isset($submit)){
            $supId = $this->projectModel->getSupervisorId('','',$this->input->post('supervisor'));
            $data = array(
                'project_id' => 'PROJ'.$projCount,
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'start_date' => $this->input->post('start'),
                'end_date' => $this->input->post('end'),
                'status' => $this->input->post('status'),
                'supervisor' => $supId['supervisor_id']
            );
            //sending the data to the model
            $this->projectModel->insertProject($data);
            redirect('');
        }else{
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/navbar');
            $this->load->view('add-content/addProject');
            $this->load->view('template/footer');
        }

    }

    public function addMilestone(){
        $mileCount = $this->projectModel->countMilestone('none') + 1;

        $submit = $this->input->post('submit');
        if (isset($submit)){
            $supId = $this->projectModel->getSupervisorId('','',$this->input->post('supervisor'));
            $data = array(
                'project_id' => 'PROJ'.$mileCount,
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'start_date' => $this->input->post('start'),
                'end_date' => $this->input->post('end'),
                'status' => $this->input->post('status'),
                'supervisor' => $supId['supervisor_id']
            );
            //sending the data to the model
            $this->projectModel->insertProject($data);
            redirect('');
        }else{
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/navbar');
            $this->load->view('add-content/addMilestone');
            $this->load->view('template/footer');
        }

    }
}