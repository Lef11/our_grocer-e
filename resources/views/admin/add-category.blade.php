@extends('layouts.admin-app')
{{-- @section('title')
    Add category
@endsection --}}

@section('content')

<div class="row grid-margin">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Create category</h4>
          @if (Session::has('success'))
              <div class="alert alert-success">
                  {{Session::get('success')}}
              </div>
            @endif

                @if (Session::has('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif
            {!!Form::open(['action' => 'CategoryController@saveCategory', 'class' => 'cmxform', 'method' => 'POST', 'id' => 'commentForm'])!!}
            {{csrf_field()}}
              <div class="form-group">
                {{Form::label('', 'Product Category', ['for' => 'cname'])}}
                {{Form::text('category_name', '', ['class' => 'form-control', 'minlength' => '2'])}}
               </div>
                {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
        {!!Form::close()!!}
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
<script src="back-end/js/bt-maxLength.js"></script>
@endsection
