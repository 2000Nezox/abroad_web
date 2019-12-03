$(function () {
    function categoryAjax($id) {
        if($($id).val() == 'all'){
            console.log('全件');
            $.ajax({
                url:'../class/Controll/account/operation/UserListAcquisition.php',
                type:'POST',
                // dataType:'json',
                data:{
                    'attribute':$($id).attr('name'),
                    'content':$($id).val(),
                }
            })
                .then(
                    function (data) {
                        tableInsertionProcess(data);
                    },
                    function (data) {
                        console.log('失敗')
                    }
                )
        }
        $.ajax({
            url:'../class/Executionfile/UserListRefineAjax.php',
            type:'POST',
            async:false,
            data:{
                'attribute':$($id).attr('name'),
                'content':$($id).val(),

            }
        })
            .then(
                function (data) {
                    console.log("成功");
                    tableInsertionProcess(data);
                },
                function () {
                    console.log('失敗')
                }
            )
    }
});