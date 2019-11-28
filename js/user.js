$(function () {
    $('#refine-select1').change(function () {
        let str = $(this).val();
        console.log(str)
        $.ajax({
            url:'../class/Executionfile/UserListRefineAjax.php',
            type:'POST',
            data:{
                'attribute':'school_name',
                'content':str
            }
        })
            .then(
                function (data) {
                    console.log(data)
                },
                function (data) {

                }
            )
        // .done( function (data) {
        //     console.log("成功");
        // }.fail( function (data) {
        //     console.log("失敗")
        // }))
                // (data) => {
                // $('.result').html(data);
                // console.log(data);
                // $.each(data,function (index,value) {
                //     console.log(data);
                    // console.log(value);
                    // // $("#table-body").append("");
                    // $("#table-body").append(
                    //     '<tr>'+
                    //     '<td>'+value.student_number+'</td>'+
                    //     '<td>'+value.school_name+'</td>'+
                    //     '<td>'+value.department_name+'</td>'+
                    //     '<td>'+value.name+'</td>'+
                    //     '<td>'+value.grade+'</td>'+
                    //     // '<td>'+value[5]+value[6]+'</td>'+
                    //     // '<td>'+value[7]+value[8]+'</td>'+
                    //     // '<td>'+value[9]+'</td>'+
                    //     '</tr>')
                // });

            // })
            // Ajaxリクエストが失敗した時発動

    })
});


