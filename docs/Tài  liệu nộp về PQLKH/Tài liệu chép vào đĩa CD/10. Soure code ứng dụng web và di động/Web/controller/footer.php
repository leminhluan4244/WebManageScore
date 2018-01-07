<!---->
<!--Start footer-->
<br />
<footer class="footer text-center">
    Trường Đại học Cần Thơ <br> Nhóm nghiên cứu khoa học
</footer>
<script>
    $(function(){
        var footer = $('footer');
        if ($(footer).position().top + $(footer).height() < $(window).height() - 45){
            $(footer).css({
                "bottom": "0"
            });
        }
    });
</script>
<!--End footer-->
<script src="../public/js/common.js"></script>
<script src="../public/js/academy_action.js"></script>
<!--End all body-->
</body>

</html>
