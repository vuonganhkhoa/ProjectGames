@extends('admin.layout.master')
@section('title', 'Admin - Thêm link download')
@section('content')

	<section id="main-content">
          <section class="wrapper">
            <div class="panel panel-body">
              <section class="content">
                  <div class="panel panel-default">
                      <div class="panel-heading"><b>Thêm link download</b>
                      </div>
                      <div class="panel-body">
                        
                        <div class="col-md-8">  
                        @if(count($errors) > 0)                       
                            <div class="alert alert-danger">@foreach($errors->all() as $err){{$err}}<br>@endforeach</div>
                        @endif

                     	<!-- Copy day nha -->
                      <form method="POST" action="admin/link-download/them" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group label-floating">
                              <label class="control-label">Tên game</label>
                              <select name="TenGame" class="form-control">
                                @foreach ($games as $game)
                                <option value="{{ $game->id }}">{{ $game->title }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>   
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group label-floating">
                              <label class="control-label">Link Download</label>
                              <input class="form-control" type="text" name="LinkDownload">
                            </div>
                          </div>   
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group label-floating">
                              <label class="control-label">Ghi chú</label>
                              <input class="form-control" type="text" name="GhiChu" value="Không">
                            </div>
                          </div>   
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group label-floating">
                              <label class="control-label">Tình Trạng</label>
                              <input class="form-control" type="text" name="TinhTrang" value="Còn Sống">
                            </div>
                          </div>   
                        </div>


                        <button type="submit" class="btn btn-danger pull-right">Thêm</button>
                      </form>

                        </div>
                      </div>
                  </div>
              </section>
            </div>
          </section>
      </section>

@endsection
@section('script')


<script type="text/javascript">
	$('.alert').delay(5000).slideUp()
</script>

@endsection