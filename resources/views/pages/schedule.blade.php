@extends('layouts.app')

@section('title', 'Index')
@section('description', 'This is a description')
@section('keywords', 'These, are, keywords')
@section('styles')

@stop
@section('scripts_top')

@stop
@section('content')

<section class="mainheroschedule">

<div class="schedulemiddle">
  <h1 class="scheduleh1"> AIKATAULU </h1>
  <ul class="main">
  <li class="date">
    <h3>Maaliskuu 24</h3>
    <p>PERJANTAI</p>
  </li>
  <li class= "events">
    <ul class="events-detail">
      <li>
        <a href="#">
          <span class="event-time">20:00 - </span>
          <span class="event-name">Kickoff Ceremony</span>
          <br />
          <span class="event-location">Headquarters</span>
        </a>
      </li>
       
       <li>
        <a href="#">
          <span class="event-time">21:00 - </span>
          <span class="event-name">Kickoff Ceremony</span>
          <br />
          <span class="event-location">Headquarters</span>
        </a>
      </li>
      
       <li>
        <a href="#">
          <span class="event-time">22:00 - </span>
          <span class="event-name">Kickoff Ceremony</span>
          <br />
          <span class="event-location">Headquarters</span>
        </a>
      </li>
      
       <li>
        <a href="#">
          <span class="event-time">22:30 - </span>
          <span class="event-name">Kickoff Ceremony</span>
          <br />
          <span class="event-location">Headquarters</span>
        </a>
      </li>
      
       <li>
        <a href="#">
          <span class="event-time">23:00 - </span>
          <span class="event-name">Kickoff Ceremony</span>
          <br />
          <span class="event-location">Headquarters</span>
        </a>
      </li>
    </ul>  
  </li>
    <li class="date">
    <h3>Maaliskuu 25</h3>
    <p>LAUANTAI</p>
  </li>
  <li class= "events cf">
    <ul class="events-detail">
      <li>
        <a href="#">
          <span class="event-time">08:00 - </span>
          <span class="event-name">Kickoff Ceremony</span>
          <br />
          <span class="event-location">Headquarters</span>
        </a>
      </li>
       
       <li>
        <a href="#">
          <span class="event-time">10:00 - </span>
          <span class="event-name">Kickoff Ceremony</span>
          <br />
          <span class="event-location">Headquarters</span>
        </a>
      </li>
      
       <li>
        <a href="#">
          <span class="event-time">11:00 - </span>
          <span class="event-name">Kickoff Ceremony</span>
          <br />
          <span class="event-location">Headquarters</span>
        </a>
      </li>
      
       <li>
        <a href="#">
          <span class="event-time">12:00 - </span>
          <span class="event-name">Kickoff Ceremony</span>
          <br />
          <span class="event-location">Headquarters</span>
        </a>
      </li>
      
       <li>
        <a href="#">
          <span class="event-time">14:00 - </span>
          <span class="event-name">Kickoff Ceremony</span>
          <br />
          <span class="event-location">Headquarters</span>
        </a>
      </li>
    </ul>   
  </li>       
</ul> 
  
</div>

</section>

@stop
@section('scripts_bottom')
    <!-- Bottom Scripts Here -->
@stop