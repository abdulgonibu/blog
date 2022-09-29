@extends('backend.layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage calculator Customer</h1>
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
              
              <div class="card-body">
              	<table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Company/Home Owner</th>
                  <th>Whatsapp Number</th>
                  <th>Mobile No</th>
                  <th>Project Name</th>
                  <th>Total area in sft</th>
<th>Cost Per/SFT
</th>
<th>Total Cost


</th>
<th>Action


</th>
                </tr>
                </thead>
                <tbody>

           @foreach($alldata as $key => $calcutor)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{ $calcutor->company}}</td>
                  <td>{{ $calcutor->Whatsapp}}</td>
                  <td>{{ $calcutor->mobile}}</td>
                  <td>{{ $calcutor->project_name}}</td>
                  <td>{{ $calcutor->tasf}}</td>
                  <td>{{ $calcutor->costpersf}}</td>
                  <td>{{ $calcutor->totalcost}}</td>
                  <td>
                    <a href="{{route('invoice.ptint',$calcutor->id)}}" title="Print" target="_blank" class="btn btn-sm btn-info"><i class="fa fa-print"></i></a>
                      </td>
                  <td>
                      
                  	<a href="{{ route('calculator.delete',$calcutor->id)}}" id="delete" class="btn btn-sm btn-danger" title="delete"><i class="fa fa-trash"></i></a>
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