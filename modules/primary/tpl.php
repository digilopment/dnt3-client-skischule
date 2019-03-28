<?php
$layout = Vendor::getLayout();
include "dnt-view/layouts/".$layout."/tpl_functions.php";
include "dnt-view/layouts/".$layout."/top.php"; 
?>
<?php get_slider($data, 303); ?>
<!-- End Header -->
<?php /*get_slider($data, 303);*/ ?>
<script  type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyAjpUqmtS9blsxsEUUgFN8HXjBSf2esdLI"></script>
<script>
	function initialize()
	{
	  var mapProp= {
		center:new google.maps.LatLng(47.3221006,12.7943083),
		zoom:17,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	  };
	  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
<style>
.carousel-inner>.item>a>img, .carousel-inner>.item>img{
    width: 100%;
	margin-bottom: 0px;
}

 .video_div{
    /*padding: 15px;*/
	}
	 .responsive-container { position: relative; padding-bottom: 56.25%; padding-top: 30px; height: 0; overflow: hidden; }
	 .responsive-container iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
	 
</style>
<?php 
$GALLERY = explode(",", $data['meta_tree']['keys']['galeria_1']['value']);
$PHOTOS = array();
foreach($GALLERY as $item){
	$PHOTOS[] = Image::getFileImage($item);
}
?>

<div class="container margin-bottom-40">
   <div class="row">
      <!-- Main Content -->
      <div class="col-md-9 main-content">
         <!-- Dynamic Item -->
         <div class="blog-grid margin-bottom-30">
            <h2 class="title-v4"><?php echo $data['article']['name'];?></h2>
            <div class="overflow-h margin-bottom-10 article-view">
               <!-- TEXT -->
               <h3 class="text-left"><?php echo $data['article']['name'];?></h3>
               <div class="row">
                  <?php if($data['meta_tree']['keys']['text_1']['show'] == 1){ ?>
                  <div class="col-xs-12 col-md-12 item">
                     <?php get_slider_carousel($data, "carousel"); ?>
                     <?php echo $data['meta_tree']['keys']['text_1']['value'] ?>
                  </div>
                  <?php } ?>
               </div>
               <?php if($data['meta_tree']['keys']['youtube_embed']['show'] == 1){ ?> 	
               <h3 class="text-left">Video</h3>
               <div class="row">
                  <div class="col-md-9 video_cont">
                     <div class="video_div">
                        <div class="responsive-container">
                           <iframe src="<?php echo $data['meta_tree']['keys']['youtube_embed']['value']; ?>"  allowfullscreen></iframe>
                        </div>
                     </div>
                  </div>
				  <div class="col-md-3">
					<a href="<?php echo Rest::getModulUrl("registracia"); ?>"><span class="btn-u"><?php echo Multylanguage::translate($data, "registracia", "translate");?></span></a>
				  </div>
               </div>
               <?php } ?>
               <div class="row">
                  <?php if($data['meta_tree']['keys']['text_2']['show'] == 1){ ?>
                  <div class="col-xs-12 col-md-12 item">
                        <?php echo $data['meta_tree']['keys']['text_2']['value'] ?>
                  </div>
                  <?php } ?>
               </div>
               <?php if($data['meta_tree']['keys']['mapa']['show'] == 1){ ?>
               <!-- MAP SECTION -->
               <h3 class="text-left"><?php echo $data['meta_tree']['keys']['mapa']['value'];?></h3>
               <div class="row mapa">
                  <div class="col-md-12">
                     <div id="googleMap" style="width:100%;height:400px;"></div>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </div>
      <!-- Right Sidebar -->
      <div class="col-md-3">
         <?php col_right($data); ?>
      </div>
      <!-- End Right Sidebar -->
   </div>
</div>
<?php 
$GALLERY = explode(",", $data['meta_tree']['keys']['galeria_1']['value']);
$pocet = count($GALLERY);
$index = rand(0, $pocet -1);
$PHOTOS = array();
if($pocet>0){
get_paralax(Image::getFileImage($GALLERY[$index]), $data['article']['name']); 
}?>
<?php get_footer($data); ?>
<?php include "dnt-view/layouts/".$layout."/bottom.php"; ?>		
