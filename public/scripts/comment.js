//Formulaire de modification de commentaire
const editButtons = document.querySelectorAll('.editCommentButton');

editButtons.forEach(button => {

    button.addEventListener('click', () => {

        const commentId = button.dataset.commentId;

        const form = document.querySelector(
            `#editComment${commentId}`
        );

        form.style.display = 'flex';

    });

});

const cancelButtons = document.querySelectorAll('.cancelEditButton');

cancelButtons.forEach(button => {

    button.addEventListener('click', () => {

        const commentId = button.dataset.commentId;

        const form = document.querySelector(
            `#editComment${commentId}`
        );

        form.style.display = 'none';
    });

});

//Formulaire de suppression de commentaire
const deleteButtons = document.querySelectorAll('.deleteCommentButton');

deleteButtons.forEach(button => {

    button.addEventListener('click', () => {

        const commentId = button.dataset.commentId;

        const form = document.querySelector(
            `#deleteComment${commentId}`
        );

        form.style.display = 'flex';

    });

});

const cancelDeleteButtons = document.querySelectorAll('.cancelDeleteButton');

cancelDeleteButtons.forEach(button => {

    button.addEventListener('click', () => {

        const commentId = button.dataset.commentId;

        const form = document.querySelector(
            `#deleteComment${commentId}`
        );

        form.style.display = 'none';
    });

});