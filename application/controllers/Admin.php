<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_log_in();
    }


    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/user_footer');
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/user_footer');
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/user_footer');
    }


    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> Access Changed </div>');
    }

    public function delete($id)
    {
        $this->load->model('Admin_model');
        $this->Admin_model->deleteRole($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> Role removed </div>');
        redirect('admin/role');
    }

    public function editrole()
    {
        $data['title'] = 'Edit Role';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/user_footer');
        } else {
            $data = [
                'role' => $this->input->post('role'),
            ];

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('user_role', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> Role Changed</div>');
            redirect('admin/role');
        }
    }

    public function management()
    {
        $data['title'] = 'Survey Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['survei'] = $this->db->get('t_survei')->result_array();
        $data['layanan'] = $this->db->get('t_layanan')->result_array();

        $this->form_validation->set_rules('layanan', 'Service', 'required|trim');
        $this->form_validation->set_rules('pertanyaan', 'Question', 'required|trim');
        $this->form_validation->set_rules('isi1', 'Answer', 'required|trim');
        $this->form_validation->set_rules('isi2', 'Answer', 'required|trim');
        $this->form_validation->set_rules('isi3', 'Answer', 'required|trim');
        $this->form_validation->set_rules('isi4', 'Answer', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('survey/management', $data);
            $this->load->view('templates/user_footer');
        } else {
            $data = [
                'layanan' => $this->input->post('layanan'),
                'pertanyaan' => $this->input->post('pertanyaan'),
                'isi1' => $this->input->post('isi1'),
                'isi2' => $this->input->post('isi2'),
                'isi3' => $this->input->post('isi3'),
                'isi4' => $this->input->post('isi4'),
            ];
            $this->db->insert('t_survei', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> New Question</div>');
            redirect('admin/management');
        }
    }

    public function deletemanage($id)
    {
        $this->load->model('Admin_model');
        $this->Admin_model->deleteManage($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> Question Removed</div>');
        redirect('admin/management');
    }

    public function editmanage()
    {
        $data['title'] = 'Edit Survey Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['survei'] = $this->db->get('t_survei')->result_array();
        $data['layanan'] = $this->db->get('t_layanan')->result_array();

        $this->form_validation->set_rules('layanan', 'Service', 'required|trim');
        $this->form_validation->set_rules('pertanyaan', 'Question', 'required|trim');
        $this->form_validation->set_rules('isi1', 'Answer', 'required|trim');
        $this->form_validation->set_rules('isi2', 'Answer', 'required|trim');
        $this->form_validation->set_rules('isi3', 'Answer', 'required|trim');
        $this->form_validation->set_rules('isi4', 'Answer', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('survey/management', $data);
            $this->load->view('templates/user_footer');
        } else {
            $data = [
                'layanan' => $this->input->post('layanan'),
                'pertanyaan' => $this->input->post('pertanyaan'),
                'isi1' => $this->input->post('isi1'),
                'isi2' => $this->input->post('isi2'),
                'isi3' => $this->input->post('isi3'),
                'isi4' => $this->input->post('isi4'),
            ];

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('t_survei', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> Question Changed</div>');
            redirect('admin/management');
        }
    }
}
