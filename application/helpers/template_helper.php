<?php

    //returns the header page view
    function header_template()
    {
        $ci =& get_instance();
        $ci->load->view('includes/header');
    }

    //returns the footer page view
    function footer_template($includes=array())
    {
        $ci =& get_instance();
        $page_data['includes'] = $includes;

        $ci->load->model('Places_model');;
        $page_data['places'] = $ci->Places_model->getPlaces();

        $ci->load->view('includes/footer',$page_data);
    }

?>