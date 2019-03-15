<?php /* Template Name: Login Pgae */ 
    get_header();
?>

<!--Start Member Section-->
<section id="memberSection">
    <div class="col-lg-12">
        <div class="row justify-content-center mt-4">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 col-12 text-center">
            <h2><?php echo get_the_title(); ?></h2>
            </div>
        </div>
        <div class="row justify-content-center" dir="rtl">
            <div class="col-lg-8 slider-bg" >
                <?php the_post(); the_content(); ?>
            </div>
        </div>
    </div>
</section>
<!--End Member Section-->

<?php include('inc/scripts.php'); ?>
<?php wp_footer(); ?>
</body>
</html>