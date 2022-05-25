@extends('backend.layouts.app')

@section('title') @lang("Dashboard") @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs/>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-8">
                <h4 class="card-title mb-0">@lang("Welcome to", ['name'=>config('app.name')])</h4>
                <div class="small text-muted">{{ date_today() }}</div>
            </div>
            <div class="col-sm-4 hidden-sm-down">
                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                    <button type="button" class="btn btn-info float-right">
                        <i class="c-icon cil-bullhorn"></i>
                    </button>
                </div>
            </div>
        </div>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.posts.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">News</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.claim.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Claim</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.notices.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Notice</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="#">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Branch</div>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.managements.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Management</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="#">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Sales</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="#">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Team</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.albums.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Gallery</div>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.sliders.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">Slide Show</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a style="text-decoration: none;" href="{{ route('backend.faqs.index') }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="text-value-lg text-center text-white">FAQ</div>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
