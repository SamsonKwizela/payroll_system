document.addEventListener("DOMContentLoaded", function() {
    fetchEmployees();
});

function fetchEmployees() {
    fetch('fetch_employees.php')
        .then(response => response.json())
        .then(data => {
            const employeeList = document.getElementById('employeeList');
            employeeList.innerHTML = '';
            data.forEach(employee => {
                employeeList.innerHTML += `<p>${employee.name} - ${employee.position} - $${employee.salary} - Hired on: ${employee.date_hired}</p>`;
            });
        })
        .catch(error => console.error('Error fetching employee data:', error));
}
