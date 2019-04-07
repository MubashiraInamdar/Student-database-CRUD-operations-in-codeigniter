<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

function __construct()

{

parent::__construct();

$this->load->helper('url');

$this->load->model('users_model');

}

public function index()

{

$this->load->view('home');

}

//admin form function

public function admin()

{

$data['user_list'] = $this->users_model->get_all_admin();

$this->load->view('Admin', $data);

}
public function edit_admin(){
$admin_id = $this->uri->segment(3);
 $data['admins'] = $this->users_model->getByIdAdmin($admin_id);
$this->load->view('admin_edit', $data);
}


public function update_admin()

{

$mdata['username']=$_POST['username'];

$mdata['email']=$_POST['email'];

$mdata['picture']=$_POST['picture'];

$res=$this->users_model->update_admin($mdata, $_POST['admin_id']);

if($res){

header('location:'.base_url()."index.php/users/admin");

}

}


//student form functions
public function student()

{

$data['user_list'] = $this->users_model->get_all_users();

$this->load->view('show_users', $data);

}

public function add_form()

{

$this->load->view('insert');

}

public function insert_new_user()

{

$udata['name'] = $this->input->post('name');

$udata['email'] = $this->input->post('email');

$udata['address'] = $this->input->post('address');

$udata['dob'] = $this->input->post('dob');

$res = $this->users_model->insert_users_to_db($udata);

if($res){

header('location:'.base_url()."index.php/users/student");

}

}
public function edit(){
$id = $this->uri->segment(3);
$data['user'] = $this->users_model->getById($id);
$this->load->view('edit', $data);
}


public function update()

{

$mdata['name']=$_POST['name'];

$mdata['email']=$_POST['email'];

$mdata['address']=$_POST['address'];

$mdata['dob']=$_POST['dob'];

$res=$this->users_model->update_info($mdata, $_POST['id']);

if($res){

header('location:'.base_url()."index.php/users/student");

}

}

public function delete($id)

{

$this->users_model->delete_a_user($id);

$this->student();

}

//subject form functions

public function subject()

{

$data['user_list'] = $this->users_model->get_all_subject();

$this->load->view('show_subject', $data);

}

public function add_sub()

{

$this->load->view('insert_subject');

}

public function insert_sub()

{

$udata['sub_name'] = $this->input->post('sub_name');

$udata['max_mrks'] = $this->input->post('max_mrks');

$res = $this->users_model->insert_subject($udata);

if($res){

header('location:'.base_url()."index.php/users/subject");

}

}
public function edit_sub(){
$sub_id = $this->uri->segment(3);
 $data['subject'] = $this->users_model->getByIdSubject($sub_id);
$this->load->view('edit_subject', $data);
}


public function update_sub()

{

$mdata['sub_name']=$_POST['sub_name'];

$mdata['max_mrks']=$_POST['max_mrks'];

$res=$this->users_model->update_subject($mdata, $_POST['sub_id']);

if($res){

header('location:'.base_url()."index.php/users/subject");

}

}

public function delete_sub($id)

{

$this->users_model->delete_subject($id);

$this->subject();

}

//scores form function
public function scores()

{

$data['user_list'] = $this->users_model->get_all_scores();

$this->load->view('show_scores', $data);

}

public function add_scores()

{

$this->load->view('insert_scores');

}

public function insert_scores()

{
$udata['id'] = $this->input->post('id');

$udata['sub_id'] = $this->input->post('sub_id');

$udata['marks'] = $this->input->post('marks');

$res = $this->users_model->insert_scores($udata);

if($res){

header('location:'.base_url()."index.php/users/scores");

}

}
public function edit_scores(){
$id = $this->uri->segment(3);
$sub_id = $this->uri->segment(4);
 $data['scores'] = $this->users_model->getByIdScores($id,$sub_id);
$this->load->view('edit_scores', $data);
}


public function update_scores()

{
$mdata['id']=$_POST['id'];

$mdata['sub_id']=$_POST['sub_id'];

$mdata['marks']=$_POST['marks'];

$res=$this->users_model->update_scores($mdata, $_POST['id'], $_POST['sub_id']);

if($res){

header('location:'.base_url()."index.php/users/scores");

}

}

public function delete_scores($id,$sub_id)

{

$this->users_model->delete_scores($id,$sub_id);

$this->scores();

}

}