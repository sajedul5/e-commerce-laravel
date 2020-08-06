@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manage Pending Orders</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Order </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-md-12">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3>Pending Order List
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>SL.</th>
                      <th>Order No</th>
                      <th>Total Amount</th>
                      <th>Payment Type</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($orders as $key => $order)
                    <tr class="{{$order->id}}">
                      <td>{{$key+1}}</td>
                      <td>#LF{{$order->order_no}}</td>
                      <td>{{$order->order_total}}</td>
                      <td>
                        {{$order['payment']['payment_method']}}
                        @if($order['payment']['payment_method']=='Bkash')
                          (TN: {{$order['payment']['transaction_no']}})
                        @endif
                      </td>
                      <td>
                        @if($order->status=='0')
                        <strong class="text-danger ">Unapproved</strong>
                        @elseif($order->status=='1')
                        <strong class="text-success">Approved</strong>
                        @endif
                      </td>
                      <td>
                        <a href="{{route('order.details',$order->id)}}" class="btn btn-primary btn-sm" title="Details"><i class="fa fa-eye"></i></a>
                        <a href="{{route('order.approve',$order->id)}}" title="Approve" class="btn btn-sm btn-info" id="approveBtn"><i class="fa fa-check-circle"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </section>
        <!-- /.Left col -->

      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
  $(function(){
    $(document).on('click','#approveBtn',function(e){
      e.preventDefault();
      var link = $(this).attr("href");
      Swal.fire({
        title: 'Are you sure?',
        text: "Approve this order!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Approve it!'
        }).then((result) => {
        if (result.value) {
          window.location.href =link;
          Swal.fire(
            'Approved!',
            'Your Order has been approved.',
            'success'
          )
        }
      })
    });
  });
</script>
@endsection
