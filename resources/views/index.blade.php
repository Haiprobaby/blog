<style type="text/css">
    input[type="file"] {
    
}
    .custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}
</style>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


</head>
<body>
	<div class="row">
		<div class="col-md-3">
			
		</div>
		<div class="col-md-3">
			<h2>UPLOAD ẢNH</h2>
			<a href="user/viewimages" class="btn btn-primary">Gallery</a>
			<form enctype="multipart/form-data" action="user/upload" method="POST">				
			<input type="hidden" name="_token" value="{{csrf_token()}}"/>
				<label>Chọn danh mục</label>
				<br>
				<select class="form-control" required="" name="category">
					<option value="" selected="">--Chọn danh mục--</option>
					<option value="1">Du lịch</option>
					<option value="2">Lễ hội</option>
					<option value="3">Kỷ yếu</option>
				</select>
				<input id="file-input" type="file" name="images[]" multiple required>
				<div id="preview"></div>
				<br>
				<button type="submit" class="btn btn-default">Thêm</button>
                
				
			</form>
		</div>
		
	</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>

<script type="text/javascript">

function previewImages() {

  var preview = document.querySelector('#preview');
  
  if (this.files) {
    [].forEach.call(this.files, readAndPreview);
  }

  function readAndPreview(file) {

    // Make sure `file.name` matches our extensions criteria
    if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
      return alert(file.name + " is not an image");
    } // else...
    
    var reader = new FileReader();
    
    reader.addEventListener("load", function() {
      var image = new Image();
      image.height = 300;
      image.title  = file.name;
      image.src    = this.result;
      preview.appendChild(image);
    });
    
    reader.readAsDataURL(file);
    
  }

}

document.querySelector('#file-input').addEventListener("change", previewImages);
</script>