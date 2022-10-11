<?php 
	$conn = mysqli_connect("localhost", "root", "", "fan_shop");
	mysqli_set_charset($conn, "UTF8");
	//include lấy tất cả văn bản / mã / đánh dấu tồn tại trong tệp được chỉ định và sao chép nó vào tệp sử dụng câu lệnh
	 
	$loadMoreNewCount =  isset($_POST['loadMoreNewCount'])? $_POST['loadMoreNewCount'] : 8; //lay so luong item product 
   
    //kiểm tra khi người dùng bấm tìm kiếm + seemore tìm kiếm
    if(isset($_GET['btn_search'])){
    	if($_GET['btn_search'] == 'btn_search'){
    		$search = isset($_GET['input_search'])? $_GET['input_search'] : ''; // lấy dữ liệu từ ô tìm kiếm
	    	//query search
	    	$sql = "SELECT * FROM `product` WHERE `name` LIKE '%".$search."%' ORDER BY `id_product` DESC ";
	    	$data = mysqli_query($conn,$sql); //enforcement query seach
	    	//kiểm tra nếu có dữ liệu load dữ liệu ra
	    	if(mysqli_num_rows($data) > 0){
	    		load($data);
	    		return;
	    	}
	    	// nếu dữ liệu tìm kiếm rỗng -> quay về  index.php + show alert
	    	echo "<script language='javascript'>";
	        echo "alert('No products found ');";
	        echo "window.location='index.php';";
	        echo "</script>";
	        return;
    	}
    }

	$sql = "SELECT * FROM `product` ORDER BY id_product DESC LIMIT $loadMoreNewCount";
    		$data = mysqli_query($conn,$sql); //enforcement query seemore
    		load($data);
    ?>
    <?php 
     function load($data){
	    // $data = mysqli_query($conn,$sql); //thực thi sql
	        while ($row = mysqli_fetch_assoc($data)) { //lặp dữ liệu + đổ data -> view    
	        ?>
	 
	        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	            <div class="product_list">
                                            <div class="single_product repomsive_768" style="margin-top: 25px">
                                                <a href="product.php?id_product=<?php echo $row['id_product'] ?>" ><img src="<?php echo $row['image'] ?>" alt="" /></a>
                                                <div class="product_details">
                                                    <h2 class="ellipsis"><?php echo $row['name']; ?></h2>
                                                    <p><span class="popular_price"><?php echo ceil((($row['price'])*0.00004)); ?> $</span></p>
                                                    <style type="text/css">
                                                        .ellipsis {
                                                        white-space: nowrap;
                                                        text-overflow: ellipsis;
                                                        overflow: hidden;
                                                        padding-top: 10px;
                                                        }
                                                     </style>
                                                </div>
                                                
                                            </div>
                                            <div >
                                                    <div class="star_icon">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product_button">
                                                        <div class="cart_details">
                                                            <a href="product.php?buy_now=buy_now&id_product=<?php echo $row['id_product']; ?>" ><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                                             <!-- <i class="far fa-heart"></i> -->
                                                        </div>
                                                        <div class="cart_details">
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
	        </div>
  <?php } }?>
