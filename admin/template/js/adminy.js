

(function(factory) {
    if (typeof define === 'function' && define.amd) {
// AMD
        define(['jquery'], factory);
    } else if (typeof exports === 'object') {
// CommonJS
        factory(require('jquery'));
    } else {
// Browser globals
        factory(jQuery);
    }
}(function($) {
    var pluses = /\+/g;
    function encode(s) {
        return config.raw ? s : encodeURIComponent(s);
    }
    function decode(s) {
        return config.raw ? s : decodeURIComponent(s);
    }
    function stringifyCookieValue(value) {
        return encode(config.json ? JSON.stringify(value) : String(value));
    }
    function parseCookieValue(s) {
        if (s.indexOf('"') === 0) {
// This is a quoted cookie as according to RFC2068, unescape...
            s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
        }
        try {
// Replace server-side written pluses with spaces.
// If we can't decode the cookie, ignore it, it's unusable.
// If we can't parse the cookie, ignore it, it's unusable.
            s = decodeURIComponent(s.replace(pluses, ' '));
            return config.json ? JSON.parse(s) : s;
        } catch (e) {
        }
    }
    function read(s, converter) {
        var value = config.raw ? s : parseCookieValue(s);
        return $.isFunction(converter) ? converter(value) : value;
    }
    var config = $.cookie = function(key, value, options) {
// Write
        if (arguments.length > 1 && !$.isFunction(value)) {
            options = $.extend({}, config.defaults, options);
            if (typeof options.expires === 'number') {
                var days = options.expires, t = options.expires = new Date();
                t.setTime(+t + days * 864e+5);
            }
            return (document.cookie = [
                encode(key), '=', stringifyCookieValue(value),
                options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
                options.path ? '; path=' + options.path : '',
                options.domain ? '; domain=' + options.domain : '',
                options.secure ? '; secure' : ''
            ].join(''));
        }
// Read
        var result = key ? undefined : {};
// To prevent the for loop in the first place assign an empty array
// in case there are no cookies at all. Also prevents odd result when
// calling $.cookie().
        var cookies = document.cookie ? document.cookie.split('; ') : [];
        for (var i = 0, l = cookies.length; i < l; i++) {
            var parts = cookies[i].split('=');
            var name = decode(parts.shift());
            var cookie = parts.join('=');
            if (key && key === name) {
// If second argument (value) is a function it's a converter...
                result = read(cookie, value);
                break;
            }
// Prevent storing a cookie that we couldn't decode.
            if (!key && (cookie = read(cookie)) !== undefined) {
                result[name] = cookie;
            }
        }
        return result;
    };
    config.defaults = {};
    $.removeCookie = function(key, options) {
        if ($.cookie(key) === undefined) {
            return false;
        }
// Must not alter options, thus extending a fresh object...
        $.cookie(key, '', $.extend({}, options, {expires: -1}));
        return !$.cookie(key);
    };
}));
$(document).ready(function() {

//    $("header").append("<div class='col-lg-4 col-md-5 col-sm-7 col-xs-12 pull-right title'><span class='glyphicon glyphicon-cog title_icon'></span><h1 class='h3 visible-lg-inline-block visible-md-inline-block visible-sm-inline-block visible-xs-inline-block title_text'>لوحة تحكم ادمني العربيه</h1>\n\
//</div><div class='col-lg-2 col-md-3 col-sm-5 col-xs-12 text-center'><div class='dropdown  dropdown_nav'>\n\
//<button class='btn btn-default dropdown-toggle' type='button' id='dropdownMenu1' data-toggle='dropdown'>\n\
//<span class='glyphicon glyphicon-user user_icon'></span>Hosam Zewain<span class='caret'></span></button>\n\
//<ul class='dropdown-menu' role='menu' aria-labelledby='dropdownMenu1'>\n\
//<li role='presentation'><a role='menuitem' tabindex='-1' href='#'>معلومات الحساب</a></li>\n\
//<li role='presentation'><a role='menuitem' tabindex='-1' href='#'>الرسائل الخاصة</a></li>\n\
//<li role='presentation' class='divider'></li><li role='presentation' class='divider'></li>\n\
//Theme Style :<li role='presentation'><a role='menuitem' tabindex='-1' href='#' class='light'>light</a><a role='menuitem' tabindex='-1' href='#' class='dark'>dark</a></li>\n\
//<li role='presentation' class='divider'></li><li role='presentation' class='divider'></li>\n\
//<li role='presentation'><a role='menuitem' tabindex='-1' href='#'>تسجيل خروج</a></li></ul>\n\
//</div></div>");
    $(".last-foot").append("<p class='english'>الموقع من تصميم وبرمجة و تطوير مجموعة ثري ايه الدولية<a href='#'></a>    -   By : <a href='#'>3a Group </a> </p> ");

    if ($.cookie("href") == undefined) {
        x = "./template/css/light_style.css";
        $("#css").attr("href", x);
    } else {
        x = $.cookie("href");
        $("#css").attr("href", x);

    }
    $(".dark").click(function() {
        x = "./template/css/dark_style.css";
        $("#css").attr("href", x);
        $.cookie("href", x);
    });
    $(".light").click(function() {
        x = "./template/css/light_style.css";
        $("#css").attr("href", x);
        $.cookie("href", x);
    });
});