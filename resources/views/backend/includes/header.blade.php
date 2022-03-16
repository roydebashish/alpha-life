<header class="c-header c-header-light c-header-fixed c-header-with-subheader">
    <button class="c-header-toggler c-class-toggler d-lg-none mr-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show"><span class="c-header-toggler-icon"></span></button><a class="c-header-brand d-sm-none" href="{{route("backend.dashboard")}}"><img class="c-header-brand" src="{{asset("img/backend-logo.jpg")}}" style="max-height:50px;min-height:40px;" alt="{{ app_name() }}"></a>
    <button class="c-header-toggler c-class-toggler ml-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true"><span class="c-header-toggler-icon"></span></button>

    <ul class="c-header-nav d-md-down-none">
        <li class="c-header-nav-item px-3">
            <a class="c-header-nav-link" href="{{ route('frontend.index') }}" target="_blank">
                <i class="c-icon cil-external-link"></i>&nbsp;
                {{ app_name() }}
            </a>
        </li>
    </ul>

    <ul class="c-header-nav ml-auto mr-4">

        <li class="c-header-nav-item dropdown">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                @if(isset(auth()->user()->avatar))
                    <div class="c-avatar">
                        <img class="c-avatar-img" src="{{ asset(auth()->user()->avatar) }}" alt="{{ auth()->user()->name }}">
                    </div>
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
                <div class="dropdown-header bg-light py-2"><strong>@lang('Account')</strong></div>

                @if(isset(Auth::user()->id))

                <a class="dropdown-item" href="{{route('backend.users.profile', Auth::user()->id)}}">
                    <i class="c-icon cil-user"></i>&nbsp;
                    {{ Auth::user()->name }}
                </a>
                <a class="dropdown-item" href="{{route('backend.users.profile', Auth::user()->id)}}">
                    <i class="c-icon cil-at"></i>&nbsp;
                    {{ Auth::user()->email }}
                </a>
                @endif

                <div class="dropdown-header bg-light py-2"><strong>@lang('Settings')</strong></div>

                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="c-icon cil-account-logout"></i>&nbsp;
                    @lang('Logout')
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
            </div>
        </li>
    </ul>
    <div class="c-subheader justify-content-between px-3">
        <ol class="breadcrumb border-0 m-0">
            @yield('breadcrumbs')
        </ol>
        <div class="c-subheader-nav d-md-down-none mfe-2">
            <span class="c-subheader-nav-link">
                <div class="btn-group" role="group" aria-label="Button group">
                    {{ date_today() }}&nbsp;<div id="liveClock" class="clock" onload="showTime()"></div>
                </div>
            </span>
        </div>
    </div>
</header>

@push('after-scripts')
<script type="text/javascript">

$(function () {
    // Show the time
    showTime();
})

function showTime(){
    var date = new Date();
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();

    var session = hours >= 12 ? 'pm' : 'am';

    hours = hours % 12;
    hours = hours ? hours : 12;
    minutes = minutes < 10 ? '0'+minutes : minutes;
    seconds = seconds < 10 ? '0'+seconds : seconds;

    var time = hours + ":" + minutes + ":" + seconds + " " + session;
    document.getElementById("liveClock").innerText = time;
    document.getElementById("liveClock").textContent = time;

    setTimeout(showTime, 1000);
}
</script>
@endpush
