<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('usermodel');
        if ($this->session->userdata('logged_in' != TRUE) && $this->session->userdata('role_id') != 0) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $this->load->view('templates/backend/header');
		$this->load->view('auth/home');
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

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
