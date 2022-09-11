<?php get_header(); ?>

    <h1><?php the_title(); ?></h1>

    <?php $car = get_field('car_manufacturer') ?>
    <?php if($car){ ?>
        <h3><?php echo $car ?></h3>
    <?php } ?>
    
    <?php get_template_part('template-parts/section', 'automobile');?>

<?php get_footer(); ?>