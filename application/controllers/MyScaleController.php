<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyScaleController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('my_function');
        $this->load->model(['UserWeightModel', 'CriteriaModel', 'HelperModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $total_criteria = $this->CriteriaModel->get_total();
        $total_importance_scale = $this->HelperModel->get_total();
        $total_importance_scale = (int)$total_importance_scale->total;

        if ($total_criteria == $total_importance_scale) {
            $data['weight_fixes'] = weight_fixes();
        }else{
            $data['weight_fixes'] = "not_defined";
        }


        $user_id = $this->session->userdata('id');
        $data['myscale'] = $this->UserWeightModel->get_my_scale($user_id)->result();

        $this->load->view('templates/backend/header');
		$this->load->view('myscale/index', $data);
        $this->load->view('templates/backend/footer');
	}

    public function create()
    {
        $data['criteria'] = $this->CriteriaModel->get_criteria_with_not_in()->result();

        $this->load->view('templates/backend/header');
        $this->load->view('myscale/create', $data);
        $this->load->view('templates/backend/footer');
    }

    public function store()
    {
        $criteria = $this->input->post('criteria');
        $importance_scale = $this->input->post('importance_scale');
        $status = $this->input->post('status');
        $user_id = $this->session->userdata('id');

        $data = array(
            'user_id' => $user_id,
            'criteria_id' => $criteria,
            'importance_scale' => $importance_scale,
            'status' => $status
        );

        $insert = $this->UserWeightModel->insert($data);
        $this->session->set_flashdata('success', "Success create my-scale!");
        return redirect(base_url('my_scale'));    
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['scale'] = $this->UserWeightModel->get_data($id)->row();

        $this->load->view('templates/backend/header');
        $this->load->view('myscale/edit', $data);
        $this->load->view('templates/backend/footer');
    }

    public function update($id)
    {
        $importance_scale = $this->input->post('importance_scale');
        $status = $this->input->post('status');

        $data = array(
            'importance_scale' => $importance_scale,
            'status' => $status
        );

        $update = $this->UserWeightModel->update($data, $id);
        $this->session->set_flashdata('success', "Success update data!");
        return redirect(base_url('my_scale'));
    }

    public function destroy($id)
    {
        $delete = $this->UserWeightModel->destroy($id);        
        $this->session->set_flashdata('success', "Success deleted data!");
        return redirect(base_url('my_scale'));
    }
}
