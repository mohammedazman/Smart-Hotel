
// edit data by ajax
function editForm() {

    save_method='add';
    $('input[name_method]').val('POST');

    /* $('#model-form form')[0].reset();*/

    $('.modal-title').text("Edit SubArea");
    $('#insertbutton').text('Update Sub');
    $('#modal-form').modal("show");


}
function deleteuser( id) {
    var csrf_token=$('meta[name="csrf-token"]').attr('content');
    swal({
        title: "هل تريد الحذ؟",
        text: "سيتم فقد جميع البيانات عند تأكيد الحذف!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
            if (willDelete)
            {$.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                $.ajax({
                    url:"/acount/delete/"+id,
                    type:'get',
                    data:{'id':id},
                    success:function(response ) {
                          sweetAlert({
                             text:'تم الحذف المشرف بنجاح',
                             icon: "info",
                             confirm:"إنهاء",}).then((result) => {window.location.href = "acount";});},
                    error:function (data) {swal({
                            text:'لم يتم الحذف لوجود بيانات مرتبطة بهذا المستخدم',
                            icon: "info",
                            confirm: 'إنهاء',});}});} else {}});}
function deleterep( id) {
    var csrf_token=$('meta[name="csrf-token"]').attr('content');
    swal({
        title: "هل تريد الحذف؟",
        text: "سيتم فقد جميع البيانات عند تأكيد الحذف!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete)
        {$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            $.ajax({
                url:"/acount/deleter/"+id,
                type:'get',
                data:{'id':id},
                success:function(response ) {
                    sweetAlert({
                        text:'تم الحذف المندوب بنجاح',
                        icon: "info",
                        confirm:"إنهاء",}).then((result) => {window.location.href = "acount";});},
                error:function (data) {swal({
                    text:'لم يتم الحذف لوجود بيانات مرتبطة بهذا المستخدم',
                    icon: "info",
                    confirm: 'إنهاء',});}});} else {}});}

function admin() {
    swal(
        {
            title:'تم رفض الحذف ',
            text: 'لا يمكن حذف بيانات مدير نظام',
            icon:'warning',
            confirm:'إنهاء'
        }
    )

}
function deleteigroup(id) {
    var csrf_token=$('meta[name="csrf-token"]').attr('content');
    swal({
        title: "هل تريد الحذف؟",
        text: "سيتم فقد جميع البيانات عند تأكيد الحذف!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete)
        {$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            $.ajax({
                url:"/acount/deleteigroup/"+id,
                type:'get',
                data:{'id':id},
                success:function(response ) {
                    sweetAlert({
                        text:'تم حذف المجموعة بنجاح',
                        icon: "info",
                        confirm:"إنهاء",}).then((result) => {window.location.href = "item_groups";});},
                error:function (data) {swal({
                    text:'لم يتم الحذف لوجود بيانات مرتبطة بهذه المجموعة',
                    icon: "info",
                    confirm: 'إنهاء',});}});} else {}});
}
function deleteitem(id) {
    var csrf_token=$('meta[name="csrf-token"]').attr('content');
    swal({
        title: "هل تريد الحذف؟",
        text: "سيتم فقد جميع البيانات عند تأكيد الحذف!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete)
        {$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            $.ajax({
                url:"/acount/deleteitem/"+id,
                type:'get',
                data:{'id':id},
                success:function(response ) {
                    sweetAlert({
                        text:'تم حذف الصنف بنجاح',
                        icon: "info",
                        confirm:"إنهاء",}).then((result) => {window.location.href = "add_items";});},
                error:function (data) {swal({
                    text:'لم يتم الحذف لوجود بيانات مرتبطة بهذا الصنف',
                    icon: "info",
                    confirm: 'إنهاء',});}});} else {}});
}
function deletemarea(id) {
    var csrf_token=$('meta[name="csrf-token"]').attr('content');
    swal({
        title: "هل تريد الحذف؟",
        text: "سيتم فقد جميع البيانات عند تأكيد الحذف!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete)
        {$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            $.ajax({
                url:"/acount/deletemarea/"+id,
                type:'get',
                data:{'id':id},
                success:function(response ) {
                    sweetAlert({
                        text:'تم حذف المنطقة بنجاح',
                        icon: "info",
                        confirm:"إنهاء",}).then((result) => {window.location.href = "main_area";});},
                error:function (data) {swal({
                    text:'لم يتم الحذف لوجود بيانات مرتبطة بهذه المنطقة',
                    icon: "info",
                    confirm: 'إنهاء',});}});} else {}});
}
function deletesubarea(id) {
    var csrf_token=$('meta[name="csrf-token"]').attr('content');
    swal({
        title: "هل تريد الحذف؟",
        text: "سيتم فقد جميع البيانات عند تأكيد الحذف!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete)
        {$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            $.ajax({
                url:"/acount/deletesubarea/"+id,
                type:'get',
                data:{'id':id},
                success:function(response ) {
                    sweetAlert({
                        text:'تم حذف المنطقة بنجاح',
                        icon: "info",
                        confirm:"إنهاء",}).then((result) => {window.location.href = "sub_area";});},
                error:function (data) {swal({
                    text:'لم يتم الحذف لوجود بيانات مرتبطة بهذه المنطقة',
                    icon: "info",
                    confirm: 'إنهاء',});}});} else {}});
}

