<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        //ceklogin_guru();
        //$this->load->model('Web_model', 'sm');
        $this->load->library('datatables');
    }
    public function index()
    {
        $data=[
            'siswa' => $this->db->get('siswa')->result_array(),
            'guru' => $this->db->get('guru')->result_array(),
            'materi' => $this->db->get('materi')->result_array(),
            'submenu' => 'home'
            ];
        $this->load->view('Web/v_header',$data);
        $this->load->view('Web/v_beranda',$data);
        $this->load->view('Web/v_footer',$data);
    }
    public function siswa()
    {
        $data=[
            'setting'=>$this->db->get_where('setting',['id_setting'=>1])->row_array(),
            'submenu' => 'siswa'
            ];
        $this->load->view('Web/v_header',$data);
        $this->load->view('Web/v_siswa');
        $this->load->view('Web/v_footer');
    }
    public function guru()
    {
        $data=[
            'setting'=>$this->db->get_where('setting',['id_setting'=>1])->row_array(),
            'guru' => $this->db->get_where('guru', ['status' => 1])->row_array(),
            'submenu' => 'guru'
        ];
        
        
        $this->load->view('Web/v_header',$data);
        $this->load->view('Web/v_guru', $data);
        $this->load->view('Web/v_footer');
    }
    public function materi()
    {
        $data=[
            'setting'=>$this->db->get_where('setting',['id_setting'=>1])->row_array(),
            'submenu' => 'materi'
            ];
        $this->load->view('Web/v_header',$data);
        $this->load->view('Web/v_materi');
        $this->load->view('Web/v_footer');
    }
    public function tentang()
    {
        $data['submenu'] = 'tentang';
        $this->load->view('Web/v_header',$data);
        $this->load->view('Web/v_tentang', $data);
        $this->load->view('Web/v_footer');
    }

    public function profile()
    {
        $data['submenu'] = 'profile';
        $this->load->view('Web/v_header',$data);
        $this->load->view('Web/v_profile', $data);
        $this->load->view('Web/v_footer');
    }

}
