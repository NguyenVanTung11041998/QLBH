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
        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="txtSoLuong" id="txtSoLuong" />
            <div class="form-group col-md-6">
                <label>Ngày lập</label>
                <input id="datePicker" type="date" name="txtNgayNhap" value="<?php echo date('Y-m-d'); ?>"/>
            </div>
            <table cellspacing="0" border="0" class="table tablePhieuNhapChiTiet">
                <tr class="trHeader" data-id="-1">
                    <td><h5><b>Tên sản phẩm</b></h5></td>
                    <td><h5><b>Số lượng nhập</b></h5></td>
                    <td><h5><b>Đơn giá nhập</b></h5></td>
                </tr>
                <tr class="trAppend" data-id="-1" style="display: none;">
                    <td>
                        <select class="cmbSanPham" style="width: 13em; height: 1.75em;">
                        <?php 
                            foreach ($listSanPham as $key => $value) 
                                echo '<option value='.$value->GetMaSP().'>'.$value->GetTenSP().'</option>';   
                        ?>
                        </select>
                    </td>
                    <td><input class="txtSoLuongNhap" type="number" value="0" /></td>
                    <td><input class="txtDonGiaNhap" type="text" value="0" />VND</td>
                    <td><button type="button" class="btnDelete btn btn-danger">Xóa</button></td>
                </tr>
                <tr class="trAppended" data-id="0">
                    <td>
                        <select class="cmbSanPham" style="width: 13em; height: 1.75em;" name="MaSP_0">
                        <?php 
                            foreach ($listSanPham as $key => $value) 
                                echo '<option value='.$value->GetMaSP().'>'.$value->GetTenSP().'</option>';   
                        ?>
                        </select>
                    </td>
                    <td><input class="txtSoLuongNhap" type="number" value="0" name="SoLuongNhap_0" /></td>
                    <td><input class="txtDonGiaNhap" type="text" value="0" name="SoLuongNhap_0" />VND</td>
                    <td><button type="button" class="btnDelete btn btn-danger">Xóa</button></td>
                </tr>
            </table>
            <button type="button" class="btn btn-success btnThem" style="width: 50px;">+</button>
            <button type="submit" class="btn btn-primary" name="btnNhapHang">Nhập hàng</button>
        </form>
    </div>
</div>

<script type="text/javascript">
    $('.btnThem').click(function() {
        var idCuoi = $('.tablePhieuNhapChiTiet').find("tr:last-child").attr("data-id");
        var i = parseInt(idCuoi) + 1;
        var tdNoiDung = $('.trAppend').html();
        var trNoiDung = '<tr class="trAppended" data-id="' + i +'">' + tdNoiDung + '</tr>';
        $('.tablePhieuNhapChiTiet').append(trNoiDung);
        LoadIDLenThe();
        var rowCount = $('.trAppended').length;
        document.cookie = "RowCount = " + rowCount;
    });

    function LoadIDLenThe() 
    {
        $('.trAppended').each(function() {
            var id = $(this).attr("data-id");
            var nameMaSP = "MaSP_" + id;
            var nameSoLuongNhap = "SoLuongNhap_" + id;
            var nameDonGiaNhap = "DonGiaNhap_" + id;
            $(this).find(".cmbSanPham").prop("name", nameMaSP);
            $(this).find(".txtSoLuongNhap").prop("name", nameSoLuongNhap);
            $(this).find(".txtDonGiaNhap").prop("name", nameDonGiaNhap);
        });
    }

    function CapNhatID()
    {
        var idDau = $('.tablePhieuNhapChiTiet').find(".trHeader").attr("data-id");
        var i = parseInt(idDau);
        $('.trAppended').each(function() {
            var id = ++i;
            console.log("?"+ id + "?");
            $(this).attr("data-id", id);
            var nameMaSP = "MaSP_" + id;
            var nameSoLuongNhap = "SoLuongNhap_" + id;
            var nameDonGiaNhap = "DonGiaNhap_" + id;
            $(this).find(".cmbSanPham").prop("name", nameMaSP);
            $(this).find(".txtSoLuongNhap").prop("name", nameSoLuongNhap);
            $(this).find(".txtDonGiaNhap").prop("name", nameDonGiaNhap);
        });
        var rowCount = $('.trAppended').length;
        document.cookie = "RowCount = " + rowCount;
    }

    $('body').delegate(".btnDelete", "click", function() {
        $(this).closest('.trAppended').remove();
        CapNhatID();
    });
</script>
<!-- /.row -->
<?php include("Admin/View/Layout/adfooter.php"); ?>