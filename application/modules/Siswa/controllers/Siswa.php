<?php
defined('BASEPATH') or exit('No direct script access allowed');

class siswa extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        ceklogin();
        ceklogin_guru();
        $this->load->model('siswa_model', 'sm');
        $this->load->library('datatables');
        $this->load->library('excel');
    }
    public function index()
    {
        $data = [
            'isi' => 'Siswa/v_siswa',
            'level' => $this->db->get('level')->result_array(),
            'sesi' => $this->db->get('sesi')->result_array(),
            'kelas' => $this->db->get('kelas')->result_array(),
            'jurusan' => $this->db->get('jurusan')->result_array()
        ];
        $this->template->candy($data);
    }
    function get_idt_siswa()
    {
        if ($this->session->userdata('akses') == 1) {
            echo $this->sm->Ignited_dt('id_siswa,nis,no_hp,nama,level,kelas,jurusan,sesi,no_hp,password', 'siswa', array());
        } elseif ($this->session->userdata('akses') == 2) {
            echo $this->sm->Ignited_dt_guru('id_siswa,nis,no_hp,nama,level,kelas,jurusan,sesi,no_hp,password', 'siswa', array());
        } else {
            redirect('Home');
        }
    }


    public function tambahdata()
    {
        $nohp = $this->input->post('nohp');
        $nis = $this->input->post('nis');
        $nama = $this->input->post('nama');
        $level = $this->input->post('level');
        $kelas = $this->input->post('kelas');
        $jurusan = $this->input->post('jurusan');
        $sesi = $this->input->post('sesi');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //FORM VALIDASI
        $this->form_validation->set_rules('nohp', 'No HP', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            // $errors = validation_errors();
            $data = [
                'nohp' => form_error('nohp'),
                'nama' => form_error('nama')

            ];
            echo json_encode($data);
        } else {

            $data = [
                'no_hp' => $nohp,
                'nama' => $nama,
                'nis' => $nis,
                'level' => $level,
                'kelas' => $kelas,
                'jurusan' => $jurusan,
                'sesi' => $sesi,
                'username' => $username,
                'password' => $password,
                'status' => 1

            ];
            $this->sm->createdata('siswa', $data);
            echo json_encode('sukses');
        }
    }
    public function editdata()
    {
        $id = $this->input->post('id');
        $nohp = $this->input->post('nohp');
        $nis = $this->input->post('nis');
        $nama = $this->input->post('nama');
        $level = $this->input->post('level');
        $kelas = $this->input->post('kelas');
        $jurusan = $this->input->post('jurusan');
        $sesi = $this->input->post('sesi');
        $password = $this->input->post('password');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = [

                'nama' => form_error('nama')

            ];
            echo json_encode($data);
        } else {
            $where = ['id_siswa' => $id];
            if ($password == '') {
                $data = [
                    'no_hp' => $nohp,
                    'nis' => $nis,
                    'nama' => $nama,
                    'level' => $level,
                    'kelas' => $kelas,
                    'jurusan' => $jurusan,
                    'sesi' => $sesi,
                    'status' => 1
                ];
            } else {
                $data = [
                    'no_hp' => $nohp,
                    'nis' => $nis,
                    'nama' => $nama,
                    'level' => $level,
                    'kelas' => $kelas,
                    'jurusan' => $jurusan,
                    'sesi' => $sesi,
                    'status' => 1,
                    'password' => $password
                ];
            }
            $this->sm->ubahdata('siswa', $data, $where);
            echo json_encode('sukses');
        }
    }
    public function hapusdata()
    {
        $id = $this->input->post('id');
        $where = [
            'id_siswa' => $id
        ];
        $this->sm->deletedata('siswa', $where);
        echo json_encode('ok');
    }
    public function ambilid()
    {
        $id = $this->input->post('id');
        $where = [
            'id_siswa' => $id
        ];
        $datasiswa = $this->sm->ambilid('siswa', $where)->result();
        echo json_encode($datasiswa);
    }
    function import_siswa()
    {
        if (isset($_FILES["file"]["name"])) {
            $this->db->query('truncate siswa');
            $path = $_FILES["file"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
                for ($row = 2; $row <= $highestRow; $row++) {
                    $nis = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $nama = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $level = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $kelas = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $jur = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $sesi = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $hp = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $pass = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                    $data[] = array(
                        'nis'   => $nis,
                        'nama'    => $nama,
                        'sesi'  => $sesi,
                        'level'  => $level,
                        'kelas'   => $kelas,
                        'jurusan' => $jur,
                        'no_hp' => $hp,
                        'password' => $pass,
                        'foto' => 'default.png'
                    );
                }
            }
            $this->db->insert_batch('siswa', $data);
            echo 'Data Imported successfully';
        }
    }
    public function kelas($kelas = null)

    {
        $siswa = $this->db->get_where('siswa', ['kelas' => $kelas])->result_array();
        $data = [
            'isi' => 'Siswa/v_siswa_walas',
            'siswa' => $siswa,
            'kelas' => $kelas
        ];
        $this->template->candy($data);
    }
    public function editsiswabinaan()
    {
        $id = $this->input->post('id');
        $nohp = $this->input->post('nohp');
        $nama = $this->input->post('nama');
        $status = $this->input->post('status');
        $tunggakan = $this->input->post('tunggakan');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'nama' => form_error('nama')
            ];
            echo json_encode($data);
        } else {
            $where = ['id_siswa' => $id];
            $data = [
                'no_hp' => $nohp,
                'nama' => $nama,
                'status' => $status,
                'tunggakan' => $tunggakan
            ];

            $this->sm->ubahdata('siswa', $data, $where);
            echo json_encode('sukses');
        }
    }
}
