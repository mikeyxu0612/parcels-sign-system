<div class="form-group">
    {!! Form::label('address','住址:') !!}
    {!! Form::select('address',$addresses,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('B_ID','棟名(外部鍵):') !!}
    {!! Form::select('B_ID',$buildings,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone','聯絡電話:') !!}
    {!! Form::text('phone',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($SubmitButtonText,['class'=>'btn btn-primary form-control']) !!}
</div>
