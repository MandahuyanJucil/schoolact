
    // Handle click on category links
    document.querySelectorAll('.navbar a').forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const targetId = link.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Handle search form submission
    const searchForm = document.getElementById('search-form');
    searchForm.addEventListener('submit', (event) => {
        event.preventDefault();
    const searchInput = document.getElementById('search-input');
    const searchTerm = searchInput.value.trim().toLowerCase();
    // Perform search logic here
    console.log('Search term:', searchTerm);
    searchInput.value = ''; // Clear the search input
    });

    function redirectToPage() {
        // Get the selected option value
        const selectElement = document.getElementById("mySelect");
        const selectedPage = selectElement.value;

        // Redirect the user to the selected page
        window.location.href = selectedPage;
    }

