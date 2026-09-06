const editButtons = document.querySelectorAll('.editCommentButton');
console.log(editButtons);
editButtons.forEach(button => {

    button.addEventListener('click', () => {

        const commentId = button.dataset.commentId;

        const form = document.querySelector(
            `#editComment${commentId}`
        );

        form.style.display = 'block';

        button.style.display = 'none';
    });

});