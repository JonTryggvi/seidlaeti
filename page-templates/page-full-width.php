<?php
/*
Template Name: Full Width
 */
get_header();
?>


<div class="main-wrap full-width wrapper" role="main">

<?php do_action('foundationpress_before_content');?>
<h1>Seiðlæti</h1>
<h2>Þagnarþulur</h2>
<div class="forflex">
  <div class="playcontainer show-for-large">
    <iframe name="full" style="width:100%;height:520px;border:0px;" src="//widget.cdbaby.com/a1ba28ff-b6f8-4a5f-a420-32c2b8f9e8e7/full/light/transparent"></iframe>
  </div>
  <div class="playcontainer show-for-small hide-for-large">
    <div style="max-width:600px;max-height:785px;min-width:300px;"><div style="position: relative;height: 0;overflow: hidden;padding-bottom:100%; padding-top:200px;"><iframe name="album" style="position:absolute;top:0px;left:0px;width:100%;height:100%;border:0px;" src="//widget.cdbaby.com/81ec1459-6b18-4fef-91cd-ca87665d7ee8/album/light/transparent"></iframe></div></div>
  </div>

</div>
 <!-- <div class="temp-front">
	 <p> This site is under construction, please contact us for information</p>
	 <a href="mailto:seidlaeti@seidlaeti.com">seidlaeti@seidlaeti.com</a>
 </div> -->

<?php do_action('foundationpress_after_content');?>

</div>

<?php get_footer();
