<?php

class Users_model extends CI_Model {

function __construct()

{

parent::__construct();

$this->load->database("student");

}

//admin form functions
public function get_all_admin()

{

$query = $this->db->get('admins');

return $query->result();

}
public function getByIdAdmin($admin_id){
$query = $this->db->get_where('admins',array('admin_id'=>$admin_id));
return $query->row_array();
}


public function update_admin($data,$admin_id)

{

$this->db->where('admins.admin_id',$admin_id);

return $this->db->update('admins', $data);

}

//student database functions
public function get_all_users()

{

$query = $this->db->get('student');

return $query->result();

}

public function insert_users_to_db($data)

{

return $this->db->insert('student', $data);

}

public function getById($id){
$query = $this->db->get_where('student',array('id'=>$id));
return $query->row_array();
}


public function update_info($data,$id)

{

$this->db->where('student.id',$id);

return $this->db->update('student', $data);

}

public function delete_a_user($id)

{

$this->db->where('student.id',$id);

return $this->db->delete('student');

}

//Subject database functions
public function get_all_subject()

{

$query = $this->db->get('subjects');

return $query->result();

}

public function insert_subject($data)

{

return $this->db->insert('subjects', $data);

}

public function getByIdSubject($sub_id){
$query = $this->db->get_where('subjects',array('sub_id'=>$sub_id));
return $query->row_array();
}


public function update_subject($data,$sub_id)

{

$this->db->where('subjects.sub_id',$sub_id);

return $this->db->update('subjects', $data);

}

public function delete_subject($sub_id)

{

$this->db->where('subjects.sub_id',$sub_id);

return $this->db->delete('subjects');

}

//scores database functions
public function get_all_scores()

{

$query = $this->db->get('scores');

return $query->result();

}
public function insert_scores($data)

{

return $this->db->insert('scores', $data);

}

public function getByIdScores($id, $sub_id){

$sql = "SELECT * FROM scores WHERE id = ? AND sub_id = ?";
$query = $this->db->query($sql, array($id, $sub_id));
return $query->row_array();
}


public function update_scores($data, $id, $sub_id)

{

$this->db->where('scores.id', $id);
$this->db->where('scores.sub_id', $sub_id);

return $this->db->update('scores', $data);

}

public function delete_scores($id, $sub_id)

{

$this->db->where('scores.id', $id);
$this->db->where('scores.sub_id', $sub_id);

return $this->db->delete('scores');

}


}

?>