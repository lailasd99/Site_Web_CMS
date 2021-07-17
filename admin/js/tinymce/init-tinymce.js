tinymce.init({
    selector: "textarea",
    oninit: "setPlainText",
    plugins: "image code textcolor table paste",
    toolbar: "undo redo | bold italic | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link code image_upload | image | table ",
    menubar: false,
    statusbar: false,
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

    

    /*
    setup: function(ed) {
         
        var fileInput = $('<input id="tinymce-uploader" type="file" name="pic" accept="image/*" style="display:none">');
        $(ed.getElement()).parent().append(fileInput);
        fileInput.on("change",function(){           
            var file = this.files[0];
            var reader = new FileReader();          
            var formData = new FormData();
            var files = file;
            formData.append("file",files);
            formData.append('filetype', 'image');             
            jQuery.ajax({
                url: "tinymce_upload.php",
                type: "post",
                data: formData,
                contentType: false,
                processData: false,
                async: false,
                success: function(response){
                    var fileName = response;
                    if(fileName) {
                        ed.insertContent('<img src="../../../upload/'+fileName+'"/>');
                    }
                }
            });   
            reader.readAsDataURL(file);  
        });     
         
        ed.addButton('image_upload', {
            tooltip: 'Insérer Image',
            icon: 'image',
            onclick: function () {
                fileInput.trigger('click');
            }
        });
    }*/
/*
  images_upload_url: 'tinymce_upload.php',

  images_upload_handler: function (blobInfo, success, failure) {
    setTimeout(function () {
     
      success('../../../upload/'+fileName);
    }, 2000);
  },
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'

*/

    /*selector: "textarea#text_editor_page",
    theme: "modern",
    plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak",
              "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
              "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
            ],
    toolbar1: "undo redo | bold italic underline| alignleft aligncenter alignright alignjustify | bullist numlist outdent indent ",
    toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor | print preview code | caption",
    image_caption: true,
    image_adv_tab: true,
    external_filemanager_path:"/upload/",
    filemanager_title: "myPHPnotes",
    external_plugins: {"filemanager": "/upload/plugin.min.js"},
    visualblocks_default_state: true,
    style_formats_autohide: true,
    style_formats_merge: true,

    menubar:false,
    statusbar: false,
    content_style: ".mce-content-body {font-size:15px;font-family:Arial,sans-serif;}",
    height: 400,*/


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