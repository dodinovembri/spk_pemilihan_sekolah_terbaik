<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('usermodel');
    }

	public function index()
	{
        $this->load->view('templates/backend/header');
		$this->load->view('auth/login');
        $this->load->view('templates/backend/footer');
	}

    public function login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $check_auth = $this->usermodel->check_auth($username, $password)->row();
        if ($check_auth) {
            if ($check_auth->role_id == 0) {
                $auth = array(
                        'username'  => $check_auth->username,
                        'email'     => $check_auth->email,
                        'role_id'   => $check_auth->role_id,
                        'logged_in' => 1
                );

                $this->session->set_userdata($auth);
                return redirect(base_url('home'));
            }
        }
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

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
