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
        $password = $this->input->post('password');
    }

    public function logout($value='')
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
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
