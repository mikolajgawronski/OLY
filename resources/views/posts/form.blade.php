{!! Form::hidden('is_negotiable',0) !!}
{!! Form::hidden('is_business',0) !!}


<div class="form-group row">
    <div class="col-md-4 control-label">
        {!! Form::label('title',__('mesages.title')) !!}
    </div>
    <div class="col-md-6">
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-md-4 control-label">
        {!! Form::label('title',__('mesages.category')) !!}
    </div>
    <div class="col-md-6">
        <select name="subcategory_id">
            <option disabled selected value>{{__('mesages.selCateg')}}</option>
            @foreach($categories as $category)
                <optgroup label='{{$category->name}}'>
                    @foreach($category->subcategories as $subcategory)
                        <option value='{{$subcategory->id}}'>{{$subcategory->name}}</option>
                    @endforeach
                </optgroup>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group row">
    <div class="col-md-4 control-label">
        {!! Form::label('description',__('mesages.contents')) !!}
    </div>
    <div class="col-md-6">
        {!! Form::textarea('description',null,['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-md-4 control-label">
        {!! Form::label('price',__('mesages.price')) !!}
    </div>
    <div class="col-md-6">
        {!! Form::number('price',null,['class' => 'form-control','step'=>'any']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-md-7 col-md-offset-4">
        {!! Form::checkbox('is_negotiable', 1) !!}
        {!! Form::label('is_negotiable',__('mesages.tonegotiable').'?') !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-md-7 col-md-offset-4">
        {!! Form::checkbox('is_business', 1) !!}
        {!! Form::label('is_business',__('mesages.addFactory').'?') !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit($buttonText,['class'=>'btn btn-primary']) !!}
    </div>
</div>
