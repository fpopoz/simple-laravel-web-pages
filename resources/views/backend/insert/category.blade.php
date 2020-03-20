@extends('backend.master')


@section('content')


  



<section class="content-header">
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard 
              <small>Categories</small>

            </h1>
          </div>
           <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Categories </li>
            </ol> 
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

     
  	
  	<form method="post" action="{{url('addCategory')}}" >

  		{{ csrf_field() }}
  		<input type="hidden" name="tbl" value="{{encrypt('categories')}}">
  		
  			

  		
<div class="form-group">
     	<label>Title</label>
     	<p><input type="text" name="title" class="form-contol"></p>
     </div>

     <div class="form-group">
       
       <label>Status</label>
       <select class="form-contol" name="status">
         <option>on</option>
         <option>off</option>
       </select>
     </div>

<div class="form-group">
	<button class="btn btn-success">Add Category</button>
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
        @foreach($data as $key=>$category)
        <tr>
          <td>{{++$key}}</td>
          <td>{{$category->title}}</td>
          <td>{{$category->status}}</td>
          <td><a href="{{url('editCategory')}}/{{$category->caid}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a><a href="{{url('deleteCategory')}}/{{$category->caid}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
          
        </tr>

        @endforeach
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
@stop