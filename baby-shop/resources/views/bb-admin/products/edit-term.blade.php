@extends('../template-custom.template-admin')
@section('admin-title')
      Danh mục nhỏ thêm danh mục
@endsection

@section('title-box')
      Sửa danh mục: {{ $edit->category_name }}
@endsection

@section('admin-main')
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
                  <div class="alert alert-suucess success-flash">{{ Session::get('flash') }}</div>
            @endif
      </div>
      <div class="col-md-3">
            {{ Form::model($edit,[
                  'route'=>['update-terms',$edit->id],'method'=>'PUT'
            ]) }}
                  <div class="form-group">
                        {{ Form::label('title','Mã danh mục',['class'=>'form-content']) }}
                        {{ Form::text('id_term',NULL,['class'=>'form-control','required'=>'true','placeholder'=>'Nhập mã danh mục']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('title','Tên danh mục',['class'=>'form-content']) }}
                        {{ Form::text('category_name',NULL,['class'=>'form-control','required'=>'true','placeholder'=>'Nhập tên danh mục']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('title','Đường dẫn',['class'=>'form-content']) }}
                        {{ Form::text('slug',NULL,['class'=>'form-control','required'=>'true','placeholder'=>'Ví dụ: baby-shop']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('title','Danh mục thuộc',['class'=>'form-content']) }}
                        <select class="form-control" name="id_category">
                              <option>-- Chọn danh mục --</option>
                              @foreach($big as $a)
                                    <option @if(($edit->id_category) == ($a->id_category)) {{ "selected" }} @endif value="{{ $a->id_category }}">{{ $a->name_category }}</option>
                              @endforeach
                        
                        </select>
                  </div>
                  <div class="form-group">
                        {{ Form::submit('Sửa danh mục',['class'=>'btn btn-success']) }}
                  </div>
            {{ Form::close() }}
      </div>

      <div class="col-md-9">
                  <h4>Danh sách danh mục sản phẩm</h4>
                  <div class="row">
                      <div class="col-xs-12">
                          <div class="table-responsive">
                              <table id="example" class="table table-striped table-bordered" style="width:100%">
                                  <thead>
                                  <tr>
                                      <th>Mã danh mục</th>
                                      <th>Tên danh mục</th>
                                      <th>Id danh mục lớn</th>
                                      <th>Slug</th>
                                      <th>Option</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($category as $cate)
                                      <tr>
                                         <td>{{ $cate->id_term }}</td>
                                         <td>{{ $cate->category_name}}</td>
                                         <td>{{ $cate->id_category }}</td>
                                         <td>{{ $cate->slug }}</td>
                                         <td>
                                             <a href="{{ route('show-edit',$cate->id) }}" class="btn btn-success"><i class="fa fa-edit"></i> Sửa</a>
                                              {{ Form::open([
                                                    'route'=>['delete-terms',$cate->id],'method'=>'delete','style'=>'display:inline'
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