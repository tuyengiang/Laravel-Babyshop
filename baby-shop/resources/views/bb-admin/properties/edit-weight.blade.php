@extends('../template-custom.template-admin')
@section("admin-title")
      Danh sách cân nặng quần áo trẻ em - Babyshop
@endsection

@section("title-box")
      Chỉnh sửa cân nặng
@endsection
@section("admin-main")
<div class="col-md-12">
            @if(count($errors)>0)
                  <div class="alert alert-danger error">
                        <ul>
                              @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                              @endforeach
                        </ul>
                  </div>
            @endif

            @if(Session::has('flash'))
                  <div class="alert alert-success success-flash">{{ Session::get('flash') }}</div>
            @endif
      </div>
      <div class="col-md-4">
            {{ Form::model($weight,[
                  'route'=>['update-weight',$weight->id],'method'=>'PUT'
            ]) }}
                  <div class="form-group">
                        {{ Form::label('title','Độ tuổi',['class'=>'form-content']) }}
                        {{ Form::text('age',NULL,['class'=>'form-control','placeholder'=>'0 - 12 Tháng','required'=>'true']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('title','Chiều cao',['class'=>'form-content']) }}
                        {{ Form::text('height',NULL,['class'=>'form-control','placeholder'=>'80 - 90cm','required'=>'true']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('title','Size',['class'=>'form-content']) }}
                        {{ Form::text('size',NULL,['class'=>'form-control','placeholder'=>'vd: 80','required'=>'true']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('title','Cân nặng',['class'=>'form-content']) }}
                        {{ Form::text('weight',NULL,['class'=>'form-control','placeholder'=>'90kg','required'=>'true']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::submit('Sửa cân nặng',['class'=>'btn btn-success']) }}
                  </div>
            {{ Form::close() }}
      </div>
      <div class="col-md-8">
                  <h4>Danh sách danh mục sản phẩm</h4>
                  <div class="row">
                      <div class="col-xs-12">
                          <div class="table-responsive">
                              <table id="example" class="table table-striped table-bordered" style="width:100%">
                                  <thead>
                                  <tr>
                                      <th>Độ tuổi</th>
                                      <th>Chiều cao (cm)</th>
                                      <th>Size</th>
                                      <th>Cân nặng</th>
                                      <th>Option</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($all as $we)
                                      <tr>
                                         <td>{{ $we->age }}</td>
                                         <td>{{ $we->height }}</td>
                                         <td>{{ $we->size }}</td>
                                         <td>{{ $we->weight  }}</td>
                                         <td>
                                             <a href="{{ route('show-edit',$we->id) }}" class="btn btn-success"><i class="fa fa-edit"></i> Sửa</a>
                                              {{ Form::open([
                                                    'route'=>['delete-weight',$we->id],'method'=>'delete','style'=>'display:inline'
                                              ]) }}
                                                 <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa danh mục không? '); "><i class="fa fa-trash"></i> Xóa</button>

                                              {{ Form::close() }}
                                          </td>
                                       </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
      </div>
@endsection