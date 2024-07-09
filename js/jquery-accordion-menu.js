
    $(document).ready(function () {
        // jQuery 플러그인을 사용하여 아코디언 메뉴 초기화
        $("#jquery-accordion-menu").jqueryAccordionMenu();

        // demo-list의 li 요소를 클릭했을 때 active 클래스 토글
        $("#demo-list li").click(function(){
            $("#demo-list li.active").removeClass("active");
            $(this).addClass("active");
        });

        // cate_layer 숨기기
        $("header .inner .cate_layer").hide();

        // btn-menu 버튼 클릭 시 동작
        $("header .inner .btn-menu").on('click', function() {
            var cateLayer = $("header .inner .cate_layer");

            // demo-list 초기화
            $("#demo-list li.active").removeClass("active");

            // 아코디언 메뉴 상태 초기화
            $("#jquery-accordion-menu ul li").each(function() {
                var submenu = $(this).children(".submenu");
                if (submenu.length > 0 && submenu.is(":visible")) {
                    submenu.slideUp();
                    $(this).children("a").removeClass("submenu-indicator-minus");
                }
            });

            // .big_h 클래스가 있는 요소는 펼쳐진 상태로 유지
            $("#jquery-accordion-menu ul li .big_h").each(function() {
                var submenu = $(this).next(".submenu");
                if (submenu.length > 0 && submenu.is(":hidden")) {
                    submenu.slideDown();
                    $(this).addClass("submenu-indicator-minus");
                }
            });

            // cate_layer 토글
            if (cateLayer.is(":visible")) {
                cateLayer.fadeOut("fast", function() {
                    $(this).hide(); // 완전히 숨기기
                });
                $(this).removeClass("active");
            } else {
                cateLayer.fadeIn("slow");
                $(this).addClass("active");
            }

            // 이벤트 전파 방지
            return false;
        });
    });

    // jQuery 플러그인 정의
    (function($, window, document, undefined) {
        var pluginName = "jqueryAccordionMenu";
        var defaults = {
            speed: 300,
            showDelay: 0,
            hideDelay: 0,
            singleOpen: true,
            clickEffect: true
        };

        function Plugin(element, options) {
            this.element = element;
            this.settings = $.extend({}, defaults, options);
            this._defaults = defaults;
            this._name = pluginName;
            this.init();
        }

        $.extend(Plugin.prototype, {
            init: function() {
                this.openSubmenu();
                this.submenuIndicators();
                if (this.settings.clickEffect) {
                    this.addClickEffect();
                }
                this.openDefaultSubmenus();
            },
            openSubmenu: function() {
                var that = this;
                $(this.element).children("ul").find("li").on("click", function(e) {
                    var submenu = $(this).children(".submenu");
                    if (submenu.length > 0) {
                        e.stopPropagation();
                        e.preventDefault();
                        if (submenu.is(":hidden")) {
                            submenu.delay(that.settings.showDelay).slideDown(that.settings.speed);
                            $(this).children("a").addClass("submenu-indicator-minus");
                            if (that.settings.singleOpen) {
                                $(this).siblings().children(".submenu").slideUp(that.settings.speed);
                                $(this).siblings().children("a").removeClass("submenu-indicator-minus");
                            }
                        } else {
                            submenu.delay(that.settings.hideDelay).slideUp(that.settings.speed);
                            $(this).children("a").removeClass("submenu-indicator-minus");
                        }
                        return false;
                    }
                    // 서브 메뉴가 없는 경우, 기본 링크 동작을 허용
                    else {
                        return true;
                    }
                });
            },
            submenuIndicators: function() {
                var that = this;
                $(this.element).find(".submenu").siblings("a").each(function() {
                    $(this).append("<span class='submenu-indicator'>+</span>");
                });
            },
            addClickEffect: function() {
                var that = this;
                $(this.element).find("a").on("click", function(e) {
                    var ink = $(this).find(".ink");
                    $(".ink").remove();
                    if (ink.length === 0) {
                        $(this).prepend("<span class='ink'></span>");
                    }
                    ink = $(this).find(".ink");
                    ink.removeClass("animate-ink");
                    if (!ink.height() && !ink.width()) {
                        var d = Math.max($(this).outerWidth(), $(this).outerHeight());
                        ink.css({
                            height: d,
                            width: d
                        });
                    }
                    var x = e.pageX - $(this).offset().left - ink.width() / 2;
                    var y = e.pageY - $(this).offset().top - ink.height() / 2;
                    ink.css({
                        top: y + 'px',
                        left: x + 'px'
                    }).addClass("animate-ink");
                });
            },
            openDefaultSubmenus: function() {
                var that = this;
                $(this.element).find(".big_h").each(function() {
                    var submenu = $(this).next(".submenu");
                    if (submenu.length > 0) {
                        submenu.show();
                        $(this).addClass("submenu-indicator-minus");
                    }
                });
            }
        });

        $.fn[pluginName] = function(options) {
            return this.each(function() {
                if (!$.data(this, "plugin_" + pluginName)) {
                    $.data(this, "plugin_" + pluginName, new Plugin(this, options));
                }
            });
        };
    })(jQuery, window, document);
