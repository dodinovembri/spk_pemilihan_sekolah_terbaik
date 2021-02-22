<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CriterionValueController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['usermodel', 'criteriamodel', 'criterionvaluemodel']);

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
        $criteria = array(
            'criteria_id' => $id
        );

        $this->session->set_userdata($criteria);

        $data['criterion_value'] = $this->criterionvaluemodel->get_criterion_value($id)->result();

        $this->load->view('templates/backend/header');
		$this->load->view('criterion_value/index', $data);
        $this->load->view('templates/backend/footer');
	}

    public function create()
    {
        $this->load->view('templates/backend/header');
        $this->load->view('criterion_value/create');
        $this->load->view('templates/backend/footer');
    }

    public function store()
    {
        $criteria_id = $this->session->userdata('criteria_id');
        $description = $this->input->post('description');
        $value = $this->input->post('value');
        $status = $this->input->post('status');

        $data = array(
            'criteria_id' => $criteria_id,
            'description' => $description,
            'value' => $value,
            'status' => $status
        );

        $insert = $this->criterionvaluemodel->insert($data);
        $this->session->set_flashdata('success', "Success create criterion value!");
        return redirect("criterion_value/$criteria_id");
   
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['criterion_value'] = $this->criterionvaluemodel->get_data($id)->row();

        $this->load->view('templates/backend/header');
        $this->load->view('criterion_value/edit', $data);
        $this->load->view('templates/backend/footer');
    }

    public function update($id)
    {
        $criteria_id = $this->session->userdata('criteria_id');
        $description = $this->input->post('description');
        $value = $this->input->post('value');
        $status = $this->input->post('status');

        $data = array(
            'description' => $description,
            'value' => $value,
            'status' => $status
        );

        $update = $this->criterionvaluemodel->update($data, $id);
        $this->session->set_flashdata('success', "Success update data!");
        return redirect(base_url("criterion_value/$criteria_id"));      
    }

    public function destroy($id)
    {
        $criteria_id = $this->session->userdata('criteria_id');
        $delete = $this->criterionvaluemodel->destroy($id);        
        $this->session->set_flashdata('success', "Success deleted data!");
        return redirect(base_url("criterion_value/$criteria_id"));
    }
}
