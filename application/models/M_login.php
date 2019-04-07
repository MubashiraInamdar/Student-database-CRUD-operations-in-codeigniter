<?php

if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');

class M_login extends CI_Model

{

public function __construct()

{

parent::__construct();

}

public function takeUser($username, $password)

{

$this->db->select('*');

$this->db->from('admins');

$this->db->where('username', $username);

$this->db->where('password', $password);

$query = $this->db->get();

return $query->num_rows();

}
public function getByIdAdmin($admin_id){
$query = $this->db->get_where('admins',array('admin_id'=>$admin_id));
return $query->row_array();
}


public function userData($username)
{
$this->db->select('*');

$this->db->from('admins');

$this->db->where('username', $username);
$query = $this->db->get();
return $query->row_array();
}

public function update_pwd($data,$admin_id)

{

$this->db->where('admins.admin_id',$admin_id);

return $this->db->update('admins', $data);

}

public function update_admin($data,$admin_id)

{

$this->db->where('admins.admin_id',$admin_id);

return $this->db->update('admins', $data);

}

}