<div class="form-group">
    {!! Form::label('comment_text', 'comment:') !!}
    {!! Form::textarea('comment_text') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
