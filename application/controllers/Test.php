<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';

class Test extends CI_Controller
{

    public function generateTestData($json_output = false)
    {
        $testData = array(
            array(
                'title' => 'Tokyo Imperial Palace',
                'category' => 'Tokyo',
                'content' => 'Deserunt elit in in laborum eiusmod proident dolore anim reprehenderit minim ut sed elit id sunt aute amet consectetur sed dolore sed magna amet irure minim amet quis mollit dolore ullamco consectetur fugiat dolor labore voluptate pariatur et velit elit minim tempor exercitation tempor ut amet in laborum eu nulla in aliqua ut irure cupidatat dolor in ut esse ut enim in minim consequat nisi quis sit laboris voluptate occaecat ut cillum sed nulla dolore reprehenderit sed proident culpa excepteur sint veniam cupidatat aliquip amet occaecat sed occaecat in non adipisicing non laborum in ut voluptate pariatur ullamco aliqua occaecat consectetur velit consectetur nostrud in ea laboris consequat labore non quis ea laborum magna ullamco adipisicing esse voluptate quis irure veniam dolor culpa amet ut amet id esse id sit sunt velit ullamco ut ut enim aliquip nulla ut deserunt aliqua officia dolor cillum ut ut minim qui nulla irure nisi duis commodo voluptate dolor veniam in aliqua dolore et ea et aute excepteur anim fugiat sunt qui eu excepteur in commodo magna ut aliquip excepteur mollit dolore quis sunt ut dolor in.',
                'image' => '1.jpg',
                'avatar' => '1.png',
                'author' => 'John Doe',
                'date_posted' => 'November 28, 2023'
            ),
            array(
                'title' => 'Tokyo Skytree',
                'category' => 'Tokyo',
                'content' => 'Deserunt elit in in laborum eiusmod proident dolore anim reprehenderit minim ut sed elit id sunt aute amet consectetur sed dolore sed magna amet irure minim amet quis mollit dolore ullamco consectetur fugiat dolor labore voluptate pariatur et velit elit minim tempor exercitation tempor ut amet in laborum eu nulla in aliqua ut irure cupidatat dolor in ut esse ut enim in minim consequat nisi quis sit laboris voluptate occaecat ut cillum sed nulla dolore reprehenderit sed proident culpa excepteur sint veniam cupidatat aliquip amet occaecat sed occaecat in non adipisicing non laborum in ut voluptate pariatur ullamco aliqua occaecat consectetur velit consectetur nostrud in ea laboris consequat labore non quis ea laborum magna ullamco adipisicing esse voluptate quis irure veniam dolor culpa amet ut amet id esse id sit sunt velit ullamco ut ut enim aliquip nulla ut deserunt aliqua officia dolor cillum ut ut minim qui nulla irure nisi duis commodo voluptate dolor veniam in aliqua dolore et ea et aute excepteur anim fugiat sunt qui eu excepteur in commodo magna ut aliquip excepteur mollit dolore quis sunt ut dolor in.',
                'image' => '2.jpg',
                'avatar' => '1.png',
                'author' => 'John Doe',
                'date_posted' => 'November 28, 2023'
            ),
            array(
                'title' => 'Meiji Shrine',
                'category' => 'Tokyo',
                'content' => 'Deserunt elit in in laborum eiusmod proident dolore anim reprehenderit minim ut sed elit id sunt aute amet consectetur sed dolore sed magna amet irure minim amet quis mollit dolore ullamco consectetur fugiat dolor labore voluptate pariatur et velit elit minim tempor exercitation tempor ut amet in laborum eu nulla in aliqua ut irure cupidatat dolor in ut esse ut enim in minim consequat nisi quis sit laboris voluptate occaecat ut cillum sed nulla dolore reprehenderit sed proident culpa excepteur sint veniam cupidatat aliquip amet occaecat sed occaecat in non adipisicing non laborum in ut voluptate pariatur ullamco aliqua occaecat consectetur velit consectetur nostrud in ea laboris consequat labore non quis ea laborum magna ullamco adipisicing esse voluptate quis irure veniam dolor culpa amet ut amet id esse id sit sunt velit ullamco ut ut enim aliquip nulla ut deserunt aliqua officia dolor cillum ut ut minim qui nulla irure nisi duis commodo voluptate dolor veniam in aliqua dolore et ea et aute excepteur anim fugiat sunt qui eu excepteur in commodo magna ut aliquip excepteur mollit dolore quis sunt ut dolor in.',
                'image' => '3.jpg',
                'avatar' => '1.png',
                'author' => 'John Doe',
                'date_posted' => 'November 28, 2023'
            ),
            array(
                'title' => 'Hakkeijima Sea Paradise',
                'category' => 'Yokohama',
                'content' => 'Deserunt elit in in laborum eiusmod proident dolore anim reprehenderit minim ut sed elit id sunt aute amet consectetur sed dolore sed magna amet irure minim amet quis mollit dolore ullamco consectetur fugiat dolor labore voluptate pariatur et velit elit minim tempor exercitation tempor ut amet in laborum eu nulla in aliqua ut irure cupidatat dolor in ut esse ut enim in minim consequat nisi quis sit laboris voluptate occaecat ut cillum sed nulla dolore reprehenderit sed proident culpa excepteur sint veniam cupidatat aliquip amet occaecat sed occaecat in non adipisicing non laborum in ut voluptate pariatur ullamco aliqua occaecat consectetur velit consectetur nostrud in ea laboris consequat labore non quis ea laborum magna ullamco adipisicing esse voluptate quis irure veniam dolor culpa amet ut amet id esse id sit sunt velit ullamco ut ut enim aliquip nulla ut deserunt aliqua officia dolor cillum ut ut minim qui nulla irure nisi duis commodo voluptate dolor veniam in aliqua dolore et ea et aute excepteur anim fugiat sunt qui eu excepteur in commodo magna ut aliquip excepteur mollit dolore quis sunt ut dolor in.',
                'image' => '4.jpg',
                'avatar' => '1.png',
                'author' => 'John Doe',
                'date_posted' => 'November 28, 2023'
            ),
            array(
                'title' => 'Ramen trip in Yokohama',
                'category' => 'Yokohama',
                'content' => 'Deserunt elit in in laborum eiusmod proident dolore anim reprehenderit minim ut sed elit id sunt aute amet consectetur sed dolore sed magna amet irure minim amet quis mollit dolore ullamco consectetur fugiat dolor labore voluptate pariatur et velit elit minim tempor exercitation tempor ut amet in laborum eu nulla in aliqua ut irure cupidatat dolor in ut esse ut enim in minim consequat nisi quis sit laboris voluptate occaecat ut cillum sed nulla dolore reprehenderit sed proident culpa excepteur sint veniam cupidatat aliquip amet occaecat sed occaecat in non adipisicing non laborum in ut voluptate pariatur ullamco aliqua occaecat consectetur velit consectetur nostrud in ea laboris consequat labore non quis ea laborum magna ullamco adipisicing esse voluptate quis irure veniam dolor culpa amet ut amet id esse id sit sunt velit ullamco ut ut enim aliquip nulla ut deserunt aliqua officia dolor cillum ut ut minim qui nulla irure nisi duis commodo voluptate dolor veniam in aliqua dolore et ea et aute excepteur anim fugiat sunt qui eu excepteur in commodo magna ut aliquip excepteur mollit dolore quis sunt ut dolor in.',
                'image' => '5.jpg',
                'avatar' => '1.png',
                'author' => 'John Doe',
                'date_posted' => 'November 28, 2023'
            )
        );
        if($json_output){
            $testData = json_encode($testData);
            echo $testData;

            $myfile = fopen("sample_blog_data.json", "w") or die("Unable to open file!");
            fwrite($myfile, $testData);
            fclose($myfile);

        }else{
            echo "testData";
            echo "<pre>";
            print_r($testData);
            echo "</pre>";
        }
    }

