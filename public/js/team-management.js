/**
 * Page Team Members List
 */

'use strict';

$(function () {
  // Variable declaration for table
  var dt_team_table = $('.datatables-team-members'),
    offCanvasForm = $('#offcanvasAddTeamMember');

  // ajax setup
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  // Team Members datatable
  if (dt_team_table.length) {
    var dt_team = dt_team_table.DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: baseUrl + 'teams-list'
      },
      columns: [
        {data: ''},
        {data: 'id'},
        {data: 'name'},
        {data: 'designation'},
        {data: 'image'},
        {data: 'linkedin_url'},
        {data: 'quote'},
        {data: 'action'}
      ],
      columnDefs: [
        {
          targets: 0,
          render: function (data, type, full, meta) {
            return ''; // You can return a checkbox or any other HTML element here
          }
        },
        {
          targets: 1,
          render: function (data, type, full, meta) {
            return data; // ID
          }
        },
        {
          targets: 2,
          render: function (data, type, full, meta) {
            return data; // Name
          }
        },
        {
          targets: 3,
          render: function (data, type, full, meta) {
            return data; // Designation
          }
        },
        {
          targets: 4,
          render: function (data, type, full, meta) {
            return `<img src="${data}" alt="Image" width="50" height="50">`; // Image
          }
        },
        {
          targets: 5,
          render: function (data, type, full, meta) {
            return `<a href="${data}" target="_blank">LinkedIn</a>`; // LinkedIn URL
          }
        },
        {
          targets: 6,
          render: function (data, type, full, meta) {
            return data; // Quote
          }
        },
        {
          targets: -1,
          title: 'Actions',
          searchable: false,
          orderable: false,
          render: function (data, type, full, meta) {
            return (
              '<div class="d-inline-block text-nowrap">' +
              `<button class="btn btn-sm btn-icon edit-record" data-id="${full['id']}" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddTeamMember"><i class="ti ti-edit"></i></button>` +
              `<button class="btn btn-sm btn-icon delete-record" data-id="${full['id']}"><i class="ti ti-trash"></i></button>` +
              '</div>'
            );
          }
        }
      ],
      order: [[1, 'Asc']],
      dom:
        '<"row mx-2"' +
        '<"col-md-2"<"me-3"l>>' +
        '<"col-md-10"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0"fB>>' +
        '>t' +
        '<"row mx-2"' +
        '<"col-sm-12 col-md-6"i>' +
        '<"col-sm-12 col-md-6"p>' +
        '>',
      language: {
        sLengthMenu: '_MENU_',
        search: '',
        searchPlaceholder: 'Search..'
      },
      // Buttons with Dropdown
      buttons: [
        {
          text: '<i class="ti ti-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">Add New Member</span>',
          className: 'add-new btn btn-primary mx-3',
          attr: {
            'data-bs-toggle': 'offcanvas',
            'data-bs-target': '#offcanvasAddTeamMember'
          }
        }
      ],
      // For responsive popup
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal({
            header: function (row) {
              var data = row.data();
              return 'Details of ' + data['name'];
            }
          }),
          type: 'column',
          renderer: function (api, rowIdx, columns) {
            var data = $.map(columns, function (col, i) {
              return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
                ? '<tr data-dt-row="' +
                col.rowIndex +
                '" data-dt-column="' +
                col.columnIndex +
                '">' +
                '<td>' +
                col.title +
                ':' +
                '</td> ' +
                '<td>' +
                col.data +
                '</td>' +
                '</tr>'
                : '';
            }).join('');

            return data ? $('<table class="table"/><tbody />').append(data) : false;
          }
        }
      }
    });
  }

  // Delete Record
  $(document).on('click', '.delete-record', function () {
    var team_member_id = $(this).data('id'),
    dtrModal = $('.dtr-bs-modal.show');

    // hide responsive modal in small screen
    if (dtrModal.length) {
      dtrModal.modal('hide');
    }
    // sweetalert for confirmation of delete
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      customClass: {
        confirmButton: 'btn btn-primary me-3',
        cancelButton: 'btn btn-label-secondary'
      },
      buttonsStyling: false
    }).then(function (result) {
      if (result.value) {
        // delete the data
        $.ajax({
          type: 'DELETE',
          url: `${baseUrl}teams-list/${team_member_id}`,
          success: function () {
            dt_team.draw();
          },
          error: function (error) {
            console.log(error);
          }
        });

        // success sweetalert
        Swal.fire({
          icon: 'success',
          title: 'Deleted!',
          text: 'The Member has been deleted!',
          customClass: {
            confirmButton: 'btn btn-success'
          }
        });
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        Swal.fire({
          title: 'Cancelled',
          text: 'The Member is not deleted!',
          icon: 'error',
          customClass: {
            confirmButton: 'btn btn-success'
          }
        });
      }
    });
  });

