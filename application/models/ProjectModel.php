<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/11/18
 * Time: 9:28 AM
 */

class ProjectModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function countProjects($status){
        if ($status=='none'){
            $query = $this->db->get('projects');
            return $query->num_rows();
        }else{
            $query = $this->db->get_where('projects',array('status' => $status));
            return $query->num_rows();
        }
    }

    function countSupervisors(){
        $query = $this->db->get('supervisor');
        return $query->num_rows();
    }

    function countMilestone(){
        $query = $this->db->get('milestone');
        return $query->num_rows();
    }

    function getSupervisorId($phone,$email,$name){
        if ($phone != ''){
            $query = $this->db->get_where('supervisor',array('phone'=>$phone));
        }else if ($email != ''){
            $query = $this->db->get_where('supervisor',array('email'=>$email));
        }else{
            $query = $this->db->get_where('supervisor',array('fname'=>$name));
        }
        return $query->row_array();
    }

    function getAllProjects(){
        $query = $this->db->get('project_view');
        return $query->result_array();
    }

    function getProjects(){
        $query = $this->db->get('projects');
        return $query->result_array();
    }

    function getMilestones($project){
        $query = $this->db->get_where('milestone',array('project'=>$project));
        return $query->result_array();
    }
    function insertSupervisor($supervisor){
        return $this->db->insert('supervisor',$supervisor);
    }

    function insertProject($project){
        return $this->db->insert('projects',$project);
    }

    function insertMilestone($milestone){
        return $this->db->insert('milestone',$milestone);
    }

}