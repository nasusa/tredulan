@extends('layouts.app')

@section('title', 'Index')
@section('description', 'This is a description')
@section('keywords', 'These, are, keywords')
@section('styles')

@stop
@section('scripts_top')

@stop
@section('content')

<section class="mainheroguide">

<section class="containerboxguide">
    <div class="row kuvaboksi">
        <figure class="first">
            <img src="http://res.cloudinary.com/dpnzwgeil/image/upload/c_fit,h_250,w_300/v1483955672/kahvi_fdwrxv.png" class="boxguide">
            <figcaption><span class="header"> KAHVIO <i class="fa fa-angle-right" aria-hidden="true"></i></span>
            <br> Koulumme catering-puolen opiskelijat järjestävät kahvioon pientä välipalaa. Omat kodinkoneet ovat ehdottomasti kiellettyjä. Kahviosta löytyy mikro jos haluaa lämmittää omat eväät.
            </figcaption>
        </figure>
        <figure class="first">
            <img src="http://res.cloudinary.com/dpnzwgeil/image/upload/v1483955672/pakkaus_xijbsh.png" class="boxguide">
            <figcaption><span class="header"> PAKKAAMINEN <i class="fa fa-angle-right" aria-hidden="true"></i></span>
            <br> Mukaan tarvitset tietokoneen/konsolin, näytön, tarvittavat johdot ja oheislaitteet, (Kaiuttimet kielletty, lue säännöt) verkkokaapelin sekä hyvän mielen! Luokkahuoneissa on kiellettyä kävellä ulkokengillä. Otathan mukaan sisäkengät.
            </figcaption>
        </figure>
        <figure class="first">
            <img src="http://res.cloudinary.com/dpnzwgeil/image/upload/c_fit,w_300/v1483955672/teltta_po3ayt.png" class="boxguide">
            <figcaption><span class="header"> NUKKUMINEN <i class="fa fa-angle-right" aria-hidden="true"></i></span>
            <br> Nukkumiseen tarkoitettu tila järjestetään halukkaille sähkötalon 4krs. luokassa S4XXX. Suosittelemme tuomaan oma patjan, tyynyn sekä makuupussin. Nukkuminen on sallittua vain sille tarkoitetulla alueella. 
            </figcaption>
        </figure>
    </div>
    <div class="row kuvaboksi">
        <figure class="second">
            <img src="http://res.cloudinary.com/dpnzwgeil/image/upload/v1483956417/CrossedSwords-2400px_xz6vrc.png" class="boxguide">
            <figcaption><span class="pacificoh2"> Turnaukset <i class="fa fa-angle-right" aria-hidden="true"></i></span>
            <br> Järjestämme tapahtumassa mahdollisuuksien mukaan turnauksia. Lisätietoa tulee myöhemmin. Seuraa meitä facebookissa niin pysyt ajantasalla!
            </figcaption>
        </figure>
        <figure class="second">
            <img src="http://res.cloudinary.com/dpnzwgeil/image/upload/v1483955672/kello_jeat59.png" class="boxguide">
            <figcaption><span class="pacificoh2"> Muu ohjelma <i class="fa fa-angle-right" aria-hidden="true"></i></span>
            <br> Paikanpäältä löytyy lounge jossa voi viettää aikaa pelaamisen ohella, muutakin ohjelmaa on luvassa. Seuraa meitä facebookissa niin pysyt ajan tasalla!
            </figcaption>
        </figure>
    </div>
</section>

</section>

@stop
@section('scripts_bottom')
    <!-- Bottom Scripts Here -->
@stop