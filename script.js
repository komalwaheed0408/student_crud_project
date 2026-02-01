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


document.addEventListener('DOMContentLoaded', () => {

    // 1. Confirmation for DELETE form
    const deleteForm = document.querySelector('form[action="delete.php"]');
    if (deleteForm) {
        deleteForm.addEventListener('submit', (e) => {
            const studentId = deleteForm.querySelector('input[name="id"]').value;
            // Basic Validation: check if ID is entered
            if (!studentId) {
                alert("Please enter a Student ID to delete.");
                e.preventDefault();
                return;
            }
            const confirmDelete = confirm(`WARNING: Are you sure you want to delete Student ID: ${studentId}?`);
            if (!confirmDelete) {
                e.preventDefault();
            }
        });
    }

    // 2. Confirmation for UPDATE form
    const updateForm = document.querySelector('form[action="update.php"]');
    if (updateForm) {
        updateForm.addEventListener('submit', (e) => {
            const studentId = updateForm.querySelector('input[name="id"]').value;
            // Basic Validation: check if ID is entered
            if (!studentId) {
                alert("Please enter a Student ID to update.");
                e.preventDefault();
                return;
            }
            const confirmUpdate = confirm(`Are you sure you want to update information for Student ID: ${studentId}?`);
            if (!confirmUpdate) {
                e.preventDefault();
            }
        });
    }

    // 3. Confirmation and Basic Validation for INSERT form
    const insertForm = document.querySelector('form[action="insert.php"]');
    if (insertForm) {
        insertForm.addEventListener('submit', (e) => {
            const name = insertForm.querySelector('input[name="name"]').value;
            const email = insertForm.querySelector('input[name="email"]').value;

            // Basic Validation: Ensure name is not too short
            if (name.length < 2) {
                alert("Please enter a valid name (at least 2 characters).");
                e.preventDefault();
                return;
            }

            // Basic Validation: Ensure email contains @
            if (!email.includes("@")) {
                alert("Please enter a valid email address.");
                e.preventDefault();
                return;
            }

            const confirmInsert = confirm(`Are you sure you want to add "${name}" to the records?`);
            if (!confirmInsert) {
                e.preventDefault();
            }
        });
    }

    // 4. Hover animation for cards (Optional but looks nice)
    const cards = document.querySelectorAll('.child-div');
    cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = "scale(1.02)";
            card.style.transition = "transform 0.2s ease";
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = "scale(1)";
        });
    });
});