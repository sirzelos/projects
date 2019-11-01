@extends('layouts.master')

@section('content')

<form action="{{'/orders/' . $order->id}}" method="POST">
@method('PUT')
@csrf
@can ('update', $order)
<input type="hidden" value="{{$order->id}}" name = "id">
<p style="display: none">{{$user = \App\User::findOrFail($order->user_id)}}</p>
{{$user->username}}
<div class="input-group mb-3">
    <label for="status">แก้ไขสถานะ</label>
  <select class="custom-select" id="inputGroupSelect02" name='status'>
    <option selected>{{ $order->status}}</option>
    <option >ยังไม่ชำระเงิน</option>
    <option >กำลังเตรียมส่ง</option>
    <option >จัดส่งเรียบร้อย</option>
  </select>
  <div class="input-group-append">
     <button class="btn btn-outline-secondary" type="submit">อัพ</button>
   </div>
</div>
</form>
@endcan
@endsection
