 @extends('layouts.app')

@section('title', 'Index')
@section('description', 'This is a description')
@section('keywords', 'These, are, keywords')
@section('styles')

@stop
@section('scripts_top')

@stop
@section('content')
 <section class="mainheroinfoscreen">
      <div id="headerinfoscreen">
        <h1 class"h1infoscreen2">Tampereen seudun ammattiopisto</h1>
          <h2 class="h2infoscreen">LANPARTY</h2>
        </div>
        <div class="rowinfoscreen">
          <div class="col-md-6 col-md-offset-3" id="container">
              <div id="knob-countdown" class="hideinfoscreen"></div>
                <div class="knob-progress">
                  <div class="progress-count">
                    <input type="text" id="countdown-ds"
                    data-width="168"
                    data-height="168"
                    data-max="10"
                    data-thickness=".07"
                    data-fgcolor="#fff"
                    data-bgcolor="rgba(255,255,255, .2)"
                    data-min="0"
                    class="knob"
                    data-readonly="true" />
                  <label>Days</label>
                  </div>

                  <div class="progress-count">
                    <input type="text" id="countdown-hr"
                    data-width="168"
                    data-height="168"
                    data-max="24"
                    data-thickness=".07"
                    data-fgcolor="#fff"
                    data-bgcolor="rgba(255,255,255, .2)"
                    data-min="0"
                    class="knob"
                    data-readonly="true" />
                  <label>Hours</label>
                  </div>

                  <div class="progress-count">
                    <input type="text" id="countdown-min"
                    data-width="168"
                    data-height="168"
                    data-max="60"
                    data-thickness=".07"
                    data-fgcolor="#fff"
                    data-bgcolor="rgba(255,255,255, .2)"
                    data-min="0"
                    class="knob"
                    data-readonly="true" />
                  <label>Minutes</label>
                  </div>

                  <div class="progress-count">
                    <input type="text" id="countdown-sec"
                    data-width="168"
                    data-height="168"
                    data-max="60"
                    data-thickness=".07"
                    data-fgcolor="#fff"
                    data-bgcolor="rgba(255,255,255, .2)"
                    data-min="0"
                    class="knob"
                    data-readonly="true" />
                  <label>Seconds</label>
                  </div>
              </div>
          </div>
        </div>
 </section>
  
  <section class="infoscreen">
        <div class="contentinfoscreen">
            <ul class="screenul">
                <li align="center">
                  <span class="h1infoscreen">Järjestetään TREDU Hepolamminkadun toimipisteen sähkötalon 4krs.</span>
                </li>
                <li class="fancyinfoscreen">
                  <span class="sloganinfoscreen"> 27.-29.01.2017 </span>
                </li>
                <li align="center"><span class="h1infoscreen">Käy sivuillamme Tredu LANIT 2017</span> 
                </li>
            </ul>
        </div>
  </section>

  @stop
@section('scripts_bottom')
    <!-- Bottom Scripts Here -->
@stop