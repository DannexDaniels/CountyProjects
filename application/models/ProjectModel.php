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
            return $this->db->count_all('projects');
        }else{
            $query = $this->db->get_where('projects',array('status' => $status));
            return $query->num_rows();
        }
    }

    function countSupervisors(){
        return $this->db->count_all('supervisor');
    }

    function countMilestone(){ 
        return $this->db->count_all('milestone');
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

    function getNames(){
    }

    function getSupervisorsName1(){
        $query = $this->db->select('fname')->get('supervisor');
        return $query->result_array();
    }

    function getSupervisorsName2(){
        $query = $this->db->select('mname')->get('supervisor');
        return $query->result_array();
    }

    function getSupervisorsName3(){
        $query = $this->db->select('lname')->get('supervisor');
        return $query->result_array();
    }

    function getSupervisorsIds(){
        $query = $this->db->select('fname')->get('supervisor');
        return $query->result_array();
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
    function getProjectCost($project){
        $query = $this->db->select('amount')->get_where('projects',array('project_id'=>$project));
        return $query->row_array();
    }
    function insertSupervisor($supervisor){
        return $this->db->insert('supervisor',$supervisor);
    }
    function getSupervisors(){
        $query = $this->db->get('supervisor');
        return $query->result_array();
    }

    function insertProject($project){
        return $this->db->insert('projects',$project);
    }

    function insertMilestone($milestone){
        return $this->db->insert('milestone',$milestone);
    }

    function updateProject($project,$title){
        $this->db->where('title',$title);
        return $this->db->update('projects',$project);
    }

    function getSpecificProject($title){
        $query = $this->db->get_where('projects',array('title'=>$title));
        return $query->row_array();
    }

    function updateMilestone($project,$title){
        $this->db->where('title',$title);
        return $this->db->update('milestone',$project);
    }

    function getSpecificMilestone($title){
        $query = $this->db->get_where('milestone',array('title'=>$title));
        return $query->row_array();
    }

}