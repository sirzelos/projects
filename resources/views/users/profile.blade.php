@extends('layouts.master')

@section('content')
<div class="row no-gutters ">
  <div class="col-md-4 border-dark">
    <img src='../img/profile/{{ Auth::user()->picture }}' class="card-img" >
  </div>
  <div class="col-md-4 border border-dark">
    <h5 class="card-header">Profile</h5>
    <div class="card-body ">
      <p class="card-text">Username  : {{ $user->username }}</p>
      <p class="card-text">Firstname : {{ $user->first_name }}</p>
      <p class="card-text">Lastname  : {{ $user->last_name }}</p>
      <p class="card-text">Email      : {{ $user->email }}</p>
      <p class="card-text"><small class="text-muted">อัพเดตล่าสุด : {{ $user->updated_at }}</small></p>
        <p class ='text-right'><a  class="btn btn-warning"  href="{{route('profile.edit')}}">แก้ไขโปรไฟล์</a></p></div>
    </div>
    <div class="col-md-4 border border-dark">

                  @isset($address)

                <h5 class="card-header">ที่อยู่</h5>
                <div class="card-body">

                  <p class="card-text">ถนน แขวง/ตำบล เขต/อำเภอ</p>
                  <p class="card-text">บ้านเลขที่  :   {{$address->house_address}}</p>
                  <p class="card-text">ถนน  : {{$address->street}}</p>
                  <p class="card-text">แขวง/ตำบล  : {{$address->sub_district}}</p>
                  <p class="card-text">เขต/อำเภอ  :{{$address->district}}</p>
                  <p class="card-text">จังหวัด  :  {{$address->province}}</p>
                  <p class="card-text">รหัสไปรษณีย์  :  {{$address->zip_code}}</p>
  <p class="card-text"><small class="text-muted">อัพเดตล่าสุด : {{$address->created_at}}</small></p>

                  <form action="{{ route('addresses.destroy',['address'=>$address->id]) }}" method = 'post'>

                      <p class ='text-right'><a href="{{ action('AddressesController@edit', [$address->id]) }}" class="btn btn-warning">แก้ไขที่อยู่</a></p>
                  </form>
                </div>

              @endisset
              @empty($address)
<div class="card-footer text-muted">
</div>

                <h5 class="card-header">ที่อยู่</h5>

                    <p class ='text-right'><a class="btn btn-outline-success " href="{{route('addresses.create')}}" class="btn btn-warning" role="button">เพิ่มที่อยู่</a></p>



              @endempty
    </div>
  </div>
</div>
</div>


@endsection
