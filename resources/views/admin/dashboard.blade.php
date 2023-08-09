@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card mt-3">
                <div class="card-header">
                    My Camps
                </div>
                <div class="card-body">
                    @include('components.alert')
                    <table class="table">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Camp</th>
                                <th>Price</th>
                                <th>Register Data</th>
                                <th>Paid Status</th>
                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($checkouts as $checkout)
                            <tr>
                                <td>{{$checkout->User->name}}</td>
                                <td>{{$checkout->Camp->title}}</td>
                                <td>{{$checkout->Camp->price}}K</td>
                                <td>{{$checkout->Camp->created_at->format('M d Y')}}</td>
                                <td>
                                    <!-- @if ($checkout->is_paid)
                                        <span class="badge bg-success">Paid</span>
                                    @else
                                        <span class="badge bg-warning">Waiting</span>
                                    @endif -->
                                    <strong>{{$checkout->payment_status}}</strong>
                                </td>
                                <!-- <td>
                                    @if(!$checkout->is_paid)
                                        <form action={{route("admin.checkout.update", $checkout->id)}} method="POST">
                                            @csrf
                                            <button class="btn btn-primary btn-sm">Set to paid</button>
                                        </form>
                                    @else
                                    @endif
                                </td> -->
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">No camps registered</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection