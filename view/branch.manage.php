<?php
    require_once "../controller/header.php"
?>



<div class="container-fluid">
    <!Start content manage student-->
    <div class="container main-academy-container">
        <div class="academy-action-list text-center">

            <h4>Danh sách Chi Hội</h4>
            <div class="form-group">
                <form action="" method="post">
                    <input type="submit" value="Lọc" class="btn btn-primary col-sm-1">
                    <!--Start combobox tinh for chi hoi-->
                    <?php
                    require "../controller/branch/branch.filter.city.php";
                    ?>

                </form>
                <br>



            </div> <!--Bang trich loc-->
            <div class="">
                <table class="table table-bordered table-condensed">
                    <thead>
                    <tr>
                        <th></th>
                        <th>MCH</th>
                        <th>Tên Chi Hội</th>
                        <th>Tỉnh Thành</th>
                        <th>Chọn</th>
                    </tr>
                    </thead>
                    <tbody class="text-center align-self-center">
                    <tr>
                        <td>1</td>
                        <td>
                            <a href="#">
                                CH01
                            </a>
                        </td>
                        <td>
                            <a href="#">
                                Phụng Hiệp
                            </a>
                        </td>
                        <td>Hậu Giang</td>
                        <td>
                            <input type="checkbox" name="idBranch" value="idBranch">
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>CH02</td>
                        <td>Phong Điền</td>
                        <td>Cần Thơ</td>
                        <td>
                            <input type="checkbox" name="idBranch" value="idBranch">
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>CH03</td>
                        <td>Gò Vấp</td>
                        <td>Đồng Tháp</td>
                        <td>
                            <input type="checkbox" name="idBranch" value="idBranch">
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>CH04</td>
                        <td>Kế Sách</td>
                        <td>Sóc Trăng</td>
                        <td>
                            <input type="checkbox" name="idBranch" value="idBranch">
                        </td>
                    </tr>
                    </tbody>
                </table>
                <!--Start chi hoi add button-->
                <form action="" class="form-inline">
                    <a class="btn btn-primary col align-self-center " data-toggle="modal" data-target="#addBranch">
                        <span class="glyphicon glyphicon-plus"></span> Thêm mới Chi Hội
                    </a>
                    <a class="btn btn-warning col align-self-center " data-toggle="modal" data-target="#updateBranch">
                        <span class="glyphicon glyphicon-pencil"></span> Sửa đổi
                    </a>
                    <a class="btn btn-danger col align-self-center " data-toggle="modal" data-target="#deleteBranch">
                        <span class="glyphicon glyphicon-trash"></span> Xóa
                    </a>
                </form>
                <!-- End chi hoit add button-->
                <!-- Start add chi hoi-->
                <div id="addBranch" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Thêm mới Chi Hội</h4>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Mã Chi Hội</b></p>
                                        <input type="text" class="form-control" name="IdBranch" id="addidBranch"
                                               placeholder="Nhập mã chi hội">
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Tên Chi Hội</b></p>
                                        <input type="text" class="form-control" name="branchName" id="addbranchName"
                                               placeholder="Nhập tên chi hội">
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Tỉnh Thành</b></p>
                                        <select class="form-control" name="city" id="addcity">
                                            <option value="CH01">Hậu Giang</option>
                                            <option value="CH02">Cần Thơ</option>
                                            <option value="CH03">Vĩnh Long</option>
                                            <option value="CH04">Sóc Trăng</option>
                                            <option value="CH05">Cà Mau</option>
                                            <option value="CH06">Trà Vinh</option>

                                        </select>
                                    </fieldset>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                        <button type="submit" class="btn btn-primary" name="addNewMember">Thêm</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>



                <!-- end them chi hoi-->
                <!-- Start update chi hoi-->
                <div id="updateBranch" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Thêm mới Chi Hội</h4>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Mã Chi Hội</b></p>
                                        <input type="text" class="form-control" name="idBranch" id="idBranch"
                                               placeholder="Nhập mã chi hội">
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Tên Chi Hội</b></p>
                                        <input type="text" class="form-control" name="branchName" id="branchName"
                                               placeholder="Nhập tên chi hội">
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Tỉnh Thành</b></p>
                                        <select class="form-control" name="city" id="city">
                                            <option value="CH01">Hậu Giang</option>
                                            <option value="CH02">Cần Thơ</option>
                                            <option value="CH03">Vĩnh Long</option>
                                            <option value="CH04">Sóc Trăng</option>
                                            <option value="CH05">Cà Mau</option>
                                            <option value="CH06">Trà Vinh</option>

                                        </select>
                                    </fieldset>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                        <button type="submit" class="btn btn-primary" name="addNewMember">Thêm</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <!--Start delete chi hoi-->
                <div id="deleteBranch" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="d">Xóa chi hội!</h4>
                            </div>
                            <div class="modal-body">
                                <h4>Hành động này cần xác nhận: Không thể hoàn tác!</h4>
                                <p>Vui lòng kiểm tra cẩn thận!</p>
                                <form action="#" method="post">
                                    <div class="modal-footer">
                                        <input type="hidden" name="deleteBranch" id="delete">
                                        <button type="submit" name="deleteYes" class="btn btn-danger">Đồng ý</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End delete chi hoi-->
                <!--end-->

            </div>
        </div>

    </div>
    <!--End content manage student-->
</div>

<?php 
	require_once "../controller/footer.php";
?>
</body>

</html>
