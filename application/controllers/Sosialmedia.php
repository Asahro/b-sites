<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Sosialmedia extends CI_Controller
{
    private $client;
    function __construct() {
        parent::__construct();  
        $this->load->library('facebook');
        $this->load->library('google');
    }

    //
    
    public function facebook(){
        $data = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,link,gender,locale,cover,picture');
        print_r($data);
    }

    // Array ( [id] => 105817133866690587935 [email] => ahmadsahro@gmail.com [verified_email] => 1 [name] => Ahmad Sahro [given_name] => Ahmad [family_name] => Sahro [link] => https://plus.google.com/105817133866690587935 [picture] => https://lh6.googleusercontent.com/-Sag5Rzfp8II/AAAAAAAAAAI/AAAAAAAAEsg/SF7Tk50zPKk/photo.jpg [gender] => male [locale] => id )

    public function google(){
        $this->google->getAuthenticate();
        $user = $this->google->getUserInfo();
        print_r($user);
    }

    

    public function privacy_police(){
        $this->load->view('web/privacy-police');
    }
}