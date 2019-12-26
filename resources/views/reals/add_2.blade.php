@extends('layouts.app_1')


@section('content')
    <br/>
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="tabbable-line boxless tabbable-reversed">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_0" data-toggle="tab"> {{__('Real address')}} </a>
                    </li>
                    <li>
                        <a href="#tab_1" data-toggle="tab"> {{__('Real aspects')}} </a>
                    </li>
                    <li>
                        <a href="#tab_2" data-toggle="tab"> {{__('Real areas')}} </a>
                    </li>
                    <li>
                        <a href="#tab_3" data-toggle="tab"> {{__('Real boarders')}} </a>
                    </li>
                    <li>
                        <a href="#tab_4" data-toggle="tab"> {{__('Real documents')}} </a>
                    </li>
                    <li>
                        <a href="#tab_5" data-toggle="tab"> {{__('Real snaps')}} </a>
                    </li>
                    <li>
                        <a href="#tab_6" data-toggle="tab"> {{__('Real gurantees')}} </a>
                    </li>
                    <li>
                        <a href="#tab_7" data-toggle="tab"> {{__('Real facilities')}} </a>
                    </li>
                    <li>
                        <a href="#tab_8" data-toggle="tab"> {{__('Real services')}} </a>
                    </li>
                    <li>
                        <a href="#tab_9" data-toggle="tab"> {{__('Real prices')}} </a>
                    </li>
                    <li>
                        <a href="#tab_10" data-toggle="tab"> {{__('Real procuration')}} </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_0">
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-map-marker"></i> {{__('Add Address Details')}} </div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"> </a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                    <a href="javascript:;" class="reload"> </a>
                                    <a href="javascript:;" class="remove"> </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">{{__('city')}}</label>
                                            <div class="col-md-4">
                                                <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                    <option value="Category 1">{{__('Riyadh')}}</option>
                                                    <option value="Category 2">{{__('Abha')}}</option>
                                                    <option value="Category 3">{{__('Jeddah')}}</option>
                                                    <option value="Category 4">{{__('Dammam')}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">{{__('distirct')}}</label>
                                            <div class="col-md-4">
                                                <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                    <option value="Category 1">{{__('Riyadh')}}</option>
                                                    <option value="Category 2">{{__('Abha')}}</option>
                                                    <option value="Category 3">{{__('Jeddah')}}</option>
                                                    <option value="Category 4">{{__('Dammam')}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">{{__('planed')}}</label>
                                            <div class="col-md-4">
                                                <div class="radio-list">
                                                    <label></label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optionsRadios2" value="option1" checked/> {{__('certified')}} </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optionsRadios2" value="option2" /> {{__('not certified')}} </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">{{__('planed number')}}</label>
                                            <div class="col-md-2">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="{{__('planed number')}}"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">{{__('town')}}</label>
                                            <div class="col-md-4">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="{{__('town')}}"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">{{__('piece number')}}</label>
                                            <div class="col-md-2">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="{{__('piece number')}}"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">{{__('inscope')}}</label>
                                            <div class="col-md-4">
                                                <div class="radio-list">
                                                    <label></label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optionsRadios2" value="option1" checked/> {{__('yes')}} </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optionsRadios2" value="option2" /> {{__('no')}} </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">{{__('nearest')}}</label>
                                            <div class="col-md-4">
                                                <div class="input-icon right">
                                                    <input type="text" class="form-control" placeholder="{{__('nearest')}}"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">{{__('x axis')}}</label>
                                            <div class="col-md-2">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="{{__('x axis')}}"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">{{__('y axis')}}</label>
                                            <div class="col-md-2">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="{{__('y axis')}}"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- BEGIN STATIC PORTLET-->
                                            <div class="portlet light portlet-fit ">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class=" icon-layers font-yellow"></i>
                                                        <span class="caption-subject font-yellow bold uppercase">Static</span>
                                                    </div>
                                                    <div class="actions">
                                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                            <i class="icon-cloud-upload"></i>
                                                        </a>
                                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                            <i class="icon-wrench"></i>
                                                        </a>
                                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                            <i class="icon-trash"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="portlet-body" id="map"  style=" width: 100%;height: 400px;background-color: grey;">
                                                    <!--Here is Google Map-->
                                                </div>
                                            </div>
                                            <!-- END STATIC PORTLET-->
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="button" class="btn  grey-salsa btn-outline">{{__('Cancel')}}</button>
                                                <button type="submit" class="btn  blue">{{__('Submit and next')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_1">
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-info-circle"></i>{{__('Real aspects details')}}</div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"> </a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                    <a href="javascript:;" class="reload"> </a>
                                    <a href="javascript:;" class="remove"> </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">{{__('real type')}}</label>
                                            <div class="col-md-4">
                                                <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                    <option value="Category 1">{{__('pure')}}</option>
                                                    <option value="Category 2">{{__('building')}}</option>
                                                    <option value="Category 3">{{__('old building')}}</option>
                                                    <option value="Category 4">{{__('farm')}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">{{__('building type')}}</label>
                                            <div class="col-md-4">
                                                <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                    <option value="Category 1">{{__('concrete')}}</option>
                                                    <option value="Category 2">{{__('old')}}</option>
                                                    <option value="Category 3">{{__('concrete round')}}</option>
                                                    <option value="Category 4">{{__('old round')}}</option>
                                                    <option value="Category 4">{{__('with out')}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">{{__('building status')}}</label>
                                            <div class="col-md-4">
                                                <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                    <option value="Category 1">{{__('completed')}}</option>
                                                    <option value="Category 2">{{__('skeleton')}}</option>
                                                    <option value="Category 3">{{__('finished of')}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">{{__('age')}}</label>
                                            <div class="col-md-2">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="{{__('age number')}}"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">{{__('building details')}}</label>
                                            <div class="col-md-2">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="{{__('number of floor')}}"> </div></div>
                                            <div class="col-md-2"><div class="input-icon">
                                                        <input type="text" class="form-control" placeholder="{{__('number of apartment')}}"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">{{__('pure natural')}}</label>
                                            <div class="col-md-4">
                                                <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                    <option value="Category 1">{{__('stone')}}</option>
                                                    <option value="Category 2">{{__('interment')}}</option>
                                                    <option value="Category 2">{{__('flat')}}</option>
                                                    <option value="Category 3">{{__('slope')}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="button" class="btn  grey-salsa btn-outline">{{__('Cancel')}}</button>
                                                <button type="submit" class="btn  blue">{{__('Submit and next')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                        <br><br>
                    </div>
                    <div class="tab-pane" id="tab_2">
                        <div class="portlet box green-seagreen">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-table"></i>{{__('Real areas details')}}</div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"> </a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                    <a href="javascript:;" class="reload"> </a>
                                    <a href="javascript:;" class="remove"> </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                        <h3 class="margin-bottom-20">{{__('total area')}}</h3>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">{{__('total area')}}</label>
                                            <div class="col-md-4">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="{{__('total area in square meter')}}"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">{{__('building total area')}}</label>
                                            <div class="col-md-4">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="{{__('building total area in square meter')}}"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">{{__('building total area 2')}}</label>
                                            <div class="col-md-4">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="{{__('building total area in square meter 2')}}"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="button" class="btn  grey-salsa btn-outline">{{__('Cancel')}}</button>
                                                <button type="submit" class="btn  blue">{{__('Submit and next')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                        <br><br><br>
                    </div>
                    <div class="tab-pane" id="tab_3">
                        <div class="portlet box yellow-mint">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-table"></i>{{__('reals boarders details')}}</div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"> </a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                    <a href="javascript:;" class="reload"> </a>
                                    <a href="javascript:;" class="remove"> </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                        <h3 class="margin-bottom-20">{{__('streets')}}</h3>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">{{__('street 1')}}</label>
                                            <div class="col-md-2">
                                                <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                    <option value="Category 1">{{__('north')}}</option>
                                                    <option value="Category 2">{{__('south')}}</option>
                                                    <option value="Category 2">{{__('east')}}</option>
                                                    <option value="Category 3">{{__('west')}}</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="{{__('width of street')}}">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="{{__('long on street')}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-4">
                                                <div class="input-icon">
                                                    <button type="button" class="btn  grey-salsa btn-outline">{{__('add another street')}}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-body">
                                        <h3 class="margin-bottom-20">{{__('another boarders')}}</h3>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">{{__('boarder 1')}}</label>
                                            <div class="col-md-2">
                                                <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                    <option value="Category 1">{{__('north')}}</option>
                                                    <option value="Category 2">{{__('south')}}</option>
                                                    <option value="Category 2">{{__('east')}}</option>
                                                    <option value="Category 3">{{__('west')}}</option>
                                                    <option value="Category 1">{{__('north east')}}</option>
                                                    <option value="Category 2">{{__('south east')}}</option>
                                                    <option value="Category 2">{{__('north west')}}</option>
                                                    <option value="Category 3">{{__('south west')}}</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="{{__('long on boarder')}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-4">
                                                <div class="input-icon">
                                                    <button type="button" class="btn  grey-salsa btn-outline">{{__('add another boarder')}}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="button" class="btn  grey-salsa btn-outline">{{__('Cancel')}}</button>
                                                <button type="submit" class="btn  blue">{{__('Submit and next')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                        <br><br><br>
                    </div>
                    <div class="tab-pane" id="tab_4">
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i>Form Sample </div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"> </a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                    <a href="javascript:;" class="reload"> </a>
                                    <a href="javascript:;" class="remove"> </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal form-row-seperated">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">First Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="small" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="medium" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                </select>
                                                <span class="help-block"> Select your gender. </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date of Birth</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Category</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option value="Category 1">Category 1</option>
                                                    <option value="Category 2">Category 2</option>
                                                    <option value="Category 3">Category 5</option>
                                                    <option value="Category 4">Category 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Multi-Value Select</label>
                                            <div class="col-md-9">
                                                <select class="form-control" multiple>
                                                    <optgroup label="NFC EAST">
                                                        <option>Dallas Cowboys</option>
                                                        <option>New York Giants</option>
                                                        <option>Philadelphia Eagles</option>
                                                        <option>Washington Redskins</option>
                                                    </optgroup>
                                                    <optgroup label="NFC NORTH">
                                                        <option>Chicago Bears</option>
                                                        <option>Detroit Lions</option>
                                                        <option>Green Bay Packers</option>
                                                        <option>Minnesota Vikings</option>
                                                    </optgroup>
                                                    <optgroup label="NFC SOUTH">
                                                        <option>Atlanta Falcons</option>
                                                        <option>Carolina Panthers</option>
                                                        <option>New Orleans Saints</option>
                                                        <option>Tampa Bay Buccaneers</option>
                                                    </optgroup>
                                                    <optgroup label="NFC WEST">
                                                        <option>Arizona Cardinals</option>
                                                        <option>St. Louis Rams</option>
                                                        <option>San Francisco 49ers</option>
                                                        <option>Seattle Seahawks</option>
                                                    </optgroup>
                                                    <optgroup label="AFC EAST">
                                                        <option>Buffalo Bills</option>
                                                        <option>Miami Dolphins</option>
                                                        <option>New England Patriots</option>
                                                        <option>New York Jets</option>
                                                    </optgroup>
                                                    <optgroup label="AFC NORTH">
                                                        <option>Baltimore Ravens</option>
                                                        <option>Cincinnati Bengals</option>
                                                        <option>Cleveland Browns</option>
                                                        <option>Pittsburgh Steelers</option>
                                                    </optgroup>
                                                    <optgroup label="AFC SOUTH">
                                                        <option>Houston Texans</option>
                                                        <option>Indianapolis Colts</option>
                                                        <option>Jacksonville Jaguars</option>
                                                        <option>Tennessee Titans</option>
                                                    </optgroup>
                                                    <optgroup label="AFC WEST">
                                                        <option>Denver Broncos</option>
                                                        <option>Kansas City Chiefs</option>
                                                        <option>Oakland Raiders</option>
                                                        <option>San Diego Chargers</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Membership</label>
                                            <div class="col-md-9">
                                                <div class="radio-list">
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Street</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">City</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">State</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Post Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group last">
                                            <label class="control-label col-md-3">Country</label>
                                            <div class="col-md-9">
                                                <select class="form-control"> </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">
                                                    <i class="fa fa-pencil"></i> 1Edit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                        <div class="portlet light bordered form-fit">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-equalizer font-green-haze"></i>
                                    <span class="caption-subject font-green-haze bold uppercase">Form Sample</span>
                                    <span class="caption-helper">some info...</span>
                                </div>
                                <div class="actions">
                                    <a href="javascript:;" class="btn btn-circle btn-default btn-sm">
                                        <i class="fa fa-pencil"></i> Edit </a>
                                    <a href="javascript:;" class="btn btn-circle btn-default btn-sm">
                                        <i class="fa fa-plus"></i> Add </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal form-row-seperated">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">First Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="small" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="medium" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                </select>
                                                <span class="help-block"> Select your gender. </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date of Birth</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Category</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option value="Category 1">Category 1</option>
                                                    <option value="Category 2">Category 2</option>
                                                    <option value="Category 3">Category 5</option>
                                                    <option value="Category 4">Category 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Multi-Value Select</label>
                                            <div class="col-md-9">
                                                <select class="form-control" multiple>
                                                    <optgroup label="NFC EAST">
                                                        <option>Dallas Cowboys</option>
                                                        <option>New York Giants</option>
                                                        <option>Philadelphia Eagles</option>
                                                        <option>Washington Redskins</option>
                                                    </optgroup>
                                                    <optgroup label="NFC NORTH">
                                                        <option>Chicago Bears</option>
                                                        <option>Detroit Lions</option>
                                                        <option>Green Bay Packers</option>
                                                        <option>Minnesota Vikings</option>
                                                    </optgroup>
                                                    <optgroup label="NFC SOUTH">
                                                        <option>Atlanta Falcons</option>
                                                        <option>Carolina Panthers</option>
                                                        <option>New Orleans Saints</option>
                                                        <option>Tampa Bay Buccaneers</option>
                                                    </optgroup>
                                                    <optgroup label="NFC WEST">
                                                        <option>Arizona Cardinals</option>
                                                        <option>St. Louis Rams</option>
                                                        <option>San Francisco 49ers</option>
                                                        <option>Seattle Seahawks</option>
                                                    </optgroup>
                                                    <optgroup label="AFC EAST">
                                                        <option>Buffalo Bills</option>
                                                        <option>Miami Dolphins</option>
                                                        <option>New England Patriots</option>
                                                        <option>New York Jets</option>
                                                    </optgroup>
                                                    <optgroup label="AFC NORTH">
                                                        <option>Baltimore Ravens</option>
                                                        <option>Cincinnati Bengals</option>
                                                        <option>Cleveland Browns</option>
                                                        <option>Pittsburgh Steelers</option>
                                                    </optgroup>
                                                    <optgroup label="AFC SOUTH">
                                                        <option>Houston Texans</option>
                                                        <option>Indianapolis Colts</option>
                                                        <option>Jacksonville Jaguars</option>
                                                        <option>Tennessee Titans</option>
                                                    </optgroup>
                                                    <optgroup label="AFC WEST">
                                                        <option>Denver Broncos</option>
                                                        <option>Kansas City Chiefs</option>
                                                        <option>Oakland Raiders</option>
                                                        <option>San Diego Chargers</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Membership</label>
                                            <div class="col-md-9">
                                                <div class="radio-list">
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Street</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">City</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">State</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Post Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group last">
                                            <label class="control-label col-md-3">Country</label>
                                            <div class="col-md-9">
                                                <select class="form-control"> </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">
                                                    <i class="fa fa-pencil"></i> 1Edit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                        <div class="portlet light  form-fit">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-equalizer font-green-haze"></i>
                                    <span class="caption-subject font-green-haze bold uppercase">Form Sample</span>
                                    <span class="caption-helper">some info...</span>
                                </div>
                                <div class="actions">
                                    <div class="portlet-input input-inline input-small">
                                        <div class="input-icon right">
                                            <i class="icon-magnifier"></i>
                                            <input type="text" class="form-control input-circle" placeholder="search..."> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal form-row-seperated">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">First Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="small" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="medium" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                </select>
                                                <span class="help-block"> Select your gender. </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date of Birth</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Category</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option value="Category 1">Category 1</option>
                                                    <option value="Category 2">Category 2</option>
                                                    <option value="Category 3">Category 5</option>
                                                    <option value="Category 4">Category 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Multi-Value Select</label>
                                            <div class="col-md-9">
                                                <select class="form-control" multiple>
                                                    <optgroup label="NFC EAST">
                                                        <option>Dallas Cowboys</option>
                                                        <option>New York Giants</option>
                                                        <option>Philadelphia Eagles</option>
                                                        <option>Washington Redskins</option>
                                                    </optgroup>
                                                    <optgroup label="NFC NORTH">
                                                        <option>Chicago Bears</option>
                                                        <option>Detroit Lions</option>
                                                        <option>Green Bay Packers</option>
                                                        <option>Minnesota Vikings</option>
                                                    </optgroup>
                                                    <optgroup label="NFC SOUTH">
                                                        <option>Atlanta Falcons</option>
                                                        <option>Carolina Panthers</option>
                                                        <option>New Orleans Saints</option>
                                                        <option>Tampa Bay Buccaneers</option>
                                                    </optgroup>
                                                    <optgroup label="NFC WEST">
                                                        <option>Arizona Cardinals</option>
                                                        <option>St. Louis Rams</option>
                                                        <option>San Francisco 49ers</option>
                                                        <option>Seattle Seahawks</option>
                                                    </optgroup>
                                                    <optgroup label="AFC EAST">
                                                        <option>Buffalo Bills</option>
                                                        <option>Miami Dolphins</option>
                                                        <option>New England Patriots</option>
                                                        <option>New York Jets</option>
                                                    </optgroup>
                                                    <optgroup label="AFC NORTH">
                                                        <option>Baltimore Ravens</option>
                                                        <option>Cincinnati Bengals</option>
                                                        <option>Cleveland Browns</option>
                                                        <option>Pittsburgh Steelers</option>
                                                    </optgroup>
                                                    <optgroup label="AFC SOUTH">
                                                        <option>Houston Texans</option>
                                                        <option>Indianapolis Colts</option>
                                                        <option>Jacksonville Jaguars</option>
                                                        <option>Tennessee Titans</option>
                                                    </optgroup>
                                                    <optgroup label="AFC WEST">
                                                        <option>Denver Broncos</option>
                                                        <option>Kansas City Chiefs</option>
                                                        <option>Oakland Raiders</option>
                                                        <option>San Diego Chargers</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Membership</label>
                                            <div class="col-md-9">
                                                <div class="radio-list">
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Street</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">City</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">State</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Post Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group last">
                                            <label class="control-label col-md-3">Country</label>
                                            <div class="col-md-9">
                                                <select class="form-control"> </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">
                                                    <i class="fa fa-pencil"></i> 1Edit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_5">
                        <div class="portlet box blue ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i>Form Sample </div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"> </a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                    <a href="javascript:;" class="reload"> </a>
                                    <a href="javascript:;" class="remove"> </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal form-bordered">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">First Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="small" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="medium" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                </select>
                                                <span class="help-block"> Select your gender. </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date of Birth</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Category</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option value="Category 1">Category 1</option>
                                                    <option value="Category 2">Category 2</option>
                                                    <option value="Category 3">Category 5</option>
                                                    <option value="Category 4">Category 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Multi-Value Select</label>
                                            <div class="col-md-9">
                                                <select class="form-control" multiple>
                                                    <optgroup label="NFC EAST">
                                                        <option>Dallas Cowboys</option>
                                                        <option>New York Giants</option>
                                                        <option>Philadelphia Eagles</option>
                                                        <option>Washington Redskins</option>
                                                    </optgroup>
                                                    <optgroup label="NFC NORTH">
                                                        <option>Chicago Bears</option>
                                                        <option>Detroit Lions</option>
                                                        <option>Green Bay Packers</option>
                                                        <option>Minnesota Vikings</option>
                                                    </optgroup>
                                                    <optgroup label="NFC SOUTH">
                                                        <option>Atlanta Falcons</option>
                                                        <option>Carolina Panthers</option>
                                                        <option>New Orleans Saints</option>
                                                        <option>Tampa Bay Buccaneers</option>
                                                    </optgroup>
                                                    <optgroup label="NFC WEST">
                                                        <option>Arizona Cardinals</option>
                                                        <option>St. Louis Rams</option>
                                                        <option>San Francisco 49ers</option>
                                                        <option>Seattle Seahawks</option>
                                                    </optgroup>
                                                    <optgroup label="AFC EAST">
                                                        <option>Buffalo Bills</option>
                                                        <option>Miami Dolphins</option>
                                                        <option>New England Patriots</option>
                                                        <option>New York Jets</option>
                                                    </optgroup>
                                                    <optgroup label="AFC NORTH">
                                                        <option>Baltimore Ravens</option>
                                                        <option>Cincinnati Bengals</option>
                                                        <option>Cleveland Browns</option>
                                                        <option>Pittsburgh Steelers</option>
                                                    </optgroup>
                                                    <optgroup label="AFC SOUTH">
                                                        <option>Houston Texans</option>
                                                        <option>Indianapolis Colts</option>
                                                        <option>Jacksonville Jaguars</option>
                                                        <option>Tennessee Titans</option>
                                                    </optgroup>
                                                    <optgroup label="AFC WEST">
                                                        <option>Denver Broncos</option>
                                                        <option>Kansas City Chiefs</option>
                                                        <option>Oakland Raiders</option>
                                                        <option>San Diego Chargers</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Membership</label>
                                            <div class="col-md-9">
                                                <div class="radio-list">
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Street</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">City</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">State</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Post Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group last">
                                            <label class="control-label col-md-3">Country</label>
                                            <div class="col-md-9">
                                                <select class="form-control"> </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn green">
                                                            <i class="fa fa-check"></i> Submit</button>
                                                        <button type="button" class="btn default">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                        <div class="portlet light bordered form-fit">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-equalizer font-blue-hoki"></i>
                                    <span class="caption-subject font-blue-hoki bold uppercase">Form Sample</span>
                                    <span class="caption-helper">demo form...</span>
                                </div>
                                <div class="actions">
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-cloud-upload"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-wrench"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-trash"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal form-bordered">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">First Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="small" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="medium" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                </select>
                                                <span class="help-block"> Select your gender. </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date of Birth</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Category</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option value="Category 1">Category 1</option>
                                                    <option value="Category 2">Category 2</option>
                                                    <option value="Category 3">Category 5</option>
                                                    <option value="Category 4">Category 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Multi-Value Select</label>
                                            <div class="col-md-9">
                                                <select class="form-control" multiple>
                                                    <optgroup label="NFC EAST">
                                                        <option>Dallas Cowboys</option>
                                                        <option>New York Giants</option>
                                                        <option>Philadelphia Eagles</option>
                                                        <option>Washington Redskins</option>
                                                    </optgroup>
                                                    <optgroup label="NFC NORTH">
                                                        <option>Chicago Bears</option>
                                                        <option>Detroit Lions</option>
                                                        <option>Green Bay Packers</option>
                                                        <option>Minnesota Vikings</option>
                                                    </optgroup>
                                                    <optgroup label="NFC SOUTH">
                                                        <option>Atlanta Falcons</option>
                                                        <option>Carolina Panthers</option>
                                                        <option>New Orleans Saints</option>
                                                        <option>Tampa Bay Buccaneers</option>
                                                    </optgroup>
                                                    <optgroup label="NFC WEST">
                                                        <option>Arizona Cardinals</option>
                                                        <option>St. Louis Rams</option>
                                                        <option>San Francisco 49ers</option>
                                                        <option>Seattle Seahawks</option>
                                                    </optgroup>
                                                    <optgroup label="AFC EAST">
                                                        <option>Buffalo Bills</option>
                                                        <option>Miami Dolphins</option>
                                                        <option>New England Patriots</option>
                                                        <option>New York Jets</option>
                                                    </optgroup>
                                                    <optgroup label="AFC NORTH">
                                                        <option>Baltimore Ravens</option>
                                                        <option>Cincinnati Bengals</option>
                                                        <option>Cleveland Browns</option>
                                                        <option>Pittsburgh Steelers</option>
                                                    </optgroup>
                                                    <optgroup label="AFC SOUTH">
                                                        <option>Houston Texans</option>
                                                        <option>Indianapolis Colts</option>
                                                        <option>Jacksonville Jaguars</option>
                                                        <option>Tennessee Titans</option>
                                                    </optgroup>
                                                    <optgroup label="AFC WEST">
                                                        <option>Denver Broncos</option>
                                                        <option>Kansas City Chiefs</option>
                                                        <option>Oakland Raiders</option>
                                                        <option>San Diego Chargers</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Membership</label>
                                            <div class="col-md-9">
                                                <div class="radio-list">
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Street</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">City</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">State</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Post Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group last">
                                            <label class="control-label col-md-3">Country</label>
                                            <div class="col-md-9">
                                                <select class="form-control"> </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">
                                                    <i class="fa fa-check"></i> Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                        <div class="portlet light  form-fit">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-equalizer font-blue-hoki"></i>
                                    <span class="caption-subject font-blue-hoki bold uppercase">Form Sample</span>
                                    <span class="caption-helper">demo form...</span>
                                </div>
                                <div class="actions">
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-cloud-upload"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-wrench"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-trash"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal form-bordered">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">First Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="small" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="medium" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                </select>
                                                <span class="help-block"> Select your gender. </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date of Birth</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Category</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option value="Category 1">Category 1</option>
                                                    <option value="Category 2">Category 2</option>
                                                    <option value="Category 3">Category 5</option>
                                                    <option value="Category 4">Category 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Multi-Value Select</label>
                                            <div class="col-md-9">
                                                <select class="form-control" multiple>
                                                    <optgroup label="NFC EAST">
                                                        <option>Dallas Cowboys</option>
                                                        <option>New York Giants</option>
                                                        <option>Philadelphia Eagles</option>
                                                        <option>Washington Redskins</option>
                                                    </optgroup>
                                                    <optgroup label="NFC NORTH">
                                                        <option>Chicago Bears</option>
                                                        <option>Detroit Lions</option>
                                                        <option>Green Bay Packers</option>
                                                        <option>Minnesota Vikings</option>
                                                    </optgroup>
                                                    <optgroup label="NFC SOUTH">
                                                        <option>Atlanta Falcons</option>
                                                        <option>Carolina Panthers</option>
                                                        <option>New Orleans Saints</option>
                                                        <option>Tampa Bay Buccaneers</option>
                                                    </optgroup>
                                                    <optgroup label="NFC WEST">
                                                        <option>Arizona Cardinals</option>
                                                        <option>St. Louis Rams</option>
                                                        <option>San Francisco 49ers</option>
                                                        <option>Seattle Seahawks</option>
                                                    </optgroup>
                                                    <optgroup label="AFC EAST">
                                                        <option>Buffalo Bills</option>
                                                        <option>Miami Dolphins</option>
                                                        <option>New England Patriots</option>
                                                        <option>New York Jets</option>
                                                    </optgroup>
                                                    <optgroup label="AFC NORTH">
                                                        <option>Baltimore Ravens</option>
                                                        <option>Cincinnati Bengals</option>
                                                        <option>Cleveland Browns</option>
                                                        <option>Pittsburgh Steelers</option>
                                                    </optgroup>
                                                    <optgroup label="AFC SOUTH">
                                                        <option>Houston Texans</option>
                                                        <option>Indianapolis Colts</option>
                                                        <option>Jacksonville Jaguars</option>
                                                        <option>Tennessee Titans</option>
                                                    </optgroup>
                                                    <optgroup label="AFC WEST">
                                                        <option>Denver Broncos</option>
                                                        <option>Kansas City Chiefs</option>
                                                        <option>Oakland Raiders</option>
                                                        <option>San Diego Chargers</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Membership</label>
                                            <div class="col-md-9">
                                                <div class="radio-list">
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Street</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">City</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">State</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Post Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group last">
                                            <label class="control-label col-md-3">Country</label>
                                            <div class="col-md-9">
                                                <select class="form-control"> </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">
                                                    <i class="fa fa-check"></i> Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_6">
                        <div class="portlet box blue ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i>Form Sample </div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"> </a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                    <a href="javascript:;" class="reload"> </a>
                                    <a href="javascript:;" class="remove"> </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal form-bordered form-row-stripped">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">First Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="small" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="medium" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                </select>
                                                <span class="help-block"> Select your gender. </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date of Birth</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Category</label>
                                            <div class="col-md-9">
                                                <select class="form-control select2_category">
                                                    <option value="Category 1">Category 1</option>
                                                    <option value="Category 2">Category 2</option>
                                                    <option value="Category 3">Category 5</option>
                                                    <option value="Category 4">Category 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Multi-Value Select</label>
                                            <div class="col-md-9">
                                                <select class="form-control select2_sample1" multiple>
                                                    <optgroup label="NFC EAST">
                                                        <option>Dallas Cowboys</option>
                                                        <option>New York Giants</option>
                                                        <option>Philadelphia Eagles</option>
                                                        <option>Washington Redskins</option>
                                                    </optgroup>
                                                    <optgroup label="NFC NORTH">
                                                        <option>Chicago Bears</option>
                                                        <option>Detroit Lions</option>
                                                        <option>Green Bay Packers</option>
                                                        <option>Minnesota Vikings</option>
                                                    </optgroup>
                                                    <optgroup label="NFC SOUTH">
                                                        <option>Atlanta Falcons</option>
                                                        <option>Carolina Panthers</option>
                                                        <option>New Orleans Saints</option>
                                                        <option>Tampa Bay Buccaneers</option>
                                                    </optgroup>
                                                    <optgroup label="NFC WEST">
                                                        <option>Arizona Cardinals</option>
                                                        <option>St. Louis Rams</option>
                                                        <option>San Francisco 49ers</option>
                                                        <option>Seattle Seahawks</option>
                                                    </optgroup>
                                                    <optgroup label="AFC EAST">
                                                        <option>Buffalo Bills</option>
                                                        <option>Miami Dolphins</option>
                                                        <option>New England Patriots</option>
                                                        <option>New York Jets</option>
                                                    </optgroup>
                                                    <optgroup label="AFC NORTH">
                                                        <option>Baltimore Ravens</option>
                                                        <option>Cincinnati Bengals</option>
                                                        <option>Cleveland Browns</option>
                                                        <option>Pittsburgh Steelers</option>
                                                    </optgroup>
                                                    <optgroup label="AFC SOUTH">
                                                        <option>Houston Texans</option>
                                                        <option>Indianapolis Colts</option>
                                                        <option>Jacksonville Jaguars</option>
                                                        <option>Tennessee Titans</option>
                                                    </optgroup>
                                                    <optgroup label="AFC WEST">
                                                        <option>Denver Broncos</option>
                                                        <option>Kansas City Chiefs</option>
                                                        <option>Oakland Raiders</option>
                                                        <option>San Diego Chargers</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Membership</label>
                                            <div class="col-md-9">
                                                <div class="radio-list">
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Street</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">City</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">State</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Post Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group last">
                                            <label class="control-label col-md-3">Country</label>
                                            <div class="col-md-9">
                                                <select class="form-control"> </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">
                                                    <i class="fa fa-check"></i> Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                        <div class="portlet light bordered form-fit">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-user font-blue-hoki"></i>
                                    <span class="caption-subject font-blue-hoki bold uppercase">Form Sample</span>
                                    <span class="caption-helper">demo form...</span>
                                </div>
                                <div class="actions">
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-cloud-upload"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-wrench"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-trash"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal form-bordered form-row-stripped">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">First Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="small" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="medium" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                </select>
                                                <span class="help-block"> Select your gender. </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date of Birth</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Category</label>
                                            <div class="col-md-9">
                                                <select class="form-control select2_category">
                                                    <option value="Category 1">Category 1</option>
                                                    <option value="Category 2">Category 2</option>
                                                    <option value="Category 3">Category 5</option>
                                                    <option value="Category 4">Category 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Multi-Value Select</label>
                                            <div class="col-md-9">
                                                <select class="form-control select2_sample1" multiple>
                                                    <optgroup label="NFC EAST">
                                                        <option>Dallas Cowboys</option>
                                                        <option>New York Giants</option>
                                                        <option>Philadelphia Eagles</option>
                                                        <option>Washington Redskins</option>
                                                    </optgroup>
                                                    <optgroup label="NFC NORTH">
                                                        <option>Chicago Bears</option>
                                                        <option>Detroit Lions</option>
                                                        <option>Green Bay Packers</option>
                                                        <option>Minnesota Vikings</option>
                                                    </optgroup>
                                                    <optgroup label="NFC SOUTH">
                                                        <option>Atlanta Falcons</option>
                                                        <option>Carolina Panthers</option>
                                                        <option>New Orleans Saints</option>
                                                        <option>Tampa Bay Buccaneers</option>
                                                    </optgroup>
                                                    <optgroup label="NFC WEST">
                                                        <option>Arizona Cardinals</option>
                                                        <option>St. Louis Rams</option>
                                                        <option>San Francisco 49ers</option>
                                                        <option>Seattle Seahawks</option>
                                                    </optgroup>
                                                    <optgroup label="AFC EAST">
                                                        <option>Buffalo Bills</option>
                                                        <option>Miami Dolphins</option>
                                                        <option>New England Patriots</option>
                                                        <option>New York Jets</option>
                                                    </optgroup>
                                                    <optgroup label="AFC NORTH">
                                                        <option>Baltimore Ravens</option>
                                                        <option>Cincinnati Bengals</option>
                                                        <option>Cleveland Browns</option>
                                                        <option>Pittsburgh Steelers</option>
                                                    </optgroup>
                                                    <optgroup label="AFC SOUTH">
                                                        <option>Houston Texans</option>
                                                        <option>Indianapolis Colts</option>
                                                        <option>Jacksonville Jaguars</option>
                                                        <option>Tennessee Titans</option>
                                                    </optgroup>
                                                    <optgroup label="AFC WEST">
                                                        <option>Denver Broncos</option>
                                                        <option>Kansas City Chiefs</option>
                                                        <option>Oakland Raiders</option>
                                                        <option>San Diego Chargers</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Membership</label>
                                            <div class="col-md-9">
                                                <div class="radio-list">
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Street</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">City</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">State</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Post Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group last">
                                            <label class="control-label col-md-3">Country</label>
                                            <div class="col-md-9">
                                                <select class="form-control"> </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">
                                                    <i class="fa fa-check"></i> Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                        <div class="portlet light  form-fit">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-user font-blue-hoki"></i>
                                    <span class="caption-subject font-blue-hoki bold uppercase">Form Sample</span>
                                    <span class="caption-helper">demo form...</span>
                                </div>
                                <div class="actions">
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-cloud-upload"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-wrench"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-trash"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal form-bordered form-row-stripped">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">First Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="small" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="medium" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                </select>
                                                <span class="help-block"> Select your gender. </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date of Birth</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Category</label>
                                            <div class="col-md-9">
                                                <select class="form-control select2_category">
                                                    <option value="Category 1">Category 1</option>
                                                    <option value="Category 2">Category 2</option>
                                                    <option value="Category 3">Category 5</option>
                                                    <option value="Category 4">Category 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Multi-Value Select</label>
                                            <div class="col-md-9">
                                                <select class="form-control select2_sample1" multiple>
                                                    <optgroup label="NFC EAST">
                                                        <option>Dallas Cowboys</option>
                                                        <option>New York Giants</option>
                                                        <option>Philadelphia Eagles</option>
                                                        <option>Washington Redskins</option>
                                                    </optgroup>
                                                    <optgroup label="NFC NORTH">
                                                        <option>Chicago Bears</option>
                                                        <option>Detroit Lions</option>
                                                        <option>Green Bay Packers</option>
                                                        <option>Minnesota Vikings</option>
                                                    </optgroup>
                                                    <optgroup label="NFC SOUTH">
                                                        <option>Atlanta Falcons</option>
                                                        <option>Carolina Panthers</option>
                                                        <option>New Orleans Saints</option>
                                                        <option>Tampa Bay Buccaneers</option>
                                                    </optgroup>
                                                    <optgroup label="NFC WEST">
                                                        <option>Arizona Cardinals</option>
                                                        <option>St. Louis Rams</option>
                                                        <option>San Francisco 49ers</option>
                                                        <option>Seattle Seahawks</option>
                                                    </optgroup>
                                                    <optgroup label="AFC EAST">
                                                        <option>Buffalo Bills</option>
                                                        <option>Miami Dolphins</option>
                                                        <option>New England Patriots</option>
                                                        <option>New York Jets</option>
                                                    </optgroup>
                                                    <optgroup label="AFC NORTH">
                                                        <option>Baltimore Ravens</option>
                                                        <option>Cincinnati Bengals</option>
                                                        <option>Cleveland Browns</option>
                                                        <option>Pittsburgh Steelers</option>
                                                    </optgroup>
                                                    <optgroup label="AFC SOUTH">
                                                        <option>Houston Texans</option>
                                                        <option>Indianapolis Colts</option>
                                                        <option>Jacksonville Jaguars</option>
                                                        <option>Tennessee Titans</option>
                                                    </optgroup>
                                                    <optgroup label="AFC WEST">
                                                        <option>Denver Broncos</option>
                                                        <option>Kansas City Chiefs</option>
                                                        <option>Oakland Raiders</option>
                                                        <option>San Diego Chargers</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Membership</label>
                                            <div class="col-md-9">
                                                <div class="radio-list">
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Street</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">City</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">State</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Post Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group last">
                                            <label class="control-label col-md-3">Country</label>
                                            <div class="col-md-9">
                                                <select class="form-control"> </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">
                                                    <i class="fa fa-check"></i> Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_7">
                        <div class="portlet box blue ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i>Form Sample </div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"> </a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                    <a href="javascript:;" class="reload"> </a>
                                    <a href="javascript:;" class="remove"> </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal form-bordered form-label-stripped">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">First Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="small" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="medium" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                </select>
                                                <span class="help-block"> Select your gender. </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date of Birth</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Category</label>
                                            <div class="col-md-9">
                                                <select class="form-control select2_category">
                                                    <option value="Category 1">Category 1</option>
                                                    <option value="Category 2">Category 2</option>
                                                    <option value="Category 3">Category 5</option>
                                                    <option value="Category 4">Category 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Multi-Value Select</label>
                                            <div class="col-md-9">
                                                <select class="form-control select2_sample1" multiple>
                                                    <optgroup label="NFC EAST">
                                                        <option>Dallas Cowboys</option>
                                                        <option>New York Giants</option>
                                                        <option>Philadelphia Eagles</option>
                                                        <option>Washington Redskins</option>
                                                    </optgroup>
                                                    <optgroup label="NFC NORTH">
                                                        <option>Chicago Bears</option>
                                                        <option>Detroit Lions</option>
                                                        <option>Green Bay Packers</option>
                                                        <option>Minnesota Vikings</option>
                                                    </optgroup>
                                                    <optgroup label="NFC SOUTH">
                                                        <option>Atlanta Falcons</option>
                                                        <option>Carolina Panthers</option>
                                                        <option>New Orleans Saints</option>
                                                        <option>Tampa Bay Buccaneers</option>
                                                    </optgroup>
                                                    <optgroup label="NFC WEST">
                                                        <option>Arizona Cardinals</option>
                                                        <option>St. Louis Rams</option>
                                                        <option>San Francisco 49ers</option>
                                                        <option>Seattle Seahawks</option>
                                                    </optgroup>
                                                    <optgroup label="AFC EAST">
                                                        <option>Buffalo Bills</option>
                                                        <option>Miami Dolphins</option>
                                                        <option>New England Patriots</option>
                                                        <option>New York Jets</option>
                                                    </optgroup>
                                                    <optgroup label="AFC NORTH">
                                                        <option>Baltimore Ravens</option>
                                                        <option>Cincinnati Bengals</option>
                                                        <option>Cleveland Browns</option>
                                                        <option>Pittsburgh Steelers</option>
                                                    </optgroup>
                                                    <optgroup label="AFC SOUTH">
                                                        <option>Houston Texans</option>
                                                        <option>Indianapolis Colts</option>
                                                        <option>Jacksonville Jaguars</option>
                                                        <option>Tennessee Titans</option>
                                                    </optgroup>
                                                    <optgroup label="AFC WEST">
                                                        <option>Denver Broncos</option>
                                                        <option>Kansas City Chiefs</option>
                                                        <option>Oakland Raiders</option>
                                                        <option>San Diego Chargers</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Membership</label>
                                            <div class="col-md-9">
                                                <div class="radio-list">
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Street</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">City</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">State</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Post Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group last">
                                            <label class="control-label col-md-3">Country</label>
                                            <div class="col-md-9">
                                                <select class="form-control"> </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">
                                                    <i class="fa fa-check"></i> Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                        <div class="portlet light bordered form-fit">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-user font-blue-hoki"></i>
                                    <span class="caption-subject font-blue-hoki bold uppercase">Form Sample</span>
                                    <span class="caption-helper">demo form...</span>
                                </div>
                                <div class="actions">
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-cloud-upload"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-wrench"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-trash"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal form-bordered form-label-stripped">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">First Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="small" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="medium" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                </select>
                                                <span class="help-block"> Select your gender. </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date of Birth</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Category</label>
                                            <div class="col-md-9">
                                                <select class="form-control select2_category">
                                                    <option value="Category 1">Category 1</option>
                                                    <option value="Category 2">Category 2</option>
                                                    <option value="Category 3">Category 5</option>
                                                    <option value="Category 4">Category 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Multi-Value Select</label>
                                            <div class="col-md-9">
                                                <select class="form-control select2_sample1" multiple>
                                                    <optgroup label="NFC EAST">
                                                        <option>Dallas Cowboys</option>
                                                        <option>New York Giants</option>
                                                        <option>Philadelphia Eagles</option>
                                                        <option>Washington Redskins</option>
                                                    </optgroup>
                                                    <optgroup label="NFC NORTH">
                                                        <option>Chicago Bears</option>
                                                        <option>Detroit Lions</option>
                                                        <option>Green Bay Packers</option>
                                                        <option>Minnesota Vikings</option>
                                                    </optgroup>
                                                    <optgroup label="NFC SOUTH">
                                                        <option>Atlanta Falcons</option>
                                                        <option>Carolina Panthers</option>
                                                        <option>New Orleans Saints</option>
                                                        <option>Tampa Bay Buccaneers</option>
                                                    </optgroup>
                                                    <optgroup label="NFC WEST">
                                                        <option>Arizona Cardinals</option>
                                                        <option>St. Louis Rams</option>
                                                        <option>San Francisco 49ers</option>
                                                        <option>Seattle Seahawks</option>
                                                    </optgroup>
                                                    <optgroup label="AFC EAST">
                                                        <option>Buffalo Bills</option>
                                                        <option>Miami Dolphins</option>
                                                        <option>New England Patriots</option>
                                                        <option>New York Jets</option>
                                                    </optgroup>
                                                    <optgroup label="AFC NORTH">
                                                        <option>Baltimore Ravens</option>
                                                        <option>Cincinnati Bengals</option>
                                                        <option>Cleveland Browns</option>
                                                        <option>Pittsburgh Steelers</option>
                                                    </optgroup>
                                                    <optgroup label="AFC SOUTH">
                                                        <option>Houston Texans</option>
                                                        <option>Indianapolis Colts</option>
                                                        <option>Jacksonville Jaguars</option>
                                                        <option>Tennessee Titans</option>
                                                    </optgroup>
                                                    <optgroup label="AFC WEST">
                                                        <option>Denver Broncos</option>
                                                        <option>Kansas City Chiefs</option>
                                                        <option>Oakland Raiders</option>
                                                        <option>San Diego Chargers</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Membership</label>
                                            <div class="col-md-9">
                                                <div class="radio-list">
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Street</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">City</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">State</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Post Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group last">
                                            <label class="control-label col-md-3">Country</label>
                                            <div class="col-md-9">
                                                <select class="form-control"> </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">
                                                    <i class="fa fa-check"></i> Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                        <div class="portlet light  form-fit">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-user font-blue-hoki"></i>
                                    <span class="caption-subject font-blue-hoki bold uppercase">Form Sample</span>
                                    <span class="caption-helper">demo form...</span>
                                </div>
                                <div class="actions">
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-cloud-upload"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-wrench"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-trash"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal form-bordered form-label-stripped">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">First Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="small" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="medium" class="form-control" />
                                                <span class="help-block"> This is inline help </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                </select>
                                                <span class="help-block"> Select your gender. </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date of Birth</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Category</label>
                                            <div class="col-md-9">
                                                <select class="form-control select2_category">
                                                    <option value="Category 1">Category 1</option>
                                                    <option value="Category 2">Category 2</option>
                                                    <option value="Category 3">Category 5</option>
                                                    <option value="Category 4">Category 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Multi-Value Select</label>
                                            <div class="col-md-9">
                                                <select class="form-control select2_sample1" multiple>
                                                    <optgroup label="NFC EAST">
                                                        <option>Dallas Cowboys</option>
                                                        <option>New York Giants</option>
                                                        <option>Philadelphia Eagles</option>
                                                        <option>Washington Redskins</option>
                                                    </optgroup>
                                                    <optgroup label="NFC NORTH">
                                                        <option>Chicago Bears</option>
                                                        <option>Detroit Lions</option>
                                                        <option>Green Bay Packers</option>
                                                        <option>Minnesota Vikings</option>
                                                    </optgroup>
                                                    <optgroup label="NFC SOUTH">
                                                        <option>Atlanta Falcons</option>
                                                        <option>Carolina Panthers</option>
                                                        <option>New Orleans Saints</option>
                                                        <option>Tampa Bay Buccaneers</option>
                                                    </optgroup>
                                                    <optgroup label="NFC WEST">
                                                        <option>Arizona Cardinals</option>
                                                        <option>St. Louis Rams</option>
                                                        <option>San Francisco 49ers</option>
                                                        <option>Seattle Seahawks</option>
                                                    </optgroup>
                                                    <optgroup label="AFC EAST">
                                                        <option>Buffalo Bills</option>
                                                        <option>Miami Dolphins</option>
                                                        <option>New England Patriots</option>
                                                        <option>New York Jets</option>
                                                    </optgroup>
                                                    <optgroup label="AFC NORTH">
                                                        <option>Baltimore Ravens</option>
                                                        <option>Cincinnati Bengals</option>
                                                        <option>Cleveland Browns</option>
                                                        <option>Pittsburgh Steelers</option>
                                                    </optgroup>
                                                    <optgroup label="AFC SOUTH">
                                                        <option>Houston Texans</option>
                                                        <option>Indianapolis Colts</option>
                                                        <option>Jacksonville Jaguars</option>
                                                        <option>Tennessee Titans</option>
                                                    </optgroup>
                                                    <optgroup label="AFC WEST">
                                                        <option>Denver Broncos</option>
                                                        <option>Kansas City Chiefs</option>
                                                        <option>Oakland Raiders</option>
                                                        <option>San Diego Chargers</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Membership</label>
                                            <div class="col-md-9">
                                                <div class="radio-list">
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                    <label>
                                                        <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Street</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">City</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">State</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Post Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <div class="form-group last">
                                            <label class="control-label col-md-3">Country</label>
                                            <div class="col-md-9">
                                                <select class="form-control"> </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">
                                                    <i class="fa fa-check"></i> Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection