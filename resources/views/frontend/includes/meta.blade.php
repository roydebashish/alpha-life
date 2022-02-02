@php
if (!isset($meta_page_type)) {
    $meta_page_type = 'website';
}

$meta_title         = $content->meta_title ?? config('app.name');
$meta_site_name     = setting('meta_site_name');
$meta_description   = $content->meta_description ?? setting('meta_description');
$meta_image         = isset($content->meta_og_image) ? url($content->meta_og_image) : url(setting('meta_image'));
@endphp

@switch($meta_page_type)
    @case('website')
        <meta property="og:type" content="website" />
        @break

    @case('article')
        {{-- Facebook Meta --}}
        <meta property="og:type" content="article" />
        <meta property="article:published_time" content="{{$$module_name_singular->published_at}}" />
        <meta property="article:modified_time" content="{{$$module_name_singular->updated_at}}" />
        <meta property="article:author" content="{{isset($$module_name_singular->created_by_alias)? $$module_name_singular->created_by_alias : $$module_name_singular->created_by_name}}" />
        <meta property="article:section" content="{{$$module_name_singular->category_name}}" />
        @foreach ($$module_name_singular->tags as $tag)
        <meta property="article:tag" content="{{$tag->name}}" />
        @endforeach

        @break

    @case('profile')
        <meta property="og:type" content="profile" />
        <meta property="profile:first_name" content="{{$$module_name_singular->first_name}}" />
        <meta property="profile:last_name" content="{{$$module_name_singular->last_name}}" />
        <meta property="profile:username" content="{{$$module_name_singular->email}}" />
        <meta property="profile:gender" content="{{$$module_name_singular->gender}}" />
        @break

    @default

@endswitch

    <!-- Facebook Meta -->
    <meta property="og:url" content="{{url()->full()}}" />
    <meta property="og:title" content="{{ $meta_title }}" />
    <meta property="og:site_name" content="{{ $meta_site_name }}" />
    <meta property="og:description" content="{{ $meta_description }}" />
    <meta property="og:image" content="{{ $meta_image }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Twitter Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="{{ setting('meta_twitter_site') }}">
    <meta name="twitter:url" content="{{url()->full()}}" />
    <meta name="twitter:creator" content="{{ setting('meta_twitter_creator') }}">
    <meta name="twitter:title" content="{{ $meta_title }}">
    <meta name="twitter:description" content="{{ $meta_description }}">
    <meta name="twitter:image" content="{{ $meta_image }}">

    <!--canonical link-->
    <link type="text/plain" rel="author" href="{{asset('humans.txt')}}" />
    <link rel="canonical" href="{{url()->full()}}">
