<!DOCTYPE html>
<html>
<head>
	<title>Slide</title>
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/image.css">
	<link rel="stylesheet" href="css/image_slide.css">
</head>
<style type="text/css">
	a:hover {
		transform: scale(1.01);
	}
	img{
		padding-top: 10px;
	}
</style>
<body>
	<div class="row">
		<div class="col-md-3">			
		</div>
		<div class="col-md-6">
			<h2>DANH MỤC HÌNH ẢNH</h2>
			<a href="user/viewimages" class="btn btn-primary">Tất cả</a>
			@foreach($cates as $cate)
			<a href="user/viewbycate/{{$cate->id}}" class="btn btn-primary">{{$cate->name}}</a>
			@endforeach
			<div class="row">
	        	@foreach($images as $image)
	            <a href="images/{{$image->source}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4" data-max-width="700" data-max-height="500">
	                <img width="300px" height="200px" src="images/{{$image->source}}" class="img-fluid">
	            </a>
	            @endforeach
	        </div>
	        {!! $images->links() !!}
		</div>
	</div>
	

</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js.map"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js.map"></script>
</html>

<script type="text/javascript">
	$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
</script>