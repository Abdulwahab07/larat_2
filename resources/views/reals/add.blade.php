@extends('layouts.app_1')


@section('content')
    <br/>
    <br/>
	<!--<div class="row">
        <div class="col-md-9">
            <div class="portlet light portlet-fit ">
				<div class="portlet-body bg-white">
                    <div class="mt-element-step">
						<div class="row step-line">
							<div class="col-md-2 mt-step-col first done">
								<div class="mt-step-number bg-white">1</div>
								<div class="mt-step-title uppercase font-grey-cascade">Setup</div>
							</div>
							<div class="col-md-2 mt-step-col done">
								<div class="mt-step-number bg-white">2</div>
								<div class="mt-step-title uppercase font-grey-cascade">Develop</div>
							</div>
							<div class="col-md-2 mt-step-col done">
								<div class="mt-step-number bg-white">3</div>
								<div class="mt-step-title uppercase font-grey-cascade">Testing</div>
							</div>
							<div class="col-md-2 mt-step-col done">
								<div class="mt-step-number bg-white">4</div>
								<div class="mt-step-title uppercase font-grey-cascade">Testing</div>
							</div>
							<div class="col-md-2 mt-step-col active">
								<div class="mt-step-number bg-white">5</div>
								<div class="mt-step-title uppercase font-grey-cascade">Testing</div>
							</div>
							<div class="col-md-2 mt-step-col last">
								<div class="mt-step-number bg-white">6</div>
								<div class="mt-step-title uppercase font-grey-cascade">Launch</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->	

	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<span>Form Stuff</span>
			</li>
		</ul>
		<div class="page-toolbar">
			<div class="btn-group pull-right">
				<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
					<i class="fa fa-angle-down"></i>
				</button>
				<ul class="dropdown-menu pull-right" role="menu">
					<li>
						<a href="#">
							<i class="icon-bell"></i> Action</a>
					</li>
					<li>
						<a href="#">
							<i class="icon-shield"></i> Another action</a>
					</li>
					<li>
						<a href="#">
							<i class="icon-user"></i> Something else here</a>
					</li>
					<li class="divider"> </li>
					<li>
						<a href="#">
							<i class="icon-bag"></i> Separated link</a>
					</li>
				</ul>
			</div>
		</div>
    </div>

    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-home"></i>{{__('interfaces.Add_new_real')}} </div>
            <div class="tools">
                <a href="javascript:;" class="collapse"> </a>
                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                <a href="javascript:;" class="reload"> </a>
                <a href="javascript:;" class="remove"> </a>
            </div>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form action="#" class="horizontal-form">
                <div class="form-body">
                    <h3 class="form-section">{{__('interfaces.Real_details')}}</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">First Name</label>
                                <input type="text" id="firstName" class="form-control" placeholder="Chee Kin">
                                <span class="help-block"> This is inline help </span>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group has-error">
                                <label class="control-label">Last Name</label>
                                <input type="text" id="lastName" class="form-control" placeholder="Lim">
                                <span class="help-block"> This field has error. </span>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Gender</label>
                                <select class="form-control">
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                </select>
                                <span class="help-block"> Select your gender </span>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Date of Birth</label>
                                <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Category</label>
                                <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                    <option value="Category 1">Category 1</option>
                                    <option value="Category 2">Category 2</option>
                                    <option value="Category 3">Category 5</option>
                                    <option value="Category 4">Category 4</option>
                                </select>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Membership</label>
                                <div class="radio-list">
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Option 1 </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Option 2 </label>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <h3 class="form-section">Address</h3>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <label>Street</label>
                                <input type="text" class="form-control"> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control"> </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" class="form-control"> </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Post Code</label>
                                <input type="text" class="form-control"> </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country</label>
                                <select class="form-control"> </select>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                </div>
                <div class="form-actions right">
                    <button type="button" class="btn default">Cancel</button>
                    <button type="submit" class="btn blue">
                        <i class="fa fa-check"></i> Save</button>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>

@endsection