<?php


namespace App\Controllers;


use Sober\Controller\Controller;

class TemplateReviews extends Controller {

    public function comments_real(){
        $page_comment = get_field('страница_отзывов','options');

        $args = array(
          'post_id' => $page_comment->ID
        );

        $comments = get_comments($args);

        $returnArray  = array();

        foreach ($comments as $comment){
            $object = array();

            $date = date("d.m.Y",strtotime($comment->comment_date));

            $object['name'] = $comment->comment_author;
            $object['date'] = $date;
            $object['content'] = $comment->comment_content;

            $returnArray[] = (object)$object;
        }

        return $returnArray;
    }

    public function reviews_photo() {
        $field = get_field('photo_reviews');
        $returnArray = array();

        foreach ($field['reviews_home']as $img):
            $object = array();

            $object['url'] = $img['url'];
            $object['name'] = $img['name'];

            $returnArray[] = (object) $object;

        endforeach;

        return $returnArray;

//        return $field;
    }

}
