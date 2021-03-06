@extends('frontend.layouts.app')

@section('title') {{ $content->name }} @endsection

@section('content')
    <x-page-header pageTitle="{{ $content->name }}"/>
    <section class="history-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-5 no-padding">
                    <div class="history-cover"></div>
                </div><!-- /.col-md-6 -->
                <div class="col-lg-6 col-md-7 no-padding">
                    @if(isset($aboutAlpha))
                        <div class="history-wrapper">
                                <h2>{{ $aboutAlpha->title }} </h2>

                                <div id="historyCarousel" class="carousel slide" data-ride="carousel">

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <br>
                                            <div style="border-top-left-radius: 50px; border-bottom-right-radius: 50px; overflow: hidden; border-left: 1px solid #2a2a86;">
                                                <img style="display: block; max-width: 100%; height: auto;" src="{{asset($aboutAlpha->image)}}">
                                            </div>
                                        </div>
                                        <div class="item">
                                            <p> {{ $aboutAlpha->description }}</p>
                                        </div>
                                    </div>

                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#historyCarousel" role="button" data-slide="prev">
                                        <span class="fa fa-angle-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#historyCarousel" role="button" data-slide="next">
                                        <span class="fa fa-angle-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                        </div>
                    @endif    

                </div><!-- /.col-md-4 -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
