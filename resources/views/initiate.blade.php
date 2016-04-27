@extends('layouts.app')
@section('content')
<div class="header clearfix">
  <nav>
    <h3 class="text-muted">Twilio Softphone | Laravel</h3>
  </div>
  <div class="jumbotron">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
        <div class="form-group">         
          <input type="text" class="form-control" id="PhoneNumber" name="PhoneNumber" placeholder="+1555555555"/>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
        <div class="row">
          <div class="col-lg-6 col-md-6 clearfix">
            <button type="button" id="call" class="btn btn-primary btn-md btn-block" onclick="call();">
              Call
            </button>
          </div>
          <div class="col-lg-6 col-md-6 clearfix">
            <button type="button" id="hangup" class="btn btn-warning btn-md btn-block" onclick="hangup();" disabled=true>
              Hangup
            </button>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
        <div id="log"class="alert alert-success">
          Loading pigeons...
        </div>    
      </div>
    </div>
  </div>
  
  @stop