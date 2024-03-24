<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Drag & Drop multiple images uploading using Pure JavaScript</title>
    <link href="{{ asset('assets/css/imageUpload.css') }}" rel="stylesheet />
    <meta http-equiv="X-UA-Compatible"
        content="IE=7">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="uploadImgCard">
        <div class="top">
            <p>Images</p>
        </div>
        <div class="drag-area">
            <span class="visible">
                <span class="select" role="button">
                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="3" width="32" height="32" rx="16" fill="#7010DF" />
                        <path
                            d="M12.0527 19.0063C12.0527 18.5 12.4761 18.0767 12.9824 18.0767H18.0708V12.9883C18.0708 12.4819 18.4941 12.0586 19.0005 12.0586C19.5068 12.0586 19.9302 12.4819 19.9302 12.9883V18.0767H25.0186C25.5249 18.0767 25.9482 18.5 25.9482 19.0063C25.9482 19.521 25.5249 19.936 25.0186 19.936H19.9302V25.0244C19.9302 25.5308 19.5068 25.9541 19.0005 25.9541C18.4941 25.9541 18.0708 25.5308 18.0708 25.0244V19.936H12.9824C12.4761 19.936 12.0527 19.521 12.0527 19.0063Z"
                            fill="white" />
                    </svg>
                </span>
            </span>
            <span class="on-drop">Drop images here</span>
            <input type="file" name="multiphoto[]" accept="image/*" onchange="previewimgmulti(event)" multiple />
        </div>

        <!-- IMAGE PREVIEW CONTAINER -->
        <div class="imgContainer"></div>
    </div>

    <script src="{{ asset('assets/js/imageUpload.js') }}"></script>
</body>

</html>
