@extends ('master.welcome')

@section ('content')

<div class="container">
    <div class="row" style="padding-top: 100px; padding-bottom: 40px">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input class="form-control" id="name" placeholder="Enter name" required="required" type="text">
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input class="form-control" id="email" placeholder="Enter email" required="required" type="email"></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                                <option value="product">Volunteer</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span>&nbsp;Our office</legend>
            <address>
                <strong>Buy and Sell, Inc.</strong><br>
                Anywhere we find Wifi!<br>
                Around the Globe, 00000<br>
            </address>
            <address>
                <strong>Phone</strong><br>
                <a>(123) 456-7890</a>
            </address>
            <a href="http://www.facebook.com/yashodhan.chinchore"><img src="/images/facebook.jpeg"></a>
            <a href="https://twitter.com/"><img src="/images/twitter.jpeg"></a>
            <a href="https://plus.google.com/108826186424756990365"><img src="/images/google.jpeg"></a>
            </form>
        </div>
    </div>
</div>

@stop
