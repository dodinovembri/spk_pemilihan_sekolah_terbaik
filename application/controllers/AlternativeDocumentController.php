<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlternativeDocumentController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['AlternativeModel', 'AlternativeValueModel', 'CriteriaModel', 'CriterionValueModel', 'AlternativeAccessibilityAssetModel', 'AlternativeLocationAssetModel', 'AlternativeRequirementDocumentAssetModel', 'AlternativeWebsiteModel']);
        $this->load->library('upload');

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
        $email = $this->session->userdata('email');
        $data_query = $this->AlternativeModel->get_data_by_email($email)->row();
        $id = $data_query->id;

        $data['requirement'] = $this->AlternativeRequirementDocumentAssetModel->get_alternative_value($id)->result();
        $data['location'] = $this->AlternativeLocationAssetModel->get_alternative_value($id)->result();
        $data['accessibility'] = $this->AlternativeAccessibilityAssetModel->get_alternative_value($id)->result();
        $data['website'] = $this->AlternativeWebsiteModel->get_alternative_value($id)->result();
        $data['alternative'] = $this->AlternativeModel->get_data_by_email($email)->row();

        $this->load->view('templates/backend/header');
        $this->load->view('alternative_document/create', $data);
        $this->load->view('templates/backend/footer');
    }

    public function store()
    {
        $email = $this->session->userdata('email');
        $data_query = $this->AlternativeModel->get_data_by_email($email)->row();
        $alternative_id = $data_query->id;

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
        $this->AlternativeWebsiteModel->destroy_by_alternative($alternative_id);
        foreach ($explode as $key => $value) {
            $data_website = array(
                'alternative_id' => $alternative_id,
                'url' => $value,
            );

            $this->AlternativeWebsiteModel->insert($data_website);
        }

        $data_description = array(
            'requirement_document_description' => $this->input->post('requirement_document_description'),
            'location_document_description' => $this->input->post('location_document_description'),
            'accessibility_document_description' => $this->input->post('accessibility_document_description')
        );

        $this->AlternativeModel->update($data_description, $alternative_id);

        $this->session->set_flashdata('success', " Nilai alternatif berhasil di buat!");
        return redirect(base_url("alternative_document/create"));
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
