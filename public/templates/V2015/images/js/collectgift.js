var SiteURL = "http://www.laowaner.com";
function showCollectgift(){
	$.ajaxSettings.async = false;
	$.getJSON(SiteURL+"/public/collectgift?callback=?",{refer:top.location.href},function(result){
	    parent.gLogin.show({url:result.url,onClose:function(){}});
  	});
}
var gLogin = {
    config: {
        url: '',
        closeImgUrl: SiteURL+'/Tpl/Template_www/Public/images/loginform/icons2.png',
        width: 488,
        height: 390,
        left: 'auto',
        top: 'auto',
        hasBg: true,
        bgColor: '#000',
        bgOpacity: 0.3,
		version:20121214,
        onShow: function(){
        },//弹出框显示回调
        onClose: function(){
        },//弹出框关闭回调
        onLoad: function(){
        }//iframe载入回调
    },
    Mk: true,
    init: function(){
        if (!window.jQuery) {
            alert("jQuery not found");
            return;
        }
        this.obj;
        this.mask;
        this.isIE6 = window.XMLHttpRequest ? false : true;
        this.creatDom();
        this.bindCloseEvent()
        this.obj.find('.close').bind('click', function(){
            _this.close();
        })
        this.bindESCToClose();
    },
    show: function(o){
        var _this = this;
        try {
            $.extend(this.config, o);
        } 
        catch (e) {
            return;
        }
        if (this.Mk) {
            this.init();
        }
        this.setStyle();
        this.obj.show();
        if (this.config.hasBg) 
            this.bg.show();
        this.config.onShow();
        return false;
    },
    bindCloseEvent: function(){
        var _this = this;
        this.btnClose.bind('click', function(){
            _this.close();
        });
        this.btnClose.bind('mousedown', function(){
            $(this).css({
                'backgroundPosition': '0 -250px'
            })
        })
        this.btnClose.bind('mouseup', function(){
            $(this).css({
                'backgroundPosition': '0 -225px'
            })
        })
        this.btnClose.bind('mouseenter', function(){
            $(this).css({
                'backgroundPosition': '0 -200px'
            })
        })
    },
    creatDom: function(fn){
        var _this = this;
        this.obj = $('<div class="gLoginCon"><iframe class="gLoginIframe" id="gLoginIframe" src="' + this.config.url + '"  scrolling="no" allowtransparency="true"  width=' + this.config.width + ' height=' + this.config.height + ' frameborder="0" ></iframe></div>');
        this.btnClose = $('<a class="gLoginClose"></a>');
        this.bg = $('<div class="gLoginMask" id="gLoginMask"></div>');
        this.obj.bind('load', function(){
            _this.config.onLoad();
        })
        $(document.body).append(this.obj).append(this.bg);
        this.obj.append(this.btnClose);
        this.Mk = false;
    },
    close: function(){
        if (this.obj.is(':visible') || this.bg.is(':visible')) {
            this.obj.hide();
            this.bg.hide();
            //this.btnClose.unbind();
            this.config.onClose();
            return false;
        }
    },
    fixObjForIE6: function(){
        var _this = this;
        $(window).bind('scroll', function(){
            _this.obj.css({
                'marginTop': $(document).scrollTop() - _this.config.height / 2 + 'px'
            })
        })
    },
    setStyle: function(){
        if (this.config.left != 'auto' && this.config.top != 'auto') {
            this.obj.css({
                position: 'absolute',
                'zIndex': 99999,
                left: this.config.left + 'px',
                top: this.config.top + 'px',
                margin: 0,
                display: 'none'
            });
        } else {
            this.obj.css({
                position: this.isIE6 ? 'absolute' : 'fixed',
                'zIndex': 99999,
                left: '50%',
                top: '40%',
                margin: '-' + this.config.height / 2 + 'px 0 0 -' + this.config.width / 2 + 'px',
                display: 'none'
            });
            if (this.isIE6) {
                this.obj.css({
                    'marginTop': $(document).scrollTop() - this.config.height / 2 + 'px'
                })
                this.fixObjForIE6();
            }
        }
        this.bg.css({
            background: this.config.bgColor,
            width: '100%',
            height: Math.max(document.documentElement.scrollHeight, document.documentElement.clientHeight) + 'px',
            position: 'absolute',
            'z-index': '99998',
            left: '0',
            top: '0',
            opacity: this.config.bgOpacity,
            display: 'none'
        });
        this.btnClose.css({
            background: 'url(' + this.config.closeImgUrl + ') no-repeat 0 -225px',
            position: 'absolute',
            right: '12px',
            top: '12px',
            height: '21px',
            width: '21px',
         
        })
    },
    bindESCToClose: function(){
        var _this = this;
        $(document).bind('keyup', function(event){
            if (event.keyCode == 27) {
                _this.close();
            }
        });
    }
}
