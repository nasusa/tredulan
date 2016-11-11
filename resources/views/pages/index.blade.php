@extends('layouts.app')

@section('title', 'Index')
@section('description', 'This is a description')
@section('keywords', 'These, are, keywords')
@section('styles')

@stop
@section('scripts_top')

@stop
@section('content')

<section class="mainhero">
  <h1>Tampereen seudun ammattiopisto</h1>
  <h2>LANPARTY</h2>
</section>

<section class="middleman">
  
  <a href="#" class="icon-button facebook"><i class="fa fa-facebook"></i><span></span></a>
  <a href="#" class="icon-button instagram"><i class="fa fa-instagram"></i><span></span></a>
  <a href="#" class="icon-button envelope-o"><i class="fa fa-envelope-o"></i><span></span></a> 
  
</section>

@stop
@section('scripts_bottom')
    <!-- Bottom Scripts Here -->
@stop