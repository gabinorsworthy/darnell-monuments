document.getElementsByClassName("menu-link")[0].addEventListener("click", myFunction);

function myFunction() {
    navList = document.getElementsByClassName("header-list")[0];

    if (navList.classList.contains("change")){
        navList.classList.remove("change");
    }
    else {
        navList.classList.add("change");
    }
}

$(".return-btn").click(function() {
    $('html, body').animate({
        scrollTop: $("#jump-to").offset().top
    }, 2000);
});

$(".jump-btn").click(function() {
    var btnHTML = $(this).html();
    var htmlLower = btnHTML.toLowerCase();
    var htmlWords = htmlLower.split(" ");
    console.log(htmlWords);
    var productID = "#"

    for (i = 0; i < htmlWords.length - 1; i++) {
        productID += htmlWords[i] + "-";
    }
    productID += htmlWords[htmlWords.length - 1];

    $('html, body').animate({
        scrollTop: $(productID).offset().top
    }, 2000);
    
});