document.addEventListener('DOMContentLoaded', () => {
    const rows = document.querySelectorAll('tbody tr');

    rows.forEach(row => {
        row.addEventListener('click', () => {
            // Remove highlight from all other rows
            rows.forEach(r => r.style.backgroundColor = "");
            
            // Add a "selected" highlight color to the clicked row
            row.style.backgroundColor = "#90caf9"; 
            
            // Log the ID to the console for testing
            const studentId = row.cells[0].innerText;
            console.log("Viewing record for Student ID: " + studentId);
        });
    });
});