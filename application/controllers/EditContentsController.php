<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 7/19/18
 * Time: 10:37 AM
 */

class EditContentsController extends CI_Controller
{
    public function updateProject()
    {
        $submit = $this->input->post('submit');
        if (isset($submit)) {
            $data = array(
                'start_date' => $this->input->post('start'),
                'end_date' => $this->input->post('end'),
                'status' => $this->input->post('status'),
                'amount' => $this->input->post('amount')
            );

            //sending the data to the model
            $this->projectModel->updateProject($data,$this->input->post('title'));
            redirect('');
        }else{
            $data['project'] = $this->projectModel->getSpecificProject($this->input->post('title'));
            print_r($data);
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/navbar');
            $this->load->view('edit-content/editProject',$data);
            $this->load->view('template/footer');
        }
    }

    public function updateMilestone()
    {
        $submit = $this->input->post('submit');
        if (isset($submit)) {
            $data = array(
                'status' => $this->input->post('status'),
                'proportion' => $this->input->post('proportion'),
            );

            //sending the data to the model
            $this->projectModel->updateMilestone($data,$this->input->post('title'));
            redirect('');
        }else{
            $data['milestone'] = $this->projectModel->getSpecificMilestone($this->input->post('title'));
            print_r($data);
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/navbar');
            $this->load->view('edit-content/editMilestone',$data);
            $this->load->view('template/footer');
        }
    }
}