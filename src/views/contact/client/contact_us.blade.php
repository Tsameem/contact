@extends('tsameem.contact.layouts.app')
@section('content')
<form action="{{ route('contact_store') }}" method="POST">
	{{csrf_field()}}
	<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
		<label class="" for="name">{{__('forms.lbl_name')}}:</label>
		<input class="form-control " id="input_name" type="text" name="name" placeholder="{{__('forms.ph_name')}}." value="{{old('name')}}" required autofocus>
		<div class="">
			@if ($errors->has('name'))
			<span class="help-block">
				<strong>{{ $errors->first('name') }}</strong>
			</span>
			@endif
		</div>
	</div>
	<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
		<label class="" for="email">{{__('forms.lbl_email')}}:</label>
		<input class="form-control" id="input_email" type="text" name="email" placeholder="{{__('forms.ph_email')}}." value="{{ old('email') }}" required="">
		<div class="">
			@if ($errors->has('email'))
			<span class="help-block">
				<strong>{{ $errors->first('email') }}</strong>
			</span>
			@endif
		</div>
	</div>
	<div class="form-group {{ $errors->has('text') ? 'has-error' : '' }}">
		<label class="" for="text">{{__('forms.lbl_msg')}}:</label>
		<textarea class="form-control" name="text" id="input_text" cols="30" rows="10" required>{{ old('text') }}</textarea>
		<div class="">
			@if ($errors->has('text'))
			<span class="help-block">
				<strong>{{ $errors->first('text') }}</strong>
			</span>
			@endif
		</div>
	</div>
	{{-- <div class="form-group">
		
		<label class="{{$lang=='en'?'pull-left ltr':''}}">{{__('forms.lbl_captcha')}}:</label>
		<br>
		<br>
		<div class="{{$lang=='en'?'text-left ltr':''}}">
			{!! app('captcha')->display(); !!}
		</div>
		<div class="{{$lang=='en'?'text-left ltr':''}}">
			@if ($errors->has('g-recaptcha-response'))
			<span class="help-block">
				<strong style="color: red;">{{ __('forms.captcha_required') }}</strong>
			</span>
			@endif
		</div>
	</div> --}}
	<div class="form-group">
		<button class="btn-md btn-bg-trans btn-bg-hover-black btn-border-grey btn-text-black btn-text-hover-white margin-none" type="submit">
			<i style="" class="fa fa-send fa-fw fa-btn"></i>
			&nbsp;
			<span>{{__('forms.btn_send')}}</span>
		</button>
	</div>
</form>
@endsection
