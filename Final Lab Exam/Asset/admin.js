// Create Employer
function createEmployer() {
    const employer_name = document.getElementById('employerName').value;
    const company_name = document.getElementById('companyName').value;
    const contact_no = document.getElementById('contactNo').value;
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    const xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../Controller/employer_crud.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send(`action=create&employer_name=${employer_name}&company_name=${company_name}&contact_no=${contact_no}&username=${username}&password=${password}`);
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            alert(this.responseText);
        }
    };
}

// Search Employer by ID
function searchEmployer() {
    const id = document.getElementById('searchID').value;

    if (!id) {
        document.getElementById('searchResult').innerHTML = "Please enter a valid ID.";
        return;
    }

    const xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../Controller/employer_crud.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send(`action=search&id=${id}`);
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById('searchResult').innerHTML = this.responseText;
        }
    };
}

// Read Employers
function readEmployers() {
    const xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../Controller/employer_crud.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('action=read');
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById('readResult').innerHTML = this.responseText;
        }
    };
}

// Update Employer
function updateEmployer() {
    const id = document.getElementById('updateId').value;
    const employer_name = document.getElementById('updateEmployerName').value;
    const company_name = document.getElementById('updateCompanyName').value;
    const contact_no = document.getElementById('updateContactNo').value;
    const username = document.getElementById('updateUsername').value;
    const password = document.getElementById('updatePassword').value;

    const xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../Controller/employer_crud.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send(`action=update&id=${id}&employer_name=${employer_name}&company_name=${company_name}&contact_no=${contact_no}&username=${username}&password=${password}`);
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            alert(this.responseText);
        }
    };
}

// Delete Employer
function deleteEmployer() {
    const id = document.getElementById('deleteId').value;

    const xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../Controller/employer_crud.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send(`action=delete&id=${id}`);
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            alert(this.responseText);
        }
    };
}
