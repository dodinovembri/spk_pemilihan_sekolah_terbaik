<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['UserModel', 'AlternativeModel', 'CriteriaModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $data['alternative'] = $this->AlternativeModel->count_alternative();
        $data['criteria'] = $this->CriteriaModel->count_criteria();
        $data['user'] = $this->UserModel->count_user();

        $this->load->view('templates/backend/header');
		$this->load->view('home/index', $data);
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
