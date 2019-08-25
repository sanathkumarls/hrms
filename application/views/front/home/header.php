
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">



<?php

	$rolename=$this->session->userdata('rolename');
	$rolemodify=$this->session->userdata('rolemodify');
	$roleadd=$this->session->userdata('roleadd');
	$username=$this->session->userdata('username');
?>
	
	


<html xmlns="http://www.w3.org/1999/xhtml">

<head>



<meta http-equiv="Pragma" content="no-cache">

<meta http-equiv="expires" content="0">

<meta name="msapplication-tap-highlight" content="no" /> 

<title><?php echo SiteName?></title>
    <link rel="shortcut icon" href="<?php echo base_url()?>img/logo.png" />
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />

<meta http-equiv="Content-Language" content="en-us" />

<link rel="shortcut icon" href="" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/css/fonts.css" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/css/style.css" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/css/font-awesome.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/css/jquery.simplyscroll.css" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/css/jquerytour.css" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/css/jquery.jqplot.min.css" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/css/jquery.maxlength.css" />




<!--<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>-->

	<!--[if IE 9]>  

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/css/ie9.css">

<![endif]-->  



<!--[if IE 8]>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/css/ie8.css">

<![endif]-->  



<!--[if gte IE 9]>

  <style type="text/css">

    .gradient {

       filter: none;

    }

  </style>

<![endif]-->

<link rel="stylesheet" type="text/css"	href="<?php echo base_url();?>media/css/select2.css"/>

<link href="<?php echo base_url();?>media/jquery/css/cupertino/jquery-ui-1.8.16.custom.css" media="screen" rel="stylesheet" type="text/css" >

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/css/tablecss.css" />

<link href="<?php echo base_url();?>media/css/jquery.alert.css"	rel="stylesheet" type="text/css" />

<!--<link rel="stylesheet" href="css/demo.css"  type="text/css" >-->

   <!-- <link href="http://localhost/sentrifugo/public/media/css/jquery-ui-1.10.3.css" rel="stylesheet" type="text/css" /> -->

<style type='text/css'>

/* To hide search bar by default */

.ui-search-toolbar { display: none; }



/* Slim scroll bar */

.slimScrollDiv { border: 0; /* margin:10px; */ }

#content_scroll { padding-bottom : 10px !important;}



/* leaf element arrow*/

.childelement {	background : none !important;}

.dragableBox li a{cursor:move !important;}



.no_selection {

    -webkit-user-select: none; /* webkit (safari, chrome) browsers */

    -moz-user-select: none; /* mozilla browsers */

    -khtml-user-select: none; /* webkit (konqueror) browsers */

    -ms-user-select: none; /* IE10+ */

}

	
	
	
	
	
	
	/* scaffolding */
/* ----------- */

html {
  overflow-y: scroll;
  *overflow-x: hidden;
}

.container {
  max-width: 750px;
  margin: 0 auto;
  text-align: center;
}

.tt-menu,
.gist {
  text-align: left;
}

/* base styles */
/* ----------- */

html {
  font: normal normal normal 18px/1.2 "Helvetica Neue", Roboto, "Segoe UI", Calibri, sans-serif;
  color: #292f33;
}


a {
  color: #03739c;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

.table-of-contents li {
  display: inline-block;
  *display: inline;
  zoom: 1;
}

.table-of-contents li a {
  font-size: 16px;
  color: #999;
}

p + p {
  margin: 30px 0 0 0;
}

/* site theme */
/* ---------- */

.title {
  margin: 20px 0 0 0;
  font-size: 64px;
}

.example {
  padding: 30px 0;
}

.example-name {
  margin: 20px 0;
  font-size: 32px;
}

.demo {
  position: relative;
  *z-index: 1;
  margin: 50px 0;
}

.typeahead,
.tt-query,
.tt-hint {
	
 width : 306px;
  height: 20px;
  padding: -4px 12px;
 font-size: 15px; 
  line-height: 30px;
  border: 2px solid #ccc;
  -webkit-border-radius: 8px;
     -moz-border-radius: 8px;
          border-radius: 8px;
  outline: none;
	float: right;
}

.typeahead {
  background-color: #fff;
}

.typeahead:focus {
  border: 2px solid #0097cf;
}

.tt-query {
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
     -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}

.tt-hint {
  color: #999
}

.tt-menu {
  width: 400px;
  margin: 12px 0;
  padding: 8px 0px;
  background-color: #fff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-border-radius: 8px;
     -moz-border-radius: 8px;
          border-radius: 8px;
  -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
     -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
          box-shadow: 0 5px 10px rgba(0,0,0,.2);
}

.tt-suggestion {
  padding: 3px 20px;
  font-size: 18px;
  line-height: 24px;
}

.tt-suggestion:hover {
  cursor: pointer;
  color: #fff;
  background-color: #0097cf;
}

.tt-suggestion.tt-cursor {
  color: #fff;
  background-color: #0097cf;

}

.tt-suggestion p {
  margin: 0;
}

.gist {
  font-size: 14px;
}

/* example specific styles */
/* ----------------------- */

#custom-templates .empty-message {
  padding: 5px 10px;
 text-align: center;
}

