<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $data['user'] = $this->UserModel->get_user()->result();

        $this->load->view('templates/backend/header');
		$this->load->view('user/index', $data);
        $this->load->view('templates/backend/footer');
	}

    public function create()
    {
        $this->load->view('templates/backend/header');
        $this->load->view('user/create');
        $this->load->view('templates/backend/footer');
    }

    public function store()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');
        $role = $this->input->post('role');
        $status = $this->input->post('status');

        if ($password != $password_confirm) {
            $this->session->set_flashdata('warning', "Password yang anda masukkan salah");
            return redirect(base_url('user'));
        }else{
            $password = md5($this->input->post('password'));
            $data = array(
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'role_id' => $role,
                'status' => $status
            );

            $insert = $this->UserModel->insert($data);
            $this->session->set_flashdata('success', "User baru berhasil di buat!");
            return redirect(base_url('user'));
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['user'] = $this->UserModel->get_data($id)->row();

        $this->load->view('templates/backend/header');
        $this->load->view('user/edit', $data);
        $this->load->view('templates/backend/footer');
    }

    public function update($id)
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');
        $role = $this->input->post('role');
        $status = $this->input->post('status');

        if ($password != $password_confirm) {
            $this->session->set_flashdata('warning', "Password yang anda masukkan salah");
            return redirect(base_url('user'));
        }else{
            $password = md5($this->input->post('password'));
            $data = array(
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'role_id' => $role,
                'status' => $status
            );

            $update = $this->UserModel->update($data, $id);
            $this->session->set_flashdata('success', "User berhasil di ubah!");
            return redirect(base_url('user'));
        }
    }

    public function destroy($id)
    {
        $delete = $this->UserModel->destroy($id);        
        $this->session->set_flashdata('success', "Data berhasil di hapus!");
        return redirect(base_url('user'));
    }
}
