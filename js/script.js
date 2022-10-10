function showSideNavbar() {
    document.getElementById("left-navbar").classList.add("navbar--show");
    document.getElementById("a2z-modal-background").style.display = "block";
}

function closeSideNavbar() {
    document.getElementById("left-navbar").classList.remove("navbar--show");
    document.getElementById("a2z-modal-background").style.display = "none";
}