
let mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

$('.owl-carousel').owlCarousel({
    margin:10,
    loop:true,
    autoWidth:true,
    items:4
})

document.addEventListener('DOMContentLoaded', function () {
    var currentYear = new Date().getFullYear();
    document.getElementById('currentYear').textContent = currentYear;
});

$(document).ready(function()  {
    $(".pricingCard").hover(function() {
        $(this).addClass("centers");
        $(".orta").removeClass("centers");

    },function() {
        $(this).removeClass("centers");
        $(".orta").addClass("centers");

    });


    $(".plan").click(function() {
        var i = this.childNodes[1];
        $(".plan i").removeClass("onay");
        $(".plan").css("border-color" , "lightgrey");

        $(i).addClass("onay");
        $(this).css("border-color" , "#673de6");
    })

    $(".payment").click(function() {
        var i = this.childNodes[1];
        $(".payment i").removeClass("onay");
        $(".payment").css("border-color" , "lightgrey");

        $(i).addClass("onay");
        $(this).css("border-color" , "#673de6");

    })
})