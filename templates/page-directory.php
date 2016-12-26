<!-- Latest compiled and minified CSS -->
<?php // Template Name: Art Directory
get_header("customheader"); ?>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic' rel='stylesheet' type='text/css'>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>

<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.15/css/lightgallery.min.css">
<style>


@font-face {
  font-family: 'OpenSans-SemiboldItalic';
  src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-SemiboldItalic.ttf') format('truetype');
     }

@font-face {
 font-family: 'OpenSans-SemiboldItalic';
 src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-SemiboldItalic.ttf') format('truetype');
    }


@font-face {
  font-family: 'OpenSans-Semibold';
  src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-Semibold.ttf') format('truetype');
     }

 @font-face {
  font-family: 'OpenSans-Regular';
  src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-Regular.ttf') format('truetype');
     }

@font-face {
  font-family: 'OpenSans';
  src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-Regular.ttf') format('truetype');
     }

 @font-face {
   font-family: 'OpenSans-LightItalic';
   src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-LightItalic.ttf') format('truetype');
      }


 @font-face {
   font-family: 'OpenSans-Light';
   src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-Light.ttf') format('truetype');
      }


 @font-face {
   font-family: 'OpenSans-Italic';
   src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-Italic.ttf') format('truetype');
      }

@font-face {
  font-family: 'OpenSans-ExtraBoldItalic';
  src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-ExtraBoldItalic.ttf') format('truetype');
     }

 @font-face {
   font-family: 'OpenSans-ExtraBold';
   src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-ExtraBold.ttf') format('truetype');
      }

@font-face {
  font-family: 'OpenSans-BoldItalic';
  src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-BoldItalic.ttf') format('truetype');
     }

 @font-face {
   font-family: 'OpenSans-Bold';
   src: url('/wp-content/plugins/artdirectory/assets/Fonts/OpenSans-Bold.ttf') format('truetype');
      }


/* Media Queries */
@media (max-width: 600px) {
  li.main_field {
    margin-bottom: 15px;
  }
  .full-contain{
    margin-top: 65px;
  }

}

@media (max-width: 900px) {

  .full-contain{
    margin-top: 95px;
  }

}


.play-pause::before{
  display: none;
}
html,body{
  width: 100%;
  height: 100%;
  background-color: #f5f4f6;
  overflow-x: hidden;
  font-family: OpenSans-Regular !important;
}
#wrapper{
  background-color: #f5f4f6;
}
.main_field > li, .nav-pills > li > .main_field{
  border: solid 3px #ffffff;
  border-radius: 0;
  font-size: 22.53px;
  padding-top: 5px;
  padding-bottom: 7px;
  padding-left: 12px;
  padding-right: 12px;
  font-family: OpenSans-Regular;
  margin-bottom: 4px;
  cursor:pointer;
}
.main_field > a{
  color: white;
  background: none;
  margin-top: 1px;
  margin-bottom: 1px;
}
.nav-pills > li > .main_field:hover{
  background: #33353d;
  font-family: OpenSans-Semibold;
}

.main_field.active_main > .main_field{
  background: #33353d;
  font-family: OpenSans-Semibold;
}

.sub_field {
  cursor: pointer;
}

.nav-pills > li > .sub_field:hover{
  font-family: OpenSans-bold;
  background: none;
}

.sub_field.active_sub > .sub_field{
  font-family: OpenSans-bold;
  background: none;
}

li.main_field{
  margin-left: 1%;
  margin-right: 1%;
}

.main_fields{
  padding-bottom: 2%;
}

.sub_field, .nav-pills > li > .sub_field{
  color: #ffffff;
  border-radius: 0;
  background: none;
  font-family: OpenSans-Regular;
  font-size: 20px;

}

.directory_nav{
  background-image: url('/wp-content/plugins/artdirectory/assets/abbott.jpg');;
  padding-bottom: 3%;
  padding-top: 3%;
}

