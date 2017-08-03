@extends('admin.layouts.app')

@section('title', 'Main page')

@section('content')
    <div class="wrapper wrapper-content animated fadeInUp">
        <div class="row">
            <div class="col-md-sm-12 col-md-4">
                <section class="panel panel-featured-left panel-featured-tertiary">
                    <div class="panel-body">
                        <div class="widget-summary widget-summary-sm">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-tertiary">
                                    <i class="fa fa-users"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Users</h4>
                                    <div class="info">
                                        <strong class="amount">{{usersTotalCount()}}</strong>
                                        <span class="text-primary">({{usersNewTodayCount()}} New Today)</span>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase">(view all)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-sm-12 col-md-4">
                <section class="panel panel-featured-left panel-featured-quaternary">
                    <div class="panel-body">
                        <div class="widget-summary widget-summary-sm">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-quaternary">
                                    <i class="fa fa-life-ring"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Support Questions</h4>
                                    <div class="info">
                                        <strong class="amount">1281</strong>
                                        <span class="text-primary">(14 unread)</span>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase">(view all)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-sm-12 col-md-4">
                <section class="panel panel-featured-left panel-featured-secondary">
                    <div class="panel-body">
                        <div class="widget-summary widget-summary-sm">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-secondary">
                                    <i class="fa fa-life-ring"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Support Questions</h4>
                                    <div class="info">
                                        <strong class="amount">1281</strong>
                                        <span class="text-primary">(14 unread)</span>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase">(view all)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInDown">
        <div class="row">
            <!-- Create Article -->
            <a href="">
                <div class="col-md-6 col-lg-3 col-xl-3">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-heading-icon bg-primary mt-sm">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </header>
                    <div class="panel-body">
                        <h3 class="text-weight-semibold mt-none text-center">Create Article</h3>
                    </div>
                </section>
            </div>
            </a>

            <!-- -->
            <a href="">
                <div class="col-md-3 col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-heading-icon bg-primary mt-sm">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </header>
                    <div class="panel-body">
                        <h3 class="text-weight-semibold mt-none text-center">Create Article</h3>
                    </div>
                </section>
            </div>
            </a>

            <!-- -->
            <a href="">
                <div class="col-md-3 col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-heading-icon bg-primary mt-sm">
                                <i class="fa fa-pencil"></i>
                            </div>
                        </header>
                        <div class="panel-body">
                            <h3 class="text-weight-semibold mt-none text-center">Create Article</h3>
                        </div>
                    </section>
                </div>
            </a>


            <!-- Settings -->
            <a href="">
                <div class="col-md-3 col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-heading-icon bg-primary mt-sm">
                            <i class="fa fa-cogs"></i>
                        </div>
                    </header>
                    <div class="panel-body">
                        <h3 class="text-weight-semibold mt-none text-center">Settings</h3>
                    </div>
                </section>
            </div>
            </a>
        </div>
    </div>
@endsection