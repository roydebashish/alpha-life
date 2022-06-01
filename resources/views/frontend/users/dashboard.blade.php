@extends('frontend.users.app')

@section('title')
    @lang("Dashboard")
@endsection

@section('breadcrumbs')
    <x-backend-breadcrumbs />
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8">
                    <h4 class="card-title mb-0">Welcome to AILI {{ auth()->user()->employee_code ? 'Employee' : 'Policy Holder' }} Dashboard</h4>
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

            <!-- Dashboard Content Area -->

            <!-- / Dashboard Content Area -->

        </div>
    </div>
    <!-- / card -->
    @if(auth()->user()->employee_code)
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <a style="text-decoration: none;" href="javascript:;">
                <div class="card bg-info">
                    <div class="card-body">
                        <div class="text-value-lg text-center text-white">Profile Info</div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-lg-3">
            <a style="text-decoration: none;" href="javascript:;">
                <div class="card bg-info">
                    <div class="card-body">
                        <div class="text-value-lg text-center text-white">Performance</div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-lg-3">
            <a style="text-decoration: none;" href="javascript:;">
                <div class="card bg-info">
                    <div class="card-body">
                        <div class="text-value-lg text-center text-white">Allowance</div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-lg-3">
            <a style="text-decoration: none;" href="javascript:;">
                <div class="card bg-info">
                    <div class="card-body">
                        <div class="text-value-lg text-center text-white">Top Performer</div>
                    </div>
                </div>
            </a>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <a style="text-decoration: none;" href="javascript:;">
                <div class="card bg-info">
                    <div class="card-body">
                        <div class="text-value-lg text-center text-white">Policy Info</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a style="text-decoration: none;" href="javascript:;">
                <div class="card bg-info">
                    <div class="card-body">
                        <div class="text-value-lg text-center text-white">Policy List</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a style="text-decoration: none;" href="javascript:;">
                <div class="card bg-info">
                    <div class="card-body">
                        <div class="text-value-lg text-center text-white">Premium Due List</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a style="text-decoration: none;" href="#">
                <div class="card bg-info">
                    <div class="card-body">
                        <div class="text-value-lg text-center text-white">Pending Policy List</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <a style="text-decoration: none;" href="javascript:;">
                    <div class="card bg-info">
                        <div class="card-body">
                            <div class="text-value-lg text-center text-white">Profile Info</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a style="text-decoration: none;" href="#">
                    <div class="card bg-info">
                        <div class="card-body">
                            <div class="text-value-lg text-center text-white">Policy Info</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a style="text-decoration: none;" href="javascript:;">
                    <div class="card bg-info">
                        <div class="card-body">
                            <div class="text-value-lg text-center text-white">Policy Ledger</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-3">
                <a style="text-decoration: none;" href="javascript:;">
                    <div class="card bg-info">
                        <div class="card-body">
                            <div class="text-value-lg text-center text-white">Nominee Info</div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <a style="text-decoration: none;" href="javascript:;">
                    <div class="card bg-info">
                        <div class="card-body">
                            <div class="text-value-lg text-center text-white">Benefit</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a style="text-decoration: none;" href="javascript:;">
                    <div class="card bg-info">
                        <div class="card-body">
                            <div class="text-value-lg text-center text-white">Maturity Details</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a style="text-decoration: none;" href="javascript:;">
                    <div class="card bg-info">
                        <div class="card-body">
                            <div class="text-value-lg text-center text-white">Payment History</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a style="text-decoration: none;" href="javascript:;">
                    <div class="card bg-info">
                        <div class="card-body">
                            <div class="text-value-lg text-center text-white">My Application</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
   @endif
@endsection