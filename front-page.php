<?php
/**
 * Default Blog Template
 *
 */

get_header(); ?>

<div class="content-wrap index-content" role="main">
    <div class="row header">
       <div class="header-text-box">
           <h1 class="heading-primary">
              <span class="heading-primary-main">Europe</span>
              <span class="heading-primary-sub">where adventure awaits</span>
           </h1>
           <a href="#" class="btn btn-white btn-animated">Discover Our Tours</a>
       </div>
    </div>

    <div class="benfits-area">
        <div class="row">
            <h3 class="benefit-title">Exciting Tours Await You</h3>
        </div>
        <div class="row">
            <div class="benefit-points columns small-6">
                <div class="benefit-point-text">
                    <h4>FALL IN LOVE WITH EUROPE</h4>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus hic ipsa non iusto, dolorum ipsum veritatis vero enim illo, saepe dicta earum est libero mollitia eum pariatur aspernatur perspiciatis architecto.
                </div>
                <div class="benefit-point-text">
                    <h4>EXPERIENCE EUROPE LIKE YOU NEVER HAVE BEFORE</h4>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus hic ipsa non iusto, dolorum ipsum veritatis vero enim illo, saepe dicta earum est libero mollitia eum pariatur aspernatur perspiciatis architecto.
                </div>
            </div>
            <div class="columns small-6">
                <img class="benefit-img" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/nat-1-large.jpg">
            </div>
        </div>
    </div>
</div><!-- end content -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
