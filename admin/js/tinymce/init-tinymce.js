tinymce.init({
    selector: "textarea.text_editor_page",
    oninit: "setPlainText",
    plugins: "image code textcolor table paste link",
    toolbar: "undo redo | styleselect | fontsizeselect| bold italic | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link code image_upload | image | table | link ",
    menubar: false,
    statusbar: false,
    language: 'fr_FR',
    fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
    content_style: ".mce-content-body {font-size:15px;font-family:Arial,sans-serif;}",
    height: 400,

    images_upload_url : 'js/tinymce/tinymce_upload.php',
    automatic_uploads : false,

    images_upload_handler : function(blobInfo, success, failure) {
    var xhr, formData;

    xhr = new XMLHttpRequest();
    xhr.withCredentials = false;
    xhr.open('POST', 'js/tinymce/tinymce_upload.php');

    xhr.onload = function() {
            var json;

            if (xhr.status != 200) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }
            
            json = JSON.parse(xhr.responseText);
            console.log(json)
            if (!json || typeof json.file_path != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }
            
            success(json.file_path);
            
        };

        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());

        xhr.send(formData);
    },

});

function setPlainText() {
    var ed = tinyMCE.get('elm1');

    ed.pasteAsPlainText = true;  

    //adding handlers crossbrowser
    if (tinymce.isOpera || /Firefox\/2/.test(navigator.userAgent)) {
        ed.onKeyDown.add(function (ed, e) {
            if (((tinymce.isMac ? e.metaKey : e.ctrlKey) && e.keyCode == 86) || (e.shiftKey && e.keyCode == 45))
                ed.pasteAsPlainText = true;
        });
    } else {            
        ed.onPaste.addToTop(function (ed, e) {
            ed.pasteAsPlainText = true;
        });
    }
}