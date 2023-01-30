var Eventdemo = function(){
    var list = function(){
        // event-demo
        var dataArr = {};
        var columnWidth = { "width": "5%", "targets": 0 };
        var arrList = {
            'tableID': '#event-demo',
            'ajaxURL': baseurl + "admin/event-demo/event-ajaxcall",
            'ajaxAction': 'getdatatable',
            'postData': dataArr,
            'hideColumnList': [],
            'noSortingApply': [0, 3],
            'noSearchApply': [0, 3],
            'defaultSortColumn': [0],
            'defaultSortOrder': 'DESC',
            'setColumnWidth': columnWidth
        };
        getDataTable(arrList);

        $('body').on('click', '.add-new-event', function(){
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "admin/event-demo/event-ajaxcall",
                data: { 'action': 'add-new-event'},
                success: function(data) {
                    handleAjaxResponse(data);
                },
                complete: function() {
                    $('#loader').hide();
                }
            });
        });
    }

    return {
        init:function(){
            list();
        }
    }
}();
