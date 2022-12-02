<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';

class Blog extends CI_Controller
{

    public function __construct()
    {
            parent::__construct();
            $this->load->model('Blog_model');
            $this->load->helper('template_helper');
    }

    public function index($blog_id)
    {
        //get blog content
        $page_data['blog'] = $this->Blog_model->getBlogByID($blog_id);

        $this->load->view('blog',$page_data);
    }

    public function list($category = null)
    {
        $page_data['category'] = $category;

        //get blog content
        if($category){
            $page_data['blogs'] = $this->Blog_model->getBlogByCategory($category);
        }else{
            $page_data['blogs'] = $this->Blog_model->getBlogs();
        }

        $this->load->helper('template_helper');
        $this->load->view('blog_list',$page_data);
    }

}
