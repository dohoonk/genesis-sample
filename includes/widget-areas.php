<?php
/**
*Register widget areas
*
*@package   genesis-sample
*@author    Tony Kim
*@link      http://www.tonykim.tech/
*@license   GPL-2.0+
*/

// Register front page widget areas
genesis_register_sidebar( array(
  'id'          =>  'second-menu',
  'name'        => __( 'Second Menu', 'genesis-sample' ),
  'description' => __( 'This is a home widget area that will show on the front page', 'genesis-sample'),
  ) );
genesis_register_sidebar( array(
  'id'          =>  'home-description',
  'name'        => __( 'Home Description', 'genesis-sample' ),
  'description' => __( 'This is where you can put in about us information', 'genesis-sample'),
  ) );
genesis_register_sidebar( array(
  'id'          =>  'call-to-action',
  'name'        => __( 'Call to Action', 'genesis-sample' ),
  'description' => __( 'This is a call to action widget area that will show on the front page', 'genesis-sample'),
  ) );
  genesis_register_sidebar( array(
    'id'          =>  'before-footer-menu',
    'name'        => __( 'Before Footer Menu', 'genesis-sample' ),
    'description' => __( 'This is a before footer widget area that will show on the front page', 'genesis-sample'),
    ) );
