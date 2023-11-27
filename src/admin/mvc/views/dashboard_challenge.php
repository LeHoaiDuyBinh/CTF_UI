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
                    <h1>Thách thức</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">
                                Challenges
                            </a></li>
                        /
                        <li><a href="#" class="active">CTF</a></li>
                        <button id="addBtn" style="font-size: 14px; border: none; right: 0; position: absolute; margin-right: 26px;margin-bottom: 48px; background-color:var(--primary); color: white;; width: 180px; height: 40px;border-radius: 8px;">
                            Thêm thách thức
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
                            <th style="width: 200px;"><span class="las la-sort"></span> Tên TT</th>
                            <th style="width: 200px;"><span class="las la-sort"></span> Mô tả</th>
                            <th style="width: 120px;"><span class="las la-sort"></span> Điểm</th>
                            <th style="width: 120px;"><span class="las la-sort"></span> Author</th>
                            <th style="width: 200px;"><span class="las la-sort"></span> Flag</th>
                            <th><span class="las la-sort"></span> Chall File Path</th>
                            <th><span class="las la-sort"></span> ACTION</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <?php foreach($data as $challenge): ?>
                            <tr>
                                <td><?php echo $challenge->getChall_id(); ?></td>
                                <td><?php echo $challenge->getDescription(); ?></td>
                                <td><?php echo $challenge->getScore(); ?></td>
                                <td><?php echo $challenge->getAuthor(); ?></td>
                                <td><?php echo $challenge->getChall_path(); ?></td>
                                <td><?php echo $challenge->getCategory(); ?></td>
                                <td>
                                    <i class="fa fa-trash"></i>
                                    <i class="fa fa-pencil editBtn"></i>
                                </td> 
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div id="myModal" class="modal" style="display: none;">
                <div class="modal-content" style="border-radius: 8px;">
                    <form id="ChallForm" enctype="multipart/form-data">
                        <label for="CategoryCode">Tên thách thức:</label>
                        <input style="color: black" type="text" id="TenThachThuc" name="TenThachThuc" required>

                        <label for="OrderName">Mô tả:</label>
                        <input style="color: black" type="text" id="MoTa" name="MoTa" required>

                        <label for="OrderName">Điểm:</label>
                        <input style="color: black" type="text" id="Diem" name="Diem" required>

                        <label for="OrderName">Author:</label>
                        <input style="color: black" type="text" id="Author" name="Author" required>

                        <label for="OrderName">Flag:</label>
                        <input style="color: black" type="text" id="Flag" name="Flag" required>

                        <label for="OrderName">Chall File Path:</label>
                        <input style="color: black; margin-bottom: 20px;" type="file" id="ChallFilePath" name="ChallFilePath" required>
                        <br>
                        <button style="color: white; padding: 14px 20px; margin: 8px 0; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; margin-right: 10px;" type="submit" id="submitBtn">Thêm</button>
                        <button style="color: white; padding: 14px 20px; margin: 8px 0; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;" class="btnCancel" type="button" id="cancelBtn">Hủy</button>
                    </form>
                </div>
            </div>
            <!-- Confirmation Modal -->
            <div id="confirmationModal">
                <p>Bạn có chắc chắn muốn xóa dữ liệu này?</p>
                <button id="confirmDelete" style="background: var(--primary); border: none;padding: 10px 15px; color: white; border-radius: 8px; width: 60px;">Có</button>
                <button id="cancelDelete" onclick="closeConfirmationModal()" style="background: var(--dark-grey); border: none;padding: 10px 10px; color: white; border-radius: 8px; width: 60px;">Không</button>
            </div>
        </main>
    </div>
    </main>
    </div>
</body>

</html>
<script src="/public/js/dashboard.js"></script>
<script>
    const link = document.querySelector(".slide-menu-challenges");
    const addBtn = document.getElementById("addBtn");
    const modal = document.getElementById("myModal");
    const cancelBtn = document.getElementById("cancelBtn");
    const BtnEdit = document.getElementById("submitBtn");
    const tbody = document.getElementById("tbody");
    let isEditing = false;
    let challengesList = [];
    let action = '';

    addBtn.addEventListener('click', function() {
        isEditing = false;
        document.getElementById("TenThachThuc").value = "";
        document.getElementById("MoTa").value = "";
        document.getElementById("Diem").value = "";
        document.getElementById("Author").value = "";
        document.getElementById("Flag").value = "";
        document.getElementById("ChallFilePath").value = "";
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

    $('#ChallForm').submit(function(e){
        e.preventDefault();

        let method = '';

        if(action == "create"){
            method = "AddChall";
        }
        else if(action == "edit"){
            method = "EditChall";
        }

        var formData = new FormData(this);

        // gửi data
        var sw = showLoadingSwal();
            $.ajax({
                url:'/Dashboard_challenge/' + method,
                method: 'POST',
                data: formData,
                processData: false,  // Ngăn jQuery xử lý dữ liệu
                contentType: false,  // Ngăn jQuery đặt tiêu đề 'Content-Type'
                error:err=>{
                    console.log(err)
                },
                success:function(resp){
            var actionText = action == 'create' ? 'thêm' : 'sửa';
            if(resp.trim() == "done"){
            Swal.fire(
                'Completed!',
                'Bạn đã '+ actionText +' chall thành công!',
                'success'
                )
            setTimeout(function() {
                location.reload();
            }, 1000);
            $('#myModal').hide();
            }else{
                sw.close();

                //nhớ thêm cái này cho mấy trang kia
                $('#ChallForm').find('.alert-danger').remove();
                $('#ChallForm').prepend('<div class="alert alert-danger">'+ resp + '</div>');
            }
        }
    })
    });

    // Active
    link.classList.add('active');
</script>