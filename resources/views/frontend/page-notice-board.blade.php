@extends('frontend.layouts.app')

@section('title') {{ $content->name }} @endsection

@section('content')
    <x-page-header pageTitle="{{ $content->name }}"/>
    <section class="service-section-v3">
        <div class="container">
            <div class="row" style="padding-top: 20px; padding-bottom: 20px; margin-bottom: 60px;">
                <div class="col-md-12 service-box-container">

                    <div style="border-bottom-right-radius: 50px; border-top-left-radius: 50px; overflow: hidden; background-color: white; border-left: 1px solid #2a2a86; border-right: 1px solid #2a2a86; border-bottom: 1px solid #2a2a86;">
                        @if($content->featured_image)
                            <div style="border-top-left-radius: 50px; overflow: hidden;">
                                <img style="display: block; max-width: 100%; height: auto;" src="{{ url($content->featured_image) }}">
                            </div>
                        @endif
                        <div class="service-box">
                            {!! $content->content !!}
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered notice-table">
                                <thead>
                                  <tr>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Attachment</th>
                                  </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($notices as $notice)
                                        <tr>
                                            <td>{{ $notice->title }}</td>
                                            <td>{!! $notice->description !!}</td>
                                            <td class="text-center"><a href="{{route("frontend.notices", ["attachment" => $notice->attachment]) }}" class="text-primary">Download</a></td>
                                        </tr>
                                   @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
