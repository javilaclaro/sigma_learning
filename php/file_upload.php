<?php include 'modules/header.php'; ?>

<h1>File upload</h1>

<style media="screen">
.it .btn-orange
{
  background-color: blue;
  border-color: #777!important;
  color: #777;
  text-align: left;
width:100%;
}
.it input.form-control
{

  border:none;
margin-bottom:0px;
  border-radius: 0px;
  border-bottom: 1px solid #ddd;
  box-shadow: none;
}
.it .form-control:focus
{
  border-color: #ff4d0d;
  box-shadow: none;
  outline: none;
}
.fileUpload {
  position: relative;
  overflow: hidden;
}
.fileUpload input.upload {
  position: absolute;
  top: 0;
  right: 0;
  margin: 0;
  padding: 0;
  font-size: 20px;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
}
</style>



<div class="container">
  <div class="row">
    <div class="col-sm-offset-2 col-sm-8"><br><br>
<div class="form-group">
<div class="input-group">
  <input type="text" class="form-control" readonly>
<div class="input-group-btn">
  <span class="fileUpload btn btn-success">
      <span class="upl" id="upload">Upload single file</span>
      <input type="file" class="upload up" id="up" onchange="readURL(this);" />
    </span><!-- btn-orange -->
 </div><!-- btn -->
 </div><!-- group -->
 </div><!-- form-group -->
      <div class="form-group">
<div class="input-group">
  <input type="text" class="form-control" readonly>
<div class="input-group-btn">
  <span class="fileUpload btn btn-info">
      <span class="upl" id="upload">Upload multiple file</span>
      <input type="file" class="upload up" id="up" onchange="readURL(this);" multiple/>
    </span><!-- btn-orange -->
 </div><!-- btn -->
 </div><!-- group -->
 </div><!-- form-group -->
      </div>
    </div>
  </div>

  <script type="text/javascript">
  (document).on('change','.up', function(){
            var names = [];
            var length = $(this).get(0).files.length;
                for (var i = 0; i < $(this).get(0).files.length; ++i) {
                    names.push($(this).get(0).files[i].name);
                }
                // $("input[name=file]").val(names);
                if(length>2){
                  var fileName = names.join(', ');
                  $(this).closest('.form-group').find('.form-control').attr("value",length+" files selected");
                }
                else{
                    $(this).closest('.form-group').find('.form-control').attr("value",names);
                }
       });


  </script>
