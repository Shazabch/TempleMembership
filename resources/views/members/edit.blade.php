@extends('layouts.main')
@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-10">
        <div class="card card-body">
            <h2 class="h3 mb-4">{{ __('labels.update_member') }}</h2>
            <form action="{{route('members.update',$members->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group mb-4">
                            <label for="">{{ __('labels.member_name') }}</label>
                            <input type="text" class="form-control" value="{{$members->gvBrowseCompanyName}}" name="gvBrowseCompanyName">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-4">
                            <label for="">{{ __('labels.head_of_family') }}</label>
                            <input type="text" class="form-control" value="{{$members->gvBrowseAttention}}" name="gvBrowseAttention">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="">{{ __('labels.member_skmc_no') }}</label>
                            <input type="text" class="form-control" value="{{$members->gvBrowseUDF_NOAHLISKMC}}" name="gvBrowseUDF_NOAHLISKMC">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="">{{ __('labels.code') }}</label>
                            <input type="text" class="form-control" value="{{$members->gvBrowseCode}}" name="gvBrowseCode">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="">{{ __('labels.birthplace') }}</label>
                            <input type="text" class="form-control" value="{{$members->gvBrowseUDF_TEMPATLAHIR}}" name="gvBrowseUDF_TEMPATLAHIR">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="">{{ __('labels.ic_no') }}</label>
                            <input type="text" class="form-control" value="{{$members->gvBrowseUDF_ICNO}}" name="gvBrowseUDF_ICNO">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="">{{ __('labels.phone') }}</label>
                            <input type="text" class="form-control" value="{{$members->gvBrowsePhone1}}" name="gvBrowsePhone1">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="">{{ __('labels.address') }}</label>
                            <input type="text" class="form-control" value="{{$members->gvBrowseAddress1}}" name="gvBrowseAddress1">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="Area">{{ __('labels.area') }}</label>
                            <input type="text" class="form-control" value="{{$members->gvBrowseArea}}" name="gvBrowseArea">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="">{{ __('labels.dob') }}</label>
                            <input type="text" class="form-control" value="{{$members->gvBrowseUDF_DOB}}" name="gvBrowseUDF_DOB">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="">{{ __('labels.date_of_application') }}</label>
                            <input type="text" class="form-control" value="{{$members->gvBrowseUDF_TARIKHMEMOHON}}" name="gvBrowseUDF_TARIKHMEMOHON">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="">{{ __('labels.work') }}</label>
                            <input type="text" class="form-control" value="{{$members->gvBrowseUDF_PEKERJAAN}}" name="gvBrowseUDF_PEKERJAAN">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="">{{ __('labels.gender') }}</label>
                            <input type="text" class="form-control" value="{{$members->gvBrowseUDF_JANTINA}}" name="gvBrowseUDF_JANTINA">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="">{{ __('labels.last_payment_year') }}</label>
                            <select class="form-control" name="item_id" id="">
                                <option class="text-center" value=""></option>
                                @foreach($items as $item)
                                <option value="{{$item->id}}" @if($members->item_id == $item->id) selected @endif>{{$item->title}} - {{$item->year}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="form-group mb-3">
                            <button style="margin-top: 7px;" class="btn  btn-info" type="submit">{{ __('labels.update') }}</button>
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>
@endsection