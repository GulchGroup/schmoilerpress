

function fireNav(){

    if ($(this).hasClass('active')){
        $(".mobile-nav-cell").toggleClass('open');
        $(".nav-mobile").toggleClass('expanded');
    }
    else{
        var navTo = $(this).attr("navTo");
        if (navTo !== null){
            window.location.href = navTo;
        }
    }
}

function emObscure(){
    var e = "support"; // replace with your email username
    var t = "myschedule"; // replace with your email provider
    var n = ".com"; // replace with your email provider TLD
    var r = e + '@' + t + n;
    $('.em-add').html(r); //insert into element
}

$(".mobile-nav-cell").click(fireNav);