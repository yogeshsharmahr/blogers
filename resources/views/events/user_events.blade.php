@extends('layouts.front')
   
@section('content')

<style> 
#panel, #flip {
  padding: 5px;
  text-align: left;
  background-color: white;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 50px;
  display: none;
}

</style>











<div class="container">
<div class="row">    
    @foreach($events as $event)
        <div class="col-md-9 ">
            <div class="card videos_play">
                <div class="card-image">

                    <div class="embed-responsive embed-responsive-16by9">
<iframe width="560" height="315" src="{{URL::asset("/public/videos/$event->file")}}" frameborder="0" allowfullscreen></iframe>

</div>

                </div><!-- card image -->

                <div class="card-content text-right">

               <a href="https://twitter.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle text-right"></div></a>
              
               
               <p class="pull-left"><h3><b>{{$event->event_title }}</b></h3></p>
               
                <a href="" class="btn btn-danger  ">Subscriptive</a>
               @include('components.share', [
    'url' => request()->fullUrl(),
    'description' => 'This is really cool link',
    
])
<a id="flip"><i class="fa fa-chevron-down btn btn-success" aria-hidden="true"></i></a>
<div id="panel">
<p>{{$event->description }}</p>
 

                            <form method="post" action="">
                            @csrf
                            <div class="form-group">
                            <textarea class="form-control" name="body"></textarea>
                            <input type="hidden" name="post_id" value="" />
                            
                             </div>
                        
                             <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Add Comment" />
                                 </div>
                            </form>
                        </div>
                </div><!-- card content -->
                

  @endforeach              
            </div>
        </div>
        <div class="col-md-3 ">
            <h5><u>Recent Events<u></u></h5>
            <br><br><br>
            @foreach($recent as $post)
            <div class="card">


                <div class="card-image">
                    <div class="embed-responsive embed-responsive-16by9">
<iframe width="560" height="315" src="{{URL::asset("/public/videos/$post->file")}}" frameborder="0" allowfullscreen></iframe>
</div>
                    
                </div>
                 </div><!-- card image -->           
                
        
   

                    <span class="card-title"><a href="{{ URL('/event/join/'.$post->slug )}}">{{$post->event_title}}</a></span>@endforeach                    
               <!-- card content -->              
            </div>
             </div>
       </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
  <script>
    $(function(){
       $('#button').click(function() {
            $.ajax({
                url: '',
                type: 'post',
                data: { id: 1 },
                success: function(response)
                {
                    $('#something').html(response);
                }
            });
       });
    });    
</script>                                  
           
@endsection