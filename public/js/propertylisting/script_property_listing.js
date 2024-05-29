$('#add_manager_btn').click(function () {
    $('#add-manager-popup').show();
});
$('#edit_btn').click(function () {
    $('#edit-manager-popup').show();
});
function formatDate(dateString) {
    const months = [
        "Jan", "Feb", "Mar", "Apr", "May", "Jun",
        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ];

    const date = new Date(dateString);
    const day = date.getDate().toString().padStart(2, '0');
    const month = months[date.getMonth()];
    const year = date.getFullYear();

    return `${day} ${month} ${year}`;
}


function loadpropertyList() {
    let url = '/admin/property/loadpropertyList';
    let type = 'GET';
    SendAjaxRequestToServer(type, url, '', '', loadManagerListResponse, '', '');
}


function loadManagerListResponse(response) {

    var propertyListingTable = $('#property_table_body');
    propertyListingTable.empty();
    response.responseData;
    var properties = response.responseData;
    // var inactive_managers = response.managers_list.inactive_managers;
    // var active_managers = response.managers_list.active_managers;
    // var totalManagers = managers.length;
    // $('#total_managers').text(totalManagers);
    // $('#inactive_managers').text(inactive_managers);
    // $('#active_managers').text(active_managers);
    $.each(properties, function (index, property) {

        console.log(property)
        var propertyRow = `<tr>
                                <td class="nowrap">${index + 1}</td>
                                <td>${property.pInfo_fName}</td>
                                <td>${property.pInfo_email}</td>
                                <td class="nowrap" >${property.pInfo_phoneNumber ? property.pInfo_phoneNumber : ''}</td>
                                <td class="nowrap">${formatDate(property.created_at)}</td>
                                <td data-center>
                                    <div class="switch" >
                                        <input type="checkbox" onclick="changestatus(${property.status},${property.status})" name="status" id="status" ${property.status == '1' ? 'checked' : ''}>
                                        <em></em>
                                    </div>
                                </td>
                                <td data-center>
                                    <div class="switch" >
                                        <input type="checkbox" onclick="changestatusPending(${property.hold},${property.hold})" name="status" id="status" ${property.hold == '1' ? 'checked' : ''}>
                                        <em></em>
                                    </div>
                                </td>
                               
                                <td class="nowrap" data-center>
                                    <div class="act_btn">
                                        <button type="button" class="edit pop_btn edit_btn"title="Edit"  data-popup="edit-data-popup" data-id = "${property.id}"></button>
                                        <button type="button" class="del pop_btn delete_btn" title="Delete" data-id = "${property.id}" data-popup="delete-data-popup"></button>
                                    </div>
                                </td>
                            </tr>`;
        propertyListingTable.append(propertyRow);


    });


}

$('#add_manager_form').submit(function (e) {
    e.preventDefault();

    let form = document.getElementById('add_manager_form');
    let data = new FormData(form);
    let type = 'POST';
    let url = '/admin/addManager';
    SendAjaxRequestToServer(type, url, data, '', addManagerResponse, '', 'savemanagerbtn');


});

function addManagerResponse(response) {
    if (response.status == 200) {
        toastr.success(response.message, '', {
            timeOut: 3000
        });

        let form = $('#add_manager_form');
        $('#uiBlocker').hide();
        form.trigger("reset");
        loadManagerList();
        $('#close_add_modal_btn').click();
    }

    if (response.status == 402) {

        error = response.message;

    } else {

        error = response.responseJSON.message;
        var is_invalid = response.responseJSON.errors;

        $.each(is_invalid, function (key) {
            // Assuming 'key' corresponds to the form field name
            var inputField = $('[name="' + key + '"]');
            // Add the 'is-invalid' class to the input field's parent or any desired container
            inputField.addClass('is-invalid');

        });
    }
    toastr.error(error, '', {
        timeOut: 3000
    });

}


$(document).on('click', '.delete_btn', function () {
    var del_id = $(this).attr('data-id');
    console.log(del_id);
    $('#delete_confirmed_btn').attr('data-id', del_id);
});

$('#close_delete_modal_btn').click(function () {
    $('.clode_delete_modal_default_btn').click();
    $('#delete_confirmed_btn').attr('data-id', '');
});

