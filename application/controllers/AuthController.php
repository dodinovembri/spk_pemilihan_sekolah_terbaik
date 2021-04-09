<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['UserModel', 'AlternativeModel']);
    }

	public function index()
	{
        $this->load->view('templates/backend/header');
		$this->load->view('auth/login');
        $this->load->view('templates/backend/footer');
	}

    public function register()
    {
        $this->load->view('templates/backend/header');
        $this->load->view('auth/register');
        $this->load->view('templates/backend/footer');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $check_auth = $this->UserModel->check_auth($username, $password)->row();
        if ($check_auth) {
            $auth = array(
                    'id' => $check_auth->id,
                    'name'  => $check_auth->name,
                    'email'     => $check_auth->email,
                    'role_id'   => $check_auth->role_id,
                    'logged_in' => 1,
                    'image' => $check_auth->image
            );

            $this->session->set_userdata($auth);
            return redirect(base_url('home'));
        }else{
            $this->session->set_flashdata('warning', "Username or Password is wrong!");
            return redirect(base_url('login'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', 'User Logout successfully');

        return redirect(base_url('login'));
    }

    public function create()
    {
        //
    }

    public function store()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');

        if ($password != $password_confirm) {
            $this->session->set_flashdata('warning', "Your password is doesn't match");
            return redirect(base_url('register'));
        }else{
            $password = md5($this->input->post('password'));
            $data = array(
                'name' => $name,
                'email' => $email,
                'password' => $password
            );

            $insert = $this->UserModel->insert($data);
            $this->session->set_flashdata('success', "Success register, please login!");
            return redirect(base_url('login'));
        }

    }

    public function school_register()
    {
        $this->load->view('templates/backend/header');
        $this->load->view('auth/school_register');
        $this->load->view('templates/backend/footer');
    }

    public function school_register_store()
    {
        $school_code = $this->input->post('school_code');
        $school_name = $this->input->post('school_name');
        $email = $this->input->post('email');
        $address = $this->input->post('address');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');

        if ($password != $password_confirm) {
            $this->session->set_flashdata('warning', "Your password is doesn't match");
            return redirect(base_url('register'));
        }else{
            $data = array(
                'alternative_code' => $school_code,
                'alternative_name' => $school_name,
                'email' => $email,
                'address' => $address,                
                'status' => 2
            );

            $password = md5($this->input->post('password'));
            $data_user = array(
                'name' => $school_name,
                'email' => $email,
                'password' => $password,
                'role_id' => 2
            );

            $password_principal = md5("kepala".$this->input->post('password'));
            $data_principal = array(
                'name' => $school_name,
                'email' => $email,
                'password' => $password_principal,
                'role_id' => 3
            );

            $insert_alternative = $this->AlternativeModel->insert($data);
            $insert_user = $this->UserModel->insert($data_user);
            $insert_user = $this->UserModel->insert($data_principal);

            $this->session->set_flashdata('success', "Success register your school!");
            return redirect(base_url('login'));
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
