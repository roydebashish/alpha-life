<div class="row">
    <div class="col-6">
        <div class="form-group">
            <?php
            $field_name = 'name';
            $field_lable = __("management::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <?php
            $field_name = 'designation';
            $field_lable = __("management::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>



<div class="row">
    <div class="col-4">
        <div class="form-group">
            <?php
            $field_name = 'group_id';
            $field_lable = __("management::$module_name.$field_name");
            $field_relation = "group";
            $field_placeholder = __("Select an option");
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, isset($$module_name_singular)?optional($$module_name_singular->$field_relation)->pluck('name', 'id'):'')->placeholder($field_placeholder)->class('form-control select2-category')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            <?php
            $field_name = 'status';
            $field_lable = __("management::$module_name.$field_name");
            $field_placeholder = __("Select an option");
            $required = "required";
            $select_options = [
                '1'=>'Published',
                '0'=>'Unpublished',
            ];
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
        </div>
    </div>

    <div class="col-4">
        <div class="form-group">
            <?php
            $field_name = 'order';
            $field_lable = __("management::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'image';
            $field_lable = __("management::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {!! Form::label("$field_name", "$field_lable") !!} {!! fielf_required($required) !!}
            <div class="input-group mb-3">
                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required", 'aria-label'=>'Image', 'aria-describedby'=>'button-image']) }}
                <div class="input-group-append">
                    <button class="btn btn-info" type="button" id="button-image"><i class="fas fa-folder-open"></i> @lang('Browse')</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col">
        <div class="card card-accent-primary">
            <div class="card-header">
{{--                <i class="{{ Arr::get($fields, 'icon', 'glyphicon glyphicon-flash') }}"></i>--}}
                Social Profiles
            </div>
            <div class="card-body">
{{--                <p class="text-muted">{{ $fields['desc'] }}</p>--}}

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <?php
                            $field_name = 'email';
                            $field_lable = __("management::$module_name.$field_name");
                            $field_placeholder = $field_lable;
                            $required = "required";
                            ?>
                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <?php
                            $field_name = 'facebook';
                            $field_lable = __("management::$module_name.$field_name");
                            $field_placeholder = $field_lable;
                            $required = "required";
                            ?>
                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <?php
                            $field_name = 'linkedin';
                            $field_lable = __("management::$module_name.$field_name");
                            $field_placeholder = $field_lable;
                            $required = "required";
                            ?>
                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <?php
                            $field_name = 'twitter';
                            $field_lable = __("management::$module_name.$field_name");
                            $field_placeholder = $field_lable;
                            $required = "required";
                            ?>
                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <?php
                            $field_name = 'instagram';
                            $field_lable = __("management::$module_name.$field_name");
                            $field_placeholder = $field_lable;
                            $required = "required";
                            ?>
                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <?php
                            $field_name = 'youtube';
                            $field_lable = __("management::$module_name.$field_name");
                            $field_placeholder = $field_lable;
                            $required = "required";
                            ?>
                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Select2 Library -->
<x-library.select2 />
<x-library.datetime-picker />

@push('after-styles')
<!-- File Manager -->
<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endpush

@push ('after-scripts')
<script type="text/javascript">
$(document).ready(function() {
    $('.select2-category').select2({
        theme: "bootstrap",
        placeholder: '@lang("Select an option")',
        minimumInputLength: 2,
        allowClear: true,
        ajax: {
            url: '{{route("backend.groups.index_list")}}',
            dataType: 'json',
            data: function (params) {
                return {
                    q: $.trim(params.term)
                };
            },
            processResults: function (data) {
                return {
                    results: data
                };
            },
            cache: true
        }
    });
});
</script>

<!-- Date Time Picker & Moment Js-->
<script type="text/javascript">
$(function() {
    $('.datetime').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
        icons: {
            time: 'far fa-clock',
            date: 'far fa-calendar-alt',
            up: 'fas fa-arrow-up',
            down: 'fas fa-arrow-down',
            previous: 'fas fa-chevron-left',
            next: 'fas fa-chevron-right',
            today: 'far fa-calendar-check',
            clear: 'far fa-trash-alt',
            close: 'fas fa-times'
        }
    });
});
</script>

<script type="text/javascript" src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>

<script type="text/javascript">

CKEDITOR.replace('content', {filebrowserImageBrowseUrl: '/file-manager/ckeditor', language:'{{App::getLocale()}}', defaultLanguage: 'en'});

document.addEventListener("DOMContentLoaded", function() {

  document.getElementById('button-image').addEventListener('click', (event) => {
    event.preventDefault();

    window.open('/file-manager/fm-button', 'fm', 'width=800,height=600');
  });
});

// set file link
function fmSetLink($url) {
  document.getElementById('image').value = $url;
}
</script>
@endpush
