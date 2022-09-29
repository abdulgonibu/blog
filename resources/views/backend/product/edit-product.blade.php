@extends('backend.layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <section class="col-sm-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3> Edit Product
                 <a class="btn btn-success float-right btn-sm" href="{{ route('products.add')}}"><i class="fa fa-list"></i> Add Product</a>
                </h3>
              </div><!-- /.card-body -->
              <div class="card-body">
              	<form method="post" action="{{ route('products.update', $editData->id)}}" id="myForm" enctype="multipart/form-data">
              		@csrf
              		<div class="form-row">
              			<div class="form-row">
              			<div class="form-group col-md-6">
              				<label for="product_name"> Product Name</label>
              				<input type="text" name="product_name" class="form-control" value="{{ $editData->product_name}}" id="short_title">
              			</div>
              			<div class="form-group col-md-6">
              				<label for="product_details"> Product Details</label>
                      <textarea name="product_details" id="summernote" class="form-control" cols="30" rows="10">{{ $editData->product_details}}</textarea>
              			</div>

              			<div class="form-group col-md-4">
              				<label for="image"> Image</label>
              				<input type="file" value="{{$editData->image}}" name="image" class="form-control" id="image">
              			</div>

              			<div class="form-group col-md-2">
              				<img id="showImage" src="{{(!empty($editData->image))?url('/upload/product_images/'.$editData->image):url('/upload/no-image.png')}}" style="width: 150px; height: 160px;border: 1px solid #000">
              			</div>
              			
              			 <div class="form-group col-md-4">
              				<label for="product_image">Product Details Image</label>
              				<input type="file" name="product_image" class="form-control" id="product_image">
              			</div>

              			<div class="form-group col-md-2">
              				<img id="productshowImage" src="{{(!empty($editData->product_image))?url('upload/product_product_images/'.$editData->product_image):url('upload/no-image.png')}}" style="width: 150px; height: 160px;border: 1px solid #000">
              			</div>



                    <div class="form-group col-md-4">
              				<label for="technical_datasheet"> Product Datasheet</label>
              				<input type="file" value="{{$editData->technical_datasheet}}" name="technical_datasheet" class="form-control" id="technical_datasheet">
              			</div>

              			<div class="form-group col-md-2">
              				<img id="showImage" src="{{(!empty($editData->technical_datasheet))?url('/upload/technical_datasheet/'.$editData->technical_datasheet):url('/upload/no-image.png')}}" style="width: 150px; height: 160px;border: 1px solid #000">
              			</div>

                    <div class="form-group col-md-4">
              				<label for="test_report"> Test Report</label>
              				<input type="file" value="{{$editData->test_report}}" name="test_report" class="form-control" id="test_report">
              			</div>

              			<div class="form-group col-md-2">
              				<img id="showImage" src="{{(!empty($editData->test_report))?url('/upload/testreport/'.$editData->test_report):url('/upload/no-image.png')}}" style="width: 150px; height: 160px;border: 1px solid #000">
              			</div>
              			
                    <div class="form-group col-md-4">
              				<label for="video"> Youtube Video</label>
              				<input type="text" name="video" class="form-control" value="{{ $editData->video}}" id="short_title">
              			</div>
<br>
              			<div class="form-group col-md-6">
              				<input type="submit" value="Update" class="btn btn-primary">
              			</div>

              		</div>

              	</form>

              </div>
            </div>
           
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
               </div>
            </div>
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

</div>


@endsection