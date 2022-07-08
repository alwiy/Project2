<?php
    class Komentar extends CI_Controller{
        public function index(){
            $this->load->model('komentar_model');
            $komentar = $this->komentar_model->getAll();
            $data['komentar'] = $komentar;

            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('komentar/index', $data);
            $this->load->view('layouts/footer');
        }   
        public function detail($id){
            // akses model mahasiswa
            $this->load->model('komentar_model');
            $komntr = $this->komentar_model->getById($id);
            $data['komntr'] = $komntr;
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('komentar/detail', $data);
            $this->load->view('layouts/footer');
        }
        public function form(){
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('komentar/form');
            $this->load->view('layouts/footer');
        }
        public function daftar(){
            $this->load->model('komentar_model', 'komen');

            $_nilai_rating_id = $this->input->post('nilai_rating_id');
            $_isi = $this->input->post('isi');
            
            //$row = $this->komen->komentar($_nilai_rating_id,$_isi);

            $_nilai_rating_id = $this->input->post('nilai_rating_id');
            $_isi = $this->input->post('isi');

            $data_komentar['nilai_rating_id'] = $nilai_rating_id;
            $data_komentar['isi'] = $_isi;

            $this->komentar->simpan($data_komentar);

            redirect('home','refresh');
        }
        public function save(){
            $this->load->model('komentar_model', 'komentar');

            $_tanggal = $this->input->post('tanggal');
            $_isi = $this->input->post('isi');
            $_users_id = $this->input->post('users_id');
            $_faskes_id = $this->input->post('faskes_id');
            $_nilai_rating_id = $this->input->post('nilai_rating_id');

            $data_komentar['tanggal'] = $_tanggal;
            $data_komentar['isi'] = $_isi;
            $data_komentar['users_id'] = $_users_id;
            $data_komentar['faskes_id'] = $_faskes_id;
            $data_komentar['nilai_rating_id'] = $_nilai_rating_id;



            if((!empty($_idedit))){ //update
                $data_komentar['id'] = $_idedit;
                $this->komentar->update($data_komentar);
            }else{
                //  data baru
                $this->komentar->simpan($data_komentar);
            }
            redirect('komentar','refresh');
        }
        public function edit($id){
            // akses model faskes   
           
            $this->load->model('komentar_model','komentar');
            $obj_komentar = $this->komentar->getById($id);
            $data['obj_komentar'] = $obj_komentar;
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('komentar/edit', $data);
            $this->load->view('layouts/footer');
        }
        public function delete($id){
            $this->load->model('komentar_model','komentar');
            // Mengecek data faskes berdasarkan id
            $data_komentar['id'] = $id;
            $this->komentar->delete($data_komentar);
            redirect('komentar','refresh');
        }
    }
?>  