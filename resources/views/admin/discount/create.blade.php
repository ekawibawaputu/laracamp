@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card mt-3">
                <div class="card-header">
                    Insert a new discount
                </div>
                <div class="card-body">
                    <form action={{route('admin.discount.store')}} method="post">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="" class="form-label">Name</label>
                            <input name="name" type="text" value="{{old('name')}}" class="form-control {{$errors->has('name') ?'is-invalid' : '' }}"  required>
                            @if ($errors->has('name'))
                                <p class="text-danger">{{$errors->first('name')}}</p>
                            @endif
                        </div>
                        <div class="form-group mb-4">
                            <label for="" class="form-label">Code</label>
                            <input name="code" type="text" value="{{old('code')}}" class="form-control {{$errors->has('code') ?'is-invalid' : '' }}" required>
                            @if ($errors->has('code'))
                                <p class="text-danger">{{$errors->first('code')}}</p>
                            @endif
                        </div>
                        <div class="form-group mb-4">
                            <label for="" class="form-label">Description</label>
                            <textarea name="description" cols="0" rows="2" class="form-control {{$errors->has('description') ?'is-invalid' : '' }}">{{old('name')}}</textarea>
                            @if ($errors->has('description'))
                                <p class="text-danger">{{$errors->first('description')}}</p>
                            @endif
                        </div>
                        <div class="form-group mb-4">
                            <label for="" class="form-label">Discount Percentage</label>
                            <input name="percentage" type="number" value="{{old('percentage')}}" class="form-control {{$errors->has('percentage') ?'is-invalid' : '' }}" min='1' max='100' required>
                            @if ($errors->has('percentage'))
                                <p class="text-danger">{{$errors->first('percentage')}}</p>
                            @endif
                        </div>
                        <div class="form-group mb-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