.directory_header{
  text-align: center;
  margin-bottom: 15px;
  margin-top: 15px;
  color: white;
  font-size: 58.95px;
  font-family: OpenSans-Light;
}

.directory_container{
  text-align: center;
}

.container{
  overflow: visible;
}

/* Center the nav pills */
.center-pills {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
 }

 .artists{
   text-align: center;
 }

 .search_container{
   float:right;
   background: #fff;
   border: .5px solid;
   border-color: #333333;
   border-radius: 1px;
   padding-left: 5px;
   padding-right: 5px;

 }
 #search, #search:focus{
   background: #fff;
   border: none;
   outline: none
 }

 .search-icon{
   color: #725871;
 }

 .artist_modal_large{
   width: 70%;
 }

 @keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}

body { margin: 0; }
div.artist-gallery { overflow: hidden; }
div.artist-gallery figure img { width: 20%; float: left; }
div.artist-gallery figure {
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  transition: : slidy;
}

.modal-dialog{
  width: 90%;
  margin: auto;
}

.artist-contact{
  margin-top: 7%;
  font-family: OpenSans;
  color: #33353d;
  font-size: 18px;
  line-height: 20pt;
}

.artist-contact a:visited{
  color: #725871;
}

.artist-contact > h4{
  margin-bottom: .33em;
  font-family: OpenSans-Semibold;
  color: #33353d;
  font-size: 22px;
}

.artist_post_content img {
  border: 8px solid #ffffff;
  margin-bottom: 10px;
}

.artist_post_content {
  text-align: left;
  cursor: pointer;
  font-family: OpenSans-Light;
  margin-bottom: 3rem;
  color: #33353d;
  display: block;
}

.social-icons{
  margin-top: .5%;
}

.social-icons img{
  width: 10%;
  float: left;
  margin-right: 3%;
}

@media only screen and (max-width: 600px){
  .social-icons img{
    width: 20%;
  }
}

#loading_gif{
  text-align: center;
  top: 0px;
  position: absolute;

}

.map_contains {
	width: 100%;
	height: 400px;
	border: #ccc solid 1px;
	margin: 20px 0;
}

/* fixes potential theme css conflict */
.map_contains img {
   max-width: inherit !important;
}

.loader{
  height: 30vh;
}

.ui-slider-horizontal{
  height: .4em !important;
  border-color: #867085;

}
.ui-widget-content{
  border: 2px solid #867085 !important;
}
.ui-slider-handle{
  top: -.5em !important;
  border-radius: 100% !important;
  border: 2px solid !important;
  border-color: #867085 !important;
}

#display{
  text-align: left;
  margin-bottom: 7px;
}

.artist-name{
  margin-bottom: 0px;
  font-family: OpenSans-Semibold;
  color: #33353d;
  font-size: 28px;
}

.artist-header {
  margin-top: 30px;
  margin-bottom: 10px;
  color: #33353d;
  font-family: OpenSans-Semibold;
  font-size: 22px;
}

.artist-statement, .artist-additional{
  font-family: OpenSans;
  color: #33353d;
  font-size: 18px;
  line-height: 20pt;
}

.modal-content{
  padding: 10px;
}

.category-modal{
  font-family: OpenSans-Italic;
  color: #33353d;
  font-size: 18px;
}
.category-post{
  font-size: 14.68px;
  line-height: 18px;
  font-style: italic;
}
</style>

