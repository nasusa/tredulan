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
            <img src="http://res.cloudinary.com/dpnzwgeil/image/upload/v1478696101/11009232885_b83be67d8c_k_phydpw.jpg" class="boxguide">
            <figcaption><span class="header"><a href="{{url('/')}}" class="{!! set_active('/')">CONSECTETUR <i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
            <br> Vivamus eget consectetur velit. Pellentesque eros tortor, elementum nec pretium ac, tristique at urna. Suspendisse sagittis eros gravida nisl tincidunt, sit amet feugiat ex placerat.
            </figcaption>
        </figure>
        <figure class="first">
            <img src="http://res.cloudinary.com/dpnzwgeil/image/upload/v1478695798/7536254266_13771dc965_k_gs2uil.jpg" class="boxguide">
            <figcaption><span class="header"><a href="{{url('/')}}" class="{!! set_active('/')">DOLOR SIT AMET <i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
            <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin viverra, sem ornare sagittis pulvinar, est nulla posuere erat, at lacinia turpis tortor non enim. Morbi in erat quis ligula eleifend feugiat in bibendum sem.
            </figcaption>
        </figure>
        <figure class="first">
            <img src="http://res.cloudinary.com/dpnzwgeil/image/upload/v1478695466/6477358187_dbfa1087fb_b_k30tbs.jpg" class="boxguide">
            <figcaption><span class="header"><a href="{{url('aboutme')}}" class="{!! set_active('/')">LOREM IPSUM<i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
            <br> In hac habitasse platea dictumst. Donec molestie et purus pulvinar posuere. Nullam sem enim, accumsan non venenatis vitae, vestibulum vitae leo. Aenean vitae nisi at ex tristique laoreet mattis vel ex. 
            </figcaption>
        </figure>
    </div>
    <div class="row kuvaboksi">
        <figure class="second">
            <img src="http://res.cloudinary.com/dpnzwgeil/image/upload/v1478695466/6477358187_dbfa1087fb_b_k30tbs.jpg" class="boxguide">
            <figcaption><span class="pacificoh2"><a href="{{url('aboutme')}}" class="{!! set_active('/')">Adipiscing elit<i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
            <br> Vivamus eget consectetur velit. Pellentesque eros tortor, elementum nec pretium ac, tristique at urna. Suspendisse sagittis eros gravida nisl tincidunt, sit amet feugiat ex placerat.
            </figcaption>
        </figure>
        <figure class="second">
            <img src="http://res.cloudinary.com/dpnzwgeil/image/upload/v1478695466/6477358187_dbfa1087fb_b_k30tbs.jpg" class="boxguide">
            <figcaption><span class="pacificoh2"><a href="{{url('/')}}" class="{!! set_active('/')">Proin viverra <i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
            <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin viverra, sem ornare sagittis pulvinar, est nulla posuere erat, at lacinia turpis tortor non enim. Morbi in erat quis ligula eleifend feugiat in bibendum sem.
            </figcaption>
        </figure>
    </div>
</section>

</section>

@stop
@section('scripts_bottom')
    <!-- Bottom Scripts Here -->
@stop