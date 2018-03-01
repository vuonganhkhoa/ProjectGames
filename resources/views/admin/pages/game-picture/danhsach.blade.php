@extends('admin.layout.master')
@section('title', 'Admin - danh sách hình')
@section('content')

	<section id="main-content">
          <section class="wrapper">
            <div class="panel panel-body">
              <section class="content">
                  <div class="panel panel-default">

                      <div class="panel-heading"><b>Danh sách hình</b>
                      </div>
                      <div class="panel-body">

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
                          
                      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>STT</th>
				                <th>Tên game</th>
				                <th>Hình game</th>
				                <th>Xóa</th>
				                <th>Cập nhật</th>
				            </tr>
				        </thead>
				        <tfoot>
				            <tr>
				                <th>STT</th>
				                <th>Tên game</th>
				                <th>Hình game</th>
				                <th>Xóa</th>
				                <th>Cập nhật</th>
				            </tr>
				        </tfoot>
				        
					<!-- Copy game -->
					<tbody>

						<?php $stt = 1; ?>
						@foreach ($picture as $pic)
						<tr>
							<td>{{ $stt }}</td>
							<td width="100px">{{ $pic->game->title }}</td>
							<td><img src="adminAssets/img/hinh_game/{{ $pic->image }}" height="100px"></td>
							<td width="80px" style="font-size: 25px" class="text-center"><a onclick="return XacNhanXoa('Bạn có chắc muốn xóa?')" href="admin/pictures/xoa/{{ $pic->id }}"><i class="fa fa-trash-o fa-fw"></i></a></td>
							<td width="80px" style="font-size: 25px" class="text-center"><a href="admin/pictures/sua/{{ $pic->id }}"><i class="fa fa-pencil fa-fw"></i></a></td>
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