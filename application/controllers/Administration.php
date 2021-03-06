<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Administration extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "administration") show_404();
    }
    public function index()
    {
        return redirect("admin/administration/year");
    }
    public function year()
    {
        $p["title"] = "All Academic Years";
        $p["page_mother"] = "Administration";
        $p["page"] = "year";
        $p["page_name"] = "Academic Year";
        $this->load->view('admin/academic_year', $p);
    }
    public function password()
    {
        $p["title"] = "Reset User Password";
        $p["page_mother"] = "Administration";
        $p["page"] = "password";
        $p["page_name"] = "Reset Password";
        $o = array(
            (object) array("id" => "parent", "title" => "Parent"),
            (object) array("id" => "student", "title" => "Student"),
            (object) array("id" => "teacher", "title" => "Teacher")
        );
        $r = $this->db->get('roles')->result();
        $p['roles'] = array_merge($o, $r);
        if ($this->input->post()) {
            $this->form_validation->set_rules('user', 'User', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[6]|max_length[15]');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|xss_clean|min_length[6]|max_length[15]|matches[password]');
            if ($this->form_validation->run() == false) {
                $this->session->set_flashdata('error_msg', validation_errors());
                $this->load->view('admin/admin_password', $p);
                return;
            } else {
                $uid = $this->input->post('user', true);
                $password = $this->input->post('password', true);
                $response = $this->user->change_password($password, $uid);
                if (!$response) {
                    $this->session->set_flashdata('error_msg', "Sorry! There was an error resetting the password. ");
                    $this->load->view('admin/admin_password', $p);
                } else {
                    $this->session->set_flashdata('success_msg', "Account password reset successfully.");
                    redirect('admin/administration/password');
                }
            }
        } else {
            $this->load->view('admin/admin_password', $p);
        }
    }
    public function sgroup()
    {
        $p["title"] = "All Student Groups";
        $p["page_mother"] = "Administration";
        $p["page"] = "sgroup";
        $p["page_name"] = "Student Group";
        $this->load->view('admin/student_group', $p);
    }
    public function complain($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_complain();
        } elseif ($act == "edit") {
            // $this->edit_complain();
        } elseif ($act == "") {
            $p["title"] = "All Complaints";
            $p["page_mother"] = "Administration";
            $p["page"] = "complain";
            $p["page_name"] = "Complain";
            $this->load->view('admin/admin_complain', $p);
        } else {
            show_404();
        }
    }
    private function add_complain()
    {
        $p["title"] = "Add complain";
        $p["page_mother"] = "Administration";
        $p["page_inner"] = "complain";
        $p["page_inner_name"] = "Student Groups";
        $p["page"] = "Add";
        $this->load->view('admin/add_admin_complain', $p);
    }
    private function view_complain()
    {
        $p["title"] = "View complain";
        $p["page_mother"] = "Administration";
        $p["page_inner"] = "complain";
        $p["page_inner_name"] = "Student Groups";
        $p["page"] = "View";
        $this->load->view('admin/view_admin_complain', $p);
    }
}
