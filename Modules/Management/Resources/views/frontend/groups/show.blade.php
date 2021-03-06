@extends('frontend.layouts.app')

@section('title') {{ $module_action }} {{ $module_title }} @endsection


@section('content')
<section class="page-title-section about-us-one" data-stellar-background-ratio="0.1">
    <div class="container">
        <div class="page-header text-center">
            <h1>{{ $$module_name_singular->name }}</h1>
        </div>
    </div>
</section>
<section class="service-section-v3 section-padding">
    <div class="container margin-bottom-40" >
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                @if($first_member)
                    <div class="team-member">
                            <div class="team-thumb">
                                <a class="team-wrap-link" href="{{ route('frontend.managements.show', $first_member->id) }}">
                                    <div class="thumb-overlay"></div>
                                    @if($first_member->image)
                                        <img src="{{asset($first_member->image)}}" alt="" class="bod">
                                    @else
                                        <img src="{{asset('assets/images/team/placeMan.jpg')}}" alt="" class="bod">
                                    @endif
                                 </a>

                                <div class="member-info text-center">
                                    <a class="team-wrap-link" href="{{ route('frontend.managements.show', $first_member->id) }}">
                                        <h3>{{ $first_member->name }}</h3>
                                        <span style="color: white;" class="title">{{ $first_member->designation }}</span>
                                    </a>
                                    <ul class="social-link list-inline">
                                        <li><a href="{{ 'mailto:'. $first_member->email }}" target="_blank"><i
                                                    class="fa fa-envelope"></i></a></li>
                                        <li><a href="{{ $first_member->facebook ?? '#' }}" @if($first_member->facebook)target="_blank" @endif><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                                <span class="taemTitle">{{ $first_member->name }}</span>
                            </div>
                    </div>
                @endif
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
    <div class="container">
        @foreach($members as $membersChunk)
            <div class="row equal margin-bottom-40">
                @foreach($membersChunk as $member)
                    <div class="col-sm-3">
                        <div class="box-cell">
                            <div class="team-member">
                                <div class="team-thumb">
                                    <a class="team-wrap-link" href="{{ route('frontend.managements.show', $member['id']) }}">
                                        <div class="thumb-overlay"></div>
                                        @if($member['image'])
                                            <img src="{{asset($member['image'])}}" alt="" class="bod">
                                        @else
                                            <img src="{{asset('assets/images/team/placeMan.jpg')}}" alt="" class="bod">
                                        @endif
                                    </a>

                                    <div class="member-info text-center">
                                        <a class="team-wrap-link" href="{{ route('frontend.managements.show', $member['id']) }}">
                                            <h3>{{ $member['name'] }}</h3>

                                            <span style="color: white;" class="title">{{ $member['designation'] }}</span>
                                        </a>
                                        <ul class="social-link list-inline">
                                            <li><a href="{{ 'mailto:'. $member['email'] }}" target="_blank"><i
                                                        class="fa fa-envelope"></i></a></li>
                                            <li><a href="{{ $member['facebook']?? '#' }}" @if($member['facebook'])target="_blank" @endif><i class="fa fa-facebook"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 justify-center margin-bottom-sm-40">
                        <a  href="{{ route('frontend.managements.show', $member['id']) }}">
{{--                            <div class="box-cell box2">--}}
                                <h3 class="margin-bottom-0"> {{ $member['name'] }}</h3>
                                {{ $member['designation'] }}
{{--                            </div>--}}
                        </a>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</section>
@endsection

@push('after-styles')
    <style>
        .margin-bottom-0 {
            margin-bottom: 0;
        }
        @media (max-width: 767px) {
         .margin-bottom-sm-40{ margin-bottom: 40px; }
        }
        @media (min-width: 768px) {
            .row.equal {
                display: flex;
                flex-wrap: wrap;
            }
            .justify-center {
                justify-content: center;
            }
            .margin-bottom-40 {
                margin-bottom: 40px;
            }
        }
    </style>
@endpush
