<?php 
$icon = get_field('takn');

$title = get_field('title');
$thula = get_field('thula');
$chant = get_field('chant');
if(!isset($icon)){
    $icon = 'frigg';
} 
?>

<article>
    <h1><?php the_field('title'); ?></h1>
    <div class="thulaImgContainer" >
        <?php echo get_template_part('/template-parts/psp/' . $icon); ?>
    </div>
    <section class="chants-container" >
        <div class ="chant-container" >
        <?php echo $thula; ?>
        </div>
        <?php if($chant): ?>
             <div class ="chant-container" >
            <?php echo $chant; ?>
            </div>
        <?php endif; ?>
    </section>
</article>