#multiple-datasets .league-name {
  margin: 0 20px 5px 20px;
  padding: 3px 0;
  border-bottom: 1px solid #ccc;
}

#scrollable-dropdown-menu .tt-menu {
  max-height: 150px;
  overflow-y: auto;
}

#rtl-support .tt-menu {
  text-align: right;
}
	
	
	.button2{
		/*padding-bottom: 14px;
		padding-left: 10px;
		padding-right: 10px;
		padding-top: 13px;
		position: absolute;
		transition: .5s ease;
    	top: 0%; 
		left: 60%;*/
		position: absolute;
		padding top: 6px;
		padding-bottom: 6px;
		transition: .5s ease;
		top: 1%; 
		left: 95.5%;
	}
	
	.button3{
		/*padding-bottom: 14px;
		padding-left: 10px;
		padding-right: 10px;
		padding-top: 13px;
		position: absolute;
		transition: .5s ease;
    	top: 0%; 
		left: 60%;*/
		position: absolute;
		padding top: 10px;
		padding-bottom: 10px;
		transition: .5s ease;
		top: 15%; 
		left: 93.5%;
		-webkit-border-radius: 8px;
     -moz-border-radius: 8px;
          border-radius: 8px;
  -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
     -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
          box-shadow: 0 5px 10px rgba(0,0,0,.2);
	}

.button4{
    /*padding-bottom: 14px;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 13px;
    position: absolute;
    transition: .5s ease;
    top: 0%;
    left: 60%;*/
    position: absolute;
    padding top: 10px;
    padding-bottom: 10px;
    transition: .5s ease;
    top: 19%;
    left: 96.2%;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
    -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
}
.button6{
    /*padding-bottom: 14px;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 13px;
    position: absolute;
    transition: .5s ease;
    top: 0%;
    left: 60%;*/
    position: absolute;
    padding top: 10px;
    padding-bottom: 10px;
    transition: .5s ease;
    top: 14%;
    left: 96%;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
    -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
}
.button5{
    /*padding-bottom: 14px;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 13px;
    position: absolute;
    transition: .5s ease;
    top: 0%;
    left: 60%;*/
    position: absolute;
    padding top: 10px;
    padding-bottom: 10px;
    transition: .5s ease;
    top: 0%;
    left: 96.2%;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
    -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
}
		
	.button1{
		padding-bottom: 14px;
		padding-left: 10px;
		padding-right: 10px;
		padding-top: 13px;
		position: absolute;
		transition: .5s ease;
    	top: 0%; 
		left: 60%;
		-webkit-border-radius: 8px;
     -moz-border-radius: 8px;
          border-radius: 8px;
  -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
     -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
          box-shadow: 0 5px 10px rgba(0,0,0,.2);
	}
	
	
	
</style>





<script type="text/javascript" src="<?php echo base_url();?>media/jquery/js/modernizr.custom.js"></script>


<script type="text/javascript" src="<?php echo base_url();?>media/jquery/js/jquery-1.7.1.min.js"></script> 

<script type="text/javascript" src="<?php echo base_url();?>media/jquery/js/jquery-1.10.2.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>media/jquery/js/jquery-ui-1.10.3.custom.js"></script> 

	<script type="text/javascript" src="<?php echo base_url();?>media/js/hrms.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>media/js/hrmsv2.js"></script>





<script type="text/javascript" src="<?php echo base_url();?>media/js/jquery.simplyscroll.js"></script> 

<script type="text/javascript" src="<?php echo base_url();?>media/js/excanvas.js"></script>

<script type="text/javascript" language="javascript" src="<?php echo base_url();?>media/js/ajaxupload.3.5.js"></script>

<script type="text/javascript" language="javascript" src="<?php echo base_url();?>media/jquery/js/jquery.alert.js"></script>

<script language="JavaScript" type="text/javascript" src="<?php echo base_url();?>media/jquery/js/slimScrollHorizontal.js"></script>

<script language="JavaScript" type="text/javascript" src="<?php echo base_url();?>media/jquery/js/jquery.slimscroll.min.js"></script>

<script type="text/javascript" language="javascript" src="<?php echo base_url();?>media/jquery/js/jquery.jOrgChart.js"></script>

