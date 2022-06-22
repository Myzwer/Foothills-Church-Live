<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the FC Live Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage fc_live
 * @since 1.0.0
 */

get_header(); ?>


    <div class="bg-white">
        <div class="lg:max-w-6xl lg:text-center lg:mx-auto pt-10">
            <div class="grid grid-cols-12 m-5">
                <div class="col-span-12">
                    <div class="iframe">
                        <iframe class = "responsive-iframe" width="560" height="315" src="https://www.youtube.com/embed/G44xTr8D_bw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-span-12">
                    <h1 class = "uppercase text-4xl pt-10">welcome to the foothills church online experience!</h1>
                </div>
                <div class="col-span-12 text-center pt-24">

                </div>
            </div>
        </div>
    </div>

    <div id="stickyButton"></div>


<?php
get_footer();