var redirect_path = window.location.protocol + "//" + window.location.hostname;

$("#addNew").click(function () {
    var page_url = $(location).attr("href");
    var id = page_url.slice(page_url.length-1);
    window.location = redirect_path + "/admin/create_accomodation?offer_id="+id+"&accom_id=0"
});

$(".edit").click(function () {
    var accom_id = $(this).data('id');
    var page_url = $(location).attr("href");
    var id = page_url.slice(page_url.length-1);
    window.location = redirect_path + "/admin/create_accomodation?offer_id="+id+"&accom_id="+accom_id
});

$(".delete").click(function () {
    var id = $(this).data('id');
    alert("Do you really want to remove this blog?");
    $.ajax({
        type: 'get',
        dataType: 'json',
        url: 'delete_accom',
        data: {'id': id},
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (e) {
          alert("Success to remove!");
          location.reload(true);
        }
    });
});