<!-- start of time picker -->

<script type="text/javascript" language="javascript" src="<?php echo base_url();?>media/jquery/js/jquery.ui.timepicker.js?v=0.3.2"></script>

<script type="text/javascript" language="javascript" src="<?php echo base_url();?>media/jquery/js/jquery.plugin.js"></script>

<script type="text/javascript" language="javascript" src="<?php echo base_url();?>media/jquery/js/jquery.maxlength.js"></script>

<script type="text/javascript" language="javascript" src="<?php echo base_url();?>media/js/facescroll.js"></script>

<script type="text/javascript" language="javascript" src="<?php echo base_url();?>media/js/jquery.ui.touch-punch.min.js"></script>





	

<link href="<?php echo base_url();?>media/css/jquery.ui.timepicker.css?v=0.3.2" rel="stylesheet" type="text/css" />

<!-- end of time picker -->

<script  language="JavaScript" type="text/javascript" src="<?php echo base_url();?>media/jquery/js/select2.js" ></script>







<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/css/custom.css" />

<link rel="stylesheet" href="<?php echo base_url();?>media/uniform/uniform.css" type="text/css" media="screen" />



<!-- start of jq pagination -->

<script type="text/javascript" language="javascript" src="<?php echo base_url();?>media/jquery/js/jquery.jqpagination.js"></script>

<link href="<?php echo base_url();?>media/css/jqpagination.css" rel="stylesheet" type="text/css" />

<!-- end of jq pagination -->





<script type="text/javascript" charset="UTF-8">

var hideshow_mainmenu = parseInt('1');

var searchData = ""; // for search in grid



function hideshowmenu()

{

	$( "#menu-shadow" ).show();

	$('#menu-hide-show').css('top','-1px');									 

	$('#mainmenushowhidebutton').children().addClass('show-menu');

	$('#mainmenushowhidebutton').children().text('Click Here to Hide Menu');

	$('#mainmenushowhidebutton').children().removeClass('hide-menu');

	$('#mainmenushowhidebutton').show();

}

function checkisactivestatus()

{		

    $.ajax({

        type:"post",		

        url:base_url+'/index/checkisactivestatus',

        dataType:'json',

        success: function(response)

        {

            if(response['result'] == 'false')

            {

                window.location.href = base_url+'/index/';

            }

        }

    });

}

$(document).ready(function(){



	$("#scroller").simplyScroll({

            auto: false,

            speed: 5

    });



    if(hideshow_mainmenu == 1) {

            hideshowmenu();		

    }

    else if(hideshow_mainmenu == 0){

      $( "#menu-shadow" ).hide();

      $('#menu-hide-show').css('top','0');								 				

      $('#mainmenushowhidebutton').children().addClass('hide-menu');

      $('#mainmenushowhidebutton').children().text('Click Here to Show Menu');

      $('#mainmenushowhidebutton').children().removeClass('show-menu');

      $('#mainmenushowhidebutton').show();

    }

    



    // checking whether the browser is ie or not



    if(navigator.userAgent.match(/msie/i) == 'MSIE')

    {

        $("div.formButtons").addClass("ie");

    }



    $('div.defaultFormRowDiv').has('textarea').addClass("textareaheight");

    $('div.formRowDiv').has('textarea').addClass("textareaheight");	

        

    //start of menu clicks

    //$('.clickable_menu').click(function(){

    $(document).on('click', ".clickable_menu", function() {    

        var menu_url = $(this).attr("menu-url");

        var for_childs = $(this).attr("for-childs");

       

        if(menu_url != '')

        {

                     window.location = menu_url;

            }

        else if(for_childs != '')

        {

		    				$('.wrapperdivright').html('<div class="blank_text"><div class="ml-alert-1-info"><div class="style-1-icon info"></div>Click on the desired submenu to navigate to the details.</div></div>');

				

		    $('.selected_menu_class').hide();

		    $('.selected_menu_class').removeClass("selected_menu_class");

		    $('.'+for_childs).addClass("selected_menu_class");

		    $('.'+for_childs).show();

		    parent_menu_selected($(this));

        }

    });

    //end of menu clicks



    // Themes apply - START



    $('#themes_id').click(function() {

        $('#themes_div').toggle('slow');

    });



    $(document).mousedown(function(e) {

        var clicked=$(e.target); // get the element clicked

        if(clicked.is('#themes_id') || clicked.parents().is('#themes_id')) {

        // clicked happend within the dialog

        } 

        else {

        // outside click

            if($("#themes_div").is(":visible")){

                $("#themes_div").hide("slow");

            }

        }

    });		



});//end of ready function



function setTheme(themeName)

