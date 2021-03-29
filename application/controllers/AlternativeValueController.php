<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AlternativeValueController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['AlternativeValueModel', 'CriteriaModel', 'CriterionValueModel', 'AlternativeAccessibilityAssetModel', 'AlternativeLocationAssetModel', 'AlternativeRequirementDocumentAssetModel', 'AlternativeWebsiteModel']);
        $this->load->library('upload');
        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

    public function index($id)
    {
        $alternative = array(
            'alternative_id' => $id
        );

        $this->session->set_userdata($alternative);
        $data['requirement'] = $this->AlternativeRequirementDocumentAssetModel->get_alternative_value($id)->result();
        $data['location'] = $this->AlternativeLocationAssetModel->get_alternative_value($id)->result();
        $data['accessibility'] = $this->AlternativeAccessibilityAssetModel->get_alternative_value($id)->result();
        $data['website'] = $this->AlternativeWebsiteModel->get_alternative_value($id)->result();
        $data['alternative_value'] = $this->AlternativeValueModel->get_alternative_value($id)->result();


        $this->load->view('templates/backend/header');
        $this->load->view('alternative_value/index', $data);
        $this->load->view('templates/backend/footer');
    }

    public function create()
    {
        $data['criteria'] = $this->CriteriaModel->get_criteria()->result();

        $this->load->view('templates/backend/header');
        $this->load->view('alternative_value/create', $data);
        $this->load->view('templates/backend/footer');
    }

    public function store()
    {
        $alternative_id = $this->session->userdata('alternative_id');
        $criteria_criterion = $this->input->post('criteria_criterion');
        $this->AlternativeValueModel->destroy_by_alternative($alternative_id);

        foreach ($criteria_criterion as $key => $value) {
            $data = explode("&", $value);

            $alternative_id = $this->session->userdata('alternative_id');
            $criteria_id = $data[0];
            $criterion_value_id = $data[1];

            $data = array(
                'alternative_id' => $alternative_id,
                'criteria_id' => $criteria_id,
                'criterion_value_id' => $criterion_value_id
            );

            $insert = $this->AlternativeValueModel->insert($data);
        }

        // upload requirement document
        $files = $_FILES;
        $cpt = count($_FILES['requirement_document']['name']);
        for ($i = 0; $i < $cpt; $i++) {
            $_FILES['requirement_document']['name'] = $files['requirement_document']['name'][$i];
            $_FILES['requirement_document']['type'] = $files['requirement_document']['type'][$i];
            $_FILES['requirement_document']['tmp_name'] = $files['requirement_document']['tmp_name'][$i];
            $_FILES['requirement_document']['error'] = $files['requirement_document']['error'][$i];
            $_FILES['requirement_document']['size'] = $files['requirement_document']['size'][$i];
            move_uploaded_file($_FILES['requirement_document']['tmp_name'],"uploads/alternative/". $_FILES['requirement_document']['name']);
            $this->upload->do_upload();
            $fileName = $_FILES['requirement_document']['name'];
            $images[] = $fileName;
        }
        $fileName = implode(',', $images);
        $this->AlternativeRequirementDocumentAssetModel->destroy_by_alternative($alternative_id);
        $this->AlternativeRequirementDocumentAssetModel->insert_rd($alternative_id, $fileName);

        // save location document
        $files = $_FILES;
        $cpt_ld = count($_FILES['location_document']['name']);
        for ($i = 0; $i < $cpt_ld; $i++) {
            $_FILES['location_document']['name'] = $files['location_document']['name'][$i];
            $_FILES['location_document']['type'] = $files['location_document']['type'][$i];
            $_FILES['location_document']['tmp_name'] = $files['location_document']['tmp_name'][$i];
            $_FILES['location_document']['error'] = $files['location_document']['error'][$i];
            $_FILES['location_document']['size'] = $files['location_document']['size'][$i];
            move_uploaded_file($_FILES['location_document']['tmp_name'],"uploads/alternative/". $_FILES['location_document']['name']);
            $this->upload->do_upload();
            $fileNameLd = $_FILES['location_document']['name'];
            $imagesLd[] = $fileNameLd;
        }
        $fileNameLd = implode(',', $imagesLd);
        $this->AlternativeLocationAssetModel->destroy_by_alternative($alternative_id);
        $this->AlternativeLocationAssetModel->insert_ld($alternative_id, $fileNameLd);        

        // save accessibility document
        $files = $_FILES;
        $cpt_ad = count($_FILES['accessibility_document']['name']);
        for ($i = 0; $i < $cpt_ad; $i++) {
            $_FILES['accessibility_document']['name'] = $files['accessibility_document']['name'][$i];
            $_FILES['accessibility_document']['type'] = $files['accessibility_document']['type'][$i];
            $_FILES['accessibility_document']['tmp_name'] = $files['accessibility_document']['tmp_name'][$i];
            $_FILES['accessibility_document']['error'] = $files['accessibility_document']['error'][$i];
            $_FILES['accessibility_document']['size'] = $files['accessibility_document']['size'][$i];
            move_uploaded_file($_FILES['accessibility_document']['tmp_name'],"uploads/alternative/". $_FILES['accessibility_document']['name']);
            $this->upload->do_upload();
            $fileNameAd = $_FILES['accessibility_document']['name'];
            $imagesAd[] = $fileNameAd;
        }
        $fileNameAd = implode(',', $imagesAd);
        $this->AlternativeAccessibilityAssetModel->destroy_by_alternative($alternative_id);
        $this->AlternativeAccessibilityAssetModel->insert_ad($alternative_id, $fileNameAd);

        // save to table alternative website
        $website = $this->input->post('website_url');
        $explode = explode(";", $website);
        foreach ($explode as $key => $value) {
            $data_website = array(
                'alternative_id' => $alternative_id,
                'url' => $value,
            );

            $this->AlternativeWebsiteModel->insert($data_website);
        }

        $this->session->set_flashdata('success', "Success create alternative value!");
        return redirect(base_url("alternative_values/$alternative_id"));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $alternative_value = $this->AlternativeValueModel->get_data($id)->row();
        $data['criterion_value'] = $this->CriterionValueModel->get_criterion_value($alternative_value->criteria_id)->result();
        $data['alternative_value'] = $this->AlternativeValueModel->get_data_join($id)->row();

        $this->load->view('templates/backend/header');
        $this->load->view('alternative_value/edit', $data);
        $this->load->view('templates/backend/footer');
    }

    public function update($id)
    {
        $alternative_id = $this->session->userdata('alternative_id');
        $criterion_value_id = $this->input->post('criterion_value_id');

        $data = array(
            'criterion_value_id' => $criterion_value_id
        );

        $update = $this->AlternativeValueModel->update($data, $id);
        $this->session->set_flashdata('success', "Success update data!");
        return redirect(base_url("alternative_values/$alternative_id"));
    }

    public function destroy($id)
    {
        // 
    }
}
