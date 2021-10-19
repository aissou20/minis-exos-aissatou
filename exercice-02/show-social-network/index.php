<?php
/*
Plugin Name: Show social network
Description: Création d'un plugin permettant d'afficher une liste de réseaux sociaux via un shortcode.
Version: 1.0
Author: Aissatou
*/

function shortcode_social()
{
    $social_list = '<ul>
    <li> <a href=" https://facebook.com"> Facebook</a> </li>
    <li>  <a href="https://instagram.com"> Instagram </a></li>
    <li>  <a href=" https://www.linkedin.com"> Linkedin </a></li>
    <li>  <a href="https://github.com/honoagency"> Github </a></li>
</ul>';
    return $social_list;
}

add_shortcode('show_social_network', 'shortcode_social');