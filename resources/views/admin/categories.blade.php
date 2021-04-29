@extends('layouts.admin-app')

@section('title')
    Categories
@endsection

@section('content')

<div class="card">
{{Form::hidden('', $increment=1)}}
    <div class="card-body">
      <h4 class="card-title">Categories</h4>
      @if (Session::has('success'))
              <div class="alert alert-success">
                  {{Session::get('success')}}
              </div>
            @endif
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
                        <button class="btn btn-outline-primary" onclick="window.location = '{{url('/edit/'.$category->id)}}'">Edit</button>
                        <a href="/delete/{{$category->id}}" class="btn btn-outline-danger" id="delete">Delete</a>
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
  <script src="{{asset('back-end/js/data-table.js')}}"></script>

  @endsection
