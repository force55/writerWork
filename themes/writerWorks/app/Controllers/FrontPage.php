<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function uslugiHome() {
        $field = get_field('uslugi_home');
        $returnArray = array();

        foreach ($field as $usluga):
        $uslugaObject = array();

        $uslugaObject['img'] =  get_the_post_thumbnail_url($usluga->ID);
        $uslugaObject['title'] =  $usluga->post_title;
        $uslugaObject['link'] = get_permalink($usluga->ID);
        $uslugaObject['price'] = get_field('price',$usluga->ID);
        $uslugaObject['id'] = $usluga->ID;

        $returnArray[] = (object)$uslugaObject;

        endforeach;

        return $returnArray;
    }

    public function link_to_archive_page(){
        return get_post_type_archive_link('uslugi');
    }

    public function how_we_works() {
        $field = get_field('content_second_block_third_section');
        $returnArray = array();

        foreach ($field as $block):
            $object = array();

            $object['title'] = $block['title'];
            $object['description'] = $block['description'];

            $returnArray[] = (object) $object;

        endforeach;

        return $returnArray;
    }

    public function why_us() {
        $field = get_field('content_fourth_section');
        $returnArray = array();

        foreach ($field as $block):
            $object = array();

            $object['img'] = $block['image'];
            $object['title'] = $block['title'];
            $object['description'] = $block['description'];

            $returnArray[] = (object) $object;

        endforeach;

        return $returnArray;
    }

    public function what_me_gift() {
        $field = get_field('content_fifth_section');
        $returnArray = array();

        foreach ($field as $block):
            $object = array();

            $object['img'] = $block['image'];
            $object['title'] = $block['title'];
            $object['description'] = $block['description'];

            $returnArray[] = (object) $object;

        endforeach;

        return $returnArray;
    }

    public function reviews_home() {
        $field = get_field('reviews_home');
        $returnArray = array();

        foreach ($field as $img):
            $object = array();

            $object['url'] = $img['url'];
            $object['name'] = $img['name'];

            $returnArray[] = (object) $object;

        endforeach;

        return $returnArray;
    }

    public function universitets_home() {
        $field = get_field('unversitets');
        $returnArray = array();

        foreach ($field as $block):
            $object = array();

            $object['img'] = $block['image_univer'];
            $object['description'] = $block['description'];

            $returnArray[] = (object) $object;

        endforeach;

        return $returnArray;
    }
}
