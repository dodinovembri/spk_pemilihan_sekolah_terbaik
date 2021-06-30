<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['UserModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $user_id = $this->session->userdata('id');
        $data['profile'] = $this->UserModel->get_data($user_id)->row();        

        $this->load->view('templates/backend/header');
		$this->load->view('profile/index', $data);
        $this->load->view('templates/backend/footer');
	}

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update($id)
    {

        $name = $this->input->post('name');
        $email = $this->input->post('email');

        $password = md5($password);    

        // for image
        $image = uniqid();
        $config['upload_path']          = './uploads/user/';
        $config['allowed_types']        = 'gif|jpg|png';            
        $config['file_name']            = $image;

        $this->load->library('upload', $config); 

        if ($this->upload->do_upload('image'))
        {
             $data = array(
                'name' => $name,
                'email' => $email,
                'image' => $this->upload->data('file_name')
            );

            $update = $this->UserModel->update($data, $id);
            $this->session->set_flashdata('success', "Update data berhasil!");
            return redirect(base_url('profile'));
        }
        else
        {                          
            $data = array(
                'name' => $name,
                'email' => $email
            );

            $update = $this->UserModel->update($data, $id);
            $this->session->set_flashdata('success', "Update data berhasil!");
            return redirect(base_url('profile'));
        }
    }

    public function destroy($id)
    {
        //
    }


    public function change_password($value='')
    {
        $user_id = $this->session->userdata('id');
        $data['profile'] = $this->UserModel->get_data($user_id)->row();        

        $this->load->view('templates/backend/header');
        $this->load->view('profile/change_password', $data);
        $this->load->view('templates/backend/footer');
    }

    public function update_password($id)
    {
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');

        if ($password != $password_confirm) {
            $this->session->set_flashdata('warning', "Password yang anda masukkan salah!");
            return redirect(base_url('profile/change_password'));
        }else{
            $password = md5($password);                             
            $data = array(
                'password' => $password
            );

            $update = $this->UserModel->update($data, $id);
            $this->session->set_flashdata('success', "Update password berhasil!");
            return redirect(base_url('profile/change_password'));
        }
    }    
}
