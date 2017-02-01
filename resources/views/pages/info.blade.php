@extends('layouts.app')

@section('title', 'Index')
@section('description', 'This is a description')
@section('keywords', 'These, are, keywords')
@section('styles')

@stop
@section('scripts_top')

@stop
@section('content')

<section class="mainheroinfo">

<div class="infomiddle">
  <h1 class="infoh1"> INFO </h1>
  <h2 class="infoh2">SIJAINTI</h2>
  <img class="map" src="http://res.cloudinary.com/dpnzwgeil/image/upload/v1483955672/kartta_lkyorc.png"style="width:500px;height:500px;">
  <p class="infop">Tapahtuma järjestetään Hepolamminkadun sähkötalon 4krs.. Tietokonepaikkoja on n.180 ja ne löytyvät luokista S4010, S4003, S4008 sekä S4012. Lounge on sähkötalon aulassa sekä sen läheisyydestä löytyy kahvio. Nukkuma-alue löytyy luokasta S40XX. Paikanpäällä löytyy opasteet oikeisiin luokkiin. Muualla sähkötalossa oleskelu on kiellettyä. </p>
  <h2 class="infojar">JÄRJESTÄJÄT</h2>
  <p class="infop">Tapahtuman järjestäjistä löydät lisää <a href="/aboutus"> ABOUT US </a> sivulta</p>

</section>

@stop
@section('scripts_bottom')
    <!-- Bottom Scripts Here -->
@stop