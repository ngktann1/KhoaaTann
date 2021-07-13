<? php
/ * Cố gắng kết nối Heroku Postgres 
	Giả sử bạn đang chạy tiện ích bổ sung Heroku Postgres
	với cài đặt mặc định * /
	$ link = pg_connect ( "host = ec2-34-234-228-127.compute-1.amazonaws.com
	dbname = d36sv7mjck4h8 port = 5432 
	user = gvdmloycusjmer
	password = faeadc6d10feb6b3776f74273cc91eed25ad5e23c47779956ae28e8018837a05
	sslmode = request " );

	// Kiểm tra kết nối
	if ( $ link === false ) {
		die ( "LỖI: Không thể kết nối." );
	} khác {
		echo  "Kết nối với Heroku Postgres đã được thiết lập" ;
	}

    $ productname = $ _REQUEST [ 'product_name' ];
    $ customername = $ _REQUEST [ 'customer_name' ];
    $ số lượng = $ _REQUEST [ 'số lượng' ];
    $ totalprice = $ _REQUEST [ 'totalprice' ];
    $ des = $ _REQUEST [ 'mô tả' ];
    $ date = $ _REQUEST [ 'date' ];
	// Cố gắng thực hiện truy vấn chèn
	$ sql = "CHÈN VÀO hóa đơn (product_name, customer_name, số lượng, mô tả, total_price, ngày) GIÁ TRỊ ('$ productname', '$ customername', '$ number', '$ des', '$ totalprice', '$ date ') " ;

	// $ sql = "CHÈN VÀO public.Product (id, product_name, category, date, price, description) VALUES ('001', 'Sản phẩm của tôi', 'Mặc định', '04/24/2020', '100' ,'Mặc định')";

	if ( pg_query ( $ link , $ sql )) {
		echo  $ desc ;
		echo  "Đã thêm thành công bản ghi." ;
	} khác {
		echo  "LỖI: Không thể thực thi $ sql" . pg_error ( $ link );
	}

	// Đóng kết nối
	pg_close ( $ link );