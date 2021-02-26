<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RankingController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('my_function');

        // check login status and role id  as administrator(0) or not
        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
        // else{
        //     if ($this->session->userdata('role_id') != 0) {
        //         return redirect(base_url('login'));
        //     }
        // }
    }

	public function index()
	{
        // weight fixes
        $weight_fixes = weight_fixes();
        $total_weight_fixes = count($weight_fixes);

        // determine the s vector
        $s_vector = s_vector($weight_fixes);
        $s_vector_total = s_vector_total($s_vector, $total_weight_fixes);
        $sum_s_vector_total = sum_s_vector_total($s_vector_total);

        // determine the v vector
        $data['v_vector'] = v_vector($s_vector_total, $sum_s_vector_total);

        $this->load->view('templates/backend/header');
		$this->load->view('ranking/index', $data);
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
