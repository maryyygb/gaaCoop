let toggle_navbar1 = document.querySelector("#toggle-navbar1");
let toggle_navbar2 = document.querySelector("#toggle-navbar2");

let webName = document.getElementById("web-name");
let webTitleDes = document.querySelector(".web-title-des");

let webDesCon = document.getElementsByClassName("web-des-con");

// Side Navbar Full
let sideNavFull = document.querySelector(".sideNavFull");
// Side Navbar Full
let sideNavHalf = document.querySelector(".sideNavHalf");

function toggleSideNav1() {
    let sec1 = document.querySelector(".sec1");
    let sec2 = document.querySelector(".sec2");

    sec1.style.width = "4%";
    sec2.style.width = "96%";

    toggle_navbar1.style.display = "none";
    toggle_navbar2.style.display = "block";
    
    sec1.style.transition = "all .5s ease-in-out";
    sec2.style.transition = "all .5s ease-in-out";

    sideNavFull.style.display = "none";
    sideNavHalf.style.display = "block";

    webName.innerText = ["GA", "AC"];
    webName.style.color = "#f5f5f5";
    webName.style.fontSize = "1.5rem";
    webName.style.textAlign = "center";
    webName.style.margin = "auto";

    // webTitleDes.style.fontSize = ".3rem";
    // webTitleDes.style.marginLeft = "2.5rem";
    // webTitleDes.style.marginTop = ".4rem";
    // webTitleDes.style.width = "4%";
    // webTitleDes.style.textAlign = "center";
    webTitleDes.remove();
}

function toggleSideNav2() {
    let sec1 = document.querySelector(".sec1");
    let sec2 = document.querySelector(".sec2");

    sec1.style.width = "15%";
    sec2.style.width = "85%";

    toggle_navbar1.style.display = "block";
    toggle_navbar2.style.display = "none";

    sec1.style.transition = "all .5s ease-in-out";
    sec2.style.transition = "all .5s ease-in-out";

    sideNavFull.style.display = "block";
    sideNavHalf.style.display = "none";

    webDesCon.appendChild(webTitleDes);
}
