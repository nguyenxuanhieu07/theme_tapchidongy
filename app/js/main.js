
var home_search = {
    init: function () {
        $("#icon-menu-search").on('click',function(){
            if($('.menu-search').hasClass('active')){
                $('.menu-search').hide();
                $('.menu-search').removeClass('active');
                return;
            }
            $('.menu-search').show();
            $('.menu-search').addClass('active');
        });
        $('.menu-icon-mobile').on('click',function(){
            if($('.menu-background-second #navbarSupportedContent').hasClass('collapse')){
                $('.menu-background-second #navbarSupportedContent').removeClass('collapse');
                $('.menu-background-second #navbar-collapse').show();
                return;
            }
            $('.menu-background-second #navbar-collapse').hide();
            $('.menu-background-second #navbarSupportedContent').addClass('collapse');
        });
    }
}
var google_form = {
    init: function () {
        var send_email = $('.form-register-new');
        var send_question = $('.form-question')
        if (send_email.length > 0 ) {
            send_email.on('submit', function () { 
                var container = $(this);
                google_form.send_contact_to_google(container,'email');
                return false;
            });
        }
        if (send_question.length > 0 ) {
            send_question.on('submit', function () { 
                var container = $(this);
                google_form.send_contact_to_google(container,'question');
                return false;
            });
        }
    },

    send_contact_to_google: function (container,check_form) {
        var email = $(container).find('input[name="email"]').val();
        var data_url = window.location.href;
        var data_url_referer = document.referrer;
        if(check_form === 'email'){
            var url_goole = "https://docs.google.com/forms/u/0/d/e/1FAIpQLSc7UZagyncx6q8vqtcq8Nl13n2vH2T-LGVDGqG9bu6oSpar2Q/formResponse";
            var data = {
                "entry.1544351303": email,
                "entry.745141470": data_url,
                "entry.1998740362": data_url_referer,
            };
        }
        if(check_form === 'question'){
            var fulname = $(container).find('input[name="fulname"]').val();
            var phone = $(container).find('input[name="phone"]').val();
            var note = $(container).find('textarea[name="note"]').val();
            var url_goole = "https://docs.google.com/forms/u/0/d/e/1FAIpQLSenYzYL-UWvmlUzcVZpydi9g6A062H2dluWC30W2u-bSGskMA/formResponse";
            var data = {
                "entry.1291137435": fulname,
                "entry.372383455": phone,
                "entry.1544351303": email,
                "entry.1309417028": note,
                "entry.745141470": data_url,
                "entry.1998740362": data_url_referer,
            };
        }
        if ((check_form !== "")) {
            $.ajax({
                url: url_goole,
                data: data,
                type: "POST",
                dataType: "xml",
                statusCode: {
                    0: function () {
                        $(container).closest('form').find("input[type=text]").val("");
                        $(container).find('button').attr('disabled', 'disabled');
                        alert('Gửi thành công!');
                    },
                    200: function () {
                        $(container).closest('form').find("input[type=text]").val("");
                        $(container).find('button').attr('disabled', 'disabled');
                        alert('Gửi thành công!');
                    }
                }
            });
        } else {
            alert('Kiểm tra lại các thông vừa nhập')
        }
    },
};
jQuery(function($){
    home_search.init();
    google_form.init();
});