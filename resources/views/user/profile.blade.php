@extends('master.welcome')

@section ('content')

	<div class="container">
		<div class="row" style="padding-top: 60px">
			
			<!--User photo-->
			<div class="col-lg-1 user-details">
				<div class="user-image">
            		<img src="http://www.gravatar.com/avatar/2ab7b2009d27ec37bffee791819a090c?s=100&d=mm&r=g" alt="Karan Singh Sisodia" title="Karan Singh Sisodia" class="img-circle">
		        </div>
			</div>

			<!-- User info name, email, etc-->
			<div class="col-lg-4">
				<table>
					<tr>
						<td>
							Name
						</td>
						<td>
							Rahul Gandhi
						</td>
					</tr>
					<tr>
						<td>
							University
						</td>
						<td>
							University of Pappu
						</td>
					</tr>
					<tr>
						<td>
							Email
						</td>
						<td>
							pappu@timesnow.com
						</td>
					</tr>
					<tr>
						<td>
							Karma
						</td>
						<td>
							<div id="stars-existing" class="starrr" data-rating='4'>
				            	<i class="fa fa-star-o"></i>
				            	<i class="fa fa-star-o"></i>
				            	<i class="fa fa-star-o"></i>
				            	<i class="fa fa-star-o"></i>
		        			</div>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-lg-12">
				<hr>
			</div>
			<!-- Wish list panel -->
			<div class="col-lg-12">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Wishlist Items(3)</h3>
					</div>
					<div class="panel-body">
					    Panel content
					</div>
					<div class="panel-footer">
						 <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">See More</span></a>
					</div>
				</div>
			</div>

			<!-- My Merchandise (2) -->
			<div class="col-lg-12">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">My Merchandise(2)</h3>
					</div>
					<div class="panel-body">
					    Panel content
					</div>
					<div class="panel-footer">
						 <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">See More</span></a>
					</div>
				</div>
			</div>

			<!-- Sought Items -->
			<div class="col-lg-12">
				<div class="panel panel-warning">
					<div class="panel-heading">
						<h3 class="panel-title">Sought Items(10)</h3>
					</div>
					<div class="panel-body">
					    Panel content
					</div>
					<div class="panel-footer">
						 <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">See More</span></a>
					</div>
				</div>
				
			</div>

			<!-- Bought Items -->
			<div class="col-lg-12">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title">Bought Items(0)</h3>
					</div>
					<div class="panel-body">
					    Panel content
					</div>
					<div class="panel-footer">
						 <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">See More</span></a>
					</div>
				</div>
				
			</div>

		</div>
	</div>

@stop
