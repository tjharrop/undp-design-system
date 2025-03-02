import ModalTrapFocus from "../classes/ModalTrapFocus";

const init = function () {
    const modals = $('.modal-nav-hover, .menu-modal, .modal-sdgs, .modal-publication-download');

    modals.each((i, modal) => {
        let modalTrapFocus = new ModalTrapFocus(modal)
        modalTrapFocus.init();
    })
}

export default init
