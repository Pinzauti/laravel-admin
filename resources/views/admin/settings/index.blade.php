@extends('admin.layouts.app')

@section('title', 'Settings Page')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel">

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="tabs">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                        <a href="#general" data-toggle="tab" class="text-center">General</a>
                    </li>
                    <li>
                        <a href="#social" data-toggle="tab" class="text-center">Social</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <form class="" method="POST" action="{{route('admin.settings.update')}}">
                        {!! method_field('PATCH') !!}
                        {!! csrf_field() !!}

                        <div id="general" class="tab-pane active">
                            <div class="form-group">
                                <label for="" class="form-label">Site Title</label>
                                <input name="site_title" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Site Description</label>
                                <textarea name="site_description" rows="4" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <select name="timezone" id="timezone" class="form-control">
                                    @foreach (timezone_identifiers_list() as $timezone)
                                        <option value="{{ $timezone }}"{{ $timezone == old('timezone') ? ' selected' : '' }}>{{ $timezone }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div id="social" class="tab-pane">

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection