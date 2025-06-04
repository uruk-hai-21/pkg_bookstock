document.addEventListener('DOMContentLoaded', function() {
    const quantityElements = document.querySelectorAll('.stock-quantity');
    
    quantityElements.forEach(element => {
        const quantity = parseInt(element.dataset.bookstock);
        
        if(quantity < 5) {
            element.style.color = '#e74c3c';
        } else if(quantity < 10) {
            element.style.color = '#f39c12';
        } else {
            element.style.color = '#27ae60';
        }
    });
});