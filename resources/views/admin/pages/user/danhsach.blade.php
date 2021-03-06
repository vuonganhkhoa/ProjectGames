@extends('admin.layout.master')
@section('title', 'Admin - Danh sách người quản trị')
@section('content')

	<section id="main-content">
          <section class="wrapper">
            <div class="panel panel-body">
              <section class="content">
                  <div class="panel panel-default">

                  	@if(session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
                  	@endif
                  	@if(session('error'))
					<div class="alert alert-danger">
						{{ session('error') }}
					</div>
                  	@endif

                      <div class="panel-heading"><b>Danh sách người quản trị</b>
                      </div>
                      <div class="panel-body">
                          
                      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>STT</th>
				                <th>Hình đại diện</th>
				                <th>Họ tên</th>
				                <th>Ngày sinh</th>
				                <th>Sex</th>
				                <th>Email</th>
				                <th>Điện thoại</th>
				                <th>Quyền</th>
				                <th>Xóa</th>
				                <th>Cập nhật</th>
				            </tr>
				        </thead>
				        <tfoot>
				            <tr>
				                <th>STT</th>
				                <th>Hình đại diện</th>
				                <th>Họ tên</th>
				                <th>Ngày sinh</th>
				                <th>Sex</th>
				                <th>Email</th>
				                <th>Điện thoại</th>
				                <th>Quyền</th>
				                <th>Xóa</th>
				                <th>Cập nhật</th>
				            </tr>
				        </tfoot>
				        
						<!-- Copy day nha -->
						<tbody>
							
							<?php $stt = 1; ?>
							@foreach ($users as $user)
				            <tr>
				                <td>{{ $stt }}</td>
				                <td><img height="100px" src="adminAssets/img/photos/{{ $user->image }}"></td>
				                <td>{{ $user->fullname }}</td>
				                <td>{{ date('d/m/Y', strtotime($user->birthdate)) }}</td>
				                <td>{{ $user->gender }}</td>
				                <td>{{ $user->email }}</td>
				                <td>{{ $user->phone }}</td>
				                <td>{{ $user->role }}</td>
				                <td width="80px" style="font-size: 25px" class="text-center"><a onclick="return XacNhanXoa('Bạn có chắc muốn xóa?')" href="admin/users/xoa/{{ $user->id }}"><i class="fa fa-trash-o fa-fw"></i></a></td>
				                <td width="80px" style="font-size: 25px" class="text-center"><a href="admin/users/sua/{{ $user->id }}"><i class="fa fa-pencil fa-fw"></i></a></td>
				            </tr>
				            <?php $stt++; ?>
							@endforeach

				        </tbody>

				    </table>

                      </div>
                  </div>
              </section>
            </div>
          </section>
      </section>

@endsection
@section('script')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script>
	
    $(document).ready(function() {
        $('#example').DataTable();
        $('div.alert').delay(5000).slideUp();
    });

    function XacNhanXoa(message){
        	if(window.confirm(message)){
        		return true;
        	}
        	return false;
        }

</script>
@endsection