$('#delete_confirmed_btn').click(function () {
    var del_id = $(this).attr('data-id');
    let url = '/admin/deletemanager';
    let type = 'POST';
    let data = new FormData();
    data.append('del_id', del_id);
    SendAjaxRequestToServer(type, url, data, '', deletemanagerResponse, '', '');

});


function deletemanagerResponse(response) {
    if (response.status == 200) {

        toastr.success(response.message, '', {
            timeOut: 3000
        });
        $('#uiBlocker').hide();

        loadManagerList();
        $('#close_delete_modal_btn').click();
    }

    if (response.status == 402) {
        $('#close_delete_modal_btn').click();

        error = response.message;

    } else {
        $('#close_delete_modal_btn').click();

        error = response.responseJSON.message;
    }
    toastr.error(error, '', {
        timeOut: 3000
    });
}

function changestatus(id, stauts) {

    let url = '/admin/property/status';
    let type = 'POST';
    let data = new FormData();
    data.append('id', id);
    data.append('status', status);
    SendAjaxRequestToServer(type, url, data, '', changeStatusResponse, '', '');


}
function changestatusPending(id, hold) {

    let url = '/admin/property/status/pending';
    let type = 'POST';
    let data = new FormData();
    data.append('id', id);
    data.append('hold', hold);
    SendAjaxRequestToServer(type, url, data, '', changePendingStatusResponse, '', '');


}


function changePendingStatusResponse(response) {
    if (response.status == 200) {

        toastr.success(response.message, '', {
            timeOut: 3000
        });
        $('#uiBlocker').hide();

        loadManagerList();
    }

    if (response.status == 402) {
        error = response.message;

    } else {
        error = response.message;
    }
    toastr.error(error, '', {
        timeOut: 3000
    });
}


function changeStatusResponse(response) {
    console.log(response)
    if (response.status == 200) {

        toastr.success(response.message, '', {
            timeOut: 3000
        });
        $('#uiBlocker').hide();

        loadManagerList();
    }

    if (response.status == 402) {
        error = response.message;

    }
    else {
        error = response.message;
    }
    toastr.error(error, '', {
        timeOut: 3000
    });
}

$(document).on('click', '.edit_btn', function () {
    var id = $(this).attr('data-id');
    console.log(id)
    let url = '/admin/getpropertydata';
    let type = 'POST';
    let data = new FormData();
    data.append('id', id);
    SendAjaxRequestToServer(type, url, data, '', getpropertydataResponse, '', '');


});


function getpropertydataResponse(response) {

    if (response.status == 200) {
        var manager = response.data;

        $('#uiBlocker').hide();
        $('#manager_id_edit').val(manager[0].id);
        $('#first_name_edit').val(manager[0].first_name);
        $('#middle_name_edit').val(manager[0].middle_name);
        $('#last_name_edit').val(manager[0].last_name);
        $('#contact_number_edit').val(manager[0].contact_number);
        $('#email_edit').text(manager[0].email);

    }

    if (response.status == 402) {
        var error = response.message;
        toastr.error(error, '', {
            timeOut: 3000
        });
    }

}


$('#edit_manager_form').submit(function (e) {
    e.preventDefault();

    let form = document.getElementById('edit_manager_form');
    let data = new FormData(form);
    let type = 'POST';
    let url = '/admin/updateManager';
    SendAjaxRequestToServer(type, url, data, '', updateManagerResponse, '', 'savemanagerbtn');
});

function updateManagerResponse(response) {
    $('#uiBlocker').hide();
    if (response.status == 200) {

        toastr.success(response.message, '', {
            timeOut: 3000
        });


        loadManagerList();
        $('#close_update_modal_default_btn').click();
    }

    if (response.status == 402) {
        // $('#close_update_modal_default_btn').click();

        error = response.message;

    } else {
        // $('#close_update_modal_default_btn').click();

        error = response.responseJSON.message;
    }
    toastr.error(error, '', {
        timeOut: 3000
    });
}



























$(document).ready(function () {

    loadpropertyList();
    // $('#managers_table').dataTable();
});