<body>
  <div class="row directory_nav">
    <div class="container directory_container">
      <div class="row">
        <h1 class="directory_header">Greenville-Area Arts Directory</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills main_fields center-pills"></ul>
          <ul class="nav nav-pills sub_fields center-pills"></ul>
        </div>
      </div>
    </div>
  </div>
  <div style="margin:50px 0">
    <div class="container">
      <div class="directory-search">
        <div class="search_container">
          <input id="search" placeholder="Search"/>
          <i class="fa fa-search search-icon"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="container" style="margin-bottom:50px">
    <div class="art-directory">
      <div class="directory-arrow-col">
        <button class="back-page directory-arrow-button">
          <svg width="64px" height="64px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="circle-chevron-left" transform="translate(32.000000, 32.000000) scale(-1, 1) translate(-32.000000, -32.000000) translate(2.000000, 2.000000)">
                <ellipse id="circle-left" class="chevron-circle" stroke="#905890" stroke-width="3" cx="30" cy="30" rx="30" ry="30"></ellipse>
                <path d="M24.0769789,45 C23.5468304,45 23.0145544,44.8310165 22.6083845,44.4902977 C21.7972052,43.8114501 21.7972052,42.7128952 22.6083845,42.0340476 L36.9891204,30.0001214 L22.6083845,17.9653859 C21.7972052,17.2865382 21.7972052,16.1870122 22.6083845,15.5091357 C23.4195639,14.8302881 24.7334268,14.8302881 25.5444127,15.5091357 L41.3916155,28.7711061 C42.2027948,29.4499537 42.2027948,30.5494797 41.3916155,31.2273562 L25.5444127,44.4901359 C25.1395967,44.8300453 24.6082878,45 24.0769789,45 Z" id="chevron-left" fill="#905890"></path>
              </g>
            </g>
          </svg>
        </button>
      </div>
      <div class="directory-artists-col">
        <div class="artists directory-content"></div>
      </div>
      <div class="directory-arrow-col">
        <button class="forward-page directory-arrow-button">
          <svg width="64px" height="64px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="circle-chevron-right" transform="translate(2.000000, 2.000000)">
                <ellipse id="circle-right" class="chevron-circle" stroke="#905890" stroke-width="3" cx="30" cy="30" rx="30" ry="30"></ellipse>
                <path d="M24.0769789,45 C23.5468304,45 23.0145544,44.8310165 22.6083845,44.4902977 C21.7972052,43.8114501 21.7972052,42.7128952 22.6083845,42.0340476 L36.9891204,30.0001214 L22.6083845,17.9653859 C21.7972052,17.2865382 21.7972052,16.1870122 22.6083845,15.5091357 C23.4195639,14.8302881 24.7334268,14.8302881 25.5444127,15.5091357 L41.3916155,28.7711061 C42.2027948,29.4499537 42.2027948,30.5494797 41.3916155,31.2273562 L25.5444127,44.4901359 C25.1395967,44.8300453 24.6082878,45 24.0769789,45 Z" id="chevron-right" fill="#905890"></path>
              </g>
            </g>
          </svg>
        </button>
      </div>
    </div>
  </div>
</body>

<div class="modal fade" id="artist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog  artist_modal_large" role="document">
    <div class="modal-content" style="padding:0">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body artist_modal" style="padding:20px">
        <div class="row">
          <div class="col-md-6 artist-gallery col-md-push-6">
            <div class="art-gal-container">
              <div class="art-gal-itself"></div>
              <div class="art-gal-dots"></div>
              <a class="left thumbnail-gallery-arrow thumbnail-gallery-arrow-left" href="#myCarousel" data-slide="prev">
                <img class="icon-next" src="/wp-content/plugins/artdirectory/assets/gray-left-arrow.png"/>
              </a>
              <a class="right thumbnail-gallery-arrow thumbnail-gallery-arrow-right" href="#myCarousel" data-slide="next">
                <img class="icon-next" src="/wp-content/plugins/artdirectory/assets/gray-right-arrow.png"/>
              </a>
            </div>
            <div class="art-gal-description"></div>
          </div>
          <div class="col-md-6 artist-info col-md-pull-6">
            <h3 class="artist-name">
              <span class="artist-first_name"></span>
              <span class="artist-last_name"></span>
            </h3>
	          <div class="category-modal"></div>
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12">
                    <div class="artist-contact">
                      <h4>Contact Information</h4>
                      <div class="artist-building"></div>
                      <div class="artist-street"></div>
                      <div>
                        <span class="artist-city"></span>,
                        <span class="artist-state"></span>
                        <span class="zip"></span>
                      </div>
                      <div class="artist-phone"></div>
                      <div class="artist-email"></div>
                      <div class="artist-web"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="social-icons"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="open-friday" style="margin:10px 0"></div>
                <div class="handicap-accessible"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="artist-hours"></div>
            <div class="artist-classes-offered"></div>
            <h4 class="artist-statement-header artist-header"></h4>
            <div class="artist-statement"></div>
            <h4 class="artist-additional-header artist-header"></h4>
            <div class="artist-additional"></div>
          </div>
        </div>
        <div class="row">
          <div class='col-sm-12 col-md-8'>
            <div class="map_contains">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>

