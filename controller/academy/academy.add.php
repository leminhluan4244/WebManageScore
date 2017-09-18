                <!-- Start add academy-->
                <div id="addAcademy" class="modal fade " tabindex="-1" role="dialog" aria-labelledby aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Thêm mới khoa viện</h4>
                            </div>
                            <div class="modal-body ">
                                <form action="academy.mamage.php" method="post">

                                    <fieldset class="form-group">
                                        <p class="text-left "><b>Tên khoa - viện</b></p>
                                        <input type="text" class="form-control" name="addAcademyName" id="addAcademyName"
                                               placeholder="Nhập tên khoa - viện">

                                    </fieldset>

                                    <fieldset class="form-group">
                                        <p class="text-left"><b>Mã khoa - viện</b></p>
                                        <input type="text" class="form-control" name="addIdAcademy" id="addIdAcademy"
                                               placeholder="Nhập mã khoa viện">
                                    </fieldset>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                        <button type="submit" class="btn btn-primary" name="btnAdd">Thêm</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End add academy-->
                <?php
//                if(!isset($_POST[addAccountName])){
//                    //thông báo không được rỗng
//                }
//                if(!isset($_POST[addIdAccount])){
//                    //thông báo không được rỗng
//                }
//                if(!isset($_POST[addBrithday])){
//                    //thông báo không được rỗng
//                }
//                if(!isset($_POST[addAddress])){
//                    //thông báo không được rỗng
//                }
//                if(!isset($_POST[addSex])){
//                    //thông báo không được rỗng
//                }
//                if(!isset($_POST[addPhone])){
//                    //thông báo không được rỗng
//                }
//                if(!isset($_POST[addEmail])){
//                    //thông báo không được rỗng
//                }
//                if(!isset($_POST[addPassword])){
//                    //thông báo không được rỗng
//                }
//                if(!isset($_POST[addClassName])){
//                    //thông báo không được rỗng
//                }
//                if(!isset($_POST[addAcademyName])){
//                    //thông báo không được rỗng
//                }
//                if(!isset($_POST[addPermision_Position])){
//                    //thông báo không được rỗng
//                }
                ?>