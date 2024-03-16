
    // Get the checkbox element
    var checkbox = document.getElementById('accessCheckbox');

    // Add event listener for the change event
    checkbox.addEventListener('change', function() {
        // If checkbox is checked, set the value to 1, otherwise set it to 0
        var value = this.checked ? 1 : 0;
        
        // Set the value to the hidden input field
        document.getElementById('access').value = value;
    });
