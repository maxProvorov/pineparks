document.addEventListener('DOMContentLoaded', function () {
    const accordionItems = document.querySelectorAll('.accordion__title');

    accordionItems.forEach(item => {
        item.addEventListener('click', function () {
            const content = this.nextElementSibling;
            const parentItem = this.parentElement;
            const icon = this.querySelector('.accordion__icon');

            if (content.style.display === 'block') {
                content.style.display = 'none';
                icon.textContent = '+';
                parentItem.classList.remove('accordion__item--active');
            } else {
                content.style.display = 'block';
                icon.textContent = '-';
                parentItem.classList.add('accordion__item--active');
            }
        });
    });
});
