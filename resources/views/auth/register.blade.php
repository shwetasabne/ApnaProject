@extends('master.welcome')

@section ('content')

	<div class="container">
		<div class="row" style="padding-top: 60px">
			<div class="col-lg-8">
			     <div class="intro-message">
                    <h1>Buy Sell</h1>
                    <hr>
                    <h3>Your one stop shop !</h3>
                    <hr>
                    <div class="col-lg-4">
                         <img src="../usersicon.png" style="height:150px;">
                    </div>
                    <div class="col-lg-4">
                        <h3>Over 5000 users</h3>
                    </div>

                 </div>
			</div>
			<div class="col-lg-4">
				<!-- Begin -->
				<div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>   Register Yourself </strong>  
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <br>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input type="text" class="form-control" placeholder="Desired Username">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Enter Password">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Retype Password">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input style="width:50%" id="tags" class="form-control" placeholder="University" list="university">
                                <datalist id="university">
                                    <option value="University of Texas at Dallas">
                                    <option value="Carneigie Mellon">
                                    <option value="Georgia Tech">
                                    <option value="Syracuse Univ">
                                    <option value="Columbia">
                                    <option value="Colorado State">
                                    <option value="U Pitt">
                                    <option value="SJSU">
                                    <option value="NCSU">
                                    <option value="NEU">
                                </datalist>
                            </div>
                            <a href="#" class="btn btn-success ">Register Me</a>
                        </form>
                     </div>      
                </div>
				<!-- End -->
			
			</div>
		</div>
	</div>
@stop