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

        $data['fname'] = $this->projectModel->getSupervisorsName1();
        $data['mname'] = $this->projectModel->getSupervisorsName2();
        $data['lname'] = $this->projectModel->getSupervisorsName3();
        $data['id'] = $this->projectModel->getSupervisorsIds();

        //print_r($data);

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
                'supervisor' => $supId['supervisor_id'],
                'amount' => $this->input->post('amount')
            );

            $supervisor = array('supervisor'=>$supId['supervisor_id'],'project'=>'PROJ'.$projCount);
            $this->session->set_userdata($supervisor);

            //sending the data to the model
            $this->projectModel->insertProject($data);
            redirect('addMilestone');
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
        $add = $this->input->post('add_more');
        if (isset($submit)){
            $data = array(
                'milestone_id' => 'PROJ'.$mileCount,
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
                'proportion' => $this->input->post('proportion'),
                'project' => $_SESSION['project']
            );
            //sending the data to the model
            $this->projectModel->insertMilestone($data);
            redirect('');
        }else if (isset($add)){
            $data = array(
                'milestone_id' => 'PROJ'.$mileCount,
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
                'proportion' => $this->input->post('proportion'),
                'project' => $_SESSION['project']
            );
            //sending the data to the model
            $this->projectModel->insertMilestone($data);
            redirect('addMilestone');
        }else if (isset($_SESSION['supervisor'])){
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/navbar');
            $this->load->view('add-content/addMilestone');
            $this->load->view('template/footer');
        }else{
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/navbar');
            $this->load->view('add-content/addProject');
            $this->load->view('template/footer');
        }

    }
}