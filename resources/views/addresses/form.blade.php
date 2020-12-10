<div class="form-group">
    {!! Form::label('address','住址:') !!}
    {!! Form::text('address',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('B_ID','棟名(外部鍵):') !!}
    {!! Form::text('B_ID',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone','聯絡電話:') !!}
    {!! Form::text('phone',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($SubmitButtonText,['class'=>'btn btn-primary form-control']) !!}
</div>
