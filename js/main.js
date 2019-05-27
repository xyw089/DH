function closeNav(){
    document.getElementById("mobile-nav").style.display = "none";
}
function openNav(){
    document.getElementById("mobile-nav").style.display = "flex";
}
function viewMore(){
    document.getElementById("galleri").style.display = "flex";
    document.getElementById("view-more").style.display = "none";
    document.getElementById("view-less").style.display = "block";
}
function viewLess(){
    document.getElementById("galleri").style.display = "none";
    document.getElementById("view-more").style.display = "block";
    document.getElementById("view-less").style.display = "none";
}