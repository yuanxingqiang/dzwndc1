﻿var qikoo = window.qikoo || {};
qikoo.dialog = function() {
    var e, t, n = {}, r = function() {
            var n = ['<div class="mod-dialog-bg"></div>', '<div class="mod-dialog">', '<div class="dialog-nav">', '<span class="dialog-title"></span>', '<a href="#" onclick="return false" class="dialog-close"><center><b>×</b></center></a>', "</div>", '<div class="dialog-main"></div>', "</div>"].join(""),
                r = jQuery(n).hide().appendTo("body");
            e = r.filter(".mod-dialog-bg"), t = r.filter(".mod-dialog"), t.find(".dialog-close").click(function() {
                u()
            })
        }, i = function() {
            t.css("width", n.width || ""), t.find(".dialog-title").html(n.title), t.find(".dialog-main").html(n.html), t.show(), e.show(), s()
        }, s = function() {
            var e = (jQuery(window).width() - t.width()) / 2,
                n = (jQuery(window).height() - t.height()) / 2;
            n = n > 0 ? n + jQuery(window).scrollTop() : 0, t.css({
                left: e,
                top: n
            })
        }, o = function(e) {
            return typeof e != "object" && (e = {
                html: e || ""
            }), n = jQuery.extend({
                title: "提示",
                html: "",
                closeFn: null
            }, e), t || r(), i(), t
        }, u = function() {
            e && e.hide(), t && t.hide(), n.closeFn && n.closeFn.call(this)
        };
    return {
        show: o,
        hide: u
    }
}(), qikoo.dialog.confirm = function(e, t, n) {
    var r = ['<div class="dialog-content">', "<p>" + e + "</p>", "</div>", '<div class="dialog-console clearfix_new">', '<a class="console-btn-confirm" href="#" onclick="return false;">确定</a>', '<a class="console-btn-cancel" href="#" onclick="return false;">取消</a>', "</div>"].join(""),
        i = qikoo.dialog.show({
            html: r
        });
    return i.find(".console-btn-confirm").click(function() {
        var e = t && t.call(i);
        e !== !1 && qikoo.dialog.hide()
    }), i.find(".console-btn-cancel").click(function() {
        n && n.call(i), qikoo.dialog.hide()
    }), i
}, qikoo.dialog.alert = function(e, t) {
    var n = ['<div class="dialog-content">', "<p>" + e + "</p>", "</div>", '<div class="dialog-console clearfix_new">', '<a class="console-btn-confirm" href="#" onclick="return false;">确定</a>', "</div>"].join(""),
        r = qikoo.dialog.show({
            html: n
        });
    return r.find(".console-btn-confirm").click(function() {
        var e = t && t.call(r);
        e !== !1 && qikoo.dialog.hide()
    }), r
}, qikoo.dialog.payNotice = function(e, t, n) {
    e = e || function() {
        window.location.reload()
    }, t = t || function() {
        window.location.reload()
    };
    var r = qikoo.dialog.show({
        html: ['<div class="dialog-content" style="padding: 0 80px; text-align:left">', '<div class="content-title">重要提示！</div>', '<p style="padding-left: 50px">请务必使用自己的手机号来注册，<br>否则后期无法找回密码哦！</p>', "</div>", '<div class="dialog-console clearfix_new" style="margin:25px auto;width:252px;">', '<a class="console-btn-confirm" href="#" onclick="return false;">我知道了</a>', '<a class="console-btn-cancel" href="#" onclick="return false;">关闭此界面</a>', "</div>"].join(""),
        width: 530,
        closeFn: n
    });
    r.find(".console-btn-confirm").click(function() {
        e(), qikoo.dialog.hide()
    }), r.find(".console-btn-cancel").click(function() {
        t(), qikoo.dialog.hide()
    })
}, qikoo.pop = function(e) {
    var t, n = ['<div class="mod-pop">', '<div class="pop-nav">', '<span class="pop-title"></span>', '<a class="pop-close" href="#" onclick="return false"></a>', "</div>", '<div class="pop-main"></div>', "</div>"].join("");
    return t = jQuery(n).hide().appendTo("body"), t.find(".pop-close").click(function() {
        t.remove()
    }), e = jQuery.extend({
        title: "温馨提示：",
        html: ""
    }, e), t.find(".pop-title").html(e.title), t.find(".pop-main").html(e.html), t
}, qikoo.popConfirm = function() {
    var e, t = function(e) {
            var t = ["<p>" + e + "</p>", '<div class="pop-console">', '<a class="pop-btn-green" href="#" onclick="return false">确定</a>', '<a class="pop-btn-gray" href="#" onclick="return false">取消</a>', "</div>"].join("");
            return qikoo.pop({
                title: "温馨提示：",
                html: t
            })
        }, n = function(t) {
            var n = jQuery(t).offset();
            n.left = n.left + jQuery(t).width() - e.width(), n.top = n.top + jQuery(t).height(), n.left < 0 && (n.left = 0), n.top < 0 && (n.top = 0), e.css(n)
        }, r = function(t) {
            e.find(".pop-btn-gray").click(function() {
                i()
            }), e.find(".pop-btn-green").click(function() {
                t && t.call(this), i()
            })
        }, i = function() {
            e && e.remove(), e = null
        };
    return function(s, o, u) {
        i(), e = t(o), n(s), r(u), e.show()
    }
}(), qikoo.dialog.changeUsernameWindow = function(e, t, n, herePageUid) {
    e = e || function() {
        window.location.reload()
    }, t = t || function() {
        window.location.reload()
    };
	var herePageUid = jQuery('input[name=pageuid]').val();
    var r = qikoo.dialog.show({
        html: '<form action="home.php?mod=setting&action=changeusername" id="usernameform" method="post"><div class="dialog-content" style="padding: 0 80px; text-align:left"><p style="padding-left: 50px">新用户名：<input type="text" name="newname" style="width:300px"/></p></div><input type="hidden" name="userId" value="'+herePageUid+'" /><div class="dialog-console clearfix_new" style="margin:25px auto;width:252px;"><a class="console-btn-confirm" href="javascript:void(0)" onclick="submitForm();">提交</a><a class="console-btn-cancel" href="#" onclick="return false;">取消</a></div><script>function submitForm(){jQuery("#usernameform").submit();}</script></form>'
		/*'<div class="dialog-content" style="padding: 0 80px; text-align:left"><form action="home.php?mod=spacecp&action=changeUsername" method="post"><p style="padding-left: 50px">新用户名：<input type="text" style="width:300px"/></p></div><input type="hidden" name="userId" value="$_G[\'uid\']" /><div class="dialog-console clearfix_new" style="margin:25px auto;width:252px;"><a class="console-btn-confirm" href="javascript:void(0)" onclick="submitForm();">提交</a><a class="console-btn-cancel" href="#" onclick="return false;">取消</a></form></div>'*/,
        width: 530,
        closeFn: n
    });
    r.find(".console-btn-confirm").click(function() {
        e(), qikoo.dialog.hide()
    }), r.find(".console-btn-cancel").click(function() {
        t(), qikoo.dialog.hide()
    })
};