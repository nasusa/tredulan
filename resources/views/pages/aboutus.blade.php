@extends('layouts.app')

@section('title', 'Index')
@section('description', 'This is a description')
@section('keywords', 'These, are, keywords')
@section('styles')

@stop
@section('scripts_top')

@stop
@section('content')

<section class="mainheroaboutus">

<div class="aboutmiddle">
  <h1 class="abouth1"> TIETOA MEISTÄ </h1>
 <!-- <div class="box"></div> -->
  <img src="http://res.cloudinary.com/dpnzwgeil/image/upload/c_fill,h_300,w_1000/v1478695466/6477358187_dbfa1087fb_b_k30tbs.jpg" class="aboutbox">
  <p class="aboutp">Tapahtuman pääjärjestäjät ovat tredu Hepolamminkadun tietoliikennepuolen kolmannenvuoden opiskelijat, 14TTIC02A ja B. Järjestämisessä apuna ovat myös muiden tredujen opiskelijat joista voit lukea lisää alempaa.</p>
  <h2 class="abouth2">Muut järjestäjät</h2>
  <p>Jotta tapahtumamme on turvallinen, mukana ovat koivistonkylän järjestyksenvalvoja opiskelijat. Tämän lisäksi Mediapolikselta tulee opiskelijoita kuvaamaan ja videoimaan tapahtumaa. Hepolamminkadun toimipisteeltä tulee kaksi opettajaa valvomaan sekä catering-puolelta tullaan järjestämään kahvio sähkötalolle tapahtuman ajaksi.  </p>
</div>
<div class="social">
  <br>
    <i class="fa fa-envelope-o" aria-hidden="true"> tredulan@gmail.com</i>
  <br>
    <i class="fa fa-instagram" aria-hidden="true"> /tredulan</i>
  <br>
    <i class="fa fa-facebook" aria-hidden="true"> /groups/tredulanit2017/</i>
</div>

</section>

@stop
@section('scripts_bottom')
    <!-- Bottom Scripts Here -->
@stop