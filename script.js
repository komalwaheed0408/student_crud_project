document.addEventListener('DOMContentLoaded', () => {
    // 1. Confirmation for Delete form
    const deleteForm = document.querySelector('form[action="delete.php"]');
    if (deleteForm) {
        deleteForm.addEventListener('submit', (e) => {
            const studentId = deleteForm.querySelector('input[name="id"]').value;
            const confirmDelete = confirm(`Are you sure you want to delete Student ID: ${studentId}?`);
            
            if (!confirmDelete) {
                e.preventDefault(); // Stop the form from submitting
            }
        });
    }

    // 2. Simple Card Animation: Lift on hover
    const cards = document.querySelectorAll('.child-div');
    cards.forEach(card => {
        card.style.transition = "transform 0.3s ease, box-shadow 0.3s ease";
        
        card.addEventListener('mouseenter', () => {
            card.style.transform = "translateY(-5px)";
            card.style.boxShadow = "0 10px 20px rgba(0,0,0,0.2)";
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = "translateY(0)";
            card.style.boxShadow = "0 6px 12px rgba(0, 0, 0, 0.15)";
        });
    });
});