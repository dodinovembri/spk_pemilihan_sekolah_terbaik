<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlternativeDetailController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['usermodel', 'alternativemodel']);

        // check login status and role id  as administrator(0) or not
        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }else{
            if ($this->session->userdata('role_id') != 0) {
                return redirect(base_url('login'));
            }
        }
    }

	public function index($id)
	{
        // store alternative id in session
        $this->session->set_userdata('alternative_id', $id);
        $alternative_id = $this->session->userdata('alternative_id');

        
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
