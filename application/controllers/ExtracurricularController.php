<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExtracurricularController extends CI_Controller {

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
        // 
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
        // 
    }

    public function destroy($id)
    {
        //
    }   
}
