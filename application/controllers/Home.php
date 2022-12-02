<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';

class Home extends CI_Controller
{
    public $places;

    public function __construct()
    {
            parent::__construct();
            $this->load->model('Places_model');
            $this->places = $this->Places_model->getPlaces();
    }

    public function index()
    {
        $this->load->model('Blog_model');

        //$page_data['places'] = $this->places;
        $page_data['places'] = $this->places;

        $page_data['featured_section'] = $this->getFeaturedSection();
        $page_data['map_spots_section'] = $this->getMapSpotsSection($page_data);


        $this->load->helper('template_helper');
        $this->load->view('home',$page_data);
    }

    public function getFeaturedSection()
    {
        $string = '';
        $featured_data = $this->Blog_model->getBlogs();

        //no featured data
        if(!$featured_data){
            return $string;
        }

        // if(count($featured_data < 3)){
        // }

        $featured_small = array();
        $featured_big = array();

        //get 3 random blogs
        $indexes = range(0,count($featured_data)-1);
        shuffle($indexes);
        $indexes = array_splice($indexes, 0, 3);
        $blog_data_array = array();
        foreach ($indexes as $key => $value) {
            $blog_data = $featured_data[$value];
            $blog_data = array(
                'id' => $value,
                'title' => $blog_data->title,
                'category' => $blog_data->category,
                'content' => $blog_data->content,
                'image' => $blog_data->image,
                'avatar' => $blog_data->avatar,
                'author' => $blog_data->author,
                'date_posted' => $blog_data->date_posted
            );
            array_push($blog_data_array, $blog_data);
        }

        $string .= $this->load->view('templates/featured', array('blog' => $blog_data_array), true);

        return $string;
    }

    public function getMapSpotsSection($data)
    {
        return $this->load->view('templates/map_spots',$data,true);
    }

    public function getPlacesWeatherData($place_id)
    {
        $api_key = $this->config->item('api_key')['openweathermap'];
        $ch = curl_init("https://api.openweathermap.org/data/2.5/weather?lat=".$this->places[$place_id]->lat."&lon=".$this->places[$place_id]->long."&appid=".$api_key."&units=metric");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        echo $result;
    }

    public function getPlacesData($place_id,$category=null,$category_limit=null)
    {
        //null from js becomes string "null".
        $category = $category == 'null' ? null : $category;
        $category_limit = $category_limit == 'null' ? null : $category_limit;

        $api_key = $this->config->item('api_key')['geoapify'];
        $url = 'https://api.geoapify.com/v2/place-details?lat='.$this->places[$place_id]->lat.'&lon='.$this->places[$place_id]->long.'&apiKey='.$api_key;
        if($category){
            $url = 'https://api.geoapify.com/v2/places?categories='.$category.'&filter=circle:'.$this->places[$place_id]->long.','.$this->places[$place_id]->lat.',2000&apiKey='.$api_key;
            if($category_limit){
                $url .= '&limit='.$category_limit;
            }
        }

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        echo $result;
    }
}
