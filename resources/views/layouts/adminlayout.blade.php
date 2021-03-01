<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{url('/')}}/assets/css/global.css">
     <link rel="stylesheet" href="{{url('/')}}/assets/css/data-table.css"> 
</head>

<body>
    <!-- dashboard starts here -->
    <main>
        <!-- sidebar start -->
        <aside class="main-aside">
            <div class="sidebar-wrapper">
                <!-- logo -->
                <div class="main-logo">
                    <a href="#">
                        <img src="{{url('/')}}/assets/image/letter-head.png" alt="">
                    </a>
                </div>
                <div class="overlay-close"></div>
                <!-- navigations  -->
                <div class="menu-button">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="main-menus">
                    <div class="menu-logo">
                        <a href="#">
                            <img src="{{url('/')}}/assets/image/letter-head.png" alt="">
                        </a>
                    </div>
                    <ul>


                        <li @if(request()->segment(1) == 'students') class="active" @endif>
                            <a href="{{ url('/students') }}">
                                <i>
                                    <img src="{{url('/')}}/assets/image/short-code.svg" class="menu-show" alt="">
                                </i>
                                <span>Student</span>
                            </a>
                        </li>
                        <li @if(request()->segment(1) == 'add_class') class="active" @endif>
                            <a href="{{ url('/add_class') }}">
                                <i>
                                    <img src="{{url('/')}}/assets/image/expertise-area.svg" class="menu-show" alt="">
                                </i>
                                <span>Class</span>
                            </a>
                        </li>

                        <li>

                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <i>
                                    <img src="{{url('/')}}/assets/image/logout.svg" class="menu-show" alt="">

                                </i>
                                <span>Log Out</span>


                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>

        @yield('content')



    </main>
    <!-- dashboard ends here -->

    <!-- data table js -->
     <script src="{{url('/')}}/assets/js/jquery-3.5.1.min.js"></script>
   
    <script src="{{url('/')}}/assets/js/dataTables.min.js"></script>
    <script src="{{url('/')}}/assets/js/dataTables.buttons.min.js"></script>
    <script src="{{url('/')}}/assets/js/buttons.html5.min.js"></script>
    <script src="{{url('/')}}/assets/js/sweetalert.min.js"></script>
    <!-- custom js -->
    <script src="{{url('/')}}/assets/js/custom.js"></script>

    <script>
        $('select').on('change', function() {
            var id = $(this).val();
            if(id==0){
                location.reload();
            }else{
            $.ajax({
                url: 'getdata',
                method: "get",
                data: {
                    id: id,
                    
                },
                success: function(data) {
                    $('#student-table').html(data);
                }
            });
}
        });
    </script>
  
    <script>
        $('.delete-confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            var id = $(this).data("id");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete ${name}?`,

                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: "{{route('add_class.store')}}" + '/' + id,
                            type: "DELETE",
                            data: {
                                id: id,
                                "_token": "{{ csrf_token() }}",
                            },
                            success: function(data) {
                                location.reload();


                            }

                        });
                    }
                });
        });
        $('body').on('click','.student-delete',function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            var id = $(this).data("id");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete ${name}?`,

                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: "{{route('students.store')}}" + '/' + id,
                            type: "DELETE",
                            data: {
                                id: id,
                                "_token": "{{ csrf_token() }}",
                            },
                            success: function(data) {
                                location.reload();


                            }

                        });
                    }
                });
        });
   
    </script>
   
    <script>
        $('.import').click(function(){
        $("#file").click();
        });
        $('#file').change(function(){
            $('#submit').click();
        });
    </script>
    <script>
 
        $('#export').click(function(){
           $('.buttons-csv').click();
        });
    </script>
    
    
</body>

</html>