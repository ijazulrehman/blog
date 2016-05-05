@extends('layouts.master')

@section('content')
     <section class="row new-post">
	     <div class="col-md-6 col-md-offset-3">
             <form action="{{route('post.create') }}" method="post" >
	             <div class="form-group">
	                <textarea class="form-control" name="new_post_text" id="new_post_text" rows="1" placeholder="What's on your mind..." style="overflow: hidden; word-wrap: break-word; resize:vertical; height: 36px;"></textarea>
                </div>		
		         <hr>
                 <input  type="submit" class="btn btn-primary" value="Post">
                 <input type="hidden" name="_token" value="{{Session::token() }}" >	 
	         </form>
    
         </div>
	 </section>
	 <section class="row posts">
	     <!--dome post 1-->
	     <div class="col-md-6 col-md-offset-3">
		    <article class="post">
		         <div class="info">
			         <div class='list'>
					     <div class="btn-group">
                             <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" 
							 aria-expanded="false">
                             <span class="caret"></span>
                             </button>
                             <ul class="dropdown-menu">
                                 <li><a href="#">Edit</a></li>
                                 <li><a href="#">Another action</a></li>
                                 <li role="separator" class="divider"></li>
                                 <li><a href="#">Separated link</a></li>
                             </ul>
                        </div>
					 </div>
			     </div>	<!--info section of post ends-->	
		         <hr>
			     <div class="post-content">
			        hghfhfhf
			     </div><!--post content-->
				 <hr>
			     <div class="interaction">
			         <a href="#">Like</a> |
				     <a href="#">Dislike</a>
			     </div><!--interaction of post-->
			 </article>
		 </div>
		 <!--dome post 2-->
	     <div class="col-md-6 col-md-offset-3">
		    <article class="post">
		         <div class="info">
			 
			     </div>	<!--info section of post ends-->	
		         <hr>
			     <div class="post-content">
			        hghfhfhf
			     </div><!--post content-->
				 <hr>
			     <div class="interaction">
			         <a href="#">Like</a> |
				     <a href="#">Dislike</a>
			     </div><!--interaction of post-->
			 </article>
		 </div>
		 <!--dome post 3-->
	     <div class="col-md-6 col-md-offset-3">
		    <article class="post">
		         <div class="info">
			 
			     </div>	<!--info section of post ends-->	
		         <hr>
			     <div class="post-content">
			        hghfhfhf
			     </div><!--post content-->
				 <hr>
			     <div class="interaction">
			         <a href="#">Like</a> |
				     <a href="#">Dislike</a>
			     </div><!--interaction of post-->
			 </article>
		 </div>
	 </section>
@endsection