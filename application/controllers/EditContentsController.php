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

            if($this->input->post('status')=='finished'){

                $config = Array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'dannex.mwangi@gmail.com', // change it to yours
                    'smtp_pass' => 'daniel4146', // change it to yours
                    'mailtype' => 'html',
                    'charset' => 'iso-8859-1',
                    'wordwrap' => TRUE
                );

                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");
                $this->email->from('dannex.mwangi@gmail'); // change it to yours
                $this->email->to('dannexparelific@yahoo.com');// change it to yours
                $this->email->subject('Project Successfully Completed');
                $this->email->message('The project you were supervising is completed. Thank you for working with us.');
                if($this->email->send())
                {
                    $headers = "From: webmaster@example.com" . "\r\n" .
                        "CC: dannexparelific@yahoo.com";
                    // send email
                    mail("dannex.mwangi@gmail","My subject","The project you were supervising is completed. Thank you for working with us.",$headers);
                    echo 'Email sent.';
                }
                else
                {
                    show_error($this->email->print_debugger());
                }
            }

            //sending the data to the model
            $this->projectModel->updateProject($data,$this->input->post('title'));
            //redirect('');
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