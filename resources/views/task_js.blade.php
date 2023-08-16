 <!--  Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <!--  Jquery cdn link -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
</script>

 <script>
        $(document).ready(function(){
            //add task
            $(document).on('click','.add_task',function(e){
                e.preventDefault();

                let name = $("#nm").val();
                let description =$("#desc").val();
                console.log(nm+desc);

                $.ajax({
                    url:"{{ route('add.task') }}",
                    method:"post",
                    data:{name:name,description:description},


                    success:function(res){
                      if(res.status=='success'){
                        console.log(res.status);
                        $('#addModal').modal('hide');
                        $('#addModalForm')[0].reset();
                        $('.table').load(location.href+' .table');

                        Command: toastr["success"]("Task Added", "Success")

                        toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                        }
                                            }
                    },error:function(err){
                      let error = err.responseJSON;
                      $.each(error.errors,function(index,value){
                        $('.errMsg').append('<span class="text-danger">'+value+'</span>'+'<br/>');
                      });
                    }




                });
            });



            //Show form data
            $(document).on('click','.form_data',function(){
                let id = $(this).data('id');
                let name = $(this).data('name');
                let description = $(this).data('description');
                //console.log(name+description);

                let u_id = $('#u_id').val(id);
                let up_name = $('#name').val(name);
                let up_description = $('#description').val(description);
            });


            //update task
            $(document).on('click','.update_task',function(){
                let id= $('#u_id').val();
                let name = $('#name').val();
                let description = $('#description').val();
                console.log(name+description);

                $.ajax({
                    url:"{{ route('update.task') }}",
                    method:"post",
                    data:{id:id,name:name,description:description},


                    success:function(res){
                      if(res.status=='success'){
                        $('#updateModal').modal('hide');
                        $('#updateModalForm')[0].reset();
                        $('.table').load(location.href+' .table');

                        Command: toastr["success"]("Task Updated", "Success")

                        toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                        }
                      }
                    },error:function(err){
                      let error = err.responseJSON;
                      $.each(error.errors,function(index,value){
                        $('.uperrMsg').append('<span class="text-danger">'+value+'</span>'+'<br/>');
                      });
                    }




                });
            });

            //delete task
            $(document).on('click','.task_delete',function(e){
                e.preventDefault();
                let delete_id= $(this).data('id');

             if(confirm('Do you want to delete?')){
                $.ajax({
                    url:"{{ route('delete.task') }}",
                    method:"post",
                    data:{delete_id:delete_id},


                    success:function(res){
                      if(res.status=='success'){

                        $('.table').load(location.href+' .table');

                        Command: toastr["success"]("Task Deleted", "Success")

                        toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                        }
                      }
                    }




                });
             }

            });


        });
</script>
