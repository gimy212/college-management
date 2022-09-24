@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    قائمة الكتب
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    قائمة الكتب
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم الكتب</th>
                                            <th>اسم المعلم</th>
                                            <th>المرحلة الدراسية</th>
                                            <th>الصف الدراسي</th>
                                            <th>القسم</th>
                                            <th>العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($library as $book)
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td>{{$book->title}}</td>
                                                <td>{{$book->teacher->Name}}</td>
                                                <td>{{$book->grade->Name}}</td>
                                                <td>{{$book->classroom->Name_Class}}</td>
                                                <td>{{$book->section->Name_Section}}</td>
                                                <td>
                                                    <a href="{{route('downloadAttachment',$book->file_name)}}" title="تحميل الكتاب" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i class="fas fa-download"></i></a>
                                        
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection