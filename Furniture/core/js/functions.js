document.addEventListener("DOMContentLoaded", function(){
    (function MoveNavMenu() {
        addEventListener("scroll", function() {
            const Menu = document.querySelector("#Menu");

            if(document.documentElement.scrollTop > 40) {
                Menu.classList.add("Fixed");
            }
            else if(document.documentElement.scrollTop < 40) {
                Menu.classList.remove("Fixed");
            }
        })
    })();

    (function MobileMenu() {
        const Mobile = document.querySelector("#MobileMenu");
        const Menu = document.querySelector("#Menu");

        if(Mobile != null || Mobile != undefined) {
            Mobile.addEventListener("click", function() {
                if(!Mobile.classList.contains("Open")) {
                    Mobile.classList.add("Open");
                    Menu.classList.add("PullOut");
                }
                else {
                    Mobile.classList.remove("Open");
                    Menu.classList.remove("PullOut");
                }
            })
        }
    })();

    (function DisableTitle() {
        document.addEventListener("mouseover", function(e) {
            if(e.target.tagName == "A") {
                e.target.title = "";
            }
        })
    })();

    (function TiltImg() {
        const Imgs = document.querySelectorAll(".GalleryImg");

        for(var i = 0; i < Imgs.length; i++) {
            Imgs[i].addEventListener("mouseenter", function(){
                const TiltImg = this;
                const Rect = this.querySelector("rect");

                this.addEventListener("mousemove", function(event){
                    const Rotate = {
                        x: -((TiltImg.getBoundingClientRect().width / 2) - event.offsetX)  * 30 / window.innerWidth,
                        y: ((TiltImg.getBoundingClientRect().height / 2) - event.offsetY) * 30 / window.innerHeight
                    }
                    TiltImg.style.webkitTransform = "rotateX("+ Rotate.y +"deg) rotateY("+ Rotate.x +"deg)";
                    TiltImg.style.msTransform = "rotateX("+ Rotate.y +"deg) rotateY("+ Rotate.x +"deg)";
                })
            })
            Imgs[i].addEventListener("mouseleave", function(){
                const TiltImg = this;
                setTimeout(function(){
                    TiltImg.style.transform = "rotateX(0deg) rotateY(0deg)";
                }, 300);
            })
        }
    })();

    (function ReloadReference() {
        const Buttons = document.querySelectorAll(".ReloadRef");

        for(var i = 0; i < Buttons.length; i++) {
            Buttons[i].addEventListener("click", function(e) {
                const ReferNumber = document.getElementById("ReferNumber");

                const xhr = new XMLHttpRequest();

                xhr.open("POST", "core/php/actions/reloadReferences.php");
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function() {
                    if(xhr.status == 200) {
                        document.getElementsByClassName("Review")[0].innerHTML = this.responseText;
                    }
                }
                xhr.send(encodeURI('id=' + ReferNumber.value));
            })
        }
    })();

    (function GenerateImgs() {
        const Buttons = document.querySelectorAll(".SubCategory");
        const Gallery = document.getElementById("Gallery");
        const GalleryGrid = document.getElementById("GalleryGrid");
        let CloneContainer = "";

        for(let i = 0; i < Buttons.length; i++) {
            Buttons[i].addEventListener("click", function() {
                document.getElementById("GallerySelect").style.display = "none";
                GalleryGrid.style.display = "grid";

                const xhr = new XMLHttpRequest();

                xhr.open('GET', 'actions/generateImgs.php?ImgCategory=Foil');

                xhr.onload = function() {
                    if (xhr.status === 200) {
                        const Data = JSON.parse(xhr.responseText);

                        const ImgContainer = document.createElement("div");
                        ImgContainer.setAttribute("class", "ImgContainer");
                        const Img = document.createElement("div");
                        Img.setAttribute("class", "Img");

                        for(let i = 0; i < Data.length; i++) {
                            CloneContainer = ImgContainer.cloneNode(true);
                            CloneImg = Img.cloneNode(true);
                            CloneImg.style.backgroundImage = "url('../img/Gallery/"+Data[i]['Category']+"/"+Data[i]["Url"]+"')";

                            GalleryGrid.appendChild(CloneContainer);
                            CloneContainer.appendChild(CloneImg)
                        }
                    }
                };
                xhr.send();
            })
        }
    })();

    //console.log(window.location.pathname);

    (function CreateSubCategory() {
        const Button = document.querySelectorAll(".CategoryMenu");
        const Categories = document.querySelectorAll(".SubCategory");

        for(let i = 0; i < Button.length; i++) {
            Button[i].addEventListener("click", function(){
                const Category = this.textContent.trim();
                const Titles = document.querySelectorAll(".SubTitle p");
                document.getElementById("GalleryTitle").children[0].textContent = Category;

                switch(Category) {
                    case "KUCHYNĚ":
                        for(let x = 0; x < Categories.length; x++) {
                            Categories[x].classList.add("KitchenCategory");
                            Categories[x].classList.remove("InteriorCategory");
                        }
                        Categories[0].setAttribute("data-category", "Lamine");
                        Categories[1].setAttribute("data-category", "Foil");

                        document.querySelectorAll(".SubCategory:last-child")[0].style.display = "none";

                        Titles[0].textContent = "LAMINO DVÍŘKA";
                        Titles[1].textContent = "FÓLIOVÁ DVÍŘKA";
                        break;
                    case "INTERIOVÝ NÁBYTEK":
                        for(let x = 0; x < Categories.length; x++) {
                            Categories[x].classList.remove("KitchenCategory");
                            Categories[x].classList.add("InteriorCategory");
                        }
                        Categories[0].setAttribute("data-category", "Kids");
                        Categories[1].setAttribute("data-category", "Bedroom");
                        Categories[2].setAttribute("data-category", "Other");

                        document.querySelectorAll(".SubCategory:last-child")[0].style.display = "inherit";

                        Titles[0].textContent = "DĚTSKÉ POKOJE";
                        Titles[1].textContent = "LOŽNICE";
                        Titles[2].textContent = "OSTATNÍ";
                        break;
                }
            })
        }
    })();

    (function ZoomImg() {
        const Imgs = document.querySelectorAll(".Img");

        for(let i = 0; i < Imgs.length; i++) {
            Imgs[i].addEventListener("click", function() {
                
            })
        }
    })()
});