{

	var current_theme = 'default';

	if(current_theme != themeName.toLowerCase()){

		var theme_name = themeName.toLowerCase();

		   $.ajax({

		        url: base_url+'/index/updatetheme',   

		        type : 'POST',

		        data: 'theme_name='+theme_name,

		        dataType: 'json',

		        success : function(response){

		        	window.location.reload();

		        }

		   });				

	}	

}

// Themes - END

</script>

<script type="text/javascript" charset="UTF-8">

$(function() {

	setTimeout('hideMessg()',3000);

});

function hideMessg() {

    if($("#messageData").is(":visible"))

	  $('#messageData').fadeOut('slow','swing');

}

// defining the project name for using in js files

var projectPath =  '/Sentrifugo/';

var application_name = 'Sentrifugo';



$(document).ready(function(){

	$('.logoutdiv').hide(); 			

	/* Added By sapplica, for logout dropdown */

	$(document).click(function(e)  {

		if(e.target.id == "logoutbutton" || e.target.id == "profile_img" || e.target.id == "prof_name" || e.target.id == 'b_id')

		{

		  if($("#logoutid").is(":visible"))

			$("#logoutid").hide();

		  else $("#logoutid").show();

		}

		else if(e.target.id !== "logoutid"  && e.target.id !== "profile_img" && e.target.id !== "prof_name" && e.target.id !== 'b_id')

		{

		  $("#logoutid").hide();

		}

	});

  /* End of logout dropdown */

  

  /* Making window responsive*/

  

  	var window_width = $(window).width();

	

	// var content_inners_width = window_width*(99/100);

	// $('.content_inners').css("width", content_inners_width);

		

		

    function checkmainWidthReport() 

    {

       var window_width = $(window).width();

       var content_inners_width = window_width*(99/100);

       $('.content_inners').css("width", content_inners_width);		

       $('.wrapperdivright').css("width",'100%');			

       var total_width = $('.reports-grid-ctrl').width();					

       $('.left-config-ctrl').css("width", "202");

       $('.right-config-ctrl').css("width", (total_width-250));	



    }

	

    function checkmainWidth() 

    {

        var window_width = $(window).width();

        var content_inners_width = window_width*(99/100);

        $('.content_inners').css("width", content_inners_width);



        $('.wrapperdivleft').css("width", "250");

        $('.wrapperdivright').css("width", (content_inners_width-250));		

    }	

	

	$(window).resize(function() 

	

	{

		

		$('.main_view_nor').add('.main_view_alt').each(function(){

			$(this).find('.width_80:eq(0)').css('height', '');

		$(this).find('.width_80:eq(1)').css('height', '');

		$(this).find('.width_20:eq(0)').css('height', '');

		$(this).find('.width_20:eq(1)').css('height', '');

		var v801 = $(this).find('.width_80:eq(0)').height();

		var v802 = $(this).find('.width_80:eq(1)').height();

		var v201 = $(this).find('.width_20:eq(0)').height();

		var v202 = $(this).find('.width_20:eq(1)').height();

		var myArray =  new Array();

	  myArray = [v801,v802,v201,v202];

		var maxValueInArray = Math.max.apply(Math, myArray);

	  //console.log(myArray);

		//console.log('>>'+maxValueInArray);

		

		

		//var finalheight = v801;

		//if(v802 != ''){

		//finalheight = (v801>v802)?v801:v802;

		//}

		if(maxValueInArray>0) {

			$(this).find('.width_20').height(maxValueInArray);

			$(this).find('.width_80').height(maxValueInArray);

		}

		//$(this).prev().height($(this).height());

		});

		

	});

/*    $(window).resize(function() 

    {		

                        checkmainWidth();

        

        $("#scroller").simplyScroll({

                       auto: false,

                       speed: 10

               });

    });*/

  /* End of Making window responsive */      	

	// Making forms containing tabs - responsive

	

    $('#tabContainer > ul').attr('id','tabContainerDiv');

	

    var maincontentdiv_width = $('#maincontentdiv').width();

    $('#tabContainer').css("width", maincontentdiv_width);

    $('#tabContainer > ul').css("width", "201");

    $('div[id^="tabContainer-frag-"]').css("width", (maincontentdiv_width-244));

	

/*    $(window).resize(function() {

        var maincontentdiv_width = $('#maincontentdiv').width();

        $('#tabContainer').css("width", maincontentdiv_width);

        $('#tabContainer > ul').css("width", "201");

        $('div[id^="tabContainer-frag-"]').css("width", (maincontentdiv_width-244));	

    });	*/		

	

});//end of ready function


 
$(document).ready(function(e){

   $(".wrapperdivleft a").not("#moreLinkDiv a,#lessLinkDiv a,.dragableBox li a,.parentmenu,_blank").click(function(e){ 

        var clickKeydownFlag = $.trim(e.which);

                				   

        if(parseFloat($.trim(clickKeydownFlag)) != 2 && !e.ctrlKey)

        { 

            $.blockUI({ width:'50px',message: $("#spinner").html() });

        }

        if(parseFloat($.trim(clickKeydownFlag)) == 2)

        {

            $.unblockUI();

        }

    }); 

		

    $(".profile-tabs-left a").click(function(e){ 

        if(parseFloat($.trim(e.which)) != 2 && !e.ctrlKey)

        { 

            $.blockUI({ width:'50px',message: $("#spinner").html() });

        } 

        if(parseFloat($.trim(e.which)) == 2)

        {

            $.unblockUI();

        } 

    });

					 

    $(".settings").click(function(e)

    { 

        if(parseFloat($.trim(e.which)) != 2 && !e.ctrlKey)

        { 

            $.blockUI({ width:'50px',message: $("#spinner").html() });

        } 

        if(parseFloat($.trim(e.which)) == 2 || parseFloat($.trim(e.which)) == 0)

        {

            $.unblockUI();

        }

    });



    $(".configurewizard").click(function(e)

    	    { 

    	        if(parseFloat($.trim(e.which)) != 2 && !e.ctrlKey)

    	        { 

    	            $.blockUI({ width:'50px',message: $("#spinner").html() });

    	        } 

    	        if(parseFloat($.trim(e.which)) == 2 || parseFloat($.trim(e.which)) == 0)

    	        {

    	            $.unblockUI();

    	        }

    	    });
	
	

	

    $("#logoutid a").click(function(e)

    { 		    	

        if(parseFloat($.trim(e.which)) != 2 && !e.ctrlKey)

        { 

            $.blockUI({ width:'50px',message: $("#spinner").html() });

        } 

        if(parseFloat($.trim(e.which)) == 2)

        {

            $.unblockUI();

        } 					

    });	

	

    $('.logo').click(function(e) 

    { 

        if(parseFloat($.trim(e.which)) != 2 && !e.ctrlKey)

        { 

            $.blockUI({ width:'50px',message: $("#spinner").html() });

        } 

        if(parseFloat($.trim(e.which)) == 2 || parseFloat($.trim(e.which)) == 0)

        {

            $.unblockUI();

        } 					

    });

		

    $('.firstbreadcrumb').click(function() { 

        $.blockUI({ width:'50px',message: $("#spinner").html() });

    });
	
	
	
	
	
	



    $('#Save').click(function() { 

        $('.wrapperdivright').block({width:'50px',message: $("#spinner").html() }); 

    });	



    $('#Cancel').click(function() { 

        $('.wrapperdivright').block({message: $("#spinner").html() }); 

    });	

    $('#cancelwidget').click(function() { 

        $('.wrapperdivright').block({message: $("#spinner").html() }); 

    });		

		

    $('#Edit').click(function() { 

        $('.wrapperdivright').block({message: $("#spinner").html() }); 

    });	

	/*
    $("#submitbutton").click(function(){ 

        $.blockUI({ width:'50px',message: $("#spinner").html() });

    });
	
	*/

    $(".clssbmtbtn").not('#idbtn').click(function(){ 

        $.blockUI({ width:'50px',message: $("#spinner").html() });

    });
	
	/*

    $("#submit-button2,#configwizard").click(function(){ 

    	$.blockUI({ width:'50px',message: $("#spinner").html() });

    });
*/


    $(document).ajaxStart(function(){ 		

        checkisactivestatus();

    });		

    $(document).ajaxSuccess(function(event, request, settings)

    {				

        var response = request.responseText;

        if(response == '{"login":"failed"}')

        {

            window.location.href = '<?php echo base_url();?>';

        }

    });	

    $(document).ajaxStop($.unblockUI); 

    $(document).ajaxError($.unblockUI);

        

    $("select:not(.not_appli)").select2({

        formatResult: format_select,            

        escapeMarkup: function(m) { return m; }

    });

    function format_select(selData) 

    {

	var parent_id = selData.element[0].parentElement.id;

	

        var sel_array = new Array('approver1','approver2','approver3','reporting_id','interviewer_id','reporting_manager','employee');

        if(jQuery.inArray(parent_id,sel_array) >=0)

        {

            if(parent_id == 'employee')

            {

                var title = '';

                var emp_split = selData.id.split('-');

                var textData = selData.text;



                if (selData.id == 0) return selData.text; 

                if(emp_split[0] == 'cand')

                {

                    title = 'candidate-profile_pic.jpg';					

                }

                else if(emp_split[0] == 'emp')

                {

                    title = $('#'+parent_id+' option[value="'+selData.id+'"]').attr('title');

                }

                else 

                    title = '';

                return "<img class='flag' src='http://localhost/sentrifugo/public/uploads/profile/"+title+"' onerror=\"this.src='http://localhost/sentrifugo/public/uploads/profile/profile_pic.png'\" />" + "<span>" + textData + "</span><div class='seldivimg'></div>";

            }

            else

            {

                var title = $('#'+parent_id+' option[value="'+selData.id+'"]').attr('title');

                if (!selData.id) return selData.text; 

			

                if(title == '')

                    title = "profile_pic.png";

                return "<img class='flag' src='http://localhost/sentrifugo/public/uploads/profile/"+title+"' onerror=\"this.src='http://localhost/sentrifugo/public/uploads/profile/profile_pic.png'\" />" + "<span>" + selData.text + "</span><div class='seldivimg'></div>";

            }

        }

        else 

        {

            return  "<span>" + selData.text + "</span><div class='seldivimg'></div>";

        }            

    }



// Maxlength Attributes

    $('#description').maxlength();

    $('#cand_location').maxlength({max: 150});

    $('#interview_feedback').maxlength();

    $('#interview_comments').maxlength();

    $('#jobdescription').maxlength();

    $('#comments').maxlength({max: 50});

    $('#reason').maxlength({max: 30});

    $('#freqdescription').maxlength();

    $('#remdesc').maxlength();

    $('#req_skills').maxlength({max: 400});

    $('#additional_info').maxlength({max: 400});

    $('#roledescription').maxlength({max: 100});

    

    $('#idrequest_comments').maxlength();

// Removing maxlength attributes in grids

$("table th .maxlength-feedback").remove();

	});

