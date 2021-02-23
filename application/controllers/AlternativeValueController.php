<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlternativeValueController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['usermodel', 'alternativemodel', 'alternativevaluemodel', 'criteriamodel']);

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
        $alternative = array(
            'alternative_id' => $id
        );

        $this->session->set_userdata($alternative);

        $data['alternative_value'] = $this->alternativevaluemodel->get_alternative_value($id)->result();


        $this->load->view('templates/backend/header');
        $this->load->view('alternative_value/index', $data);
        $this->load->view('templates/backend/footer');
    }

    public function create()
    {
        $data['criteria'] = $this->criteriamodel->get_criteria()->result();

        $this->load->view('templates/backend/header');
        $this->load->view('alternative_value/create', $data);
        $this->load->view('templates/backend/footer');
    }

    public function store()
    {
        $alternative_id = $this->session->userdata('alternative_id');
        $criteria_criterion = $this->input->post('criteria_criterion');
        $count = count($criteria_criterion);

        $delete = $this->alternativevaluemodel->destroy_by_alternative($alternative_id);

        foreach ($criteria_criterion as $key => $value) {
            $data = explode("&" , $value);

            $alternative_id = $this->session->userdata('alternative_id');
            $criteria_id = $data[0];
            $criterion_value_id = $data[1];

            $data = array(
                'alternative_id' => $alternative_id,
                'criteria_id' => $criteria_id,
                'criterion_value_id' => $criterion_value_id
            );

            $insert = $this->alternativevaluemodel->insert($data);
        }
        $this->session->set_flashdata('success', "Success create criteria!");
        return redirect(base_url("alternative_values/$alternative_id"));

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['alternative_value'] = $this->alternativevaluemodel->get_data($id)->row();

        $this->load->view('templates/backend/header');
        $this->load->view('alternative_value/edit', $data);
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
        // 
    }
}
