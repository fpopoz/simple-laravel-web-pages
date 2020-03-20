<?php $__env->startSection('content'); ?>


  



<section class="content-header">
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard 
              <small>Website settings</small>

            </h1>
          </div><!-- /.col -->
           <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('admin')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Website settings </li>
            </ol> -->
          <!-- </div> --><!-- /.col -->
        <!-- </div> --><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </section>

  <section class="content">
      <?php if(Session::has('message')): ?>
     <div class="col-sm-12">
     	<div class="alert alert-success alert-dismissable">
     		<?php echo e(Session::get('message')); ?>

     		<a class="close" data-dismiss="alert" >&times;</a>
     	</div>
     	
     </div>
     <?php endif; ?>

     <?php if($data == ''): ?>
  	
  	<form method="post" action="<?php echo e(url('addSettings')); ?>" enctype="multipart/form-data">

  		<?php echo e(csrf_field()); ?>

  		<input type="hidden" name="tbl" value="<?php echo e(encrypt('setups')); ?>">
  		<div class="form-group">
  			<label>Logo</label>
  			<input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
             <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
               <p><img id="output" width="200" /></p>

  		</div>
  			

  		
<div class="form-group">
     	<label>Site Title</label>
     	<p><input type="text" name="meta_title" class="form-contol"></p>
     </div>

     <div class="form-group">
     	<label>Address</label>
     	<p><input type="text" name="address" class="form-contol"></p>
     </div>
     <div class="form-group">
     	<label>Contact Number</label>
     	<p><input type="text" name="contact" class="form-contol"></p>
     </div>
     <div class="form-group">
     	<label>Email</label>
     	<p><input type="email" name="email" class="form-contol"></p>
     </div>

    <div class="form-group">
    	<label>Social Profile Link 1</label>
    	<p><input type="text" name="social[]" class="form-contol " ><p>
    	
  
    </div>
     <div class="form-group">
    	<label>Social Profile Link 2</label>
    	<p><input type="text" name="social[]" class="form-contol " ><p>
    	
  
    </div>
     <div class="form-group">
    	<label>Social Profile Link 3</label>
    	<p><input type="text" name="social[]" class="form-contol " ><p>
    	
  
    </div>
     <div class="form-group">
    	<label>Social Profile Link 4</label>
    	<p><input type="text" name="social[]" class="form-contol " ><p>
    	
  
    </div>

    <!-- <div id="socialGroup">

    <div class="form-group socialField">
    	<input type="text" name="social[]" class="form-contol " >
    	<a href="#" class="btn btn-warning addField"><i class="fa fa-plus"></i></a>
    	

    </div>
</div> -->

<div class="form-group">
	<button class="btn btn-success">Update</button>
	

</div>

  	</form>
  	<?php else: ?>

  		<form method="post" action="<?php echo e(url('addSettings')); ?>" enctype="multipart/form-data">

  		<?php echo e(csrf_field()); ?>

  		<input type="hidden" name="tbl" value="<?php echo e(encrypt('setups')); ?>">
  		<div class="form-group">
  			<label>Logo</label>
  			<input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
             <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
               <p><img id="output" src="<?php echo e(url('public/setups')); ?>/<?php echo e($data->image); ?>" /></p>

  		</div>
  			

  		
<div class="form-group">
     	<label>Site Title</label>
     	<p><input type="text" name="meta_title" value="<?php echo e($data->meta_title); ?>" class="form-contol"></p>
     </div>

     <div class="form-group">
     	<label>Address</label>
     	<p><input type="text" name="address" value="<?php echo e($data->address); ?>" class="form-contol"></p>
     </div>
     <div class="form-group">
     	<label>Contact Number</label>
     	<p><input type="text" name="contact" value="<?php echo e($data->contact); ?>" class="form-contol"></p>
     </div>
     <div class="form-group">
     	<label>Email</label>
     	<p><input type="email" name="email" value="<?php echo e($data->email); ?>" class="form-contol"></p>
     </div>

      
    <div class="form-group">

    	<label>Social Profile Link 1</label>
    	<p><input type="text" name="social[]" value="<?php echo e($data->social); ?>" class="form-contol " ><p>
    	
  
    </div>
     <div class="form-group">
    	<label>Social Profile Link 2</label>
    	<p><input type="text" name="social[]" value="<?php echo e($data->social); ?>" class="form-contol " ><p>
    	
  
    </div>
     <div class="form-group">
    	<label>Social Profile Link 3</label>
    	<p><input type="text" name="social[]" value="<?php echo e($data->social); ?>" class="form-contol " ><p>
    	
  
    </div>
     <div class="form-group">
    	<label>Social Profile Link 4</label>
    	<p><input type="text" name="social[]" value="<?php echo e($data->social); ?>" class="form-contol " ><p>
    	
  
    </div>
   

    <!-- <div id="socialGroup">

    <div class="form-group socialField">
    	<input type="text" name="social[]" class="form-contol " >
    	<a href="#" class="btn btn-warning addField"><i class="fa fa-plus"></i></a>
    	

    </div>
</div> -->

<div class="form-group">
	<button class="btn btn-success">Update</button>
	

</div>

  	</form>




  	<?php endif; ?>
  </section>

  <script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};

// $('.addField').click(function(){

// 	var newField = $(document.createElement('div')).attr('class','form-group');
// 	newField.after.html('<label>social profile links</label><input type="text" name="social[]" class="form-contol " ></div>');
// 	newField.appendTo(#socialGroup);
// })
</script>

<style> 
input[type=text],input[type=email] {
  width: 90%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
.socialField{
	position:relative;

}
.addField{
	position:absolute;
	top:0;
	right:0;
}


</style>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>