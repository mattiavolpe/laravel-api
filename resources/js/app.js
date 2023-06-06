import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const trashButtons = document.querySelectorAll(".delete_button");

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
}, true)
