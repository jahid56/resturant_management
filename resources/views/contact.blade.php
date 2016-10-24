@include('menubar')
        </br>
</br>
</br>
</br>
</br>
</br>
<!-- <script src="https://use.fontawesome.com/43d9f1272a.js"></script> -->
<div  class="container">
    <div class="row">
        <div class="col-md-8" style="background-color: #E6EFF2;">
        <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div>
            {!!  Form::open(array('url' => 'send','class'=>"form-horizontal"));!!}
            
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   
                        <legend class="text-center header">Contact us</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user"></i></span>
                            <div class="col-md-8">
                            {{ $errors->first('name') }}
                                <input id="fname" name="name" type="text" placeholder="Your Name" class="form-control input-lg">
                            </div>
                        </div>
                      

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o"></i></span>
                            <div class="col-md-8">
                            {{ $errors->first('email') }}
                                <input id="email" name="email" type="email" placeholder="Email Address" class="form-control input-lg">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                            {{ $errors->first('phone') }}
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-lg">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                            {{ $errors->first('message') }}
                                <textarea class="form-control input-lg" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                  
                {!!  Form::close(); !!}
            </div>
        </div>
    </div>


