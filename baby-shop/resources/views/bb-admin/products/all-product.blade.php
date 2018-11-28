@extends('../template-custom.template-admin')
@section("admin-title")
      Danh sách sản phẩm  - Babyshop
@endsection

@section("title-box")
      Danh sách sản phẩm
@endsection
@section("admin-main")
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá bán</th>
                                <th>Giá KM</th>
                                <th>Cân nặng</th>
                                <th>Danh mục</th>
                            </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach($category as $cate)
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
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection