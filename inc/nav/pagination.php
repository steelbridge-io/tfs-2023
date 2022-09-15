<?php
// Adds custom navigation
function polls_the_post_navigation($args = array())
{
    $args = wp_parse_args(
        $args,
        array(
            'prev_text' => '<i class="fas fa-chevron-left">&nbsp;</i>&nbsp; %title',
            'next_text' => '%title &nbsp;<i class="fas fa-chevron-right">&nbsp;</i>',
            'in_same_term' => true,
            'excluded_terms' => '',
            'taxonomy' => 'travelblog-category',
            'screen_reader_text' => __('Post navigation'),
        )
    );

    $navigation = '';

    $previous = get_previous_post_link(
        '<div class="polls nav-previous">%link</div>',
        $args['prev_text'],
        $args['in_same_term'],
        $args['excluded_terms'],
        $args['taxonomy']
    );

    $next = get_next_post_link(
        '<div class="polls nav-next">%link</div>',
        $args['next_text'],
        $args['in_same_term'],
        $args['excluded_terms'],
        $args['taxonomy']
    );

    // Only add markup if there's somewhere to navigate to.
    if ($previous || $next) {
        $navigation = _navigation_markup($previous . $next, 'post-navigation', $args['screen_reader_text']);
    }

    return $navigation;

}

function basic_the_post_navigation($args = array())
{
    $args = wp_parse_args(
        $args,
        array(
            'prev_text' => '%title',
            'next_text' => '%title',
            'in_same_term' => false,
            'excluded_terms' => '',
            'taxonomy' => 'category',
            'screen_reader_text' => __('Post navigation'),
        )
    );

    $navigation = '';

    $previous = get_previous_post_link(
        '<div class="nav-previous">%link</div>',
        $args['prev_text'],
        $args['in_same_term'],
        $args['excluded_terms'],
        $args['taxonomy']
    );

    $next = get_next_post_link(
        '<div class="nav-next">%link</div>',
        $args['next_text'],
        $args['in_same_term'],
        $args['excluded_terms'],
        $args['taxonomy']
    );

    // Only add markup if there's somewhere to navigate to.
    if ($previous || $next) {
        $navigation = _navigation_markup($previous . $next, 'post-navigation', $args['screen_reader_text']);
    }

    return $navigation;

}
