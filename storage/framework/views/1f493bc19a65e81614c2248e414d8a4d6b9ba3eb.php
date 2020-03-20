<?php $__env->startSection('content'); ?>


  



<section class="content-header">
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard 
              <small>Edit Category</small>

            </h1>
          </div>
           <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('admin')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Edit Categories </li>
            </ol> 
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

     
  	
  	<form method="post" action="<?php echo e(url('updateCategory')); ?>/<?php echo e($maindata->caid); ?>" >

  		<?php echo e(csrf_field()); ?>

  		<input type="hidden" name="tbl" value="<?php echo e(encrypt('categories')); ?>">
      <input type="hidden" name="caid" value="<?php echo e($maindata->caid); ?>">
  		
  			

  		
<div class="form-group">
     	<label>Title</label>
     	<p><input type="text" name="title" value="<?php echo e($maindata->title); ?>" class="form-contol"></p>
     </div>

     <div class="form-group">
       
       <label>Status</label>
       <select class="form-contol" name="status">
        <option><?php echo e($maindata->status); ?></option>
        <?php if($maindata->status == 'off'): ?>
         <option>on</option>
         <?php else: ?>
         <option>off</option>
         <?php endif; ?>
       </select>
     </div>

<div class="form-group">
	<button class="btn btn-success">Update Category</button>
	</div>
  	</form>
    <div class="col-sm-12">
      <p><strong>View all Categories</strong></p>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>SN</th>
          <th>Title</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e(++$key); ?></td>
          <td><?php echo e($category->title); ?></td>
          <td><?php echo e($category->status); ?></td>
          <td><a href="<?php echo e(url('editCategory')); ?>/<?php echo e($category->caid); ?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a><a href="<?php echo e(url('deleteCategory')); ?>/<?php echo e($category->caid); ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
          
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
    </div>


  	
  </section>
  <style> 
input[type=text] {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

select {


background-position:300px;
width:353px;
padding:12px;
margin-top:8px;
font-family:Cursive;
line-height:1;
border-radius:5px;
background-color:#A2AB58;
color:#ff0;
font-size:20px;
-webkit-appearance:none;
box-shadow:inset 0 0 10px 0 rgba(0,0,0,0.6);
outline:none
}



</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>