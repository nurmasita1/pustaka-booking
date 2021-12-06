<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller{
    
    public function index(){
        $data['judul'] = "RUANG LINGKUP BIOLOGI";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }
    public function profil(){
        $data['judul'] = "NURMASITA ANDINI 19200953";
        $this->load->view('v_header',$data);
        $this->load->view('v_profil',$data);
        $this->load->view('v_footer',$data);
    }
    public function about(){
        $data['judul'] = "ABOUT PAGE";
        $this->load->view('v_header',$data);
        $this->load->view('v_about',$data);
        $this->load->view('v_footer',$data);
    }
}