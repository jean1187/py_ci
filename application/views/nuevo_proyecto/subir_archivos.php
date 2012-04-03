<!-- Bootstrap CSS Toolkit styles -->
<link rel="stylesheet" href="<?php echo base_url()?>css/controllers/nuevo_proyecto/bootstrap_jean.css"/>
<link rel="stylesheet" href="<?php echo base_url()?>css/jquery.fileupload/jquery.fileupload-ui.css"/>

<div class="container">
    <div class="page-header">
        <h1>Lista de Archivos para este Proyecto</h1>
    </div>
    <!-- The file upload form used as target for the file upload widget -->
    <form id="fileupload" action="<?php echo site_url("nuevo_proyecto/do_upload")?>" method="POST" enctype="multipart/form-data">
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="span7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <span><i class="icon-plus icon-white"></i>Añadir Archivos..</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="icon-upload icon-white"></i> Comenzar
                </button>
                <button type="reset" class="btn btn-warning cancel">
                    <i class="icon-ban-circle icon-white"></i> Cancelar
                </button>
            </div>
            <div class="span5">
                <!-- The global progress bar -->
                <div class="progress progress-success progress-striped active fade">
                    <div class="bar" style="width:0%;"></div>
                </div>
            </div>
        </div>
        <!-- The loading indicator is shown during image processing -->
        <div class="fileupload-loading"></div>
        <br>
        <!-- The table listing the files available for upload/download -->
        <table class="table table-striped"><tbody class="files" data-toggle="modal-gallery" data-target="#modal-gallery"></tbody></table>
    </form>
</div>

<!-- Error messages for the upload/download templates -->
<script>
var fileUploadErrors = {
    maxFileSize: 'Archivo muy Pesado (maximo 8 MB)',
    minFileSize: 'Archivo muy pequeño',
    acceptFileTypes: 'Tipo de Archivo no Permitido',
    maxNumberOfFiles: 'Maximo numero de Archivos Permitidos',
    uploadedBytes: 'Uploaded bytes exceed file size',
    emptyResult: 'Empty file upload result'
};
</script>
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/html">
{% for (var i=0, files=o.files, l=files.length, file=files[0]; i<l; file=files[++i]) { %}
    <tr class="template-upload fade">
        <td class="preview"><span class="fade"></span></td>
        <td class="name">{%=file.name%}</td>
        <td class="size">{%=o.formatFileSize(file.size)%}</td>
        {% if (file.error) { %}
            <td class="error" colspan="2"><span class="label label-important">Error</span> {%=fileUploadErrors[file.error] || file.error%}</td>
        {% } else if (o.files.valid && !i) { %}
            <td>
                <div class="progress progress-success progress-striped active"><div class="bar" style="width:0%;"></div></div>
            </td>
            <td class="start">{% if (!o.options.autoUpload) { %}
                <button class="btn btn-primary">
                    <i class="icon-upload icon-white"></i> Comenzar
                </button>
            {% } %}</td>
        {% } else { %}
            <td colspan="2"></td>
        {% } %}
        <td class="cancel">{% if (!i) { %}
            <button class="btn btn-warning">
                <i class="icon-ban-circle icon-white"></i> Cancelar
            </button>
        {% } %}</td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/html">
{% for (var i=0, files=o.files, l=files.length, file=files[0]; i<l; file=files[++i]) { %}
    <tr class="template-download fade">
        {% if (file.error) { %}
            <td></td>
            <td class="name">{%=file.name%}</td>
            <td class="size">{%=o.formatFileSize(file.size)%}</td>
            <td class="error" colspan="2"><span class="label label-important">Error</span> {%=fileUploadErrors[file.error] || file.error%}</td>
        {% } else { %}
            <td class="preview">{% if (file.thumbnail_url) { %}
                <a href="{%=file.url%}" title="{%=file.name%}" rel="gallery" download="{%=file.name%}"><img src="{%=file.thumbnail_url%}"></a>
            {% } %}</td>
            <td class="name">
                <a href="{%=file.url%}" title="{%=file.name%}" rel="{%=file.thumbnail_url&&'gallery'%}" download="{%=file.name%}">{%=file.name%}</a>
            </td>
            <td class="size">{%=o.formatFileSize(file.size)%}</td>
            <td colspan="2"></td>
        {% } %}
    </tr>
{% } %}
</script>

<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->

<!-- The Templates plugin is included to render the upload/download listings -->
<script src="<?php echo base_url()?>js/jquery.fileupload/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="<?php echo base_url()?>js/jquery.fileupload/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="<?php echo base_url()?>js/jquery.fileupload/canvas-to-blob.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?php echo base_url()?>js/jquery.fileupload/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo base_url()?>js/jquery.fileupload/jquery.fileupload.js"></script>
<!-- The File Upload image processing plugin -->
<script src="<?php echo base_url()?>js/jquery.fileupload/jquery.fileupload-ip.js"></script>
<!-- The File Upload user interface plugin -->
<script src="<?php echo base_url()?>js/jquery.fileupload/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="<?php echo base_url()?>js/controllers/nuevo_proyecto/main.fileupload.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE8+ -->
<!--[if gte IE 8]><script src="/js1/cors/jquery.xdr-transport.js"></script><![endif]-->