$(function(){



    $(".dragableBox li a").draggable({

        appendTo: 'body',

        containment: 'window',

        scroll: false,

        revert: true,

        start: function(){	

            $('#dragid').val(this.id);

            if(tabFlag == 'widgets')

                $("#settingstab").show();

            else if(tabFlag == 'shortcuts')

                $("#shortcuticontab").show();					

        },

        drag: function() {

            if(tabFlag == 'widgets')

                $("#settingstab").show();

            else if(tabFlag == 'shortcuts')

                $("#shortcuticontab").show();

            $('.dragableBox').css('z-index',99999);

        },

        stop: function() {

            $('.dragableBox').css('z-index',99);

        }	

    });

    $("#settingstab").droppable({

	tolerance: 'touch',

	over: function() {

            $("#settingstab").css('cursor','move');

            $("#settingstab").addClass("newtr");

	},

	out: function() {

            $("#settingstab").css('cursor','');

            $("#settingstab").removeClass("newtr");

	},

	drop: function() {		   

            var itemID = $('#dragid').val();

            makeDroppableAjaxCall(itemID); 

            $("#settingstab").css('cursor','');			

	}

    });

    $("#shortcuticontab").droppable({

	tolerance: 'touch',

	over: function() {

            $("#shortcuticontab").css('cursor','move');

            $("#shortcuticontab").addClass("newtr");

	},

	out: function() {

            $("#shortcuticontab").css('cursor','');

            $("#shortcuticontab").removeClass("newtr");

	},

	drop: function() {		   

            var itemID = $('#dragid').val();

            makeDroppableAjaxCall(itemID); 

            $("#shortcuticontab").css('cursor','');			

	}

    });



});



