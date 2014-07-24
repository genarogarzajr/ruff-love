@extends('layouts.updated-master')
@section('topscript')
<style>

  
    .form_hover {
        padding: 0px;
        position: relative;
        overflow: hidden;
        height: 230px;
    }

        .form_hover:hover .header {
            opacity: 1;
            transform: translateY(-172px);
            -webkit-transform: translateY(-172px);
            -moz-transform: translateY(-172px);
            -ms-transform: translateY(-172px);
            -o-transform: translateY(-172px);
        }

        .form_hover img {
            z-index: 4;
        }

        .form_hover .header {
            position: absolute;
            top: 170px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            transition: all 0.3s ease;
            width: 100%;
        }

        .form_hover .blur {
            height: 200px;
            z-index: 5;
            position: absolute;
            width: 100%;
        }

        .form_hover .caption-text {
            z-index: 10;
            color: #fff;
            position: absolute;
            height: 260px;
            text-align: center;
            top: -10px;
            width: 100%;
        }
</style>
@stop




@section('content')
<div class="container">
    <form class="form-horizontal">
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        <div class="checkbox">
          <label>
            <input type="checkbox"> Checkbox
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Textarea</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Radios</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
            Option one is this
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Option two can be something else
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Selects</label>
      <div class="col-lg-10">
        <select class="form-control" id="select">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        <br>
        <select multiple="" class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>



    <div class="row">
        <div class="col-lg-4">
            <div class="form_hover " style="background-color: #000;">
                <p style="text-align: center;">
                    <img class='imgCenter' src="/includes/DogImages/White-Dog.jpg" class="img-responsive">
                </p>
                <div class="header">
                    <div class="blur"></div>
                    <div class="header-text">
                        <div class="panel panel-success" style="height: 247px;">
                            <div class="panel-heading">
                                <h3 style="color: #000;">Dog Details</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    Last login Date:<b>02/09/2013</b>
                                </div>
                                <div class="form-group">
                                    Download Count:<b>104</b>
                                </div>
                                <div class="form-group">
                                    User Rating:<br />
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form_hover " style="background-color: #000;">
                <p style="text-align: center;">
                   <img class='imgCenter' src="/includes/DogImages/happydog.jpeg" class="img-responsive">
                </p>
                <div class="header">
                    <div class="blur"></div>
                    <div class="header-text">
                        <div class="panel panel-success" style="height: 247px;">
                            <div class="panel-heading">
                                <h3 style="color: #000;">User Details</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    Last login Date:<b>03/07/2013</b>
                                </div>
                                <div class="form-group">
                                    Download Count:<b>324</b>
                                </div>
                                <div class="form-group">
                                    User Rating:<br />
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>                                    
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form_hover " style="background-color: #000;">
                <p style="text-align: center;">
<!--                     <i class="fa fa-user" style="font-size: 147px;"></i> -->
                    <img class="imgCenter" src="/includes/DogImages/greydog.jpg" class="img-responsive">
                </p>
                <div class="header">
                    <div class="blur"></div>
                    <div class="header-text">
                        <div class="panel panel-success" style="height: 247px;">
                            <div class="panel-heading">
                                <h3 style="color: #000;">User Details</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    Last login Date:<b>01/09/2013</b>
                                </div>
                                <div class="form-group">
                                    Download Count:<b>743</b>
                                </div>
                                <div class="form-group">
                                    User Rating:<br />
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="form_hover " style="background-color: #000;">
                <p style="text-align: center;">
                   <img class='imgCenter' src="/includes/DogImages/dresseddog.png" class="img-responsive">
                </p>
                <div class="header">
                    <div class="blur"></div>
                    <div class="header-text">
                        <div class="panel panel-success" style="height: 260px;">
                            <div class="panel-heading">
                                <h3 style="color: #000;">User Details</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    Last login Date:<b>02/09/2013</b>
                                </div>
                                <div class="form-group">
                                    Download Count:<b>104</b>
                                </div>
                                <div class="form-group">
                                    User Rating:<br />
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form_hover " style="background-color: #000;">
                <p style="text-align: center;">
                    <img class='imgCenter' src="/includes/DogImages/pug.jpeg" class="img-responsive">
                </p>
                <div class="header">
                    <div class="blur"></div>
                    <div class="header-text">
                        <div class="panel panel-success" style="height: 247px;">
                            <div class="panel-heading">
                                <h3 style="color: #000;">User Details</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    Last login Date:<b>03/07/2013</b>
                                </div>
                                <div class="form-group">
                                    Download Count:<b>324</b>
                                </div>
                                <div class="form-group">
                                    User Rating:<br />
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>                                    
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form_hover " style="background-color: #000;">
                <p style="text-align: center;">
                    <img class='imgCenter' src="/includes/DogImages/waterdog.gif" class="img-responsive">
                </p>
                <div class="header">
                    <div class="blur"></div>
                    <div class="header-text">
                        <div class="panel panel-success" style="height: 247px;">
                            <div class="panel-heading">
                                <h3 style="color: #000;">User Details</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    Last login Date:<b>01/09/2013</b>
                                </div>
                                <div class="form-group">
                                    Download Count:<b>743</b>
                                </div>
                                <div class="form-group">
                                    User Rating:<br />
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
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