<?php
/**
 * Template Name: Home page
 *
 * @package     : WordPress
 * @subpackage  : Twenty_Fifteen
 * @Description : The template for displaying the home page details
 * @Created At  : 19 June 2016
 * @Modified At :
 * @Created By  : Sathiyaraj
 * @Modified By :
 */
/** Header Section********** */
get_header('madico');
?>
<!-- content starts here -->
<div class="homepage-container">
    <div class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php
                /* To display the slider from the home&result slider section */
                $home_sliderList = array(
                    'posts_per_page' => -1,
                    'offset' => 0,
                    'category' => '',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'post_type' => 'home_slider',
                    'post_mime_type' => '',
                    'post_parent' => '',
                    'author' => '',
                    'post_status' => 'publish',
                    'suppress_filters' => true
                );
                $homeSlider = get_posts($home_sliderList);
                if ($homeSlider):
                    foreach ($homeSlider as $post) : setup_postdata($post);
                        $slider_img = get_post_meta($post->ID, 'wpcf-home-slider-image', false);
                        ?>
                        <div class="item"
                       style='background: url("<?php echo $slider_img[0]; ?>") no-repeat center center ;
                        -webkit-background-size: cover;
                        -moz-background-size: cover;
                        -o-background-size: cover;
                        background-size: cover;'>
                        </div>
                        <?php
                    endforeach;
                else:
                    ?>
                    <div class="item"
                         style='background: url("<?php echo get_template_directory_uri().'/images/homepage-banner.png' ?>") no-repeat center center ;
                        -webkit-background-size: cover;
                        -moz-background-size: cover;
                        -o-background-size: cover;
                        background-size: cover;'>
                        </div>
                    <?php
                endif;
                wp_reset_postdata();
                ?>
        </div>
        <div class="search-blk-container">
            <div class="search-blk">
                <div class="searchby">
                    <select class="Search_by" id="country">
                        <option value="">Search by...</option>
                        <option value="Location">Location</option>
                        <option value="ZipCode">Zip Code Range</option>
                    </select>
                </div>
                <div class="search-type">
                <form role="form" action="<?php echo home_url(); ?>/result-page" id="homeSearch" method="post">
                    <ul>
                        <li>
                            <select class="flim_type" id="filmType" name="flim_type">
                                <option value="0">Choose a Film Type...</option>
                                    <option value="automotive">Automotive</option>
                                    <option value="architectural">Architectural</option>
                                    <option value="safety_and_security">Safety and Security</option>
                            </select>
                        </li>
                        <li class="location">
                            <select name="StateFilm" class="stateFilm" id="stateIdFilm">
                                <option value="0">Choose a State or Province...</option>
                            </select>
                        </li>
                        <li class="location">
                            <select name="CityFilm" class="cityFilm" id="cityIdFilm">
                                <option value="0">Choose a City...</option>
                            </select>
                        </li>
                        <li class="zipcode">
                            <input type="text" class="zip_clear" id="zip_startvalue" name="zip_startvalue" placeholder="Zip Code Range Starting Value 33700">
                        </li>
                        <li class="zipcode">
                            <input type="text" class="zip_clear" name="zip_endvalue" id="zip_endvalue" placeholder="Zip Code Range Ending Value 33800 ">
                        </li>
                        <li class="last-blk">
                                    <div class="blue-btn">
                                        <button type="submit" class="button button_fsp"><span>Go</span></button>
                                    </div>
                        </li>
                    </ul>
                </form>

                </div>

            </div>
        </div>
    </div>
    <div class="bottom-slider">
        <div class="container">
            <div class="slider responsive">
                <?php
                /* To display the slider from the home&result slider section */
                $slider_list = array(
                    'posts_per_page' => -1,
                    'offset' => 0,
                    'category' => '',
                    'category_name' => 'home-brandslider',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'post_type' => 'footerslider',
                    'post_mime_type' => '',
                    'post_parent' => '',
                    'author' => '',
                    'post_status' => 'publish',
                    'suppress_filters' => true
                );
                $slider = get_posts($slider_list);
                if ($slider):
                    foreach ($slider as $post) : setup_postdata($post);
                        $slider_img = get_post_meta($post->ID, 'wpcf-slider-image', false);
                        ?>
                        <div>
                            <a href="<?php echo $post->ID; ?>" class="madico-slider-btn" data-toggle="modal" >
                                <img src="<?php echo $slider_img[0]; ?>"/>
                            </a>
                        </div>
                        <?php
                    endforeach;
                else:
                    echo '';
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <a href="javascript:void(0)" data-toggle="modal" class="rep_modal displayhidden">Click Me For A Modal</a>

    <div class="modal fade" id="myModal" tabindex="-1" tabindex="-1" data-replace="true">
    </div>
    <?php
    get_footer('madico');
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery(window).bind("pageshow", function() {
                jQuery('form').get(0).reset();
                jQuery('#country').val('');
                
            });
        });
    </script>