$(document).ready(function(){

    		

    navigator.sayswho= (function(){

        var N= navigator.appName, ua= navigator.userAgent, tem;

        var M= ua.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);

        if(M && (tem= ua.match(/version\/([\.\d]+)/i))!= null) M[2]= tem[1];

        M= M? [M[1], M[2]]: [N, navigator.appVersion, '-?'];



        return M;

    })();

    var version = parseInt(navigator.sayswho[1]);

         

   if(navigator.userAgent.match(/firefox/i) == 'Firefox')

    {

        if(version<5)

            window.location.href = "http://localhost/sentrifugo/index.php/index/browserfailure";

    }

    else if(navigator.userAgent.match(/msie/i) == 'MSIE')

    {        

         if(version<8)      

            window.location.href = "http://localhost/sentrifugo/index.php/index/browserfailure";

    }

    else if(navigator.userAgent.match(/chrome/i) == 'Chrome')

    {

       if(version<13)

            window.location.href = "http://localhost/sentrifugo/index.php/index/browserfailure";

    }

    else if(navigator.userAgent.match(/safari/i) == 'Safari' && navigator.userAgent.match(/Android/i) != 'Android')

    {

       if(version<5)

            window.location.href = "http://localhost/sentrifugo/index.php/index/browserfailure";

    }

    else if(navigator.userAgent.match(/opera/i) == 'Opera')

    {

       if(version<12)

            window.location.href = "http://localhost/sentrifugo/index.php/index/browserfailure";

    } 

        

  });



