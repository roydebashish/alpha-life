@extends('frontend.layouts.app')

@section('title')
    {{ $content->name }}
@endsection

@section('content')
    <x-page-header pageTitle="{{ $content->name }}" />
    <section class="service-section-v3">
        <div class="container">
            <div class="row" style="padding-top: 20px; padding-bottom: 20px; margin-bottom: 60px;">
                <div class="col-md-12 service-box-container">

                    <div
                        style="border-bottom-right-radius: 50px; border-top-left-radius: 50px; overflow: hidden; background-color: white; border-left: 1px solid #2a2a86; border-right: 1px solid #2a2a86; border-bottom: 1px solid #2a2a86;">
                        @if ($content->featured_image)
                            <div style="border-top-left-radius: 50px; overflow: hidden;">
                                <img style="display: block; max-width: 100%; height: auto;"
                                    src="{{ url($content->featured_image) }}">
                            </div>
                        @endif
                        {{-- <div class="service-box">
                            {!! $content->content !!}
                        </div> --}}
                        <div class="table-responsive" style="margin-top: 25px;">
                            <h4 style="margin: 15px 20px">Claim Information ( Paid )</h4>
                            <table class="table table-bordered notice-table">
                                <thead>
                                    <tr>
                                        <th class="text-center">Serial</th>
                                        <th class="text-center">Short Description</th>
                                        <th width="15%" class="text-center">Claim Category</th>
                                        <th width="15%" class="text-center">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paid_claims as $claim)
                                        <tr>
                                            <td> <a href="{{ route('frontend.claim.show', $claim->id) }}">{{ $claim->id }}
                                                </a></td>
                                            <td class="claim-desc"> <a
                                                    href="{{ route('frontend.claim.show', $claim->id) }}">{!! \Illuminate\Support\Str::limit($claim->description, 200, '...') !!}
                                                </a> </td>
                                            <td class="text-center"><a
                                                    href="{{ route('frontend.claim.show', $claim->id) }}">{{ $claim->category }}
                                                </a></td>
                                            <td class="text-center"><a
                                                href="{{ route('frontend.claim.show', $claim->id) }}">{{ date('d M, Y', strtotime($claim->date)) }}
                                            </a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive">
                            <h4 style="margin: 15px 20px">Claim Information ( Pending )</h4>
                            <table class="table table-bordered notice-table">
                                <thead>
                                    <tr>
                                        <th class="text-center">Serial</th>
                                        <th class="text-center">Short Description</th>
                                        <th width="15%" class="text-center">Claim Category</th>
                                        <th width="15%" class="text-center">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pending_claims as $claim)
                                        <tr>
                                            <td> <a href="{{ route('frontend.claim.show', $claim->id) }}">{{ $claim->id }}
                                                </a></td>
                                            <td class="claim-desc"> <a
                                                    href="{{ route('frontend.claim.show', $claim->id) }}">{!! \Illuminate\Support\Str::limit($claim->description, 200, '...') !!}
                                                </a> </td>
                                            <td class="text-center"><a
                                                href="{{ route('frontend.claim.show', $claim->id) }}">{{ $claim->category }}
                                            </a></td>
                                            <td class="text-center"><a
                                                    href="{{ route('frontend.claim.show', $claim->id) }}">{{ date('d M, Y', strtotime($claim->date)) }}
                                                </a></td>
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
