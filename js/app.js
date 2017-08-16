var toggleEdito;

jQuery(function () {
    var $ = jQuery;
    toggleEdito = function (e) {
        var left = $(e).css('left');
        if (left === "0px") {
            $(e).addClass('closed');
        } else {
            $(e).removeClass('mobile');
            $(e).removeClass('closed');
        }
    };
    $(document).on('scroll',function (ev) {
        var scrollTop = $(this).scrollTop();
        $edito = $('.edito');
        var fixed = $edito.hasClass('fixed');

        if(scrollTop > 250 && !fixed ){
            $edito.addClass('fixed');

        }else if(scrollTop <= 250 && fixed ){
            $edito.removeClass('fixed');
        }
    });

    $('.btn-next').on('click', function () {
        var $parent = $(this).parent();
        $parent.removeClass('active');
        $parent.next().addClass('active');
    });
    $('.btn-previous').on('click', function () {
        var $parent = $(this).parent();
        $parent.removeClass('active');
        $parent.prev().addClass('active');
    });
    $('.tab-btn-next').click(function () {
        $('.sauvant-nav-tabs > .active').next('li').find('a').trigger('click');
    });

    $('.tab-btn-previous').click(function () {
        $('.sauvant-nav-tabs  > .active').prev('li').find('a').trigger('click');
    });
    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        todayBtn: "linked",
        language: "fr",
        autoclose: true,
        todayHighlight: true
    });
    $('.timepicker').timepicker({
        minuteStep: 15,
        template: 'dropdown',
        appendWidgetTo: 'body',
        showSeconds: false,
        showMeridian: false,
        defaultTime: '11:00',
        explicitMode: true
    });
});
