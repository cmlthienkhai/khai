@extends('layouts.admin')
@section('title','Chi tiết')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chi tiết bài viết</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index')  }}">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active">Chi tiết bài viết</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                       
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="text-right">                            
                            <a class="btn btn-sm btn-info" href="{{ route('post.index') }}">
                                <i class="fas fa-arrow-circle-left"></i> Quay về danh sách
                            </a>                            
                            <a class="btn btn-sm btn-primary" href="{{ route('post.edit',['post'=>$row->id]) }}">
                                <i class=" fas fa-edit"></i>
                            </a>
                            <a class="btn btn-sm btn-danger" href="{{ route('post.trash',['post'=>$row->id]) }}">
                                <i class=" fas fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered border-primary table-hover ">
                    <thead class="bg-orange">
                        <tr class="fs-1">
                            <th width="30%">
                                Tên trường
                            </th>
                            <th>
                                Giá trị
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $row->id }}</td>
                        </tr>
                        <tr>
                            <th>Mã chủ đề</th>
                            <td>{{ $row->topic_id }}</td>
                        </tr>
                        <tr>
                            <th>Tiêu đề bài viết</th>
                            <td>{{ $row->title }}</td>
                        </tr>
                        <tr>
                            <th>Tên thường</th>
                            <td>{{ $row->slug }}</td>
                        </tr>
                        <tr>
                            <th>Chi tiết</th>
                            <td>
                                {{ $row->detail }}
                            </td>
                        </tr>
                        <tr>
                            <th>Hình ảnh</th>
                            <td class="index-img">
                                <img src="{{ asset('images/post/'.$row->images) }}" alt="{{ $row->images }}" class="img-fluid">
                            </td>
                        </tr>
                        <tr>
                            <th>Kiểu</th>
                            <td>
                                {{ $row->type }}
                            </td>
                        </tr>

                        <tr>
                            <th>Từ khóa</th>
                            <td>{{ $row->metakey }}</td>
                        </tr>
                        <tr>
                            <th>Mô tả</th>
                            <td>{{ $row->metadesc }}</td>
                        </tr>

                        <tr>
                            <th>Ngày tạo</th>
                            <td>{{ $row->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Người tạo</th>
                            <td>{{ $row->created_by }}</td>
                        </tr>
                        <tr>
                            <th>Ngày sửa cuối</th>
                            <td>{{ $row->updated_at }}</td>
                        </tr>
                        <tr>
                            <th>Người sửa cuối</th>
                            <td>{{ $row->updated_by }}</td>
                        </tr>
                        <tr>
                            <th>Trạng thái</th>
                            <td>{{ $row->status }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            
            <!-- /.card-footer-->
        </div>
    </section>
  </div>
@endsection