</script>










<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>-->
 <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
 <script src="<?php echo base_url();?>media/js/bootstrap.min.js"></script>
 <!--<link rel="stylesheet" href="https://twitter.github.io/typeahead.js/css/examples.css" /> -->
 <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>-->
 <script src="<?php echo base_url();?>media/js/typeahead.min.js"></script>
 
 <!--<script src="https://twitter.github.io/typeahead.js/js/handlebars.js"></script>-->
 <script src="<?php echo base_url();?>media/js/handlebars.js"></script>
 <!--<script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>		-->			
<script src="<?php echo base_url();?>media/js/typeahead.bundle.js"></script>


<!--<script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>-->

<script src="<?php echo base_url();?>media/js/jquery-migrate-1.2.1.js"></script>




</head>

	<body>


<!--
<script type="text/javascript">

    $(window).load(function(){

        var bgchecklinkpermission = "";

        if(bgchecklinkpermission == 'Yes')

            $('#hrbgchecklink').css('display','block');

    });

</script>
-->

<input type= "hidden" value= "<?php echo base_url();?>" id = "baseurl" />

<input type= "hidden" value= "yy/mm/dd" id = "dateformatjs" />

<input type= "hidden" value= "1" id = "take-tour-flag" />

<input type= "hidden" value= "1" id = "loginuserId" name = "loginuserId" />

<input type= "hidden" value= "" id = "dragid" />



<script type="text/javascript"> var base_url = "<?php echo base_url();?>";

    var msg = '';  

    var loginUserId = $('#loginuserId').val();

    var domain_data = "<?php echo base_url();?>";

    var management_group = "1";

    var superAdmin_id = "1";

    var clicked = '';		

</script>



		<script type="text/javascript">



			function DropDown(el) {

				this.dd = el;

				this.initEvents();

			}

			DropDown.prototype = {

				initEvents : function() {

					var obj = this;



					obj.dd.on('click', function(event){

						$(this).toggleClass('active');

						event.stopPropagation();

					});	

				}

			}



			$(function() {



				var dd = new DropDown( $('#dd') );



				$(document).click(function() {

					// all dropdowns

					$('.wrapper-dropdown-sf').removeClass('active');

				});



			});



		</script>



 

    <div id='mainDiv' align="center" >

        <div id="main-div">

            <div id="page-container">        

            <!-- Header Part Starts-->

                <div id="header">					

            <a href="<?php echo base_url();?>" style="text-decoration:none;" class="logo">



<div class="wrapper-demo">
    <img src="<?php echo  base_url()?>img/logo.png">
</div>
                <div class="wrapper-demo">
                    <h1><?php echo SiteName; ?>
                    </h1>
                </div>


            </a> <!-- added by sapplica -->

         

				         <?php if($roleadd == "Y") { ?>
                             <div class="wrapper-demo">
                                <a href="<?php echo base_url(); ?>home/employee_add">
                                  <div id="dd" class="wrapper-dropdown-sf" tabindex="1">
                                      <span></span>Create New
<!--
						<ul class="dropdown">

			                      

                                           <li><a href="http://localhost/sentrifugo/index.php/employee/add"><i class="icon-user"></i>Employees</a></li>

                                          

                     

					  					 <li><a href="http://localhost/sentrifugo/index.php/requisition/add"><i class="icon-cog"></i>Recruitments</a></li>

					  					  

					  

					 					 <li><a href="http://localhost/sentrifugo/index.php/appraisalinit/add"><i class="icon-remove"></i>Appraisals</a></li>

					 					 

					  

					  					 <li><a href="http://localhost/sentrifugo/index.php/businessunits/edit"><i class="icon-cog"></i>Business Units</a></li>

					                         

					   

					   					 <li><a href="http://localhost/sentrifugo/index.php/departments/edit"><i class="icon-remove"></i>Departments</a></li>

										 

					  

										 <li><a href="http://localhost/sentrifugo/index.php/announcements/add"><i class="icon-remove"></i>Announcements</a></li>

                                        

                    

             						

					</ul>
-->
					</div></a>

					</div> <?php } ?>

			

			

				

            <div class="links">    					

                <a class="userprofilepic" id="logoutbutton"> 

                <i>

                    <img class="js_profile_img" id="profile_img" width="28" height="28" border="0" src="<?php echo base_url() ?>media/images/default-profile-pic.jpg" />

                </i>

                <span id="prof_name" title="<?php echo $username?>">

                	<?php echo $username?>              </span>

                <b id="b_id" ></b>							

                </a>

                <div class="logoutdiv" id="logoutid" style="display:none">

                <div class="arrow-div"></div>

         <!--       <a href="http://localhost/sentrifugo/index.php/dashboard/viewprofile" class="first">View Profile</a>

                <a href="http://localhost/sentrifugo/index.php/viewsettings/1">Settings</a>                                                        

                <a href="http://localhost/sentrifugo/index.php/dashboard/changepassword">Change Password</a>

        <a href="http://localhost/sentrifugo/index.php/dashboard/emailsettings">Mail Settings</a>

    <span id="tourLink">Take Tour</span>

	<a href="http://localhost/sentrifugo/index.php/dashboard/upgradeapplication">Upgrade Application</a>

	-->

    <a href="<?php echo base_url();?>home/logout">Logout</a>

        </div>

    </div>



            					<div class="configurewizard"> 
									
					<a href="<?php echo base_url();?>"><?php echo $rolename ?></a>

					</div>
					
				
		
					
