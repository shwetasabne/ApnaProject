@extends('master.welcome')

@section ('content')

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <!-- jQuery -->
<script src="/../bootstrap_assets/js/jquery.js"></script>

<script src="/../bootstrap_assets/js/bootstrap.min.js"></script>

<script src="/../bootstrap_3/js/carousel.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
       $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });

	});
</script>

	<div class="container">
		<div class="row" style="padding-top: 60px">

			<div class="col-lg-8">
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Maine Pyar Kiya BlueRay DVD</h3>
				  </div>
				  <div class="panel-body">
					    <div id="carousel-bounding-box">
	                                <div class="carousel slide" id="myCarousel">
	                                    <!-- Carousel items -->
	                                    <div class="carousel-inner">
	                                        <div class="item active" data-slide-number="0">
	                                        <img src="http://placehold.it/770x300&text=one"></div>

	                                        <div class="item" data-slide-number="1">
	                                        <img src="http://placehold.it/770x300&text=two"></div>

	                                        <div class="item" data-slide-number="2">
	                                        <img src="http://placehold.it/770x300&text=three"></div>

	                                        <div class="item" data-slide-number="3">
	                                        <img src="http://placehold.it/770x300&text=four"></div>

	                                        <div class="item" data-slide-number="4">
	                                        <img src="http://placehold.it/770x300&text=five"></div>

	                                        <div class="item" data-slide-number="5">
	                                        <img src="http://placehold.it/770x300&text=six"></div>
	                                    </div><!-- Carousel nav -->
	                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
	                                    </a>
	                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
	                                    </a>                                
	                                </div>
	                    </div>
	                    <div class="row hidden-xs" id="slider-thumbs">
                        <!-- Bottom switcher of slider -->
	                        <ul class="hide-bullets">
	                            <li class="col-sm-2">
	                                <a class="thumbnail" id="carousel-selector-0"><img src="http://placehold.it/170x100&text=one"></a>
	                            </li>

	                            <li class="col-sm-2">
	                                <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/170x100&text=two"></a>
	                            </li>

	                            <li class="col-sm-2">
	                                <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x100&text=three"></a>
	                            </li>

	                            <li class="col-sm-2">
	                                <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/170x100&text=four"></a>
	                            </li>

	                            <li class="col-sm-2">
	                                <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x100&text=five"></a>
	                            </li>

	                            <li class="col-sm-2">
	                                <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/170x100&text=six"></a>
	                            </li>
	                        </ul>                 
                		</div>
				  </div>
				  <div class="panel-footer">
				  	Prem (Salman Khan) lost his parents at an early age. He lives with his elder brother Rajesh (Mohnish Bahl) and uncle Kailashnath (Alok Nath). Rajesh manages the family business and his family is on the look-out for a suitable bride for him. Professor Siddharth Chaudhary (Anupam Kher) and Mrs. Chaudhary (Reema Lagoo) have two daughters, Pooja (Renuka Shahane) and Nisha (Madhuri Dixit). The Chaudhary couple and Kailashnath are old friends who meet again after several years. They arrange a marriage between Rajesh and Pooja. From their first meeting, Nisha and Prem start bickering lightheartedly with each other, and the fun and mischief continues throughout Pooja and Rajesh's wedding.

Prem has an amicable relationship with his warm-hearted sister-in-law. In time, Pooja and Rajesh discover that they are expecting a child. Professor and Mrs. Chaudhary are unable to come to Kailashnath's house for the ceremony marking the impending arrival of the baby. They send Nisha instead, who is present at the birth. Meanwhile, Nisha and Prem fall in love with each other, but keep it a secret. Professor and Mrs. Chaudhary come over to Kailashnath's house to celebrate the birth of their grandchild. When the time comes to part, they leave dejectedly, especially Prem. He and Nisha promise to each other that they will soon get together for ever.

One day, Pooja is invited to stay at her parents' house, and Prem takes her there. When they arrive, Pooja learns that Prem and Nisha are in love, and gives Nisha a necklace as a token, promising to marry them. Shortly afterwards, Pooja goes to answer the phone, and she accidentally slips and falls down the stairs, and dies from a head injury. Everybody is shattered by the tragedy.

Nisha takes good care of her dead sister's son. Hence, her parents and Kailashnath feel that Nisha will be a great mother to the baby. They decide to marry Nisha off with Rajesh. Nisha overhears her parents talking about her marrying into Kailashnath's family. She mistakenly thinks that they are discussing her marriage to Prem, so she agrees. Later, at a pre-nuptial ceremony, she finds out that she is actually supposed to get married to Rajesh.

Prem and Nisha vow to sacrifice their love for Rajesh and the baby. Moments before the wedding is to begin, Nisha asks her dog Tuffy to give Prem the necklace that Pooja had given her, along with a letter. The letter and necklace fall into the hands of Rajesh. When he realizes that Prem and Nisha love each other, he halts the wedding and confronts both of them. In the end, Nisha and Prem marry each other with the consent of their families. The film's title Hum Aapke Hain Koun..! appears and then rephrases to Hum Aapke Hain! (English: I am yours!) at the end of the film when Prem and Nisha get married.
				  </div>
				</div>
			</div>


			<div class="col-lg-1 user-details">
		        <div class="user-image">
            		<img src="http://www.gravatar.com/avatar/2ab7b2009d27ec37bffee791819a090c?s=100&d=mm&r=g" alt="Karan Singh Sisodia" title="Karan Singh Sisodia" class="img-circle">
		        </div>
			</div>
			<div class="col-lg-3">
				<div><i>username</i></div>
				<div id="stars-existing" class="starrr" data-rating='4'>
		            	<i class="fa fa-star-o"></i>
		            	<i class="fa fa-star-o"></i>
		            	<i class="fa fa-star-o"></i>
		            	<i class="fa fa-star-o"></i>
		        </div>
		        <div><i>University of Pappu</i></div>
			</div>
			<br/><br/><br/>
			<div class="col-lg-4">
				<table>
					<tr>
						<td>
							Location of Sale
						</td>
						<td>
							Pappu University
						</td>
					</tr>
					<tr>
						<td>
							Delivery
						</td>
						<td>
							No
						</td>
					</tr>
					<tr>
						<td>
							Pick Up
						</td>
						<td>
							Yes
						</td>
					</tr>
					<tr>
						<td>
							Free ?
						</td>
						<td>
							No
						</td>
					</tr>
					<tr>
						<td>
							 <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Express Interest</span></a>
						</td>
						<td>
							 <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Add to Wishlist</span></a>
						</td>
					</tr>
				</table>
			</div>

			<hr>
			<div class="col-lg-4">
				<hr>
				<h2>You may also like...</h2>
			</div>
			<div class="col-lg-2">
				<img src="http://placehold.it/170x100&text=one">
			</div>
			<div class="col-lg-2">
				Info Image 1
			</div>

			<div class="col-lg-4">
				<hr>
			</div>
			<div class="col-lg-2">
				<img src="http://placehold.it/170x100&text=one">
			</div>
			<div class="col-lg-2">
				Info Image 1
			</div>

			<div class="col-lg-4">
				<hr>
			</div>
			<div class="col-lg-2">
				<img src="http://placehold.it/170x100&text=one">
			</div>
			<div class="col-lg-2">
				Info Image 1
			</div>
			<div class="col-lg-4">
				<br/></br/>
				<a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">See More</span></a>
			</div>


		</div>
	</div>


