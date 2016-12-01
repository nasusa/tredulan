@extends('layouts.app')

@section('title', 'Index')
@section('description', 'This is a description')
@section('keywords', 'These, are, keywords')
@section('styles')

@stop
@section('scripts_top')

@stop
@section('content')

<section class="mainherocontact">

<form action="">

<h1> Ota meihin yhteyttä!</h1>

  <input type="text" placeholder="Nimi" name="nimi" required>

  <input type="email" placeholder="Email" name="email" required>
  
  <input type="class" placeholder="Luokka" name="luokka" required>

  <textarea placeholder="Viesti" name="viesti" required></textarea>

  <div class="captcha">
    <input type="text" placeholder="Answer" name="captcha" required>
    <input type="text" value="2 + 3 =" name="question"  required readonly>
  </div>

  <input type="submit" value="Send">
</form>

</section>

@stop
@section('scripts_bottom')
    <!-- Bottom Scripts Here -->
@stop