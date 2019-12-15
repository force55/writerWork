<?php


namespace App\Controllers;


use Sober\Controller\Controller;

class ArchiveUslugi extends Controller {

    public function posts(){
        //get all terms from our taxonomy
        $terms = get_terms(
            array(
                'taxonomy'      => 'categories_uslugi',
                'hide_empty'    => false,
                'order'         => 'DESC'
            )
        );

        $returnArray = array();
        $counter = 1;
        if(!empty($terms)):
            foreach ($terms as $term) {

                $one_cat = array();

                $args = array(
                    'posts_per_page' => -1,
                    'post_type' => 'uslugi',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'categories_uslugi',
                            'field' => 'term_id',
                            'terms' => $term->term_id,
                        )
                    )
                );

                //get posts from each cat
                $posts_cat = get_posts($args);
                $posts = array();

                foreach ($posts_cat as $post):

                $object = array();

                $object['title'] = $post->post_title;
                $object['link'] = get_permalink($post->ID);
                $object['img'] =  get_the_post_thumbnail_url($post->ID);
                $object['price'] = get_field('price',$post->ID);
                $object['id'] = $post->ID;

                $posts[] = (object) $object;

                endforeach;

                $one_cat['title'] = $term->name;
                $one_cat['posts'] = $posts;
                if($counter % 2 == 0) {
                    $one_cat['class'] = 'with_bg';
                    $one_cat['img_bg'] = get_template_directory_uri().'/assets/images/bg_archive.png';
                 }
                else {
                    $one_cat['class'] = 'without_bg';
                    $one_cat['img_bg'] = '';
                }

                $returnArray[] = $one_cat;

                $counter++;

            }
        endif;

        return $returnArray;
    }
}
