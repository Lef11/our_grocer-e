@extends('layouts.admin-app')

@section('title')
    Categories
@endsection

@section('content')

<div class="card">
{{Form::hidden('', $increment=1)}}
    <div class="card-body">
      <h4 class="card-title">Categories</h4>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                    <th>Order #</th>
                    <th>Category Name</th>
                    <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($categories as $category)
                  <tr>
                    <td>{{$increment}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>
                        <button class="btn btn-outline-primary">Edit</button>
                        <button class="btn btn-outline-danger">Delete</button>
                    </td>
                </tr>
                {{Form::hidden('', $increment=$increment + 1)}}
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

  @section('scripts')
  <script src="back-end/js/data-table.js"></script>

  @endsection
