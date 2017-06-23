<div class="form-group">
    {{ Form::label('username', 'Username') }}
    {{ Form::text('username', Request::old('username'), array('class' => 'form-control')) }}
    @if ($errors->has('username'))
        <span class="help-block alert alert-danger">
            {{ $errors->first('username')  }}
        </span>
    @endif
</div>

<div class="form-group">
    {{ Form::label('style', 'Style') }}
    {{ Form::text('style', Request::old('style'), array('class' => 'form-control')) }}
    @if ($errors->has('style'))
        <span class="help-block alert alert-danger">
            {{ $errors->first('style')  }}
        </span>
    @endif
</div>

<div class="form-group">
    {{ Form::label('saloonist', 'Saloonist') }}
    {{ Form::select('saloonist', ['Select the preferred saloonist' => 'Select the preferred saloonist', 'Dianne Amimo' => 'Dianne Amimo', 'Dorothy Dickens' => 'Dorothy Dickens', 'Immanuel Peters' => 'Immanuel Peters', 'Jessy Catelyn' => 'Jessy Catelyn'], Request::old('saloonist'), array('class' => 'form-control')) }}
    @if ($errors->has('saloonist'))
        <span class="help-block alert alert-danger">
            {{ $errors->first('saloonist')  }}
        </span>
    @endif
</div>

<div class="form-group">
    {{ Form::label('date', 'Date') }}
    {{ Form::text('date', Request::old('date'), array('class' => 'form-control')) }}
    @if ($errors->has('date'))
        <span class="help-block alert alert-danger">
            {{ $errors->first('date')  }}
        </span>
    @endif
</div>



{{--@if (disabled)--}}
        {{--{!! Form::text('myField', ['disabled' => 'disabled']) !!}--}}
{{--@else--}}
        {{--{!! Form::text('myField') !!}--}}
{{--@endif--}}