<?php

class Blog_model extends CI_Model
{
    public function getBlogs()
    {
        $blogs = file_get_contents('sample_blog_data.json');
        $blogs = json_decode($blogs);

        //add id
        foreach ($blogs as $key => $value) {
            $value->id = $key;
        };

        return $blogs;
    }

    public function getBlogByID($id)
    {
        $blogs = file_get_contents('sample_blog_data.json');
        $blogs = json_decode($blogs);
        if( array_key_exists($id, $blogs) ){
            return $blogs[$id];
        }else{
            return array();
        }
    }

    public function getBlogByCategory($category)
    {
        $blogs = file_get_contents('sample_blog_data.json');
        $blogs = json_decode($blogs);
        $filtered_blogs = array();
        foreach ($blogs as $key => $value) {
            if(strtolower($value->category) == strtolower($category)){
                $value->id = $key;
                array_push($filtered_blogs, $value);
            }
        }
        return $filtered_blogs;
    }

}