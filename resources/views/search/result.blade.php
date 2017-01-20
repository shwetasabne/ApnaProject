@extends('master.welcome')

@section ('content')

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <!-- jQuery -->
    <script src="/../bootstrap_assets/js/jquery.js"></script>

    <script src="/../bootstrap_assets/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
    </script>
    
	<div class = "container">
		<div class="row" style="padding-top: 60px">

			<!--Category Name hyperlinks span 4 -->
			<div class="col-lg-4">
				<h4> Category Name : Keyword </h4>
			</div>

			<!--Sort buttons span 8 -->
			<div class="col-lg-8 navbar-right .pull-right" style="text-align: right;">
				Sort By : 
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						Price:Lowest to Highest
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Price:Highest to Lowest</a></li>
						<li><a href="#">Date:Newest to Oldest</a></li>
						<li><a href="#">Date:Oldest to Newest</a></li>
					</ul>
				</div>
				<div class="btn-group">
            		<a href="#" id="list" class="btn btn-default"><span class="glyphicon glyphicon-th-list">
            		</span>List</a> 
            		<a href="#" id="grid" class="btn btn-default"><span
                class="glyphicon glyphicon-th"></span>Grid</a>
        		</div>
			</div>

			<!--New line horizontal divider -->
			<div class="col-lg-12">
				<hr/>
			</div>

			<!--Div class on left for search info-->
			<div class="col-lg-2 vertical-line">
				<h4>Search Filters</h4>
				<div class="checkbox">
    				<label>
      					<input type="checkbox"> Delivery ?
    				</label>
  				</div>
  				<div class="checkbox">
    				<label>
      					<input type="checkbox"> Pick Up ?
    				</label>
  				</div>
  				<div class="checkbox">
    				<label>
      					<input type="checkbox"> Free
    				</label>
  				</div>
  				<hr/>
				<div class="btn-group btn-group-sm" role="group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						10 miles
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">15 miles</a></li>
						<li><a href="#">20 miles</a></li>
						<li><a href="#">25 miles</a></li>
					</ul>
				</div>
				<br/>
				From University of Pappu
			</div>

			<!--Div class on right for actual search data-->
			<div class="col-lg-10">

				<div id="products" class="row list-group">
					<div class="item  col-xs-4 col-lg-4">
			            <div class="thumbnail">
			                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
			                <div class="caption">
			                    <h4 class="group inner list-group-item-heading">
			                        Product title</h4>
			                    <p class="group inner list-group-item-text">
			                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
			                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			                    <div class="row">
			                        <div class="col-xs-12 col-md-6">
			                            <p class="lead">
			                                $21.000</p>
			                        </div>
			                        <div class="col-xs-12 col-md-6">
			                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			        <div class="item  col-xs-4 col-lg-4">
			            <div class="thumbnail">
			                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
			                <div class="caption">
			                    <h4 class="group inner list-group-item-heading">
			                        Product title</h4>
			                    <p class="group inner list-group-item-text">
			                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
			                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			                    <div class="row">
			                        <div class="col-xs-12 col-md-6">
			                            <p class="lead">
			                                $21.000</p>
			                        </div>
			                        <div class="col-xs-12 col-md-6">
			                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			        <div class="item  col-xs-4 col-lg-4">
			            <div class="thumbnail">
			                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
			                <div class="caption">
			                    <h4 class="group inner list-group-item-heading">
			                        Product title</h4>
			                    <p class="group inner list-group-item-text">
			                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
			                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			                    <div class="row">
			                        <div class="col-xs-12 col-md-6">
			                            <p class="lead">
			                                $21.000</p>
			                        </div>
			                        <div class="col-xs-12 col-md-6">
			                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			        <div class="item  col-xs-4 col-lg-4">
			            <div class="thumbnail">
			                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
			                <div class="caption">
			                    <h4 class="group inner list-group-item-heading">
			                        Product title</h4>
			                    <p class="group inner list-group-item-text">
			                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
			                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			                    <div class="row">
			                        <div class="col-xs-12 col-md-6">
			                            <p class="lead">
			                                $21.000</p>
			                        </div>
			                        <div class="col-xs-12 col-md-6">
			                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			        <div class="item  col-xs-4 col-lg-4">
			            <div class="thumbnail">
			                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
			                <div class="caption">
			                    <h4 class="group inner list-group-item-heading">
			                        Product title</h4>
			                    <p class="group inner list-group-item-text">
			                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
			                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			                    <div class="row">
			                        <div class="col-xs-12 col-md-6">
			                            <p class="lead">
			                                $21.000</p>
			                        </div>
			                        <div class="col-xs-12 col-md-6">
			                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			        <div class="item  col-xs-4 col-lg-4">
			            <div class="thumbnail">
			                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
			                <div class="caption">
			                    <h4 class="group inner list-group-item-heading">
			                        Product title</h4>
			                    <p class="group inner list-group-item-text">
			                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
			                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			                    <div class="row">
			                        <div class="col-xs-12 col-md-6">
			                            <p class="lead">
			                                $21.000</p>
			                        </div>
			                        <div class="col-xs-12 col-md-6">
			                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>			        			        
				</div>




			</div>

		</div>
	</div>
@stop