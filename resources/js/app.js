import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const trashButtons = document.querySelectorAll(".delete_button");

const projectImages = document.querySelectorAll("table img");

trashButtons.forEach((button, index) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        let modal = document.querySelectorAll(".deletionModal")[index];
        modal.classList.add("on");
        let cancelModal = document.querySelectorAll(".cancelDeletion")[index];
        cancelModal.addEventListener("click", (e) => {
            e.preventDefault();
            modal.classList.remove("on");
        })
    }, true);
})

document.body.addEventListener("click", () => {
    let modals = document.querySelectorAll(".deletionModal");
    modals.forEach(modal => {
        modal.classList.remove("on");
    });
    const imageWrapper = document.getElementById("imageWrapper");
    if(imageWrapper) {
        imageWrapper.remove();
    }
}, true)

projectImages.forEach(projectImage => {
    projectImage.addEventListener("click", (e) => {
        const imageWrapper = document.createElement("div");
        imageWrapper.style = "position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: #000000bb;"
        imageWrapper.setAttribute("id", "imageWrapper");
        document.body.append(imageWrapper);
        const imagePreview = document.createElement("img");
        imagePreview.setAttribute("src", e.target.getAttribute("src"));
        imagePreview.setAttribute("alt", e.target.getAttribute("alt"));
        imagePreview.style = "position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 70vw;"
        imageWrapper.append(imagePreview);
    }, true);
})
