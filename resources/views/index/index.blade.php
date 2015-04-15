@extends ('master.welcome')

@section ('content')
   <!-- Header -->

    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

           <div class="row">
                <div class="col-lg-12">
                        <div class="intro-message">
                            <h1>Search</h1>
                            <hr class="intro-divider">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Categories <span class="caret"></span></button>
                                            <ul class="dropdown-menu dropdown-menu-left" role="menu">
                                              <li><a href="#">All</a></li>
                                              <li><a href="#">Apartments</a></li>
                                              <li><a href="#">Books</a></li>
                                              <li><a href="#">Car Pool</a></li>
                                              <li><a href="#">Electronics</a></li>
                                              <li><a href="#">Furniture</a></li>
                                              <li><a href="#">Study Supplies</a></li>
                                              <li><a href="#">Tickets</a></li>
                                              <li><a href="#">Vehicle</a></li>
                                            </ul>
                                </div>
                                <input type="text" class="form-control" aria-label="...">
                            </div>                       
                          <br/><br/><br/>
                          <div class="ui-widget" align="center">
                            
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

                          <br/><br/>

                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><span class="network-name">Go</span></a>
                            </li>
                            <li>
                               <a href="#" class="btn btn-default btn-lg"><span class="network-name">Reset</span></a>
                            </li>
                            <li>
                              <a href="#services" class="down-arrow"></a>
                            </li>
                        </ul>                   
                   
                     
                    </div>
                </div>
            </div>



        </div>
        <!-- /.container -->
                    <panel class="panel-css">
                        <div>HELLO WORLD</div>
                    </panel>
    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-a">
      <div class="container">
          <div class="row">
              <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Hot Potatoes!</h2>
              </div>
              <!-- starting carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                      <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>
                    <div class="col-md-12">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                      <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4 well"><img src="http://lorempixel.com/400/200/sports" alt="Chania" class="img-responsive"></div>
                      <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4 well"><img src="http://lorempixel.com/400/200/sports" alt="Chania" class="img-responsive"></div>
                      <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4 well"><img src="http://lorempixel.com/400/200/sports" alt="Chania" class="img-responsive"></div>
                      </div>

                      <div class="item">
                       <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4 well"><img src="http://lorempixel.com/400/200/" alt="Chania" class="img-responsive"></div>
                       <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4 well"><img src="http://lorempixel.com/400/200/" alt="Chania" class="img-responsive"></div>
                       <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4 well"><img src="http://lorempixel.com/400/200/" alt="Chania" class="img-responsive"></div>
                      </div>
                    
                      <div class="item">
                       <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4 well"><img src="http://lorempixel.com/400/200/" alt="Chania" class="img-responsive"></div>
                       <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4 well"><img src="http://lorempixel.com/400/200/" alt="Chania" class="img-responsive"></div>
                       <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4 well"><img src="http://lorempixel.com/400/200/" alt="Chania" class="img-responsive"></div>
                      </div>

                      <div class="item">
                       <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4 well"><img src="http://lorempixel.com/400/200/" alt="Chania" class="img-responsive"></div>
                       <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4 well"><img src="http://lorempixel.com/400/200/" alt="Chania" class="img-responsive"></div>
                       <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4 well"><img src="http://lorempixel.com/400/200/" alt="Chania" class="img-responsive"></div>
                      </div>
                    </div>


                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                    </div>
                </div>
              <!-- ending carousel -->

              </div>
              <a href="#about" class="down-arrow"></a>
          </div>

    </div>
    <!-- /.content-section-a -->
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Google Web Fonts and<br>Font Awesome Icons</h2>
                    <p class="lead">This template features the 'Lato' font, part of the <a target="_blank" href="http://www.google.com/fonts">Google Web Font library</a>, as well as <a target="_blank" href="http://fontawesome.io">icons from Font Awesome</a>.</p>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

	<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Wanna be friends ?!:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->


<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js">

  $('#myCarousel').carousel({
    interval: 40
  });

  $('.carousel .item').each(function(){
    var next = $(this).next();
    
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    if (next.next().length>0) {
   
        next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');
        
    }
    else {
        $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
       
    }
  });

   
</script>

@stop