<script>
/* TODO Move this into a seperate javascript file */
var categories = {
  'Visual Arts' : ["other",'clay & wood','digital arts','drawing & paper arts','fiber arts','jewelry & glass','mixed media','organizations','painting','printmaking', 'photography & video','sculpture & metal'],
  'Performing Arts' : ['Organizations', 'Dance', 'Music', 'Theatre', "Other"],
  'Literary Arts' : ['Organizations', 'Individuals'],
  'Museums & Galleries' : ['Museums', 'Galleries', 'Regional Museums'],
  'Open Studios' : ["other",'clay & wood','digital arts','drawing & paper arts','fiber arts','jewelry & glass','mixed media','organizations','painting','printmaking', 'photography & video','sculpture & metal'],
  'Classes' : ['Kids', 'Visual Arts', 'Performing Arts', 'Literary Arts', 'Other']
}
function main_fields(){
    jQuery.each(categories, function (name, value) {
    onclick_function = "onclick='sub_fields(&quot;" + name + "&quot;)'"
    var field = "<li class='main_field " + name.split(" ").join("_").replace("&","") +"' role='presentation' "+ onclick_function + ">" + "<a class='main_field'>" + name + "</a>" + "</li>";
    jQuery('.main_fields').append(field);
});
  }

function sub_fields(main_field){
    main_query(main_field)
    jQuery('.sub_fields').text(' ');
    jQuery.each(categories[main_field], function (name, value) {

      onclick_function = "onclick='main_query(&quot;" + main_field + "&quot;" + ',' + "&quot;" + value + "&quot;)'"
      var field = "<li class='sub_field " + value.split(" ").join("_").replace("&","") +"' role='presentation' "+ onclick_function + ">" + "<a class='sub_field'>" + value + "</a>" + "</li>";

      jQuery('.sub_fields').append(field);
});
  }


jQuery("#search_submit").click(function (search_form) {
   search(jQuery('#search').val());
});

jQuery('#search').keyup(function(search_form){
  search(jQuery('#search').val());
});


main_fields();
main_query();
get_pagination_offset();



</script>

<?php
$GOOGLE_MAPS_KEY = "AIzaSyBqjvIk3rlM3YzM2vf7gDBYmfwXJaQMvw8"
?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&&key="+ <?php echo $GOOGLE_MAPS_KEY?> + "></script>
<script type="text/javascript">

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	jQuery.el (jQuery element)
*  @return	n/a
*/

function new_map( jQueryel, center ) {

	// var
	var jQuerymarkers = jQueryel.find('.marker');


	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};


	// create map
	var map = new google.maps.Map( jQueryel[0], args);


	// add a markers reference
	map.markers = [];


	// add markers
	jQuerymarkers.each(function(){

    	add_marker( jQuery(this), map );

	});


	// center map
	center_map( map );


	// return
	return map;

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( jQuerymarker, map ) {
	// var
	var latlng = new google.maps.LatLng( jQuerymarker.attr('data-lat'), jQuerymarker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( jQuerymarker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: jQuerymarker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	jQuery.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;


var map_create = function map_create(){jQuery('.map_contains').each(function(){

		// create map
		map = new_map( jQuery(this) );


	})};
</script>
