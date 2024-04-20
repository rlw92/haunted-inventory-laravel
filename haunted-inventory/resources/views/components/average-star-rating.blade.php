<div class="flex flex-col items-center space-x-4">
  <h3 class="text-base">Average Star Rating</h3>
  <div>
  @if($rating=="1")
  <span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
  @elseif($rating=="2")
  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
  
  @elseif($rating=="3")
  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>

@elseif($rating=="4")
  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>

@elseif($rating=="5")
  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>

  @else
  <p>Not yet rated</p>
  @endif

  @if($chirp->amount_of_ratings)
  <span>({{$chirp->amount_of_ratings}}
  <span class="text-sm">
    @if($chirp->amount_of_ratings > 1)
    Ratings
    @elseif($chirp->amount_of_ratings === 1)
    Rating
    @else
     
    @endif
  </span>)</span>
  @endif
</div>
</div>