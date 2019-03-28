<?php
/*
$db = new Db;
$query = "SELECT * FROM dnt_settings WHERE `vendor_id` = '" . Vendor::getId() . "' ORDER BY `key` asc";

if($db->num_rows($query)>0){
   foreach($db->get_results($query) as $row){
	   var_dump($row['key'])	;		   
   }
   return $arr;
}


exit;
*/
$layout = Vendor::getLayout();
include "dnt-view/layouts/".$layout."/tpl_functions.php";
include "dnt-view/layouts/".$layout."/top.php"; 
?>
		
<!-- End Header -->
<?php /*get_slider($data, 303);*/ ?>


<style type="text/css">
.microslider-wrapper{
	background: url('<?php echo $data['article']['img'];?>') no-repeat center center fixed; 
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-position: 0px -150px;
}
</style>
<div class="microslider-wrapper">
	<div class="page-name-wrapper">
		<span class="page-name"><span class="name"><?php echo $data['meta_tree']['keys']['intro_name']['value']; ?></span></span>
	</div>
</div>
<div class="margin-bottom-60"></div>
<div class="container margin-bottom-40">
   <div class="row">
      <!-- Main Content -->
      <div class="col-md-9 main-content">
         <!-- Dynamic Item -->
         <div class="blog-grid margin-bottom-30">
            <h2 class="title-v4"><?php echo $data['meta_tree']['keys']['intro_name']['value']; ?></h2>
			
			<?php if($data['meta_tree']['keys']['intro_image']['show'] == 1){ ?>
				<img class="img-responsive" src="<?php echo Image::getFileImage($data['meta_tree']['keys']['intro_image']['value']);?>" style="padding: 15px;">
			<?php } ?>
			
            <div class="overflow-h margin-bottom-10 article-view">
            <?php echo $data['article']['perex'];?>
            <?php echo $data['meta_tree']['keys']['intro_content']['value'];?>
            </div>
         </div>
		 <a href="<?php echo Rest::getModulUrl("registracia"); ?>"><span class="btn-u"><?php echo Multylanguage::translate($data, "registracia", "translate");?></span></a>
      </div>
      <!-- Right Sidebar -->
      <div class="col-md-3">
		<?php col_right($data); ?>
      </div>
      <!-- End Right Sidebar -->
   </div>
</div>
<?php get_footer($data); ?>
<?php include "dnt-view/layouts/".$layout."/bottom.php"; ?>		
