//		<script type="text/javascript">

			jQuery(document).ready(function() {

				jQuery("#demovalidation").validationEngine({

					prettySelect : true,

					useSuffix: "_chzn",

				});

				$("#country").chosen({

					allow_single_deselect : true

				});

			  // Example Overlay form

			  $(".on_load").live('click',function(){	

				  $('body').append('<div id="overlay"></div>');

				  $('#overlay').css('opacity',0.4).fadeIn(400);

				  var activeLoad = $(this).attr("name");		

				  var titleTabs = $(this).attr("title");		

				  $("ul.tabs li").hide();		

						  $('ul.tabs li').each(function(index) {

								  var activeTab = $('ul.tabs li:eq('+index+')').find("a").attr("href")			

								  if(activeTab==activeLoad){

									  $("ul.tabs ").append('<li class=active><a href="'+activeLoad+'" class=" prev on_prev "  id="on_prev_pro" name="'+activeLoad+'" >'+titleTabs+'</a></li>');

									  $("ul.tabs li:last").fadeIn();	

									  }

						  });

				  $('.widget-content').css({'position':'relative','z-index':'1001'});

				  $(".load_page").hide();

				  $('.show_add').show();

			   });

			  $(".on_prev").live('click',function(){	 

					$("ul.tabs li:last").remove();					 

					$("ul.tabs li").fadeIn();

					var pageLoad = $(this).attr("rel");	

					var activeLoad = $(this).attr("name");		

					  $(".show_add, .show_edit").hide();		

					  $(".show_edit").html('').hide();		

						  $(activeLoad).fadeIn();	

								  $(' .load_page').fadeIn(400,function(){   

										 $('#overlay').fadeOut(function(){

												   $('.widget-content').delay(500).css({'z-index':'','box-shadow':'','-moz-box-shadow':'','-webkit-box-shadow':''});

										  }); 

							  }); 

					ResetForm();

				   });	

			});

//		</script>
