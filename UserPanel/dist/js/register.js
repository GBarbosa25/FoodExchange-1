$(document).ready(function() {
    $('#full_name').attr("placeholder", "Enter Restaurant/Company Name");
    $('#file_div').hide();
    // alert('yes')
    $('#role').on('change', function(e) {
        // console.log(e)
        var role_name = e.target.value;
        // console.log(role_name);
        if (role_name == 'restaurant/company') {
            $('#file_div').hide();
            $('#full_name').attr("placeholder", "Enter Restaurant/Company Name");
            $('#manager_name_div').show();
            $('#site_link_div').show();
        } else {
            $('#full_name').attr("placeholder", "Enter Username");
            $('#file_div').show();
            $('#manager_name_div').hide();
            $('#site_link_div').hide();
        }

    });
})