<?php
class Matakuliah extends CI_Controller
{

    public function index()

    {
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()

    {
        $this->form_validation->set_rules('kode', 'kode matakuliah', 'trim|required|min_length[3]|numeric',
        array(
            'required'      => '%s. Wajib diisi',
            'min_length'      => '%s. Minimal 3 karakter',
            'numeric'      => '%s. Diisi angka'

    ));
        $this->form_validation->set_rules('nama', 'nama matakuliah', 'required|alpha',
        array(
            'required'      => '%s. Wajib diisi',
            'alpha'      => '%s. Diisi huruf'
            
    ));
        $this->form_validation->set_rules('sks', 'sks', 'required',
        array(
            'required'      => '%s. Wajib dipilih'
    ));


        if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('view-form-matakuliah');
                }
                else
                {
                    $data = [
                        'kode' => $this->input->post('kode'),
                        'nama' => $this->input->post('nama'),
                        'sks' => $this->input->post('sks')
                    ];
            
                    $this->load->view('view-data-matakuliah',$data);
                }
       
    }
}