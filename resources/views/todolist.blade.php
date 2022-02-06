<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <style>
        .todolist-wrapper {
            border: 1px solid #cccccc;
            min-height: 100px;
        }

    </style>

    <title>TodoList</title>
</head>
<body>

    <div class="container">
        <div id="app">

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">

                    <div class="text-left mb-3 mt-2">
                        <a href="javascript:;" class="btn btn-primary">Tambah TodoList</a>
                    </div>

                    <div class="todolist-wrapper">

                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr v-for="item in data_list">
                                    <td>@{{ item.content }}</td>
                                </tr>
                                <tr v-if="!data_list.length">
                                    <td>Data Masih Kosong</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

    </div>

    <script>
        var vue = new Vue({
            el: "#app"
            , data: {
                data_list: []

            }
            , methods: {

            }
        });

    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
