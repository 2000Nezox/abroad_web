$(function () {
    $('#refine-select1').change(function () {
        console.log($('#refine-select1').attr('name'));
        console.log($('#refine-select1').val());
        if($('#refine-select1').val() == 'all'){
            console.log('全件');
            $.ajax({
                url:'../class/Controll/account/operation/UserListAcquisition.php',
                type:'POST',
                // dataType:'json',
                data:{
                    'attribute':$('#refine-select1').attr('name'),
                    'content':$('#refine-select1').val(),
                }
            })
                .then(
                    function (data) {
                        // console.log(data);
                        tableInsertionProcess(data);
                    },
                    function (data) {
                        // console.log(data);
                        console.log('失敗')
                    }
                )
        }
        $.ajax({
            url:'../class/Executionfile/UserListRefineAjax.php',
            type:'POST',
            // dataType:'json',
            async:false,
            data:{
                'attribute':$('#refine-select1').attr('name'),
                'content':$('#refine-select1').val(),

            }
        })
            .then(
                function (data) {
                    console.log("成功");
                    // console.log(data);
                    tableInsertionProcess(data);
                },
                function () {
                    // console.log(data);
                    console.log('失敗')
                }
            )
    });

    // $('#refine-select2').change(function () {
    //     let str = $(this).val();
    //     // console.log(str)
    //     $.ajax({
    //         url:'../class/Executionfile/UserListRefineAjax.php',
    //         type:'POST',
    //         // dataType:'json',
    //         data:{
    //             'attribute':'department_name',
    //             'content':str
    //         }
    //     })
    //         .then(
    //             function (data) {
    //                 tableInsertionProcess(data);
    //             },
    //             function (data) {
    //                 console.log(data);
    //                 console.log('失敗')
    //             }
    //         )
    // })
});


