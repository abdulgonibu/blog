@extends('backend.layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Product Manage</h1>
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
<script>

@if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif
</script>
   
    <!-- /.content-header -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <section class="col-sm-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3> Product List
                	
                 <a class="btn btn-success float-right btn-sm" href="{{ route('products.add')}}"><i class="fa fa-plus-circle"></i>Add Product</a>
              
                </h3>
              </div><!-- /.card-body -->
              <div class="card-body">
              	<table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Product Name</th>
                  <th>Product Image</th>
                  <th>Product Details Image</th>
                  <th>Technical Datasheet</th>
                  <th>Test Report</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

           @foreach($alldata as $key => $product)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{ $product->product_name}}</td>
                  <td><img src="{{(!empty($product->image))?url('/upload/product_images/'.$product->image):url('upload/no-image.png')}}" height="130px" width="120px"></td>
                  
                   <td><img src="{{(!empty($product->product_image))?url('/upload/product_product_images/'.$product->product_image):url('upload/no-image.png')}}" height="130px" width="120px"></td>
                  <td><img src="{{(!empty($product->image))?url('/upload/technical_datasheet/'.$product->image):url('upload/no-image.png')}}" height="130px" width="120px"></td>
                  <td><img src="{{(!empty($product->image))?url('/upload/testreport/'.$product->image):url('upload/no-image.png')}}" height="130px" width="120px"></td>

                  

                  <td>
                  	<a href="{{ route('products.edit',$product->id)}}" class="btn btn-sm btn-primary" title="edit"><i class="fa fa-edit"></i></a>
                  	<a href="{{ route('products.delete',$product->id)}}" id="delete" class="btn btn-sm btn-danger" title="delete"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
            @endforeach

                </tbody>
                
              </table>

              </div>
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
@endsection