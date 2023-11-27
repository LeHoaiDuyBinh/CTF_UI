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
                <table width="100%" id="myTable">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th style="width: 50px;"><span class="las la-sort"></span> ID</th>
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
                        <?php ?>
                        <?php foreach($data['chall'] as $challenge): ?>
                            <tr>
                                <td data-label="TenTT"><?php echo $challenge->getChall_id(); ?></td>
                                <td data-label="TenTT"><?php echo $challenge->getChall_name(); ?></td>
                                <td data-label="MoTa"><?php echo $challenge->getDescription(); ?></td>
                                <td data-label="Diem"><?php echo $challenge->getScore(); ?></td>
                                <td data-label="TacGia"><?php echo $challenge->getAuthor(); ?></td>
                                <td data-label="Flag"><?php echo $challenge->getFlag(); ?></td>
                                <td data-label="ChallPath"><?php echo $challenge->getChall_path(); ?></td>
                                <td>
                                    <i class="fa fa-trash"></i>
                                    <i class="fa fa-pencil editBtn"></i>
                                </td> 
                                <td data-label="DM_id" style="display: none !important;"><?php echo $challenge->getCategory_id(); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div id="myModal" class="modal" style="display: none;">
                <div class="modal-content" style="border-radius: 8px;">
                    <form id="ChallForm" enctype="multipart/form-data">
                            
                    <label for="DM">Danh Mục:</label>
                        <select style="color: black; width: 100%; height: 46px;" id="DanhMuc" name="DanhMuc" required>
                            <?php foreach ($data['category'] as $challenge) { ?>
                                <option value="<?php echo $challenge->getCategory_id(); ?>">
                                    <?php echo $challenge->getName(); ?>
                                </option>
                            <?php } ?>
                        </select>
                            
                        <label style="margin-top: 10px;" for="TenTT">Tên thách thức:</label>
                        <input style="color: black" type="text" id="TenThachThuc" name="TenThachThuc" required>

                        <label style="margin-top: 10px;" for="Des">Mô tả:</label>
                        <input style="color: black" type="text" id="MoTa" name="MoTa" required>

                        <label for="Score">Điểm:</label>
                        <input style="color: black" type="text" id="Diem" name="Diem" required>

                        <label for="Author">Author:</label>
                        <input style="color: black" type="text" id="TacGia" name="TacGia" required>

                        <label for="Flag">Flag:</label>
                        <input style="color: black" type="text" id="flag" name="flag" required>

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
        document.getElementById("MoTa").value = "";
        document.getElementById("Diem").value = "";
        document.getElementById("TacGia").value = "";
        document.getElementById("flag").value = "";
        document.getElementById("TenThachThuc").value = "";
        var challForm = document.getElementById("ChallForm");
        var existingLabel = document.getElementById("CFP");
        var existingInput = document.getElementById("ChallFilePath");
        if (!existingLabel && !existingInput) {
            var newInput = document.createElement("input");
            var newLabel = document.createElement("label");
            newLabel.setAttribute("for", "CFP");
            newLabel.setAttribute("id", "CFP")
            newLabel.textContent = "Chall File Path";
            newInput.setAttribute("type", "file");
            newInput.setAttribute("id", "ChallFilePath");
            newInput.setAttribute("name", "ChallFilePath");
            newInput.style.width = '100%';
            challForm.insertBefore(newLabel, BtnEdit);
            challForm.insertBefore(newInput, BtnEdit);
        }
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

    //--------------------ĐỔ DỮ LIỆU LÊN FORM SỬA-----------------
    $(document).ready(function () {
        var productForm = document.getElementById("ChallForm");
        $('.editBtn').on('click', function () {
            action = 'edit';
            submitBtn.innerText = "Lưu";
            var row = $(this).closest('tr');
            var categoryData = <?php echo json_encode($data['category']); ?>;
            var selectElement = document.getElementById("categorySelect");
            var DM_ID = row.find('td[data-label="DM_id"]').text();
            var option = document.createElement("option");
            var tenTT = row.find('td[data-label="TenTT"]').text();
            var moTa = row.find('td[data-label="MoTa"]').text();
            var diem = row.find('td[data-label="Diem"]').text();
            var tacGia = row.find('td[data-label="TacGia"]').text();
            var flag = row.find('td[data-label="Flag"]').text();  
            var existingLabel = document.getElementById("CFP");
            var existingInput = document.getElementById("ChallFilePath");

            if (existingLabel && existingInput) {
                existingLabel.remove();
                existingInput.remove();
            }          
            var selectElement = document.getElementById("DanhMuc");
            selectElement.value = DM_ID;
            $('#TenThachThuc').val(tenTT);
            $('#MoTa').val(moTa);
            $('#Diem').val(diem);
            $('#TacGia').val(tacGia);
            $('#flag').val(flag);
            $('#myModal').show();
            // check++;
        });

        $('#cancelBtn').on('click', function () {
            $('#myModal').hide();
        });
    });
    // XÓA
    const table2 = document.querySelector('#myTable');
    table2.addEventListener('click', function(event) {
    if (event.target.classList.contains('fa-trash')) {
        const row = event.target.closest('tr');
        const ID = row.cells[0].textContent.trim();

        Swal.fire({
            title: 'Bạn có chắc là muốn xóa danh mục này không?',
            text: "Không thể hoàn tác!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Vẫn xóa',
            cancelButtonText: 'Hủy'
        }).then((result) => {
        if (result.isConfirmed) {
        var sw = showLoadingSwal();
        $.ajax({
            url: '/Dashboard_challenge/DeleteChall',
            type: 'POST',
            data: { ID: ID },
            success: function(response) {
            if (response.trim() == "done") {
                Swal.fire(
                'Completed!',
                'Bạn đã xóa chall thành công!',
                'success'
                )
                // sau 2 giây sẽ tải lại trang
                setTimeout(function() {
                    location.reload();
                }, 1000); 
            } else {
                sw.close();
                // Nếu có lỗi thì hiển thị thông báo lỗi
                Swal.fire(
                'Oops...',
                response,
                'error'
                )
            }
            },
        });
        }
    })
    }
    });
    // Active
    link.classList.add('active');
</script>