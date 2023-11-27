<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/public/css/dashboard.css">
    <link rel="stylesheet" href="/public/css/dashboard_information.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/sweetalert2@11.0.0/dist/sweetalert2.min.css">

    <script src="https://unpkg.com/sweetalert2@11.0.0/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>PTITShop</title>
</head>

<body>

    <!-- Sidebar -->
    <?php require_once 'sideBar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <?php require_once 'navBar.php'; ?>
        <!-- End of Navbar -->

        <main>
            <div class="header">
                <div class="left">
                    <h1>Danh mục thách thức</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">
                                Category
                            </a></li>
                        /
                        <li><a href="#" class="active">CTF</a></li>
                        <button id="addBtn" style="font-size: 14px; border: none; right: 0; position: absolute; margin-right: 26px;margin-bottom: 48px; background-color:var(--primary); color: white;; width: 180px; height: 40px;border-radius: 8px;">
                            Thêm danh mục thách thức
                        </button>
                    </ul>
                </div>
            </div>

            <!--********************* Category ***********************-->
            <div style="background: var(--light);color: var(--dark);">
                <table width="100%">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th><span class="las la-sort"></span> ID</th>
                            <th><span class="las la-sort"></span> TÊN DANH MỤC</th>
                            <th><span class="las la-sort"></span> ACTION</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                    </tbody>
                </table>
            </div>
            <div id="myModal" class="modal" style="display: none;">
                <div class="modal-content" style="border-radius: 8px;">
                    <form id="CategoryForm">
                        <!-- <label for="CategoryCode">ID:</label> -->
                        <!-- <input style="color: black; background-color: gainsboro;" type="text" id="IDDanhMuc" name="IDDanhMuc" required disabled> -->
                        <label for="CategoryName">Tên danh mục:</label>
                        <input style="color: black" type="text" id="CategoryName" name="CategoryName" required>

                        <button style="color: white; padding: 14px 20px; margin: 8px 0; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; margin-right: 10px;" type="submit" id="submitBtn">Thêm</button>
                        <button style="color: white; padding: 14px 20px; margin: 8px 0; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;" class="btnCancel" type="button" id="cancelBtn">Hủy</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
    </main>
    </div>
</body>

</html>
<script src="/public/js/dashboard.js"></script>
<script>
    const link = document.querySelector(".slide-menu-category");
    const addBtn = document.getElementById("addBtn");
    const modal = document.getElementById("myModal");
    const cancelBtn = document.getElementById("cancelBtn");
    const BtnEdit = document.getElementById("submitBtn");
    const tbody = document.getElementById("tbody");
    let isEditing = false;
    let lastCategoryId = 0;
    let productList = []
    let action = '';

    addBtn.addEventListener('click', function() {
        isEditing = false;
        document.getElementById("CategoryName").value = "";
        modal.style.display = "block";
        BtnEdit.innerText = "Thêm";
        action = 'create';
    });

    cancelBtn.addEventListener('click', function() {
        modal.style.display = "none";
    })

    function showLoadingSwal() {
    return Swal.fire({
        title: 'Loading...',
        text: 'Vui lòng chờ trong giây lát!',
        timer: 2000,
        showConfirmButton: false,
        imageUrl: '/public/img/gif/loading.gif',
        allowOutsideClick: false // Không cho phép đóng khi click ra ngoài
    });
    }

    // Active
    link.classList.add('active');

    $('#CategoryForm').submit(function(e){
        e.preventDefault();

        let method = '';

        if(action == "create"){
            method = "AddCategory";
        }
        else if(action == "edit"){
            method = "EditCategory";
        }

        // gửi data
        var sw = showLoadingSwal();
            $.ajax({
                url:'/Dashboard_category/' + method,
                method:'POST',
                data:$(this).serialize(),
                error:err=>{
                    console.log(err)
                },
                success:function(resp){
            var actionText = action == 'create' ? 'thêm' : 'sửa';
            if(resp.trim() == "done"){
            Swal.fire(
                'Completed!',
                'Bạn đã '+ actionText +' danh mục thành công!',
                'success'
                )
            setTimeout(function() {
                location.reload();
            }, 1000);
            $('#myModal').hide();
            }else{
                sw.close();

                //nhớ thêm cái này cho mấy trang kia
                $('#CategoryForm').find('.alert-danger').remove();
                $('#CategoryForm').prepend('<div class="alert alert-danger">'+ resp + '</div>');
            }
        }
    })
    });
</script>