    public function generateTestPlaceData($json_output = false)
    {

        $testData = array(
            array(
                'name' => 'Tokyo',
                'lat' => '35.5062659',
                'long' => '138.6459761',
                'description' => 'Tokyo is the capital and largest city of Japan located on the island of Honshu in the region of kanto.'
            ),
            array(
                'name' => 'Yokohama',
                'lat' => '35.444991',
                'long' => '139.636768',
                'description' => 'Yokohama is a Japanese city in Kanagawa Prefecture on the island of Honshū. Yokohama is the capital of Kanagawa Prefecture in the Kantō region.'
            ),
            array(
                'name' => 'Kyoto',
                'lat' => '35.021041',
                'long' => '135.7556075',
                'description' => 'Kyoto is a city in Japan. This city was the capital of Japan from 794 until 1868. Kyoto is a major city in the Kansai region of Japan. Its population is 1.5 million people.'
            ),
            array(
                'name' => 'Osaka',
                'lat' => '34.6937569',
                'long' => '135.5014539',
                'description' => 'Osaka is the capital city of Osaka Prefecture which faces Osaka Bay and the Seto Inland Sea. Osaka is in the Kansai region.'
            ),
            array(
                'name' => 'Sapporo',
                'lat' => '43.061936',
                'long' => '141.3542924',
                'description' => "Sapporo is the capital city of Hokkaidō Prefecture in Japan. The port city is on the southwest part of the island of Hokkaidō and it is the island's largest city."
            ),
            array(
                'name' => 'Nagoya',
                'lat' => '35.1851045',
                'long' => '136.8998438',
                'description' => 'Nagoya is one of the largest cities in Japan, with over 2 and a quarter million people in 2010.'
            )
        );

        if($json_output){
            $testData = json_encode($testData);
            echo $testData;

            $myfile = fopen("sample_place_data.json", "w") or die("Unable to open file!");
            fwrite($myfile, $testData);
            fclose($myfile);

        }else{
            echo "testData";
            echo "<pre>";
            print_r($testData);
            echo "</pre>";
        }
    }

}
