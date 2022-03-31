<?php
/**
 * Template for Case Study Style Four
 *
 * @package Radiantthemes
 */

$output  = '<div class="rt-case-study-box-filter element-four filter-style-' . esc_attr( $settings['case_study_filter_style'] ) . ' text-' . esc_attr( $settings['case_study_filter_alignment'] ) . ' ' . esc_attr( $hidden_filter ) . '">';
$output .= '<button class="matchHeight current-menu-item" data-filter="*"><span>All Groups</span></button>';

$taxonomy     = 'case-study-category';
$orderby      = 'name';
$show_count   = 0;     // 1 for yes, 0 for no
$pad_counts   = 0;     // 1 for yes, 0 for no
$hierarchical = 1;     // 1 for yes, 0 for no
$title        = '';
$empty        = 1;
$depth        = 1;

$args = array(
	'taxonomy'     => $taxonomy,
	'orderby'      => $orderby,
	'show_count'   => $show_count,
	'pad_counts'   => $pad_counts,
	'hierarchical' => $hierarchical,
	'title_li'     => $title,
	'hide_empty'   => $empty,
	'depth'        => $depth,
);
$cats = get_categories( $args );

foreach ( $cats as $cat ) {
	$term_id    = $cat->term_id;
	$ptype_name = $cat->name;
	$ptype_des  = $cat->description;
	$ptype_slug = $cat->slug;
	$term_link  = get_term_link( $cat );

	$output .= '<button class="matchHeight" data-filter=".';
	$output .= $ptype_slug;
	$output .= '"><span>';
	$output .= $ptype_name;
	$output .= '</span></button>';
}

$output .= '</div>';


$output .= '<div class="rt-case-study-box element-four row">';
// WP_Query arguments.
global $wp_query;

$no_of_case_studies = ( $settings['no_of_case_studies'] ? $settings['no_of_case_studies'] : -1 );

$args     = array(
	'post_type'      => 'case-studies',
	'posts_per_page' => esc_attr( $no_of_case_studies ),
	'orderby'        => esc_attr( $settings['case_study_looping_order'] ),
	'order'          => esc_attr( $settings['case_study_looping_sort'] ),
);
$my_query = null;
$my_query = new WP_Query( $args );
if ( $my_query->have_posts() ) {
	while ( $my_query->have_posts() ) :
		$my_query->the_post();
		$terms = get_the_terms( get_the_ID(), 'case-study-category' );
		$output .= '<div class="rt-case-study-box-item ';
		if ( ! empty( $terms ) ) {
			foreach ( $terms as $term ) {
				$output .= $term->slug . ' ';
				$ptype_name = $term->name;
			}
		}
		$output .= $case_study_item_class . '" style="padding:' . esc_attr( $spacing_value ) . 'px;">';
		
		
		 $output .='<div class="holder">';
                  
                     $output .='<div class="pic">';
                        $output .='<img src="' . get_the_post_thumbnail_url( get_the_ID(), 'full' ) . '" alt="" data-no-retina="" >';
                        $output .='<a class="placeholder" href="' . get_the_permalink() . '"></a>';
                     $output .='</div>';
                  

                   
                     $output .='<div class="data matchHeight">';
                        $output .='<span class="date">' . get_the_date() . ' / '.$ptype_name.'</span>';
						$content = get_the_content(); 
                        $output .='<h3 class="title"><a href="' . get_the_permalink() . '">'.substr(get_the_excerpt(), 0,75).'...</a></h3>';
                       
                        
                     $output .='</div>';
                
               $output .='</div>';
			   
		
            
               
            $output .='</div>';
			endwhile;
}
         $output .='</div>';


