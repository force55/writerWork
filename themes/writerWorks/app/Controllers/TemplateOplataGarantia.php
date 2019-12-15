<?php


namespace App\Controllers;


use Sober\Controller\Controller;

class TemplateOplataGarantia extends Controller {

    public function block_first_section() {
        $field = get_field('blocks_first_section_Oplata');
        $return = array();

        foreach ($field as $block):
            $object = array();

            $object['title'] = $block['title'];
            $object['description'] = $block['description'];

            $return[] = (object) $object;

        endforeach;

        return $return;

    }

    public function block_second_section() {
        $field = get_field('blocks_second_section_Oplata');
        $return = array();

        foreach ($field as $block):
            $object = array();

            $object['title'] = $block['title'];
            $object['description'] = $block['description'];

            $return[] = (object) $object;

        endforeach;

        return $return;

    }

    public function numbers_block() {
        $field = get_field('блок_с_цифрами');
        $return = array();

        foreach ($field as $block):
            $object = array();

            $object['title'] = $block['title'];
            $object['description'] = $block['description'];

            $return[] = (object) $object;

        endforeach;

        return $return;
    }

    public function questions_section() {
        $field = get_field('questions_Oplata');
        $return = array();

        foreach ($field as $block):
            $object = array();

            $object['title'] = $block['title'];
            $object['description'] = $block['description'];

            $return[] = (object) $object;

        endforeach;

        return $return;
    }
}
