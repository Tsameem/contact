@extends('tsameem.contact.layouts.app')
@section('content')
<div class="container">
	<form action="{{ route('contact_store') }}" method="POST">
		{{csrf_field()}}
		<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
			<label class="" for="name">Name:</label>
			<input class="form-control " id="input_name" type="text" name="name" placeholder="Write your name." value="{{old('name')}}" required autofocus>
			<div class="">
				@if ($errors->has('name'))
				<span class="help-block">
					<strong>{{ $errors->first('name') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
			<label class="" for="email">Email:</label>
			<input class="form-control" id="input_email" type="text" name="email" placeholder="Write your email." value="{{ old('email') }}" required="">
			<div class="">
				@if ($errors->has('email'))
				<span class="help-block">
					<strong>{{ $errors->first('email') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="form-group {{ $errors->has('text') ? 'has-error' : '' }}">
			<label class="" for="text">Message:</label>
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
</div>
@endsection