// Edit record
  $(document).on('click', '.edit-record', function () {
    var team_member_id = $(this).data('id'),
    dtrModal = $('.dtr-bs-modal.show');
    // hide responsive modal in small screen
    if (dtrModal.length) {
      dtrModal.modal('hide');
    }

    // changing the title of offcanvas
    $('#offcanvasAddTeamMemberLabel').html('Edit Member');

    // get data
    $.get(`${baseUrl}teams-list\/${team_member_id}\/edit`, function (data) {
      $('#team_member_id').val(team_member_id);
      $('#add-team-member-name').val(data.name);
      $('#add-team-member-designation').val(data.designation);
      // $('#add-team-member-image').val(data.image);
      $('#add-team-member-linkedin_url').val(data.linkedin_url);
      $('#add-team-member-quote').val(data.quote);
    });
  });

  // changing the title
  $('.add-new').on('click', function () {
    $('#team_member_id').val('');
    $('#offcanvasAddTeamMemberLabel').html('Add Member');
  });

  // ? setTimeout used for multilingual table initialization
  setTimeout(() => {
    $('.dataTables_filter .form-control').removeClass('form-control-sm');
    $('.dataTables_length .form-select').removeClass('form-select-sm');
  }, 300);

  // validating form and updating user's data
  const addNewTeamMemberForm = document.getElementById('addNewTeamMemberForm');

  // user form validation
  const fv = FormValidation.formValidation(addNewTeamMemberForm, {
    fields: {
      name: {
        validators: {
          notEmpty: {
            message: 'Please enter name'
          }
        }
      },
    },
    plugins: {
      trigger: new FormValidation.plugins.Trigger(),
      bootstrap5: new FormValidation.plugins.Bootstrap5({
        eleValidClass: '',
        rowSelector: function (field, ele) {
          return '.mb-3';
        }
      }),
      submitButton: new FormValidation.plugins.SubmitButton(),
      autoFocus: new FormValidation.plugins.AutoFocus()
    }
  }).on('core.form.valid', function () {
    var formData = new FormData($('#addNewTeamMemberForm')[0]);
    $.ajax({
      data: formData,
      url: `${baseUrl}teams-list`,
      processData: false,  // Important!
      contentType: false,  // Important!
      type: 'POST',
      success: function (status) {
        dt_team.draw();
        offCanvasForm.offcanvas('hide');

        // sweetalert
        Swal.fire({
          icon: 'success',
          title: `Successfully ${status}!`,
          text: `User ${status} Successfully.`,
          customClass: {
            confirmButton: 'btn btn-success'
          }
        });
      },
      error: function (err) {
        offCanvasForm.offcanvas('hide');
        Swal.fire({
          title: 'Duplicate Entry!',
          text: err,
          icon: 'error',
          customClass: {
            confirmButton: 'btn btn-success'
          }
        });
      }
    });
  });

  // clearing form data when offcanvas hidden
  offCanvasForm.on('hidden.bs.offcanvas', function () {
    fv.resetForm(true);
  });
});
