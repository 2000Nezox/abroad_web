$(function(){
    //初回読み込み時、並列で読み込み
    $(document).ready(function(){
        $.ajax({
            url:'../css/main_index.css',
            type:'POST',
        })
        // Ajaxリクエストが成功した時発動
            .done( (data) => {
                var  i = document.getElementById('main-css');
                i.innerHTML =
                    "<style type=\"text/css\">" + data +
                    "#sub-header-1{background: rgba(0,102,187,0.1) !important;\n color: black !important;}" +
                    "</style>"
            })
            // Ajaxリクエストが失敗した時発動
            .fail( (data) => {
                $('.result').html(data);
                console.log(data);
            })
            // Ajaxリクエストが成功・失敗どちらでも発動
            .always( (data) => {

            });
    });

    $('#sub-header-1').on('click', function () {
        $.ajax({
            url: '../main/user.php',
            type: 'POST',
        })
        // Ajaxリクエストが成功した時発動
            .done((data) => {
                var i = document.getElementById('main-content');
                i.innerHTML = data;
                console.log(data);
            })
            // Ajaxリクエストが失敗した時発動
            .fail((data) => {
                $('.result').html(data);
                console.log(data);
            })
            // Ajaxリクエストが成功・失敗どちらでも発動
            .always((data) => {

            });

        $.ajax({
            url: '../css/main_index.css',
            type: 'POST',
        })
        // Ajaxリクエストが成功した時発動
            .done((data) => {
                var i = document.getElementById('main-css');
                i.innerHTML =
                    "<style type=\"text/css\">" + data +
                    "#sub-header-1{background: rgba(0,102,187,0.1) !important;\n color: black !important;}" +
                    "</style>"
            })
            // Ajaxリクエストが失敗した時発動
            .fail((data) => {
                $('.result').html(data);
                console.log(data);
            })
            // Ajaxリクエストが成功・失敗どちらでも発動
            .always((data) => {

            })
    });

    $('#sub-header-2').on('click', function () {
        $.ajax({
            url: '../main/teacher.php',
            type: 'POST',
        })
        // Ajaxリクエストが成功した時発動
            .done((data) => {
                var i = document.getElementById('main-content');
                console.log(i);
                i.innerHTML = data;
            })
            // Ajaxリクエストが失敗した時発動
            .fail((data) => {
                $('.result').html(data);
                console.log(data);
            })
            // Ajaxリクエストが成功・失敗どちらでも発動
            .always((data) => {

            });

        $.ajax({
            url: '../css/main_index.css',
            type: 'POST',
        })
        // Ajaxリクエストが成功した時発動
            .done((data) => {
                var i = document.getElementById('main-css');
                i.innerHTML =
                    "<style type=\"text/css\">" + data +
                    "#sub-header-2{background: rgba(0,102,187,0.1) !important;\n color: black !important;}" +
                    "</style>"
            })
            // Ajaxリクエストが失敗した時発動
            .fail((data) => {
                $('.result').html(data);
                console.log(data);
            })
            // Ajaxリクエストが成功・失敗どちらでも発動
            .always((data) => {

            })

    });

    $('#header-1').on('click',function(){
        $.ajax({
            url:'../main/user.php',
            type:'POST',
        })
        // Ajaxリクエストが成功した時発動
            .done( (data) => {
                var  i = document.getElementById('main-content');
                console.log(data);
                i.innerHTML = data;

                $.ajax({
                    url:'../css/main_index.css',
                    type:'POST',
                })
                // Ajaxリクエストが成功した時発動
                    .done( (data) => {
                        var  i = document.getElementById('main-css');
                        i.innerHTML =
                            "<style type=\"text/css\">" + data +
                            "#sub-header-1{background: rgba(0,102,187,0.1) !important;\n color: black !important;}" +
                            "</style>"
                    })
                    // Ajaxリクエストが失敗した時発動
                    .fail( (data) => {
                        $('.result').html(data);
                        console.log(data);
                    })
                    // Ajaxリクエストが成功・失敗どちらでも発動
                    .always( (data) => {

                    });
            })
            // Ajaxリクエストが失敗した時発動
            .fail( (data) => {
                $('.result').html(data);
                console.log(data);
            })
            // Ajaxリクエストが成功・失敗どちらでも発動
            .always( (data) => {

            });
    });

    $('#header-2').on('click',function(){
        $.ajax({
            url:'course-top.php',
            type:'POST',
        })
        // Ajaxリクエストが成功した時発動
            .done( (data) => {
                var  i = document.getElementById('main-content');
                console.log(i);
                i.innerHTML = data;
            })
            // Ajaxリクエストが失敗した時発動
            .fail( (data) => {
                $('.result').html(data);
                console.log(data);
            })
            // Ajaxリクエストが成功・失敗どちらでも発動
            .always( (data) => {

            });


        $.ajax({
            url:'../css/course-top.css',
            type:'POST',
        })
        // Ajaxリクエストが成功した時発動
            .done( (data) => {
                var  i = document.getElementById('main-css');
                console.log(i);
                i.innerHTML = "<style>" +  data + "</style>";
            })
            // Ajaxリクエストが失敗した時発動
            .fail( (data) => {
                $('.result').html(data);
                console.log(data);
            })
            // Ajaxリクエストが成功・失敗どちらでも発動
            .always( (data) => {

            });
    });

    $('#header-5').on('click',function(){
        $.ajax({
            url:'setting.php',
            type:'POST',
        })
        // Ajaxリクエストが成功した時発動
            .done( (data) => {
                var  i = document.getElementById('main-content');
                console.log(i);
                i.innerHTML = data;
            })
            // Ajaxリクエストが失敗した時発動
            .fail( (data) => {
                $('.result').html(data);
                console.log(data);
            })
            // Ajaxリクエストが成功・失敗どちらでも発動
            .always( (data) => {

            });


        $.ajax({
            url:'../css/setting.css',
            type:'POST',
        })
        // Ajaxリクエストが成功した時発動
            .done( (data) => {
                var  i = document.getElementById('main-css');
                console.log(i);
                i.innerHTML = "<style>" +  data + "</style>";
            })
            // Ajaxリクエストが失敗した時発動
            .fail( (data) => {
                $('.result').html(data);
                console.log(data);
            })
            // Ajaxリクエストが成功・失敗どちらでも発動
            .always( (data) => {

            });
    });
});