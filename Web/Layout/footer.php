
<?php
include('config.php');
?>
<!--------------------FOOTER--------------------------- -->
<footer class="section-p1"><!--mục footer -->
    <div class="col">
        <h4>HỖ TRỢ</h4><!--Hệ thông cửa hàng -->
        <p>Quý khách có thể liên hệ với chúng tôi qua Hotline +84 2838614107 </p>
        <p>Câu hỏi thường gặp</p>
        <p>Chăm sóc sản phẩm</p>
        <p>Cửa hàng</p>
    </div> 
    <div class="col">
        <h4>DỊCH VỤ</h4><!--Thông tin liên hệ -->
        <p>Dịch vụ bảo dưỡng</p>
        <p>Dịch vụ cá nhân hóa</p>
        <p>Nghệ thuật tặng quà</p>
        <p>Tải ứng dụng của chúng tôi</p>
    </div>
    <div class="col">
        <h4>KẾT NỐI VỚI CHÚNG TÔI</h4><!--Follow us on social media-->
        <p>Đăng ký để nhận thông tin mới nhất về bộ sưu tập, chiến dịch và video</p>      
        <p>Theo dõi chúng tôi</p>     
    </div>    
</footer>
<style>
/*----------------FOOTER--------------------*/

footer{
    background:rgb(0, 0, 0);
    display:flex;
    margin-top:0px;
    justify-content: space-around;
    margin-bottom:0px;
    padding-bottom: 20px;   /*chỉnh size background đen */
    padding-left:150px;
    
}
footer.col{
    
    display:flex;
    flex-direction:column;
    align-items: flex-start;
    margin-top: 100p;
}
footer h4{   /*chỉnh size chữ H4*/
    color:rgb(255, 255, 255);
    font-size: 16px;
    padding-bottom:30px;
    margin-top:40px;
    font-weight: bold;
}
footer p{  /*chỉnh size chữ P*/
    color:rgb(255, 255, 255);
    font-size: 13px;
    text-decoration:none;
    margin-bottom:15px;

 
}
footer li{ /*chỉnh icon fb,instagram,youtube*/
    color:#fff;
    margin-top: 3px;
    font-weight: bold;
    
   
}

</style>

<style>