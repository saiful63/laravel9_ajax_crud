<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <title>Manage Task</title>
  </head>
  <body>


    <div class="container">

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2 class="text-center m-3">Todo App by Jquery Ajax</h2>
                <a href="" class="btn btn-primary mb-2"  data-bs-toggle="modal" data-bs-target="#addModal">Add Task</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Sr</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $key=>$task)
                        <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->description }}</td>
                        <td>
                            <a href="" class="btn-sm btn-primary form_data" data-bs-toggle="modal" data-bs-target="#updateModal" data-id={{ $task->id }} data-name={{ $task->name }} data-description={{ $task->description }}><i class="las la-edit"></i></a>
                            <a href="" class="btn-sm btn-danger task_delete" data-id={{ $task->id }}><i class="las la-times"></i></a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $tasks->links() !!}
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

   @include('update_task_modal')
   @include('add_task_modal')
   @include('task_js')
   {!! Toastr::message() !!}
</html>
