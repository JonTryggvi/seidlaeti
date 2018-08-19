<?php 
$imgObj = get_field('takn');
$img = $imgObj['sizes']['medium'];
$fakeImg = 'https://cdn1.iconfinder.com/data/icons/runes-vikings/205/ProtectionRune-512.png';
$title = get_field('tite');

if(!isset($img)){
    $img = $fakeImg;
} 
?>

<article>
    <h1><?php the_field('title'); ?></h1>
    <div class="thulaImgContainer" style="background-image: url(<?php echo $img; ?>)" ></div>
    <section>
        <?php the_field('thula'); ?>
    </section>
</article>