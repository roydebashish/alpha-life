@extends('frontend.layouts.app')

@section('title') Sign Up @endsection

@section('content')
    <x-page-header pageTitle="Sign Up"/>
    <section class="service-section-v3 sign-up">
        <div class="container">
            <div class="row" style="padding-top: 20px; padding-bottom: 80px;">
                <div class="col-md-12 ">
                    <div class="container-border">
                        <div style="border-top-left-radius: 50px; overflow: hidden;">
                            <img style="display: block; max-width: 100%; height: auto;" src="{{ url('/assets/images/signup-banner.jpeg') }}">
                        </div>
                        <div class="col-md-12 mt-30">
                            {{ html()->form('POST', url('/register'))->class('form')->id('signup')->open() }}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <?php--}}
{{--                                            $field_name = 'first_name';--}}
{{--                                            $field_lable = "First Name";--}}
{{--                                            $field_placeholder = $field_lable;--}}
{{--                                            $required = "required";--}}
{{--                                        ?>--}}
{{--                                        {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}--}}
{{--                                        {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}--}}
{{--                                        @error('first_name')--}}
{{--                                            <div class="error">{{ $message }}</div>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <?php--}}
{{--                                        $field_name = 'last_name';--}}
{{--                                        $field_lable = "Last Name";--}}
{{--                                        $field_placeholder = $field_lable;--}}
{{--                                        $required = "required";--}}
{{--                                        ?>--}}
{{--                                        {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}--}}
{{--                                        {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}--}}
{{--                                        @error('last_name')--}}
{{--                                            <div class="error">{{ $message }}</div>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <?php--}}
{{--                                            $field_name = 'designation';--}}
{{--                                            $field_lable = "Select Designation";--}}
{{--                                            $field_placeholder = $field_lable;--}}
{{--                                            $required = "required";--}}
{{--                                        ?>--}}
{{--                                        {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}--}}
{{--                                        {{ html()->select($field_name, $designations)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}--}}
{{--                                        @error('designation')--}}
{{--                                            <div class="error">{{ $message }}</div>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <?php--}}
{{--                                        $field_name = 'employee_code';--}}
{{--                                        $field_lable = "Employee Code";--}}
{{--                                        $field_placeholder = $field_lable;--}}
{{--                                        $required = "required";--}}
{{--                                        ?>--}}
{{--                                        {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}--}}
{{--                                        {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}--}}
{{--                                        @error('employee_code')--}}
{{--                                            <div class="error">{{ $message }}</div>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            {{ html()->hidden('sign_up_as', $sign_up_as) }}
                            {{ html()->hidden('employeeData') }}
                            {{ html()->hidden('subDesig') }}
                            <div class="row">
                                @if($sign_up_as == 'employee')
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php
                                            $field_name = 'employee_code';
                                            $field_lable = "Employee Code";
                                            $field_placeholder = $field_lable;
                                            $required = "required";
                                            ?>
                                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                                            @error('employee_code')
                                            <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                @else
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php
                                            $field_name = 'policy_number';
                                            $field_lable = "Policy Number";
                                            $field_placeholder = $field_lable;
                                            $required = "required";
                                            ?>
                                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                                            @error('policy_number')
                                            <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                @endif
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php
                                        $field_name = 'mobile';
                                        $field_lable = "Mobile";
                                        $field_placeholder = "Mobile Number";
                                        $required = "required";
                                        ?>
                                        {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                        {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                                        @error('mobile')
                                        <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php
                                        $field_name = 'password';
                                        $field_lable = "Password";
                                        $field_placeholder = "Enter Password";
                                        $required = "required";
                                        ?>
                                        {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                        {{ html()->password($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                                        @error('password')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php
                                        $field_name = 'password_confirmation';
                                        $field_lable = "Confirm Password";
                                        $field_placeholder = $field_lable;
                                        $required = "required";
                                        ?>
                                        {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                        {{ html()->password($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                                        @error('password_confirmation')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group text-center">
                                        {{ html()->button($text = "Sign Up", $type = 'submit')->class('btn btn-success') }}
                                    </div>
                                </div>
                            </div>
                            {{ html()->form()->close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('after-styles')
    <style>
        .container-border {
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            overflow: hidden;
            background-color: white;
            border-left: 1px solid #2a2a86;
            border-right: 1px solid #2a2a86;
            border-bottom: 1px solid #2a2a86;
        }
        .sign-up .form-control{
            height: 40px;
            padding: 6px 12px;
            font-size: 16px;
        }
        .error { color: #F00; }
    </style>
@endpush

@push('after-scripts')
    <script>
        var signin_as = "{{$sign_up_as}}";
        var apiUrl = "{{ config('alpha.api_url') }}";
        jQuery(document).ready(function () {
            $('#signup').submit( async function(e){
                e.preventDefault();
                if ($('#sign_up_as').val() != 'employee') {
                    $(this).unbind('submit').submit();
                }
                var employeeCode = $('#employee_code').val();
                if (!employeeCode) {
                    alert('Enter Employee Code');
                }
                var profile = await getProfile($('#employee_code').val());
                if (profile.status == 200 && (profile.data.profile && profile.data.profile.code == employeeCode)) {
                    var subDesig = await getSubordinatesDesignation(profile.data.profile.designation);
                    $('#employeeData').val(JSON.stringify(profile.data.profile));
                    $('#subDesig').val(JSON.stringify(subDesig.data.getSubordinateDesignations));
                    $(this).unbind('submit').submit();
                } else {
                    alert('Employee code does not match');
                }
            });
        });

        /**
         * get employee profile by employee code number
         * @param code
         */
        async function getProfile(code) {
            return $.ajax({
                url: apiUrl + "public/employee-profile/" + code,
                method: 'GET',
                dataType: 'JSON'
            }).done(function(data) {
                if (data.status == 200 ) {
                    return data.profile;
                }
                return [];
            }).fail(function() {
                alert('error')
            });
        }

        async function getSubordinatesDesignation(designation) {
            return $.ajax({
                url: apiUrl + "public/sub-designations/" + designation,
                method: 'GET',
                dataType: 'JSON'
            }).done(function(data) {
                if (data.status == 200 ) {
                    return data.data.getSubordinateDesignations;
                }
                return [];
            }).fail(function() {
                alert('error')
            });
        }
    </script>
@endpush
