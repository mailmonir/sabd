
    <div class="vd_container">
        <div class="vd_content clearfix">
            <div class="vd_head-section clearfix">
                <div class="vd_panel-header">
                    <ul class="breadcrumb">
                        <li><a href="index-2.html">Home</a> </li>
                        <li><a href="pages-custom-product.html">Pages</a> </li>
                        <li class="active">User Profile Form</li>
                    </ul>
                    <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code."
                        data-step=5 data-position="left">
                        <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip"
                            data-placement="bottom" class="remove-navbar-button menu">
                            <i class="fa fa-arrows-h"></i> </div>
                        <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip"
                            data-placement="bottom" class="remove-header-button menu">
                            <i class="fa fa-arrows-v"></i> </div>
                        <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle"
                            data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu">
                            <i class="glyphicon glyphicon-fullscreen"></i> </div>

                    </div>

                </div>
            </div>
            <div class="vd_title-section clearfix">
                <div class="vd_panel-header">
                    <h1>User Profile Form</h1>
                    <small class="subtitle">Form for user profile</small>
                </div>
            </div>
            <div class="vd_content-section clearfix">
                <div class="row">
                    <div class="col-sm-12">
                    <div class="panel widget light-widget">
                <div class="panel-heading no-title"> </div>
                <form class="form-horizontal" action="" role="form" enctype="multipart/form-data" method="post" id="profile-form">
                @csrf
                    <div class="panel-body">
                        <div class="alert alert-danger vd_hidden">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            <i class="icon-cross"></i>
                        </button>
                        <span class="vd_alert-icon">
                            <i class="fa fa-exclamation-circle vd_red"></i>
                        </span>
                        <strong>{{ __('Oh snap!') }}</strong>
                        <span id="vMessage">{{ __('Change a few things up and try submitting again.') }}</span>
                    </div>
                    <div class="alert alert-success vd_hidden">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            <i class="icon-cross"></i>
                        </button>
                        <span class="vd_alert-icon">
                            <i class="fa fa-check-circle vd_green"></i>
                        </span>
                        <strong id="successMessage">{{ __('') }}</strong>
                    </div>    

                    <h2 class="mgbt-xs-20"> Profile:
                        @if(Auth::guard('admin')->check())
                        <span class="font-semibold">{{$user->fname}} {{$user->lname}}</span>
                        @else
                        <span class="font-semibold">{{$user->company}}</span>
                        @endif
                    </h2>
                    <br>
                    <div class="row">
                        <div class="col-sm-3 mgbt-xs-20">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-img text-center mgbt-xs-15">
                                        <img alt="example image" src="{{Storage::url($user->avatar)}}" id="profile-image"> </div>
                                    <div class="form-img-action text-center mgbt-xs-20">
                                        <label class="btn vd_btn  vd_bg-blue">
                                            <i class="fa fa-cloud-upload append-icon"></i>Upload</a>
                                            <input type="file" hidden style="display:none" name="avatar">
                                        </label>
                                    </div>

                                    <br>
                                    <div>
                                        <table class="table table-striped table-hover">
                                            <tbody>
                                                <tr>
                                                    <td style="width:60%;">Status</td>
                                                    @if($user->status == 1)
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    @else
                                                    <td>
                                                        <span class="label label-danger">Inactive</span>
                                                    </td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Member Since</td>
                                                    <td> {{Carbon::createFromFormat('Y-m-d H:i:s', $user->created_at)->year}} </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            @if(!Auth::guard('admin')->check())
                            <h3 class="mgbt-xs-15">Company Details</h3>
                            @else
                            <h3 class="mgbt-xs-15">Admin Details</h3>
                            @endif

                            @if(!Auth::guard('admin')->check())
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Company Name</label>
                                <div class="col-sm-9 controls">
                                    <div class="row mgbt-xs-0">
                                        <div class="col-xs-9">
                                            <input type="text" id="company" name="company", placeholder="company", value="{{$user->company}}" readonly="">
                                        </div>
                                        <!-- col-xs-12 -->

                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- col-sm-10 -->
                            </div>
                            <!-- form-group -->
                            @endif

                            @if(Auth::guard('admin')->check())
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Full Name</label>
                                <div class="col-sm-9 controls">
                                    <div class="row mgbt-xs-0">
                                        <div class="col-xs-5">
                                            <input type="text" id="fname" name="fname", placeholder="first name", value="{{$user->fname}}">
                                        </div>
                                        <div class="col-xs-4">
                                            <input type="text" id="lname" name="lname", placeholder="last name", value="{{$user->lname}}">
                                        </div>
                                        <!-- col-xs-9 -->
                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- col-sm-10 -->
                            </div>
                            <!-- form-group -->
                            @endif

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Address</label>
                                <div class="col-sm-9 controls">
                                    <div class="row mgbt-xs-0">
                                        <div class="col-xs-9">
                                            <input type="text" id="address" name="address", placeholder="address", value="{{$user->address}}">
                                        </div>
                                        <!-- col-xs-9 -->

                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- col-sm-10 -->
                            </div>
                            <!-- form-group -->

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Phone</label>
                                <div class="col-sm-9 controls">
                                    <div class="row mgbt-xs-0">
                                        <div class="col-xs-9">
                                            <input type="text" id="phone" name="phone", placeholder="phone", value="{{$user->phone}}">
                                        </div>
                                        <!-- col-xs-12 -->

                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- col-sm-10 -->
                            </div>
                            <!-- form-group -->

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9 controls">
                                    <div class="row mgbt-xs-0">
                                        <div class="col-xs-9">
                                            <input type="email" id="email" name="email", placeholder="email", value="{{$user->email}}">
                                        </div>
                                        <!-- col-xs-12 -->

                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- col-sm-10 -->
                            </div>
                            <!-- form-group -->
                            @if(!Auth::guard('admin')->check())
                            <hr>
                            <h3 class="mgbt-xs-15">Contact Person Details</h3>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Full Name</label>
                                <div class="col-sm-9 controls">
                                    <div class="row mgbt-xs-0">
                                        <div class="col-xs-5">
                                            <input type="text" id="fname" name="fname", placeholder="first name", value="{{$user->fname}}">
                                        </div>
                                        <div class="col-xs-4">
                                            <input type="text" id="lname" name="lname", placeholder="last name", value="{{$user->lname}}">
                                        </div>
                                        <!-- col-xs-9 -->
                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- col-sm-10 -->
                            </div>
                            <!-- form-group -->
                            @endif

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Designation</label>
                                <div class="col-sm-9 controls">
                                    <div class="row mgbt-xs-0">
                                        <div class="col-xs-9">
                                            <input type="text" id="designation" name="designation", placeholder="designation", value="{{$user->designation}}">
                                        </div>
                                        <!-- col-xs-12 -->

                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- col-sm-10 -->
                            </div>
                            <!-- form-group -->

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Gender</label>
                                <div class="col-sm-9 controls">
                                    <div class="row mgbt-xs-0">
                                        <div class="col-xs-9">
                                            <span class="vd_radio radio-info">
                                                <input type="radio" value="1" id="optionsRadios3" name="gender" @if($user->gender == 1) {{ 'checked'}} @endif>
                                                <label for="optionsRadios3"> Male </label>
                                            </span>
                                            <span class="vd_radio  radio-danger">

                                                <input type="radio" value="0" id="optionsRadios4" name="gender" @if($user->gender == 0) {{ 'checked'}} @endif>
                                                <label for="optionsRadios4"> Female </label>
                                            </span>


                                        </div>
                                        <!-- col-xs-9 -->

                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- col-sm-10 -->
                            </div>
                            <!-- form-group -->

                            @if(!Auth::guard('admin')->check())
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9 controls">
                                    <div class="row mgbt-xs-0">
                                        <div class="col-xs-9">
                                            <input type="email" id="cp_email" name="cp_email", placeholder="email", value="{{$user->cp_email}}">

                                        </div>
                                        <!-- col-xs-12 -->

                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- col-sm-10 -->
                            </div>
                            <!-- form-group -->
                            @endif

                            <hr>
                            <h3 class="mgbt-xs-15">Confidential</h3>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Change Password</label>
                                <div class="col-sm-9 controls">
                                    <div class="row mgbt-xs-0">
                                        <div class="col-xs-9">
                                            <input type="password" class="width-50" placeholder="password"  id="pass" name="pass" disabled>
                                        </div>
                                        <!-- col-xs-12 -->
                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- col-sm-10 -->
                            </div>
                            <!-- form-group -->

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Change Password</label>
                                <div class="col-sm-9 controls">
                                    <div class="row mgbt-xs-0">
                                        <div class="col-xs-9">
                                            <input type="password" class="width-50" placeholder="password"  id="pass_confirmation" name="pass_confirmation" disabled>
                                        </div>
                                        <!-- col-xs-12 -->
                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- col-sm-10 -->
                            </div>
                            <!-- form-group -->

                            <div class="form-group">
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-sm-9 controls">
                                    <div class="row mgbt-xs-0">
                                        <div class="col-xs-9">
                                            <button class="btn vd_btn vd_bg-green" type="button" id="cp">
                                                <span class="menu-icon">
                                                    <i class="fa fa-fw fa-check"></i>
                                                </span> Change Password</button>
                                            <button class="btn vd_btn vd_bg-green" type="button" id="discard" style="display:none;">
                                                <span class="menu-icon">
                                                    <i class="fa fa-fw fa-check"></i>
                                                </span> Discard</button>
                                            <button class="btn vd_btn vd_bg-green" type="submit" id="passsave" style="display:none;">
                                                <span class="menu-icon">
                                                    <i class="fa fa-fw fa-check"></i>
                                                </span> Save</a>
                                            </button>
                                        </div>
                                        <!-- col-xs-12 -->
                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- col-sm-10 -->
                            </div>
                            <!-- form-group -->
                        </div>
                        <!-- col-sm-12 -->
                    </div>
                    <!-- row -->

                </div>
                    <!-- panel-body -->
                    <div class="pd-20">
                        <button class="btn vd_btn vd_bg-green col-md-offset-3" type="submit" id="profile-update">
                            <span class="menu-icon">
                                <i class="fa fa-fw fa-check"></i>
                        </span> Finish</button>
                    </div>
                </form>
            </div>
            <!-- Panel Widget --> 
                    </div>
                    <!-- col-sm-12-->
                </div>
                <!-- row -->

            </div>
            <!-- .vd_content-section -->

        </div>
        <!-- .vd_content -->
    </div>
    <!-- .vd_container -->

