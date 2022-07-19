
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    var editor_config = {
        path_absolute : "/",
        height: 300,
        selector: "textarea.tinymce-editor",
        plugins: [
            "advlist autolink lists link charmap print preview hr anchor pagebreak image",
            "searchreplace visualblocks code fullscreen",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern",
            "insertdatetime media table paste code help wordcount",
            // 'image',
            'media',
            'insertdatetime',
            'code',
            // 'codesample',
            'emoticons',
            'link',
            'searchreplace',
            'wordcount',
        ],
        toolbar: "insertfile undo redo |codesample | ltr rtl | formatselect | styleselect | bold italic |backcolor |removeformat |alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media| emoticons |code|insertdatetime |searchreplace|visualchars |wordcount",
        relative_urls: false,
        content_css: '//www.tiny.cloud/css/codepen.min.css'

    };

    tinymce.init(editor_config);
</script>
