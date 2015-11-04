@extends('layouts.member.master')

@section('contents')
<div class="row">
    <div class="errors-container">
        @include('errors.form')
    </div>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Create New Notification Template</div>
            <div class="panel-body">
                {!! Form::open(['url' => route('users.notification-templates.store', [$userId]), 'method'=> "POST"]) !!}
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" id="subject" name="subject"
                           value="{{ Input::old('subject') }}" placeholder="Subject" />
                </div>
                        <div class="col-md-12 cont">
                            <textarea name="content"></textarea>
                        </div>
                </div>


                <button type="submit" id="smtp_submit_button" class="btn btn-primary">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script type="text/javascript" src="{{ asset('tinymce/tiny_mce.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/editor.js') }}"></script>

@endsection
@endsection