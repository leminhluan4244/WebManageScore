<hr />
<?php
if(!isset($_GET['btnfilter'])) {
    $classMod = new ClassMod();
    $arrayClass = array();
    $arrayClass = $classMod->getClass();
}
else {
    if($_GET['academy']=='NoneAcademy'){
        $classMod = new ClassMod();
        $arrayClass = array();
        $arrayClass = $classMod->getClass();
    }
    else{
        $academyOTB = new AcademyObj();
        $academyOTB->setIdAcademy($_GET['academy']);
        $academyMTB = new AcademyMod();
        $arrayClass = array();
        $arrayClass = $academyMTB->getListClass($academyOTB);
    }
}
function getName($id){
    $academyTo = new AcademyObj();
    $academyTm = new AcademyMod();
    $academyTo= $academyTm->findAcademyByID($id);
    return $academyTo->getAcademyName();
}

?>

<form action="class.manage.php" method="post" id="manageForm">
<table class="table table-bordered table-condensed" id="table-manage-class">

    <thead>
    <tr>
        <th>STT</th>
        <th>Mã Lớp</th>
        <th>Tên lớp</th>
        <th>Niên khóa</th>
        <th>Khoa - viện</th>
        <th>Cố vấn</th>
        <th>Tùy chỉnh</th>
        <th>Chọn tất cả <br /><input type="checkbox" onClick="toggle(this)"></th>
    </tr>
    </thead>



    <tbody class="text-center align-self-center">
    <?php
    $i=0;
    if($arrayClass>0)
    foreach ($arrayClass as $key=>$value){
        echo '<tr>
        <td>'.++$i.'</td>
        <td>
            '.$value->getIdClass().'
        </td>
        <td>
            '.$value->getClassName().'
        </td>
        <td>
            '.$value->getSchoolYear().'
        </td>
        <td>
            '.getName($value->getAcademy_idAcademy()).'
        </td>
        <td>
            <a href="?changeTeacher='.$value->getIdClass().'" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-user"></span></a>
        </td>
        <td>
            <a href="?idClass='.$value->getIdClass().'" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
        </td>
        <td><input type="checkbox" name="xoa[]" id="'.$value->getIdClass().'" value="'.$value->getIdClass().'"/> </td>
       
    </tr>';
    }

    ?>
    </tbody>
</table>
</form>
<script language="JavaScript">
    function toggle(checkall) {
        checkboxes = document.getElementsByName('xoa[]');
        for(var i=0, n=checkboxes.length;i<n;i++)
        {checkboxes[i].checked = checkall.checked;
        }
    }
    $('#table-manage-class').DataTable();
</script>