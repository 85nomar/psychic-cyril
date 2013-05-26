var ricardoImageUpload = {
    config : {
        fileUploadInput : "#fileupload",
        imgsContainer : ".productImages",
        imgContainer : ".productImage",
        mainImgClass : "mainProductImage",
        addImgOverlay : ".addProductImagesOverlay",
        progressOverlay : ".uploadProgressOverlay",
        removeImgOverlay : ".removeImageOverlay",
        placeholderImgUrl : "img/img_placeholder_90.jpg",
        msgServerProcessing : "zuschneiden",
        serverScript : "fileupload.php",
        serverReturnType : "json",
        clientImageProcessing : [{
            action : 'load',
            fileTypes : /^image\/(gif|jpeg|png)$/,
            maxFileSize : 20000000 // 20MB
        }, {
            action : 'resize',
            maxWidth : 1920,
            maxHeight : 1200,
            minWidth : 800,
            minHeight : 600
        }, {
            action : 'save'
        }],
    },
    init : function(config) {
        // provide for custom configuration via init()
        if (config && typeof (config) == 'object') {
            $.extend(_$this.config, config);
        }

        // define some globals
        _$this = this,
        _$this._isUploadingClass = "isUploading";
        _$this._uploadCompletedClass = "uploadCompleted";
        _$this._progressBarClass = "bar";
        _$this._freeNodeSelector = _$this.config.imgContainer + ":not(." + _$this._isUploadingClass + "):not(." + _$this._uploadCompletedClass + "):first";
        _$this._progressOverlayTmpl = _$this.config.progressOverlay + ":first";

        // initialize fileuploader with default values provided by config
        $(_$this.config.fileUploadInput).fileupload({
            url : _$this.config.serverScript,
            dataType : _$this.config.serverReturnType,
            process : _$this.config.clientImageProcessing,
        });

        // register event listeners
        $(_$this.config.fileUploadInput).on({
            "fileuploadadd" : _$this._onFileUploadAdd,
            "fileuploadprogress" : _$this._onFileUploadProgress,
            "fileuploadprogressall" : _$this._onFileUploadProgressAll,
            "fileuploaddone" : _$this._onFileUploadDone,
        });
        $(_$this.config.imgsContainer).delegate("." + _$this._uploadCompletedClass, {
            "mouseenter" : _$this._showRemoveImgOverlay,
            "mouseleave" : _$this._hideRemoveImgOverlay,
        });
        $(_$this.config.imgsContainer).delegate(_$this.config.removeImgOverlay + " a", {
            "click" : _$this._onImgDelete,
        });
    },
    _onFileUploadAdd : function(e, data) {
        // find node to attach uploaded element to
        var node = $(_$this._freeNodeSelector), progressOverlayTmpl = $(_$this._progressOverlayTmpl);
        // create and save a reference to the node for later callbacks
        data.context = node;
        // copy uploadProgressOverlay html from first element if it doesn't exist yet
        if (node.find(_$this.config.progressOverlay).length < 1) {
            progressOverlayTmpl.clone().prependTo(node);
        }
        // add css class that tells us later that this node is occupied
        node.addClass(_$this._isUploadingClass);
        // disable possibility to add new images
        $(_$this.config.addImgOverlay).hide();
        // reset properties that have been modified
        node.find("." + _$this._progressBarClass).css("width", 0 + "%").text("");
        // display progress overlay
        node.find(_$this.config.progressOverlay).show();
    },
    _onFileUploadProgress : function(e, data) {
        var node = data.context.find("." + _$this._progressBarClass), progress = parseInt(data.loaded / data.total * 100, 10);
        // update progress bar
        node.animate({
            width : progress + "%"
        }, 1000, function() {
            // progress bar stays at 99% after image has been uploaded while it is beeing processed on server side
            // so we tell that to the user
            if (progress > 98) {
                node.text(_$this.config.msgServerProcessing + "...");
            }
        });
    },
    _onFileUploadProgressAll : function(e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        // add image upload button to next remaining placeholder after all uploads have finished
        if (progress >= 100) {
            $(_$this.config.addImgOverlay).prependTo(_$this._freeNodeSelector).show();
        }
    },
    _onFileUploadDone : function(e, data) {
        var node = data.context, removeOverlay = $(_$this.config.removeImgOverlay + ":first"), file = data.result.files[0];
        // mark as complete
        node.removeClass(_$this._isUploadingClass).addClass(_$this._uploadCompletedClass);
        // remove progress overlay
        node.find(_$this.config.progressOverlay).hide();
        // attach uploaded image to placeholder
        node.find("img:not(.productImagePlaceholder)").attr("src", file.thumbnail_url);
        // copy the remove link from the first image and insert it for the new image
        if (node.find(_$this.config.removeImgOverlay).length < 1) {
            removeOverlay.clone(true).prependTo(node);
        }

                var elements = {
                        cBody : 'body',
                        containerClass : '.productImage',
                        draggableImg : '.productImage img',
                        droper : '.droper',

        }

        $(elements.draggableImg).each(function(){
            var that = $(this);
            var imgSrc = that.attr('src');
            if (imgSrc.indexOf('placeholder') > 0){
                that.parents(elements.containerClass).removeClass('droper');
                that.parents(elements.containerClass).addClass('placeholder');
                that.addClass('placeholder');
            }else{
                that.parents(elements.containerClass).addClass('droper');
                that.parents(elements.containerClass).removeClass('placeholder');
                that.removeClass('placeholder');
            }
        });
    },
    _onImgDelete : function(e) {
        // click handler to remove an image from the collection
        // what actually will happen on delete is that we remove the element
        // from the current position in the DOM, move it to the end, cleanup it's content
        // and send an ajax request to the server to delete the corresponding images
        e.preventDefault();
        // get productImageNode from DOM
        var node = $(this).closest(_$this.config.imgContainer);
        // ajax request to fileserver

        // check if user wants to delete main image. this needs to be treated seperately
        if (node.hasClass(_$this.config.mainImgClass) && $("." + _$this._uploadCompletedClass + ",." + _$this._isUploadingClass).length > 0) {
            // move this node to the end of img list (not to the end of mainImg div)
            node.removeClass(_$this.config.mainImgClass).appendTo(_$this.config.imgsContainer + " > div:eq(1)");
            // but take one from img list (not the mainImg)
            $("." + _$this._uploadCompletedClass + ":first,." + _$this._isUploadingClass + ":first").prependTo(_$this.config.imgsContainer + " > div:first").addClass(_$this.config.mainImgClass);
        } else {
            node.appendTo(_$this.config.imgsContainer + " > div:eq(1)");
        }
        node.find("img:not(.productImagePlaceholder)").attr("src", _$this.config.placeholderImgUrl);
        node.find(_$this.config.removeImgOverlay).hide();
        node.removeClass(_$this._uploadCompletedClass);
        // move add images overlay to the first element that hasn't an image yet
        $(_$this.config.addImgOverlay).appendTo(_$this._freeNodeSelector);

                var elements = {
                        cBody : 'body',
                        containerClass : '.productImage',
                        draggableImg : '.productImage img',
                        droper : '.droper',

        }

        $(elements.draggableImg).each(function(){
            var that = $(this);
            var imgSrc = that.attr('src');
            if (imgSrc.indexOf('placeholder') > 0){
                that.parents(elements.containerClass).removeClass('droper');
                that.parents(elements.containerClass).addClass('placeholder');
                that.addClass('placeholder');
            }else{
                that.parents(elements.containerClass).addClass('droper');
                that.parents(elements.containerClass).removeClass('placeholder');
                that.removeClass('placeholder');
            }
        });
    },
    _showRemoveImgOverlay : function(e) {
        $(this).find(_$this.config.removeImgOverlay).show();
    },
    _hideRemoveImgOverlay : function(e) {
        $(this).find(_$this.config.removeImgOverlay).hide();
    }
}