<!--							
<div id="prefetch"  style="padding-top: 10px;"> 
						<form method="post" action="<?php echo base_url();?>">	
					<input type="text" placeholder="Search.." name="search">
					
						<button type="submit"><i class="fa fa-search"></i></button>
	</form>
				
				
				
				 <input type="text" name="search_box" id="search_box" class="form-control input-lg typeahead" placeholder="Search Here" />
   
 <button type="submit" class="button1"><i class="fa fa-search"></i></button>
					</div>
-->	


  <!--
  <form method="post" action="<?php echo base_url();?>home/search">
  
  <div id="prefetch">
  
  <input type="text" name="name" id="search_box" class="form-control input-lg typeahead" placeholder="Search Employee">

 

   
    </div>
    <button type="submit" class="button1"><i class="fa fa-search"></i></button>
	  </form>-->
 






<script>
$(document).ready(function(){
  var sample_data = new Bloodhound({
   datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
   queryTokenizer: Bloodhound.tokenizers.whitespace,
   prefetch:'<?php echo base_url(); ?>home/fetch',
   remote:{
    url:'<?php echo base_url(); ?>home/fetch/%QUERY',
    wildcard:'%QUERY'
   }
  });
  

  $('#prefetch .typeahead').typeahead(null, {
   name: 'sample_data',
   display: 'name',
   source:sample_data,
   limit:10,
   templates:{
    suggestion:Handlebars.compile('<div class="row"><div class="col-md-10" style="padding-right:5px; padding-left:5px;">{{name}}</div></div>')
   }
  });
});
</script>

                    <script>
                        $(document).ready(function(){
                            var sample_data1 = new Bloodhound({
                                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                                queryTokenizer: Bloodhound.tokenizers.whitespace,
                                prefetch:'<?php echo base_url(); ?>home/fetchproject',
                                remote:{
                                    url:'<?php echo base_url(); ?>home/fetchproject/%QUERY',
                                    wildcard:'%QUERY'
                                }
                            });


                            $('#prefetch1 .typeahead').typeahead(null, {
                                name: 'sample_data1',
                                display: 'projectname',
                                source:sample_data1,
                                limit:10,
                                templates:{
                                    suggestion:Handlebars.compile('<div class="row"><div class="col-md-10" style="padding-right:5px; padding-left:5px;">{{projectname}}</div></div>')
                                }
                            });
                        });
                    </script>

			
					
					
					
					

            

  



		<div id="themes_id" style="position:relative; float:right; margin-right:15px; display:none;">

			<div class="themes_iconnor">Themes</div>

		

			<div id="themes_div" style="display: none;" class="themesbg">

				<div class="themes_icon">Themes</div>

			  	<div class="themes_spritediv">

				    <span class="themes_sprite blue" title="Blue" onclick="javascript:setTheme('default');"></span>

				    <span class="themes_sprite brown" title="Brown" onclick="javascript:setTheme('brown');"></span>

				    <span class="themes_sprite gray" title="Gray" onclick="javascript:setTheme('gray');"></span>

				    <span class="themes_sprite skyblue" title="Skyblue" onclick="javascript:setTheme('skyblue');"></span>

				    <span class="themes_sprite peacock" title="Peacock" onclick="javascript:setTheme('peacock');"></span>

					<span class="themes_sprite green" title="Green" onclick="javascript:setTheme('green');"></span>

				    <span class="themes_sprite orange" title="Orange" onclick="javascript:setTheme('orange');"></span>

				</div>

		  	</div>

	 	</div>

                                    

</div>

                            <!-- Header End here-->		 
