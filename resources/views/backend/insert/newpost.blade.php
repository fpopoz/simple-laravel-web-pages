@extends('backend.master')


@section('content')


  



<section class="content-header">
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard 
              <small>Add New Post</small>

            </h1>
          </div><!-- /.col -->
           <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Add New Post </li>
            </ol> -->
          <!-- </div> --><!-- /.col -->
        <!-- </div> --><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </section>

  <section class="content">
      @if(Session::has('message'))
     <div class="col-sm-12">
      <div class="alert alert-success alert-dismissable">
        {{ Session::get('message')}}
        <a class="close" data-dismiss="alert" >&times;</a>
      </div>
      
     </div>
     @endif

    
    
    <form method="post" action="{{url('addPost')}}" enctype="multipart/form-data">

      {{ csrf_field() }}
      <input type="hidden" name="tbl" value="{{encrypt('contentas')}}">
      

      
<div class="form-group">
      <label>Title</label>
      <p><input type="text" name="title" class="form-contol"></p>
     </div>

     <div class="form-group">
      <label>Description</label>
      <p><textarea name="description" class="form-contol" rows="10"></textarea></p>
     </div>

     <div class="form-group">
        <input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
             <p><label for="file" style="cursor: pointer;">Featured Image</label></p>
               <p><img id="output" width="200" /></p>

      </div>
     
     <div class="form-group">
       <label>Category</label>
      <p> <select class="form-contol" name="category">
        @foreach($cats as $cat)
         <p><option>{{$cat->title}}</option></p>
         @endforeach
         <option>Home</option>
       </select></p>
     </div>
     <div class="form-group">
       <label>Status</label>
       <p><select class="form-contol" name="status">
         <option>on</option>
         <option>off</option>
       </select></p>
     </div>

<div class="form-group">
  <button class="btn btn-success">Add Post</button>
  

</div>

    </form>
    
  </section>

  <script>
var loadFile = function(event) {
  var image = document.getElementById('output');
  image.src = URL.createObjectURL(event.target.files[0]);
};

// $('.addField').click(function(){

//  var newField = $(document.createElement('div')).attr('class','form-group');
//  newField.after.html('<label>social profile links</label><input type="text" name="social[]" class="form-contol " ></div>');
//  newField.appendTo(#socialGroup);
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
textarea {
  width: 90%;
    padding: 10px;
    line-height: 1.5;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-shadow: 1px 1px 1px #999;
}

select {
  background-color: #0563af;
  color: white;
  padding: 12px;
  width: 125px;
  border: none;
  font-size: 15px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
  -webkit-appearance: button;
  appearance: button;
  outline: none;
}

option {
  padding: 30px;
}




</style>




@stop