<?php 
$icon = get_field('takn');

$title = get_field('tite');

if(!isset($icon)){
    $icon = 'frigg';
} 
?>

<a class="jt-card" href="<?php the_permalink(); ?>">
    <div class="thulaImgContainer">
        <?php echo get_template_part('/template-parts/psp/'. $icon);  ?>
    </div>
    <h2><?php the_field('title'); ?></h2>
</a>