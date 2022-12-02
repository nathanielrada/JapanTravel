<?php

class Places_model extends CI_Model
{
    public function getPlaces()
    {
        $place = file_get_contents('sample_place_data.json');
        $place = json_decode($place);

        //add id
        foreach ($place as $key => $value) {
            $value->id = $key;
        };

        return $place;
    }

}