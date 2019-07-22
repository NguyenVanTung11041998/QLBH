<!-- Page Heading -->
<style type="text/css">
    .trAppend td {
        padding: 2em 3em;
    }

    .trHeader td {
        padding: 0 3em;
    }
</style>

<?php include("Admin/View/Layout/adheader.php"); ?>
<script type="text/javascript">
        $(document).ready(function() {
            var dateControl = document.querySelector('#datePicker');
            var toDay = new Date().toLocaleDateString();
            var ngay = toDay.getDate();
            var thang = toDay.getMonth();
            var nam = toDay.getYear();
            var date = nam + "/" + thang + "" + ngay;
            dateControl.value = date;
        });
</script>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Thêm mới phiếu nhập
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="admin.php?controller=supplier">Dashboard</a>
            </li>
            <li>
                <i class=""></i>  <a href="admin.php?controller=import-coupon">Phiếu nhập</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Thêm mới
            </li>
        </ol>
        <div class="clearfix"></div>
        
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group col-md-6">
            <label>Ngày lập</label>
            <input id="datePicker" type="date" name="txtNgayLap" />
        </div>
        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <table cellspacing="0" border="0" class="table tablePhieuNhapChiTiet">
                <tr class="trHeader">
                    <td><h5><b>Tên sản phẩm</b></h5></td>
                    <td><h5><b>Số lượng nhập</b></h5></td>
                    <td><h5><b>Đơn giá nhập</b></h5></td>
                </tr>
                <tr class="trAppend" style="display: none;">
                    <td>
                        <select name="cmbMaSanPham" style="width: 13em;">
                        <?php 
                            foreach ($listSanPham as $key => $value) 
                                echo '<option value='.$value->GetMaSP().'>'.$value->GetTenSP().'</option>';   
                        ?>
                        </select>
                    </td>
                    <td><input name="txtSoLuongNhap" type="number" value="0" /></td>
                    <td><input name="txtDonGiaNhap" type="text" value="0" />VND</td>
                    <td><button type="button" class="btnDelete btn btn-danger">Xóa</button></td>
                </tr>
                <tr class="trAppended">
                    <td>
                        <select name="cmbMaSanPham" style="width: 13em;">
                        <?php 
                            foreach ($listSanPham as $key => $value) 
                                echo '<option value='.$value->GetMaSP().'>'.$value->GetTenSP().'</option>';   
                        ?>
                        </select>
                    </td>
                    <td><input name="txtSoLuongNhap" type="number" value="0" /></td>
                    <td><input name="txtDonGiaNhap" type="text" value="0" />VND</td>
                    <td><button type="button" class="btnDelete btn btn-danger">Xóa</button></td>
                </tr>
            </table>
            <button type="button" class="btn btn-success btnThem" style="width: 50px;">+</button>
            <button type="submit" class="btn btn-primary">Nhập hàng</button>
        </form>
    </div>
</div>

<script type="text/javascript">
    $('.btnThem').click(function() {
        var tdNoiDung = $('.trAppend').html();
        var trNoiDung = '<tr class="trAppended">' + tdNoiDung +'</tr>';
        $('.tablePhieuNhapChiTiet').append(trNoiDung);
    });

    $('body').delegate(".btnDelete", "click", function() {
        $(this).closest('.trAppended').remove();
    });
</script>
<!-- /.row -->
<?php include("Admin/View/Layout/adfooter.php"); ?>