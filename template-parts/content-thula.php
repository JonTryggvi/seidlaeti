<?php 
$icon = get_field('takn');

$title = get_field('title');

if(!isset($icon)){
    $icon = 'frigg';
} 
?>

<article>
    <h1><?php the_field('title'); ?></h1>
    <div class="thulaImgContainer" >
        <?php echo get_template_part('/template-parts/psp/' . $icon); ?>
    </div>
    <section>
        <?php the_field('thula'); ?>
    </section>
</article>