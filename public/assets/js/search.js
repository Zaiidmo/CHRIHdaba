document.addEventListener("DOMContentLoaded", function() {
    const categoryFilter = document.getElementById('categoryFilter');
    const searchInput = document.getElementById('searchInput');
    
    // Écouteurs d'événements pour les changements dans la sélection de catégorie et dans le champ de recherche
    categoryFilter.addEventListener('change', filterProducts);
    searchInput.addEventListener('input', filterProducts);
    
    // Fonction de filtrage des produits
    function filterProducts() {
        const categoryId = categoryFilter.value.toLowerCase();
        const searchTerm = searchInput.value.toLowerCase();
        
        const products = document.querySelectorAll('.relative.w-full');
        
        products.forEach(product => {
            const productName = product.querySelector('.text-gray-900').textContent.toLowerCase();
            const productCategory = product.querySelector('p').textContent.toLowerCase();
            
            const categoryMatch = categoryId === '' || productCategory.includes(categoryId);
            const searchMatch = productName.includes(searchTerm);
            
            if (categoryMatch && searchMatch) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    }
});
