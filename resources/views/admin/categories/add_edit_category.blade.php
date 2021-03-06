@extends('layouts.admin_layout.admin_layout')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Catalogues</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Categories</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        @if($errors->any())
          <div class="alert alert-danger" style="margin-top: 10px">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form name="categoryForm" id="CategoryForm" action="{{ url('admin/add-edit-category') }}"
        method="post" enctype="multipart/form-data">
        @csrf
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Add Category</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="category_name">Category Name</label>
                    <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter Category Name">
                  </div>
                  <div class="form-group">
                  <label>Select Category Level</label>
                    <select name="parent_id" id="parent_id" class="form-control select2" style="width: 100%;">
                      <option value="0">Main Category</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Select Section</label>
                    <select name="section_id" id="section_id" class="form-control select2" style="width: 100%;">
                      <option value="">Select</option>
                      @foreach($getSections as $section)
                      <option value="{{ $section->id }}">{{ $section->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleCategoryImage">Category Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="category_image" name="category_image">
                            <label for="category_image" class="custom-file-label">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="category_discount">Category Discount</label>
                    <input type="text" class="form-control" name="category_discount" id="category_discount" placeholder="Enter Category Siscount">
                  </div>
                  <div class="form-group">
                    <label for="category_url">Category Description</label>
                    <textarea class="form-control" id="'description" name="description" placeholder="Enter ..." rows="3"></textarea>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="category_url">Category URL</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="Enter Category Siscount">
                  </div>
                  <div class="form-group">
                      <label for="category_url">Meta Title</label>
                      <textarea id="meta_title" name="meta_title" class="form-control" placeholder="Enter ..." rows="3"></textarea>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="category_discount">Meta Description</label>
                    <textarea id="meta_description" name="meta_description" class="form-control" placeholder="Enter ..." rows="3"></textarea>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <label for="category_url">Meta Keywords</label>
                      <textarea id="meta_keywords" name="meta_keywords" class="form-control" placeholder="Enter ..." rows="3"></textarea>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
    </section>
  </div>   

@endsection