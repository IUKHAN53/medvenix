"use strict";$((function(){var a=$(".invoice-list-table");if(a.length)var e=a.DataTable({ajax:assetsPath+"json/invoice-list.json",columns:[{data:""},{data:"invoice_id"},{data:"invoice_status"},{data:"issued_date"},{data:"client_name"},{data:"total"},{data:"balance"},{data:"invoice_status"},{data:"action"}],columnDefs:[{className:"control",responsivePriority:2,searchable:!1,targets:0,render:function(a,e,t,s){return""}},{targets:1,render:function(a,e,t,s){var n=t.invoice_id;return'<a href="'+baseUrl+'app/invoice/preview">#'+n+"</a>"}},{targets:2,render:function(a,e,t,s){var n=t.invoice_status,i=t.due_date;return"<span data-bs-toggle='tooltip' data-bs-html='true' title='<span>"+n+'<br> <span class="fw-medium">Balance:</span> '+t.balance+'<br> <span class="fw-medium">Due Date:</span> '+i+"</span>'>"+{Sent:'<span class="badge badge-center rounded-pill bg-label-secondary w-px-30 h-px-30"><i class="ti ti-circle-check ti-sm"></i></span>',Draft:'<span class="badge badge-center rounded-pill bg-label-primary w-px-30 h-px-30"><i class="ti ti-device-floppy ti-sm"></i></span>',"Past Due":'<span class="badge badge-center rounded-pill bg-label-danger w-px-30 h-px-30"><i class="ti ti-info-circle ti-sm"></i></span>',"Partial Payment":'<span class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30"><i class="ti ti-circle-half-2 ti-sm"></i></span>',Paid:'<span class="badge badge-center rounded-pill bg-label-warning w-px-30 h-px-30"><i class="ti ti-chart-pie ti-sm"></i></span>',Downloaded:'<span class="badge badge-center rounded-pill bg-label-info w-px-30 h-px-30"><i class="ti ti-arrow-down-circle ti-sm"></i></span>'}[n]+"</span>"}},{targets:3,responsivePriority:4,render:function(a,e,t,s){var n=t.client_name,i=t.service,r=t.avatar_image,l=Math.floor(11*Math.random())+1;if(!0===r)var o='<img src="'+assetsPath+"img/avatars/"+(l+".png")+'" alt="Avatar" class="rounded-circle">';else{var d=["success","danger","warning","info","primary","secondary"][Math.floor(6*Math.random())],c=(n=t.client_name).match(/\b\w/g)||[];o='<span class="avatar-initial rounded-circle bg-label-'+d+'">'+(c=((c.shift()||"")+(c.pop()||"")).toUpperCase())+"</span>"}return'<div class="d-flex justify-content-start align-items-center"><div class="avatar-wrapper"><div class="avatar me-2">'+o+'</div></div><div class="d-flex flex-column"><a href="'+baseUrl+'pages/profile-user" class="text-body text-truncate"><span class="fw-medium">'+n+'</span></a><small class="text-truncate text-muted">'+i+"</small></div></div>"}},{targets:4,render:function(a,e,t,s){var n=t.total;return'<span class="d-none">'+n+"</span>$"+n}},{targets:5,render:function(a,e,t,s){var n=new Date(t.due_date);return'<span class="d-none">'+moment(n).format("YYYYMMDD")+"</span>"+moment(n).format("DD MMM YYYY")}},{targets:6,orderable:!1,render:function(a,e,t,s){var n=t.balance;if(0===n){return'<span class="badge bg-label-success" text-capitalized> Paid </span>'}return'<span class="d-none">'+n+"</span>"+n}},{targets:7,visible:!1},{targets:-1,title:"Actions",searchable:!1,orderable:!1,render:function(a,e,t,s){return'<div class="d-flex align-items-center"><a href="javascript:;" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="Send Mail"><i class="ti ti-mail mx-2 ti-sm"></i></a><a href="'+baseUrl+'app/invoice/preview" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="Preview Invoice"><i class="ti ti-eye mx-2 ti-sm"></i></a><div class="dropdown"><a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-sm"></i></a><div class="dropdown-menu dropdown-menu-end"><a href="javascript:;" class="dropdown-item">Download</a><a href="'+baseUrl+'app/invoice/edit" class="dropdown-item">Edit</a><a href="javascript:;" class="dropdown-item">Duplicate</a><div class="dropdown-divider"></div><a href="javascript:;" class="dropdown-item delete-record text-danger">Delete</a></div></div></div>'}}],order:[[1,"desc"]],dom:'<"row ms-2 me-3"<"col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start gap-2"l<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start mt-md-0 mt-3"B>><"col-12 col-md-6 d-flex align-items-center justify-content-end flex-column flex-md-row pe-3 gap-md-2"f<"invoice_status mb-3 mb-md-0">>>t<"row mx-2"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',language:{sLengthMenu:"Show _MENU_",search:"",searchPlaceholder:"Search Invoice"},buttons:[{text:'<i class="ti ti-plus me-md-1"></i><span class="d-md-inline-block d-none">Create Invoice</span>',className:"btn btn-primary",action:function(a,e,t,s){window.location=baseUrl+"app/invoice/add"}}],responsive:{details:{display:$.fn.dataTable.Responsive.display.modal({header:function(a){return"Details of "+a.data().full_name}}),type:"column",renderer:function(a,e,t){var s=$.map(t,(function(a,e){return""!==a.title?'<tr data-dt-row="'+a.rowIndex+'" data-dt-column="'+a.columnIndex+'"><td>'+a.title+":</td> <td>"+a.data+"</td></tr>":""})).join("");return!!s&&$('<table class="table"/><tbody />').append(s)}}},initComplete:function(){this.api().columns(7).every((function(){var a=this,e=$('<select id="UserRole" class="form-select"><option value=""> Select Status </option></select>').appendTo(".invoice_status").on("change",(function(){var e=$.fn.dataTable.util.escapeRegex($(this).val());a.search(e?"^"+e+"$":"",!0,!1).draw()}));a.data().unique().sort().each((function(a,t){e.append('<option value="'+a+'" class="text-capitalize">'+a+"</option>")}))}))}});a.on("draw.dt",(function(){[].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map((function(a){return new bootstrap.Tooltip(a,{boundary:document.body})}))})),$(".invoice-list-table tbody").on("click",".delete-record",(function(){e.row($(this).parents("tr")).remove().draw()})),setTimeout((()=>{$(".dataTables_filter .form-control").removeClass("form-control-sm"),$(".dataTables_length .form-select").removeClass("form-select-sm")}),300)}));
