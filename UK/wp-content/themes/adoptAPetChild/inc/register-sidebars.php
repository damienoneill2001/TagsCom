<?php

/*
======================================================================================================
Register Sidebars
======================================================================================================
*/
register_sidebar(array(
    'id'            => 'rescues-sidebar',
    'name'          =>  __( 'Rescues Sidebar', 'understrap' ),
    'description'   =>  __( 'Used for the rescues page widget area', 'understrap' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));
register_sidebar(array(
    'id'            => 'dogs-sidebar',
    'name'          =>  __( 'Dogs List Sidebar', 'understrap' ),
    'description'   =>  __( 'Used for the Dogs page widget area', 'understrap' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));
register_sidebar(array(
    'id'            => 'cats-sidebar',
    'name'          =>  __( 'Cats List Sidebar', 'understrap' ),
    'description'   =>  __( 'Used for the Cats page widget area', 'understrap' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));
register_sidebar(array(
    'id'            => 'others-sidebar',
    'name'          =>  __( 'Other Pets Sidebar', 'understrap' ),
    'description'   =>  __( 'Used for the Other Pets page widget area', 'understrap' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));
register_sidebar( array(
            'name'          => __( 'Right Sidebar', 'understrap' ),
            'id'            => 'right-sidebar',
            'description'   => 'Right sidebar widget area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s white-block">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
register_sidebar(array(
    'id'            => 'footer-widget-1',
    'name'          =>  __( 'Footer Widget 1', 'understrap' ),
    'description'   =>  __( 'Used for footer widget area', 'understrap' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'id'            => 'footer-widget-2',
    'name'          =>  __( 'Footer Widget 2', 'understrap' ),
    'description'   =>  __( 'Used for footer widget area', 'understrap' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'id'            => 'footer-widget-3',
    'name'          =>  __( 'Footer Widget 3', 'understrap' ),
    'description'   =>  __( 'Used for footer widget area', 'understrap' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));
  register_sidebar(array(
    'id'            => 'footer-widget-4',
    'name'          =>  __( 'Footer Widget 4', 'understrap' ),
    'description'   =>  __( 'Used for footer widget area', 'understrap' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));
