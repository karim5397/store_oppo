
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.2/tinymce.min.js" referrerpolicy="origin"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.1.0/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    var editor_config = {
        path_absolute : "/",
        height: 300,
        selector:"textarea.tinymce-editor",
        plugins: [
            "advlist autolink lists link charmap print preview hr anchor pagebreak image",
            "searchreplace visualblocks code fullscreen",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime nonbreaking save table contextmenu directionality",
            "paste textcolor colorpicker textpattern",
            "insertdatetime media table paste code help wordcount",
            // 'image',
            // 'emoticons template',
            'media',
            'lists',
            // 'insertdatetime',
            'code',
            // 'codesample',
            'emoticons',
            'link',
            'searchreplace',
            'wordcount',
        ],
        toolbar: "insertfile undo redo |codesample | ltr rtl | formatselect | styleselect | numlist bullist | bold italic |backcolor |removeformat |alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media| emoticons |code |searchreplace|visualchars |wordcount",
        relative_urls: false,
        content_css: '//www.tiny.cloud/css/codepen.min.css'

    };

    tinymce.init(editor_config);
</script>
<style>
    .tox-statusbar__branding{
        display: none;
    }

    /* .tox-notifications-container {display: none !important;} */

</style>
