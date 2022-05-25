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
            ?>
            {!! Form::label("$field_name", "$field_lable") !!}
            <div class="input-group mb-3">
                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(['aria-label'=>'Image', 'aria-describedby'=>'button-image']) }}
                <div class="input-group-append">
                    <button class="btn btn-info" type="button" id="button-image"><i class="fas fa-folder-open"></i> @lang('Browse')</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'details';
            $field_lable = __("management::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
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
                            ?>
                            {{ html()->label($field_lable, $field_name) }}
                            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control') }}
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
                            ?>
                            {{ html()->label($field_lable, $field_name) }}
                            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control') }}
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
<script src="https://cdn.tiny.cloud/1/ym8q5dj6b8ndg6fvncwdg374ihxv01btz4ygrazpj1uakc93/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

{{-- <script type="text/javascript" src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script> --}}
<script type="text/javascript" src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>

<script type="text/javascript">

// CKEDITOR.replace('content', {filebrowserImageBrowseUrl: '/file-manager/ckeditor', language:'{{App::getLocale()}}', defaultLanguage: 'en'});

tinymce.init(
    {
        selector: '#details',
        branding: false,
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        // imagetools_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | code | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: false,
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: false,
        importcss_append: true,
        // images_upload_base_path: window.location.origin,
        images_upload_url: '/admin/upload',
        file_picker_types: 'image',
        relative_urls: false,
        remove_script_host: false,
        convert_urls: true,
        images_upload_handler: function (blobInfo, success, failure) {
            let xhr, formData;
            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', '/admin/upload');
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            xhr.setRequestHeader('X-CSRF-TOKEN', csrf_token);
            xhr.onload = function () {
                console.log(xhr, "success");

                var json;
                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }
                json = JSON.parse(xhr.responseText);
                if (json.length == 1) {
                    json = json[0];
                }
                if (!json || typeof json.file_name != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }
                success(window.location.origin + '/storage/' + json.file_name);
            };
            formData = new FormData();
            formData.append('random_names', 'true');
            formData.append('file[0]', blobInfo.blob(), blobInfo.filename());
            xhr.send(formData);
        },
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), { title: file.name });
                };
            };
            input.click();
        },
        automatic_uploads: true,
        height: 400,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        contextmenu: 'link image imagetools table',
        skin: 'oxide',
        content_css: 'default',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
        forced_root_block: 'div',
        setup: function (editor) {
            editor.on('change', function (e) {
                editor.save();
        });
    }
    });
let setImageTo = '';
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('button-image').addEventListener('click', (event) => {
        event.preventDefault();
        setImageTo = 'featured_image';
        window.open('/file-manager/fm-button', 'fm', 'width=800,height=600');
    });
    document.getElementById('button-banner').addEventListener('click', (event) => {
        event.preventDefault();
        setImageTo = 'banner_image';
        window.open('/file-manager/fm-button', 'fm', 'width=800,height=600');
    });
});

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
