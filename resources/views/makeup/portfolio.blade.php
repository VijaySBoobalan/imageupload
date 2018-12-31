@extends('makeuplayout.master')
@section('content')
    <div class="w3-hide-small w3-hide-medium">
    <div class="row ">
      <h1 class="about_h1 heading"> <a href="#bridal">Bridal</a> & <a href="#fashion">Fashion</a> </h1>
    </div>
    <section id="bridal">
      <div class="row" >
        <br>
      </div>
      <div class="row">
        <h1 class="about_h1 heading_1" value="bridal">Bridal</h1>
      </div>
     
      <div class="gallery">
        <div class="row">
          <div class="col-6">
            @if(!empty(($Bridals[0])))
            <img class="port-l"src="{{ $Bridals[0]->name }}" alt="">
            @endif
          </div>
          
          <div class="col-6">
            @if(!empty(($Bridals[1])))
            <img class="port-r"src="{{ $Bridals[1]->name }}" alt="">
             @endif
          </div>
        </div>
        
        <div class="row">
          @if(!empty(($Bridals[2])))
              <img class="port-m" src="{{ $Bridals[2]->name }}" alt="">
          @endif
        </div>
        <div class="row">
          <div class="col-6">
            @if(!empty(($Bridals[3])))
            <img class="port-l"src="{{ $Bridals[3]->name }}" alt="">
            @endif
          </div>
          <div class="col-6">
            @if(!empty(($Bridals[4])))
            <img class="port-r"src="{{ $Bridals[4]->name }}" alt="">
            @endif
          </div>
        </div>
        <div class="row">
          @if(!empty(($Bridals[5])))
          <img class="port-m" src="{{ $Bridals[5]->name }}" alt="">
          @endif
        </div><br>
        <div class="row">
          <div class="col-sm-12">
            <a href="{{'/bridal'}}">
          <input type="button" class="btn btn-dark" name="" Value="Show More" style="float:right;" ></a>
        </div>
      </div>
      </div>
    </section>
    <section id="fashion" class="section_gap">
      <br>
      <div class="row">
        <h1 class="about_h1 heading_1">Fashion</h1>
      </div>
      <div class="gallery">
        <div class="row">
          <div class="col-6">
            @if(!empty(($Fashion[0])))
            <img class="port-l"src="{{$Fashion[0]->name}}" alt="">
            @endif
          </div>
          <div class="col-6">
            @if(!empty(($Fashion[1])))
            <img class="port-r"src="{{$Fashion[1]->name}}" alt="">
            @endif
          </div>
        </div>
        <div class="row">
          @if(!empty(($Fashion[2])))
          <img class="port-m" src="{{$Fashion[2]->name}}" alt="">
          @endif
        </div>
        <div class="row">
          <div class="col-6">
            @if(!empty(($Fashion[3])))
            <img class="port-l"src="{{$Fashion[3]->name}}" alt="">
            @endif
          </div>
          <div class="col-6">
            @if(!empty(($Fashion[4])))
            <img class="port-r"src="{{$Fashion[4]->name}}" alt="">
            @endif
          </div>
        </div>
        <div class="row">
          @if(!empty(($Fashion[5])))
          <img class="port-m" src="{{$Fashion[5]->name}}" alt="">
          @endif
        </div><br>
        <div class="row">
          <div class="col-sm-12">
         <a href="{{'/fashion'}}"><input type="button" class="btn btn-dark" name="" Value="Show More" style="float:right;" ></a>
        </div>
      </div>
      </div>
    </section>
  </div>
 <div class="w3-hide-large">
<div class="row ">
<h1 class="about_h1 heading-sm"> <a href="#bridal-sm">Bridal</a> & <a href="#fashion-sm">Fashion</a> </h1>
</div>
<section id="bridal-sm">
<div class="row" >
</div>
<div class="row">
<h1 class="about_h1 heading_2">Bridal</h1>
</div>
<div class="gallery">
<div class="row">
<div class="col-6">
@if(!empty(($Bridals[0])))
<img class="port-s"src="{{ $Bridals[0]->name }}" width="460" height="345" alt="">
@endif
</div>

<div class="col-6">
@if(!empty(($Bridals[1])))
<img class="port-s"src="{{ $Bridals[1]->name }}" width="460" height="345" alt="">
@endif
</div> 
</div>
<div class="row">
@if(!empty(($Bridals[2])))
<img class="port-sm" src="{{ $Bridals[2]->name }}" width="460" height="345" alt="">
@endif
</div>
<div class="row">
<div class="col-6">
@if(!empty(($Bridals[3])))
<img class="port-s"src="{{ $Bridals[3]->name }}" width="460" height="345" alt="">
@endif
</div>
<div class="col-6">
@if(!empty(($Bridals[4])))
<img class="port-s"src="{{ $Bridals[4]->name }}" width="460" height="345" alt="">
@endif
</div> 
</div>
<div class="row">
@if(!empty(($Bridals[5])))
<img class="port-sm" src="{{ $Bridals[5]->name }}" width="460" height="345" alt="">
@endif
</div><br>
<div class="row">
<div class="col-sm-12">
<a href="{{'/bridal'}}">
<input type="button" class="btn btn-dark" name="" Value="Show More" style="float: right;" ></a>
</div>
</div>
</section>
<section id="fashion-sm" class="section_gap">
<br>
<div class="row">
<h1 class="about_h1 heading_2">Fashion</h1>
</div>
<div class="gallery">
<div class="row">
<div class="col-6">
@if(!empty(($Fashion[0])))
<img class="port-s" src="{{ $Bridals[0]->name }}" width="460" height="345" alt="">
@endif
</div>
<div class="col-6">
@if(!empty(($Fashion[1])))
<img class="port-s" src="{{ $Bridals[1]->name }}" width="460" height="345" alt="">
@endif
</div>
</div>
<div class="row">
@if(!empty(($Fashion[2])))
<img class="port-sm" src="{{ $Bridals[2]->name }}" width="460" height="345" alt="">
@endif
</div>
<div class="row">
<div class="col-6">
@if(!empty(($Fashion[3])))
<img class="port-s" src="{{ $Bridals[3]->name }}" width="460" height="345" alt="">
@endif
</div>
<div class="col-6">
@if(!empty(($Fashion[4])))
<img class="port-s" src="{{ $Bridals[4]->name }}" width="460" height="345" alt="">
@endif
</div>
</div>
<div class="row">
@if(!empty(($Fashion[5])))
<img class="port-sm" src={{ $Bridals[5]->name }}" width="460" height="345"alt="">
@endif
</div><br>
<div class="row">
<div class="col-sm-12">
<a href="{{'/fashion'}}">
<input type="button" class="btn btn-dark" name="" Value="Show More" style="float: right;" ></a>
</div>
</div>
</div>
</section>
</div>
@endsection