<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RankingController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('my_function');

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        // $data = getDistanceBetweenPointsNew(-2.985557, 104.728721, -2.961740, 104.736820);  
        
        // weight fixes
        $weight_fixes = weight_fixes();
        $total_weight_fixes = count($weight_fixes);

        // determine the s vector
        $s_vector = s_vector($weight_fixes);
        $s_vector_total = s_vector_total($s_vector, $total_weight_fixes);
        $sum_s_vector_total = sum_s_vector_total($s_vector_total);

        // determine the v vector
        $data['v_vector'] = v_vector($s_vector_total, $sum_s_vector_total);

        // count criteria
        // $data['v_vector'] = v_vector($s_vector_total, $sum_s_vector_total);

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
