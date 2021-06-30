<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelpController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['HelpModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $data['help'] = $this->HelpModel->get()->result();

        $this->load->view('templates/backend/header');
		$this->load->view('help/index', $data);
        $this->load->view('templates/backend/footer');
	}

    public function create()
    {
        $this->load->view('templates/backend/header');
        $this->load->view('help/create');
        $this->load->view('templates/backend/footer');
    }

    public function store()
    {
        $help_code = $this->input->post('help_code');
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $status = $this->input->post('status');

        $data = array(
            'help_code' => $help_code,
            'title' => $title,
            'description' => $description,
            'status' => $status
        );

        $insert = $this->HelpModel->insert($data);
        $this->session->set_flashdata('success', "Help berhasil di buat!");
        return redirect(base_url('help'));
    }

    public function show($id)
    {
        $data['help'] = $this->HelpModel->getById($id)->row();

        $this->load->view('templates/backend/header');
        $this->load->view('help/show', $data);
        $this->load->view('templates/backend/footer');
    }

    public function edit($id)
    {
        $data['help'] = $this->HelpModel->getById($id)->row();

        $this->load->view('templates/backend/header');
        $this->load->view('help/edit', $data);
        $this->load->view('templates/backend/footer');
    }

    public function update($id)
    {
        $help_code = $this->input->post('help_code');
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $status = $this->input->post('status');

        $data = array(
            'help_code' => $help_code,
            'title' => $title,
            'description' => $description,
            'status' => $status
        );

        $update = $this->HelpModel->update($data, $id);
        $this->session->set_flashdata('success', "Data berhasil di ubah!");
        return redirect(base_url('help'));
    }

    public function destroy($id)
    {
        $delete = $this->HelpModel->destroy($id);        
        $this->session->set_flashdata('success', "Data berhasil di hapus!");
        return redirect(base_url('help'));
    }
}
