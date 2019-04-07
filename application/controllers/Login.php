<?php
if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Login extends CI_Controller

{

public function __construct()

{

parent::__construct();

$this->load->model('m_login');

$this->load->library(array('form_validation','session'));

$this->load->database();

$this->load->helper('url');

}

public function index()

{

$session = $this->session->userdata('isLogin');

if($session == FALSE)

{

redirect('login/login_form');

}else

{

redirect('users');

}

}


public function login_form()

{

$this->form_validation->set_rules('username', 'Username', 'required');

$this->form_validation->set_rules('password', 'Password', 'required|md5');

$this->form_validation->set_error_delimiters('<span class="error">', '</span>');

if($this->form_validation->run()==FALSE)

{

$this->load->view('form_login');

}else

{

$username = $this->input->post('username');

$password = $this->input->post('password');

$cek = $this->m_login->takeUser($username, $password);

if($cek <> 0)

{

$this->session->set_userdata('isLogin', TRUE);

$this->session->set_userdata('username',$username);


redirect('users');

}else

{

echo " <script>

alert('Failed Login: Check your username and password!');

history.go(-1);

</script>";

}

}

}

public function logout()

{

$this->session->sess_destroy();

redirect('login/login_form');

}

public function my_profile()

{
$username= $this->session->userdata('username');
$data['admins'] = $this->m_login->userData($username);
$this->load->view('my_profile',$data);
}

public function change_pwd()
{
$admin_id = $this->uri->segment(3);
 $data['admins'] = $this->m_login->getByIdAdmin($admin_id);
$this->load->view('change_pwd',$data);
}

public function update_pwd()
{
$mdata['admin_id']=$_POST['admin_id'];
$mdata['username']=$this->session->userdata('username');
$mdata['password']=md5($_POST['password']);

$res=$this->m_login->update_pwd($mdata, $_POST['admin_id']);

if($res){

header('location:'.base_url()."index.php/login/my_profile");

}

}
public function edit_profile(){
$admin_id = $this->uri->segment(3);
 $data['admins'] = $this->m_login->getByIdAdmin($admin_id);
$this->load->view('edit_profile', $data);
}


public function update_my_profile()

{

$mdata['username']=$_POST['username'];

$mdata['email']=$_POST['email'];

$mdata['picture']=$_POST['picture'];

$res=$this->m_login->update_admin($mdata, $_POST['admin_id']);

if($res){

header('location:'.base_url()."index.php/login/my_profile");

}

}

}

?>