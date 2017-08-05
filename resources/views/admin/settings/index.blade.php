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

            <form class="form-horizontal form-bordered" method="POST" action="{{route('admin.settings.update')}}" enctype="multipart/form-data">
                {!! method_field('PATCH') !!}
                {!! csrf_field() !!}

                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="panel-title">General Settings</h2>
                    </header>
                    <div class="panel-body">
                        <!-- Site Title Text Field -->
                        <div class="form-group">
                            <label for="title" class="col-md-2 control-label">Site Title:</label>
                            <div class="col-md-6">
                                <input name="title" type="text" class="form-control" value="{{$settings->title}}">
                            </div>
                        </div>

                        <!-- Site Description Textarea Field -->
                        <div class="form-group">
                            <label for="description" class="col-md-2 control-label">Site Description:</label>
                            <div class="col-md-6">
                                <textarea name="description" class="form-control" rows="6">{{$settings->description}}</textarea>
                            </div>
                        </div>

                        <!-- Site Logo File Upload Field -->
                        <div class="form-group">
                            <label for="logo" class="col-md-2 control-label">Site Logo:</label>
                            <div class="col-md-6">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="input-append">
                                        <div class="uneditable-input">
                                            <i class="fa fa-file fileupload-exists"></i>
                                            <span class="fileupload-preview"></span>
                                        </div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileupload-exists">Change</span>
                                            <span class="fileupload-new">Select file</span>
                                            <input type="file" name="logo"/>
                                        </span>
                                        <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Site Fav Icon File Upload Field -->
                        <div class="form-group">
                            <label for="favicon" class="col-md-2 control-label">Site Fav Icon:</label>
                            <div class="col-md-6">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="input-append">
                                        <div class="uneditable-input">
                                            <i class="fa fa-file fileupload-exists"></i>
                                            <span class="fileupload-preview"></span>
                                        </div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileupload-exists">Change</span>
                                            <span class="fileupload-new">Select file</span>
                                            <input type="file" name="favicon"/>
                                        </span>
                                        <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Site Timezone Select Field -->
                        <div class="form-group">
                            <label for="timezone" class="col-md-2 control-label">Site Timezone:</label>
                            <div class="col-md-6">
                                <select name="timezone" id="timezone" class="form-control select2">
                                    @foreach (timezone_identifiers_list() as $timezone)
                                        <option value="{{ $timezone }}"{{ $timezone == $settings->timezone ? ' selected' : '' }}>{{ $timezone }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <!-- Site Status Radio Field -->
                        <div class="form-group">
                            <label for="isLive" class="col-md-2 control-label">Site Live:</label>
                            <div class="col-md-6">
                                <div class="radio">
                                    <label>
                                        <input name="isLive[]" id="site_live" value="1" {{ ( $settings->isLive == true ) ? 'checked' : '' }} type="radio">
                                        Yes (visible to all)
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="isLive[]" id="site_notlive" value="0" {{ ( $settings->isLive == false ) ? 'checked' : '' }} type="radio">
                                        No (visible to admins)
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Google Analytics Code Text Field -->
                        <div class="form-group">
                            <label for="analytics" class="col-md-2 control-label">Google Analytics Code:</label>
                            <div class="col-md-6">
                                <input name="analytics" type="text" class="form-control" value="{{$settings->google_analytics_id}}">
                            </div>
                        </div>
                    </div>
                </section>

                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="panel-title">Social Settings</h2>
                    </header>
                    <div class="panel-body">
                        <!-- Facebook Text Field -->
                        <div class="form-group">
                            <label for="facebook" class="col-md-2 control-label">Facebook:</label>
                            <div class="col-md-6">
                                <input name="facebook" type="text" class="form-control" value="{{$settings->facebook}}">
                            </div>
                        </div>

                        <!-- Twitter Text Field -->
                        <div class="form-group">
                            <label for="twitter" class="col-md-2 control-label">Twitter:</label>
                            <div class="col-md-6">
                                <input name="twitter" type="text" class="form-control" value="{{$settings->twitter}}">
                            </div>
                        </div>

                        <!-- Twitch Text Field -->
                        <div class="form-group">
                            <label for="twitch" class="col-md-2 control-label">Twitch:</label>
                            <div class="col-md-6">
                                <input name="twitch" type="text" class="form-control" value="{{$settings->twitch}}">
                            </div>
                        </div>

                        <!-- Google + Text Field -->
                        <div class="form-group">
                            <label for="google" class="col-md-2 control-label">Google +:</label>
                            <div class="col-md-6">
                                <input name="google" type="text" class="form-control" value="{{$settings->google}}">
                            </div>
                        </div>

                        <!-- Instagram Text Field -->
                        <div class="form-group">
                            <label for="instagram" class="col-md-2 control-label">Instagram:</label>
                            <div class="col-md-6">
                                <input name="instagram" type="text" class="form-control" value="{{$settings->instagram}}">
                            </div>
                        </div>

                        <!-- Youtube Text Field -->
                        <div class="form-group">
                            <label for="youtube" class="col-md-2 control-label">Youtube:</label>
                            <div class="col-md-6">
                                <input name="youtube" type="text" class="form-control" value="{{$settings->youtube}}">
                            </div>
                        </div>

                        <!-- MLG Text Field -->
                        <div class="form-group">
                            <label for="mlg" class="col-md-2 control-label">MLG:</label>
                            <div class="col-md-6">
                                <input name="mlg" type="text" class="form-control" value="{{$settings->mlg}}">
                            </div>
                        </div>
                    </div>
                    <footer class="panel-footer">
                        <button class="btn btn-primary">Update Settings </button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </footer>
                </section>
            </form>
        </div>
    </div>
@endsection