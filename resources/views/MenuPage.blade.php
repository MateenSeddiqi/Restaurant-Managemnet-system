<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داشبورد مدیریت رستوران</title>

    <link rel="stylesheet" href="{{ asset('BootstrapCSS/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('BootstrapCSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/4.3.1-1/bootstrap-rtl.min.css">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/Style.css') }}">
</head>
<body>
    <div class="containerr">
        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <h2>رستوران</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="{{ route('welcome') }}">داشبورد</a></li>
                <li><a href="{{ route('OrderPage') }}">سفارش‌ها</a></li>
                <li><a href="{{ route('MenuPage') }}">منو</a></li>
                <li><a href="{{ route('StoragePage') }}">انبار</a></li>
                <li><a href="{{ route('ExpensesPage') }}">هزینه‌ها</a></li>
                <li><a href="#">گزارش‌ها</a></li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="main-content">
            <header>
                <h1>داشبورد مدیریت</h1>
                <div class="user-info">
                    <p>خوش آمدید، <span id="username">مدیر</span></p>
                </div>
            </header>

            <div class="continer">
                <h4>منوها</h4>
                <div class="row">
                    <div class="col-md"></div>
                    <div class="col-md-1">
                        <button class="btn dark-bg-btn">افزودن منو</button>
                    </div>
                </div>
                {{-- Data table contents --}}
                <div class="row">
                    <div class="col-md-12">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>نام غذا</th>
                                    <th>واحد غذا</th>
                                    <th>قیمت</th>
                                    <th>ویرایش</th>
                                    <th>حذف</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>کباب</td>
                                    <td>2</td>
                                    <td>120</td>
                                    <td>X</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>مرغ</td>
                                    <td>1</td>
                                    <td>360</td>
                                    <td>X</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>آبمیوه</td>
                                    <td>1</td>
                                    <td>100</td>
                                    <td>X</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>شیر</td>
                                    <td>10</td>
                                    <td>120</td>
                                    <td>X</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>شیر</td>
                                    <td>10</td>
                                    <td>120</td>
                                    <td>X</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>شیر</td>
                                    <td>10</td>
                                    <td>120</td>
                                    <td>X</td>
                                    <td>X</td>
                                </tr>
                                <tr>
                                    <td>شیر</td>
                                    <td>10</td>
                                    <td>120</td>
                                    <td>X</td>
                                    <td>X</td>
                                </tr>
                            </tbody>
                            {{-- <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                </tr>
                            </tfoot> --}}
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>
    {{-- Scripts for data table --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>
</html>
```