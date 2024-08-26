$(document).ready(function() {
    // Function to update current date and time
    function updateDateTime() {
        var now = moment().format('dddd, MMMM Do YYYY, h:mm:ss a');
        $('#currentDateTime').text(now);
    }

    // Call the function initially
    updateDateTime();

    // Set interval to update every second
    setInterval(updateDateTime, 1000);
});
