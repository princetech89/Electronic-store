function searchProducts() {
    const query = document.getElementById('search-input').value;
    if (query.length < 3) {
        document.getElementById('search-results').style.display = 'none';
        return;
    }

    fetch(`search.php?q=${encodeURIComponent(query)}`)
        .then(response => response.json())
        .then(data => {
            displaySearchResults(data);
        });
}

function displaySearchResults(products) {
    const resultsContainer = document.getElementById('search-results');
    resultsContainer.innerHTML = '';
    if (products.length > 0) {
        products.forEach(product => {
            const resultDiv = document.createElement('div');
            resultDiv.textContent = product.name;
            resultDiv.onclick = () => window.location.href = `product.php?id=${product.id}`;
            resultsContainer.appendChild(resultDiv);
        });
        resultsContainer.style.display = 'block';
    } else {
        resultsContainer.innerHTML = 'No products found';
        resultsContainer.style.display = 'block';
    }
}
