@extends('admin.layout.master')
@section('title', 'Admin - Cập nhật hình')
@section('content')

	<section id="main-content">
          <section class="wrapper">
            <div class="panel panel-body">
              <section class="content">
                  <div class="panel panel-default">
                      <div class="panel-heading"><b>Cập nhật hình</b>
                      </div>
                      <div class="panel-body">
                        
                        <div class="col-md-8">  
                        @if(count($errors) > 0)                       
                            <div class="alert alert-danger">@foreach($errors->all() as $err){{$err}}<br>@endforeach</div>
                        @endif

                     	<!-- Copy o day -->
                      <form method="POST" action="admin/pictures/sua/{{ $picture->id }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group label-floating">
                              <label class="control-label">Tên game</label>
                              <select name="TenGame" class="form-control">
                                @foreach ($games as $game)
                                <option @if($game->id == $picture->game_id) {{ 'selected' }} @endif value="{{ $game->id }}">{{ $game->title }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>   
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group label-floating">
                              <label class="control-label">Hình ảnh</label>
                              <input type="file" multiple name="HinhGame[]" class="form-control" />
                              <img width="380px" src="adminAssets/img/hinh_game/{{ $picture->image }}" alt="">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group label-floating">
                              <label class="control-label">Ghi chú</label>
                              <input class="form-control" type="text" name="GhiChu" value="{{ $picture->note }}">
                            </div>
                          </div>   
                        </div>


                        <button type="submit" class="btn btn-danger pull-right">Cập nhật</button>
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