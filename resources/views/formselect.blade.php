
@extends('app')

@section('content')
<div class="container" style="max-width:1000px;margin 0 auto;">
    {!! Form::open(array('method' => 'post', 'action' => 'TypeController@select', 'class' => 'form-inline')) !!}
    <div class="text-center">
    <h4>Please select your student standing</h4>
    <div class="container text-center" style="width:inherit;">
        {!! Form::button('TA (Graduate)',array('style' => 'width:500px;','class' => 'btn btn-xl','name' => 'application_type', 'value' => 'TA', 'type' => 'submit')) !!}
    </div>
    <br>
    <div class="container text-center" style="width:inherit;">
        {!! Form::button('PLA (Undergraduate)',array('style' => 'width:500px;','class' => 'btn btn-xl','name' => 'application_type', 'value' => 'PLA', 'type' => 'submit')) !!}
    </div>
    <br>
    <div class="container text-center" style="width:inherit;">
        {!! Form::button('ITA (International Graduate)',array('style' => 'width:500px;','class' => 'btn btn-xl','name' => 'application_type', 'value' => 'ITA', 'type' => 'submit')) !!}
    </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection