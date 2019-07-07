<?php

class Adminmodel extends CI_Model
{
    public function updatehost($id,$data){
        $this->db->where('id',$id);
        $qry=$this->db->update('email_accounts',$data);
        if($qry){return true;}
        else{return false;}
    }
    /*-------------Dependent selection smtp host---------------*/
    public function specifichost($host){
        $this->db->where('server_id',$host);
        $qry=$this->db->get('email_configuration');
        return $qry->result_array();
    }
    /*-------------Dependent selection smtp port---------------*/
    public function specificport($host){
        $this->db->where('server_id',$host);
        $qry=$this->db->get('email_configuration');
        return $qry->result_array();
    }
    public function createemailaccount($data)
    {
        $qry = $this->db->insert('email_accounts', $data);
        if ($qry) {return true;}
        else {return false;}
    }
    public function createaccount($data)
    {
        $qry = $this->db->insert('mailing_tbl', $data);
        if ($qry) {
            return true;
        } else {
            return false;
        }
    }
    public function selectemailaccounts(){
        $qry=$this->db->get('email_accounts');
        return $qry->result_array();
    }
    public function selectserver(){
        $qry=$this->db->get('email_configuration');
        return $qry->result_array();
    }
    public function checkuser($email){
        $this->db->where('email', $email);
        $qry=$this->db->get('mailing_tbl');
        if($qry->num_rows()>0){
            return $qry->row('email');
        }
    }
    public function userpassword($pass){
        $this->db->where('email',$pass);
        $data=$this->db->get('mailing_tbl');
        if($data->num_rows()>0){
            return $data->row('password');
        }
    }
    public function userid($id){
        $this->db->where('email',$id);
        $data=$this->db->get('mailing_tbl');
        if($data->num_rows()>0){
            return $data->row('user_id');
        }
    }
    public function useraccounts($id){
        $this->db->where('created_by',$id);
        $data=$this->db->get('email_accounts');
        return $data->result_array();
    }
    public function accountsdetails($id){
        $this->db->where('email',$id);
        $data=$this->db->get('email_accounts');
        return $data->result_array();
    }

}

?>