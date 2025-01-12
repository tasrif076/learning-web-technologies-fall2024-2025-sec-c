
function validateForm() {
    // Get form elements
    var employerName = document.forms["registrationForm"]["employer_name"].value;
    var companyName = document.forms["registrationForm"]["company_name"].value;
    var contactNo = document.forms["registrationForm"]["contact_no"].value;
    var username = document.forms["registrationForm"]["username"].value;
    var password = document.forms["registrationForm"]["password"].value;

    // Check if any field is empty
    if (employerName == "" || companyName == "" || contactNo == "" || username == "" || password == "") {
        alert("All fields must be filled out.");
        return false; 
    }
    return true; 
}
