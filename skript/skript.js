
function openCloseNav() {
    var list = document.getElementById("menu-items");

    if (list.style.display == "none" ){
        list.style.display = "block";
        /*document.getElementById("first-section").style.paddingTop = "300px";*/

    }else{
        list.style.display = "none";
        /*document.getElementById("first-section").style.paddingTop = "0px";*/
    }
}
/*
(function() {
    window.addEventListener('resize', function(event) {
        const width = window.innerWidth;
        var list = document.getElementById("menu-items");
        if (width > 780){
            list.style.display = "block"
            document.getElementById("first-section").style.paddingTop = "0px";
        }
        if (width < 780){
            document.getElementById("first-section").style.paddingTop = "300px";
        }
    });
})();*/
