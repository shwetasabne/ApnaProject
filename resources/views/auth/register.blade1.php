@extends('master.welcome')

@section ('content')

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <!-- jQuery -->
<script src="/../bootstrap_assets/js/jquery.js"></script>

<script src="/../bootstrap_assets/js/bootstrap.min.js"></script>
	<div class="container">
		<div class="row" style="padding-top: 60px">
			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
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
                                    <hr>
                                    Already Registered ?  <a href="#">Login here</a>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
		</div>
	</div>
@stop
	


