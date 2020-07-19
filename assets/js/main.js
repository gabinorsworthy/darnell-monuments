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