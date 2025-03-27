const cardImages = [
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom2.jpg'') }}",
    "{{ asset('jsimages/luxRoom2.jpg'') }}",
    "{{ asset('jsimages/luxRoom2.jpg'') }}",
    "{{ asset('jsimages/luxRoom2.jpg'') }}",
    "{{ asset('jsimages/luxRoom2.jpg'') }}",
    "{{ asset('jsimages/luxRoom2.jpg'') }}",
    "{{ asset('jsimages/luxRoom3.jpg'') }}",
    "{{ asset('jsimages/luxRoom3.jpg'') }}",
    "{{ asset('jsimages/luxRoom3.jpg'') }}",
    "{{ asset('jsimages/luxRoom3.jpg'') }}",
    "{{ asset('jsimages/luxRoom3.jpg'') }}",
    "{{ asset('jsimages/luxRoom3.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom2.jpg'') }}",
    "{{ asset('jsimages/luxRoom2.jpg'') }}",
    "{{ asset('jsimages/luxRoom2.jpg'') }}",
    "{{ asset('jsimages/luxRoom2.jpg'') }}",
    "{{ asset('jsimages/luxRoom2.jpg'') }}",
    "{{ asset('jsimages/luxRoom2.jpg'') }}",
    "{{ asset('jsimages/luxRoom3.jpg'') }}",
    "{{ asset('jsimages/luxRoom3.jpg'') }}",
    "{{ asset('jsimages/luxRoom3.jpg'') }}",
    "{{ asset('jsimages/luxRoom3.jpg'') }}",
    "{{ asset('jsimages/luxRoom3.jpg'') }}",
    "{{ asset('jsimages/luxRoom3.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom2.jpg'') }}",
    "{{ asset('jsimages/luxRoom2.jpg'') }}",
    "{{ asset('jsimages/luxRoom2.jpg'') }}",
    "{{ asset('jsimages/luxRoom2.jpg'') }}",
    "{{ asset('jsimages/luxRoom2.jpg'') }}",
    "{{ asset('jsimages/luxRoom2.jpg'') }}",
    "{{ asset('jsimages/luxRoom3.jpg'') }}",
    "{{ asset('jsimages/luxRoom3.jpg'') }}",
    "{{ asset('jsimages/luxRoom3.jpg'') }}",
    "{{ asset('jsimages/luxRoom3.jpg'') }}",
    "{{ asset('jsimages/luxRoom3.jpg'') }}",
    "{{ asset('jsimages/luxRoom3.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}",
    "{{ asset('jsimages/luxRoom.jpg'') }}"
];
let currentPage = 1;
const totalPages = 10;

function updateCards(page) {
    const startIndex = (page - 1) * 6;
    const cards = document.querySelectorAll('.roomCard');

    for (let i = 0; i < 6; i++) {
        if (cards[i]) {
            cards[i].querySelector('img.roomCard__image').src = cardImages[startIndex + i] || '';
        }
    }
}

function updatePagination(page) {
    const paginationContainer = document.querySelector('.roomsPagination');
    const pages = paginationContainer.querySelectorAll('.roomsPagination-number');

    pages.forEach((pageElement) => pageElement.remove());

    const numbers = [];

    if (page <= 3) {
        for (let i = 1; i <= 3; i++) {
            numbers.push(i);
        }
        if (totalPages > 3) {
            numbers.push('...');
            numbers.push(totalPages);
        }
    } else if (page > 3 && page <= totalPages - 3) {
        numbers.push(1);
        numbers.push('...');
        numbers.push(page);
        numbers.push('...');
        numbers.push(totalPages);
    } else {
        numbers.push(1);
        numbers.push('...');
        for (let i = totalPages - 2; i <= totalPages; i++) {
            numbers.push(i);
        }
    }

    numbers.forEach((num) => {
        const pageElement = document.createElement('h2');
        pageElement.classList.add('roomsPagination__button', 'roomsPagination-number');
        if (num === '...') {
            pageElement.innerText = '...';
        } else {
            pageElement.innerText = num;
            if (num === page) {
                pageElement.classList.add('active');
            }
            pageElement.addEventListener('click', () => {
                currentPage = num;
                updateCards(currentPage);
                updatePagination(currentPage);
            });
        }
        paginationContainer.insertBefore(pageElement, document.getElementById('iconNext'));
    });

    document.getElementById('iconBack').classList.toggle('disabled', page === 1);
    document.getElementById('iconNext').classList.toggle('disabled', page === totalPages);
}

document.getElementById('iconBack').addEventListener('click', () => {
    if (currentPage > 1) {
        currentPage--;
        updateCards(currentPage);
        updatePagination(currentPage);
    }
});

document.getElementById('iconNext').addEventListener('click', () => {
    if (currentPage < totalPages) {
        currentPage++;
        updateCards(currentPage);
        updatePagination(currentPage);
    }
});

// Inicializar la primera página
updateCards(currentPage);
updatePagination(currentPage);