$(document).ready(function() {
    $('#state').on('change', function() {
        var stateID = $(this).val();
        if(stateID) {
            $.ajax({
                url: '/findCityWithStateID/'+stateID,
                type: "GET",
                data : {"_token":"{{ csrf_token() }}"},
                dataType: "json",
                success:function(data) {
                    //console.log(data);
                    if(data){
                        $('#city').empty();
                        $('#city').focus;
                        /* $('#city').append('<option selected disabled hidden>إختيار </option>');*/

                        $.each(data, function(key, value){
                            $('#city').append('<label ><input type="checkbox" name="city[]" value="'+value.id+'" >' + value.sub_area_name+ '</lable>');
                        });
                    }else{
                        $('#city').empty();
                    }
                }
            });
        }else{
            $('#city').empty();
        }
    });
});


$(document).ready(function() {
    $('#rep_no').on('change', function() {
        var stateID = $(this).val();
        if(stateID) {
            $.ajax({
                url: '/find_item/'+stateID,
                type: "GET",
                data : {"_token":"{{ csrf_token() }}"},
                dataType: "json",
                success:function(data) {
                    //console.log(data);
                    if(data){
                        $('#item').empty();
                        $('#item').focus;
                        /* $('#city').append('<option selected disabled hidden>إختيار </option>');*/

                        $.each(data.sup_item, function(key, value){
                            $.each(data.allitem, function(keys, valued){
                                if (value.id === valued.id)
                                {
                                    $('#item').append('<label ><input type="checkbox" name="city[]" value="'+valued.id+'" >' + valued.item_name+ '</lable>');
                                }

                            });

                        });
                    }}});
        }

        else{
            $('#item').empty();
        }
    }
    );
}
);


function deletereparea(id,sup_id) {
    var csrf_token=$('meta[name="csrf-token"]').attr('content');
    swal({
        title: "هل تريد الحذف؟",
        text: "سيتم فقد جميع البيانات عند تأكيد الحذف!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete)
        {$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            $.ajax({
                url:"/deletemarea",
                type:'get',
                data:{'id':id,'sup_id':sup_id},
                success:function(response ) {
                    sweetAlert({
                        text:'تم حذف المنطقة بنجاح',
                        icon: "info",
                        confirm:"إنهاء",}).then((result) => {window.location.href = "rep_area_manage";});},
                error:function (data) {swal({
                    text:'لم يتم الحذف لوجود بيانات مرتبطة بهذه المنطقة',
                    icon: "info",
                    confirm: 'إنهاء',});}});} else {}});
}
function deleterepitem(id,sup_id) {
    var csrf_token=$('meta[name="csrf-token"]').attr('content');
    swal({
        title: "هل تريد الحذف؟",
        text: "سيتم فقد جميع البيانات عند تأكيد الحذف!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete)
        {$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            $.ajax({
                url:"/deletereitem",
                type:'get',
                data:{'id':id,'sup_id':sup_id},
                success:function(response ) {
                    sweetAlert({
                        text:'تم حذف المنطقة بنجاح',
                        icon: "info",
                        confirm:"إنهاء",}).then((result) => {window.location.href = "rep_item_manage";});},
                error:function (data) {swal({
                    text:'لم يتم الحذف لوجود بيانات مرتبطة بهذا الصنف',
                    icon: "info",
                    confirm: 'إنهاء',});}});} else {}});
}