-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 07:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fahasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `ward` varchar(50) NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `name`, `phone_number`, `address`, `city`, `district`, `ward`, `is_default`, `user_id`) VALUES
(1, 'Kiu', '0941974458', '221 Lê Văn Việt', 'Tỉnh Hưng Yên', 'Thành phố Hưng Yên', 'Xã Tân Hưng', 1, 1),
(3, 'Nguyễn Phan Anh Tuấn', '0941974458', '691 Lê Văn Việt', 'Thành phố Hồ Chí Minh', 'Quận 9', 'Phường Long Thạnh Mỹ', 0, 1),
(5, 'Anh Tuan', '2321312312', 'Lô 34 đường số 10 KĐT Lê Hồng Phong', 'Tỉnh Khánh Hòa', 'Thành phố Nha Trang', 'Phường Phước Hải', 0, 1),
(6, 'Nguyễn Phan Anh Tuấn', '0838940955', '580AB Nguyen Oanh', 'Thành phố Hồ Chí Minh', 'Quận Gò Vấp', 'Phường 17', 1, 6),
(7, 'Ho', '8584449394', '149X/23 Tô Hiến Thành', 'Thành phố Hồ Chí Minh', 'Quận 11', 'Phường 05', 0, 6),
(10, 'Nguyễn Phan Anh Tuấn', '0941431212', '639 Tô Hiến Thành', 'Tỉnh Vĩnh Phúc', 'Huyện Tam Dương', 'Xã Hoàng Lâu', 1, 30),
(13, 'Tuấn HCMUT', '0941431222', '1 Võ Văn Ngân', 'Thành phố Hồ Chí Minh', 'Quận Thủ Đức', 'Phường Linh Trung', 1, 32);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `discount` int(11) NOT NULL DEFAULT 0,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `publisher_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `publication_date` timestamp NULL DEFAULT NULL,
  `page_quantity` int(11) DEFAULT NULL,
  `book_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `description`, `image`, `price`, `discount`, `supplier_id`, `publisher_id`, `category_id`, `quantity`, `publication_date`, `page_quantity`, `book_code`, `created_at`, `updated_at`) VALUES
(2, 'Cây Cam Ngọt Của Tôi', 'José Mauro de Vasconcelos', '“Vị chua chát của cái nghèo hòa trộn với vị ngọt ngào khi khám phá ra những điều khiến cuộc đời này đáng sống... một tác phẩm kinh điển của Brazil.” - Booklist\n\n“Một cách nhìn cuộc sống gần như hoàn chỉnh từ con mắt trẻ thơ… có sức mạnh sưởi ấm và làm tan nát cõi lòng, dù người đọc ở lứa tuổi nào.” - The National', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_217480.jpg', 90000, 50, 1, 2, 1, 120, '2022-10-08 17:00:00', 224, '8935235228351', '2022-10-08 04:59:01', '2022-10-09 09:27:26'),
(3, 'Trăng Giữa Dòng Sông', 'Nguyên Sinh', 'An impassioned meditation on the consequences of sexual exploitation and the dead ends of forgiveness', 'https://cdn0.fahasa.com/media/catalog/product/b/i/bia_trang-giua-dong-song_bia-1.jpg', 108000, 7, 2, 3, 2, 100, '2022-02-09 17:00:00', 184, '9781787703582', '2022-10-09 01:10:53', '2022-10-09 09:27:12'),
(6, 'Nhà Giả Kim (Tái Bản 2020)', 'Paulo Coelho', NULL, 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_36793.jpg', 79000, 18, 3, 1, 1, 14, '2022-06-01 17:00:00', 227, '8935235226272', '2022-10-09 09:29:04', '2022-10-09 09:29:04'),
(7, 'Bố Già (Đông A)', 'Mario Puzo', 'Thế giới ngầm được phản ánh trong tiểu thuyết Bố già là sự gặp gỡ giữa một bên là ý chí cương cường và nền tảng gia tộc chặt chẽ theo truyền thống mafia xứ Sicily với một bên là xã hội Mỹ nhập nhằng đen trắng, mảnh đất màu mỡ cho những cơ hội làm ăn bất chính hứa hẹn những món lợi kếch xù. Trong thế giới ấy, hình tượng Bố già được tác giả dày công khắc họa đã trở thành bức chân dung bất hủ trong lòng người đọc. Từ một kẻ nhập cư tay trắng đến ông trùm tột đỉnh quyền uy, Don Vito Corleone là con rắn hổ mang thâm trầm, nguy hiểm khiến kẻ thù phải kiềng nể, e dè, nhưng cũng được bạn bè, thân quyến xem như một đấng toàn năng đầy nghĩa khí. Nhân vật trung tâm ấy đồng thời cũng là hiện thân của một pho triết lí rất “đời” được nhào nặn từ vốn sống của hàng chục năm lăn lộn giữa chốn giang hồ bao phen vào sinh ra tử, vì thế mà có ý kiến cho rằng “Bố già là sự tổng hòa của mọi hiểu biết. Bố già là đáp án cho mọi câu hỏi”.', 'https://cdn0.fahasa.com/media/catalog/product/8/9/8936071673381.jpg', 110000, 5, 1, 4, 1, 23, '2019-01-16 17:00:00', 642, '8936071673381', '2022-10-09 09:33:04', '2022-10-09 09:33:04'),
(8, 'Thay Đổi Cuộc Sống Với Nhân Số Học', 'Lê Đỗ Quỳnh Hương', 'Đầu năm 2020, chuỗi chương trình “Thay đổi cuộc sống với Nhân số học” của  biên tập viên, người dẫn chương trình quen thuộc tại Việt Nam Lê Đỗ Quỳnh Hương ra đời trên Youtube, với mục đích chia sẻ kiến thức, giúp mọi người tìm hiểu và phát triển, hoàn thiện bản thân, các mối quan hệ xã hội thông qua bộ môn Nhân số học. Chương trình đã nhận được sự yêu mến và phản hồi tích cực của rất nhiều khán giả và độc giả sau mỗi tập phát sóng.', 'https://cdn0.fahasa.com/media/catalog/product/t/d/tdcsvnsh.jpg', 248000, 29, 2, 1, 3, 51, '2016-02-24 17:00:00', 416, '8935086853634', '2022-10-09 09:35:46', '2022-10-30 09:08:48'),
(9, 'Hiểu Về Trái Tim (Tái Bản 2019)', 'Minh Niệm', '“Hiểu về trái tim” là một cuốn sách đặc biệt được viết bởi thiền sư Minh Niệm. Với phong thái và lối hành văn gần gũi với những sinh hoạt của người Việt, thầy Minh Niệm đã thật sự thổi hồn Việt vào cuốn sách nhỏ này.', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_14922.jpg', 138000, 9, 3, 1, 1, 150, '2022-01-26 17:00:00', 480, '8935086849903', '2022-10-09 17:24:31', '2022-10-30 09:42:35'),
(10, 'Rèn Luyện Tư Duy Phản Biện', 'Albert Rutherford', 'Như bạn có thể thấy, chìa khóa để trở thành một người có tư duy phản biện tốt chính là sự tự nhận thức. Bạn cần phải đánh giá trung thực những điều trước đây bạn nghĩ là đúng, cũng như quá trình suy nghĩ đã dẫn bạn tới những kết luận đó. Nếu bạn không có những lý lẽ hợp lý, hoặc nếu suy nghĩ của bạn bị ảnh hưởng bởi những kinh nghiệm và cảm xúc, thì lúc đó hãy cân nhắc sử dụng tư duy phản biện! Bạn cần phải nhận ra được rằng con người, kể từ khi sinh ra, rất giỏi việc đưa ra những lý do lý giải cho những suy nghĩ khiếm khuyết của mình. Nếu bạn đang có những kết luận sai lệch này thì có một sự thật là những đức tin của bạn thường mâu thuẫn với nhau và đó thường là kết quả của thiên kiến xác nhận, nhưng nếu bạn biết điều này, thì bạn đã tiến gần hơn tới sự thật rồi!', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_18448.jpg', 99000, 34, 4, 1, 1, 123, '2017-01-11 17:00:00', 208, '8936066687812', '2022-10-09 17:34:38', '2022-10-09 17:34:38'),
(11, 'Càng Kỷ Luật, Càng Tự Do', 'Ca Tây', 'KỶ LUẬT vốn là ván cờ bạn phải tự đấu với chính mình. Thắng - bạn sẽ có được “bản năng của người mạnh mẽ nhất”, đó là sự tự kiểm soát bản thân. Thua - bạn mãi sống trong cảm giác tạm bợ, nuối tiếc. Càng dễ dàng dung túng cho những thói quen trì hoãn bao nhiêu, cuộc sống của bạn sẽ đi càng nhanh tới sự mất kiểm soát và thiếu quy hoạch bấy nhiêu.', 'https://cdn0.fahasa.com/media/catalog/product/c/o/cover_c_ng-k_-lu_t_-c_ng-t_-do.jpg', 119000, 36, 4, 5, 3, 188, '2022-05-09 17:00:00', 288, '8936186546945', '2022-10-26 11:53:57', '2022-10-26 11:53:57'),
(14, 'Muôn Kiếp Nhân Sinh', 'Nguyên Phong', '“Muôn kiếp nhân sinh” là tác phẩm do Giáo sư John Vũ - Nguyên Phong viết từ năm 2017 và hoàn tất đầu năm 2020 ghi lại những câu chuyện, trải nghiệm tiền kiếp kỳ lạ từ nhiều kiếp sống của người bạn tâm giao lâu năm, ông Thomas – một nhà kinh doanh tài chính nổi tiếng ở New York. Những câu chuyện chưa từng tiết lộ này sẽ giúp mọi người trên thế giới chiêm nghiệm, khám phá các quy luật về luật Nhân quả và Luân hồi của vũ trụ giữa lúc trái đất đang gặp nhiều tai ương, biến động, khủng hoảng từng ngày.', 'https://cdn0.fahasa.com/media/catalog/product/m/u/muonkiepnhansinh.jpg', 168000, 36, 2, 5, 1, 200, '0000-00-00 00:00:00', 408, '8935086851760', NULL, NULL),
(15, 'Hướng Dẫn Kiếm Tiền Trên Tiktok', 'Giang Trung Nguyên', 'TikTok là một phần mềm giao tiếp xã hội để tạo nhạc và có thể quay các video ngắn, đồng thời, đây cũng là cộng đồng video có độ dài 15 giây chuyên dành cho giới trẻ. Fan có thể lựa chọn ca khúc và quay một video ngắn 15 giây thông qua phần mềm này và tạo ra tác phẩm của chính mình. Không ít cá nhân thu được lợi tức trên TikTok. Ngoài ra, cũng có không ít công ty cũng xem TikTok như một địa điểm marketing mới của mình.', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_244718_1_1015.jpg', 189000, 20, 3, 3, 3, 200, '2020-12-06 17:00:00', 424, '8936066691260', NULL, NULL),
(16, 'Ba Bước Đến Vàng', 'Sharon L, Lechter, Greg S, Reid', 'Ba bước đến vàng chia sẻ những tinh hoa và tư vấn từ rất nhiều con người phi thường, những người đã kiên trì vững bước trong những thời điểm khó khăn và trở thành hình mẫu cho tất cả chúng ta. Câu chuyện này được xây dựng dựa trên trải nghiệm thực tế của tác giả khi khám phá ra triết lý của Napoleon Hill đã truyền cảm hứng lớn lao cho thành công ngoài sức tưởng tượng của các nhà quản lý, nhà nhân đạo, vận động viên và doanh nhân. Tác giả đã viết ra một câu chuyện hấp dẫn; ngoại trừ ba nhân vật Mia, David và Jonathan Buckland, tất cả các nhân vật trong cuốn sách này đều có thật và chính tác giả có đặc ân là được nói chuyện trực tiếp với họ. Dũng khí và thành tựu của họ là có thật. Những bài học cuộc sống mà họ đưa ra là chân thành. Bố cục câu chuyện là những lời của chính Napoleon Hill đã viết ra vào đầu thế kỉ 20. Cho đến tận ngày hôm nay, những lời này vẫn còn mạnh mẽ như khi chúng được viết ra lần đầu tiên.\r\n\r\nMã hàng	8935210302045\r\nTên Nhà Cung Cấp	Tân Việt\r\nTác giả	Sharon L, Lechter, Greg S, Reid\r\nNgười Dịch	Nghi Phương\r\nNXB	Dân Trí\r\nNăm XB	2022\r\nTrọng lượng (gr)	420\r\nKích Thước Bao Bì	20.5 x 14.5 cm\r\nSố trang	342\r\nHình thức	Bìa Mềm\r\nSản phẩm hiển thị trong	\r\nTân Việt\r\nRƯỚC DEAL LINH ĐÌNH VUI ĐÓN TRUNG THU\r\nSản phẩm bán chạy nhất	Top 100 sản phẩm Khởi Nghiệp - Làm Giàu bán chạy của tháng\r\nGiá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...\r\nBa bước đến vàng chia sẻ những tinh hoa và tư vấn từ rất nhiều con người phi thường, những người đã kiên trì vững bước trong những thời điểm khó khăn và trở thành hình mẫu cho tất cả chúng ta. Câu chuyện này được xây dựng dựa trên trải nghiệm thực tế của tác giả khi khám phá ra triết lý của Napoleon Hill đã truyền cảm hứng lớn lao cho thành công ngoài sức tưởng tượng của các nhà quản lý, nhà nhân đạo, vận động viên và doanh nhân. Tác giả đã viết ra một câu chuyện hấp dẫn; ngoại trừ ba nhân vật Mia, David và Jonathan Buckland, tất cả các nhân vật trong cuốn sách này đều có thật và chính tác giả có đặc ân là được nói chuyện trực tiếp với họ. Dũng khí và thành tựu của họ là có thật. Những bài học cuộc sống mà họ đưa ra là chân thành. Bố cục câu chuyện là những lời của chính Napoleon Hill đã viết ra vào đầu thế kỉ 20. Cho đến tận ngày hôm nay, những lời này vẫn còn mạnh mẽ như khi chúng được viết ra lần đầu tiên.', 'https://cdn0.fahasa.com/media/catalog/product/8/9/8935210302045.jpg', 145000, 20, 3, 3, 3, 200, '2021-01-03 17:00:00', 342, '8935210302045', NULL, NULL),
(19, 'Đắc Nhân Tâm (Tái Bản 2021)', 'Dale Carnegie', 'Đắc nhân tâm của Dale Carnegie là quyển sách của mọi thời đại và một hiện tượng đáng kinh ngạc trong ngành xuất bản Hoa Kỳ. Trong suốt nhiều thập kỷ tiếp theo và cho đến tận bây giờ, tác phẩm này vẫn chiếm vị trí số một trong danh mục sách bán chạy nhất và trở thành một sự kiện có một không hai trong lịch sử ngành xuất bản thế giới và được đánh giá là một quyển sách có tầm ảnh hưởng nhất mọi thời đại.', 'https://cdn0.fahasa.com/media/catalog/product/d/n/dntttttuntitled.jpg', 86000, 35, 1, 9, 3, 198, '2022-12-21 17:00:00', 320, '8935086854754', NULL, NULL),
(20, '100 Kỹ Năng Sinh Tồn', 'Clint Emerson', 'Bạn sẽ làm gì nếu như một ngày bị mắc kẹt giữa vùng lãnh thổ có dịch bệnh hoành hành, lạc ở nơi hoang dã, bị móc túi khi đi du lịch ở đất nước xa lạ, hay phải thoát ngay khỏi một vụ hỏa hoạn ở nhà cao tầng… ? Clint Emerson – một cựu Đặc vụ SEAL, lực lượng tác chiến đặc biệt của Hải quân Hoa Kỳ – muốn bạn có được sự chuẩn bị tốt nhất trong cuốn sách 100 kỹ năng sinh tồn này.', 'https://cdn0.fahasa.com/media/catalog/product/8/9/8935212351621.jpg', 99000, 40, 1, 3, 2, 200, '2022-12-13 17:00:00', 272, '8935212351621', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Văn học'),
(2, 'Sách thiếu nhi'),
(3, 'Kinh tế'),
(4, 'Manga'),
(5, 'Khoa Học Kỹ Thuật'),
(6, 'Giáo khoa'),
(7, 'Sách học ngoại ngữ');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `ward` varchar(50) NOT NULL,
  `total` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `user_id` bigint(20) NOT NULL DEFAULT -1,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone_number`, `address`, `city`, `district`, `ward`, `total`, `status`, `user_id`, `created_at`) VALUES
(12, 'Anh Tuan', '2321312312', 'Lô 34 đường số 10 KĐT Lê Hồng Phong', 'Tỉnh Khánh Hòa', 'Thành phố Nha Trang', 'Phường Phước Hải', 376740, 0, 1, '2022-11-30 09:01:35'),
(13, 'Kiu', '0941974458', '221 Lê Văn Việt', 'Tỉnh Hưng Yên', 'Thành phố Hưng Yên', 'Xã Tân Hưng', 197320, 0, 1, '2022-11-30 09:25:53'),
(14, 'Anh Tuan', '2321312312', 'Lô 34 đường số 10 KĐT Lê Hồng Phong', 'Tỉnh Khánh Hòa', 'Thành phố Nha Trang', 'Phường Phước Hải', 90000, 1, 1, '2022-11-30 17:11:47'),
(16, 'Nguyễn Phan Anh Tuấn', '0941431212', '639 Tô Hiến Thành', 'Tỉnh Vĩnh Phúc', 'Huyện Tam Dương', 'Xã Hoàng Lâu', 135000, 1, 30, '2022-12-04 07:21:08'),
(17, 'Nguyễn Ngọc Khánh', '0941974458', '691 Lê Văn Việt', 'Thành phố Hồ Chí Minh', 'Quận 9', 'Phường Long Thạnh Mỹ', 111800, 1, 31, '2022-12-04 10:47:46'),
(18, 'Kiu', '0941974458', '221 Lê Văn Việt', 'Tỉnh Hưng Yên', 'Thành phố Hưng Yên', 'Xã Tân Hưng', 8013600, 2, 1, '2022-12-04 10:54:31'),
(19, 'Tuấn HCMUT', '0941431222', '1 Võ Văn Ngân', 'Thành phố Hồ Chí Minh', 'Quận Thủ Đức', 'Phường Linh Trung', 292080, 1, 32, '2022-12-04 11:03:36');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `book_id`, `quantity`) VALUES
(10, 12, 9, 3),
(11, 13, 11, 2),
(12, 13, 2, 1),
(13, 14, 2, 2),
(15, 16, 2, 3),
(16, 17, 19, 2),
(17, 18, 15, 53),
(18, 19, 8, 1),
(19, 19, 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'NXB Trẻ', NULL, NULL),
(2, 'NXB Kim Đồng', NULL, NULL),
(3, 'NXB Thanh Niên', NULL, NULL),
(4, 'NXB Văn Học', NULL, NULL),
(5, 'NXB Thế Giới', '2022-10-30 09:27:17', '2022-10-30 09:27:17'),
(9, 'NXB Tổng Hợp TPHCM', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `book_id` bigint(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` bigint(10) UNSIGNED NOT NULL DEFAULT 0,
  `rating` int(11) NOT NULL,
  `comment` varchar(10000) NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `book_id`, `user_id`, `rating`, `comment`, `is_approved`, `created_at`) VALUES
(6, 11, 5, 4, 'Giao hàng nhanh chóng mặt ???? Nội dung sách hay - trình bày các vấn đề vô cùng đơn giản dễ hiểu, k mang nặng tính hàn lâm, kỹ thuật. Chất lượng in ấn tốt. Nhưng phần dịch thuật chưa thật sự tốt.', 1, '2022-11-15'),
(15, 11, 5, 5, 'Hiện nay nhiều người đang đổ xô đi đầu tư vào bitcoin, ethereum... mà không chịu tìm hiểu bản chất của blockchain (blockchain là công nghệ quyết định sự hoạt động của tiền ảo). Đọc cuốn này sẽ giúp bạn có được cái nhìn cơ bản nhất. Sách khá dễ hiểu.', 1, '2022-11-15'),
(21, 2, 8, 4, 'Cũng được đấy', 1, '2022-11-25'),
(22, 3, 8, 4, 'Giao hàng nhanh chóng mặt ???? Nội dung sách hay - trình bày các vấn đề vô cùng đơn giản dễ hiểu, k mang nặng tính hàn lâm, kỹ thuật. Chất lượng in ấn tốt. Nhưng phần dịch thuật chưa thật sự tốt.', 1, '2022-11-25'),
(25, 11, 1, 5, 'Chẹp', 1, '2022-12-04'),
(26, 8, 1, 5, 'Mình tự tin rằng năm nay 17,18 tuổi đầu rồi thì đọc truyện Shin sẽ chẳng còn thấy hứng thú hay hài hước mà cuối cùng cười sặc sụa , đúng là gậy ông đập lưng ông mà. Sao cái thằng nhỏ này đẳng cấp thế, lúc nào cũng cợt nhả được, nó tấu hài mọi lúc mọi nơi, trong bất kì hoàn cảnh nào. Bố mẹ ,thầy cô phải bỏ tay với nó, bạn bè thì lắc đầu quậy quậy và chịu thua nó luôn. Mình nhớ ra ngày xưa bản thân cũng từng cố gắng để ngầu như Shin , cũng thích đi xung quanh trêu trọc mọi người, chỉ có khoảng trêu các chị gái là không dám thôi. Thoắt cái đã 8 năm kể từ thời say xưa đọc truyện , và giờ thì mình vẫn ngồi đây đọc truyện Shin trong khi đang viết cái review này. Đánh giá 5 sao nha.', 1, '2022-12-04'),
(27, 2, 1, 5, 'Br...', 1, '2022-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Đinh Tị', NULL, NULL),
(2, 'NXB Kim Đồng', NULL, NULL),
(3, 'NXB Trẻ', NULL, NULL),
(4, 'AZ Việt Nam', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('Nam','Nữ') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nam',
  `birthday` date NOT NULL DEFAULT '1975-01-01',
  `level` tinyint(1) NOT NULL DEFAULT 1,
  `email_verification_code` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `phone_number`, `gender`, `birthday`, `level`, `email_verification_code`, `is_verified`, `created_at`) VALUES
(1, 'Admin Tuấn', '$2y$10$3j9uWAs6fZpXOz2ygxKUAu6l3Li.MbFum/uCU33SahurU9vgU9sLm', 'admin@admin.com', '0941974458', 'Nam', '2022-11-03', 0, 'eoiqo23213', 1, '2022-10-09 04:26:34'),
(5, 'Mai Linh', '123456', 'mailinh@gmail.com', '0123456789', 'Nam', '2002-01-12', 1, NULL, 1, '2022-10-09 22:41:01'),
(6, 'Nguyễn Phan Anh Tuấn', '$2y$10$3j9uWAs6fZpXOz2ygxKUAu6l3Li.MbFum/uCU33SahurU9vgU9sLm', 'tuan@gmail.com', '0941974458', 'Nam', '1975-01-01', 1, NULL, 1, '2022-11-15 07:36:56'),
(8, 'Tốt Nguyễn', '123456', 'tot@gmail.com', NULL, 'Nam', '1975-01-01', 1, NULL, 1, '2022-11-25 12:35:16'),
(30, 'KiuPhox', '$2y$10$nDrQnAHIoB2Hrdg521tgiu9E5NwGHAV4S3b1wSYanz1XZKhE.pz9W', 'kiuphox@gmail.com', '', 'Nam', '1975-01-01', 1, 'a1c70d358e0b26959618a853d940b8d5', 1, '2022-12-04 07:15:44'),
(32, 'Tuấn HCMUT', '$2y$10$ODOBfWDuJ0Tv1cl1UjZdC.hsG1Em.WAZBQUWqR17d3Jqyw7dF2U9W', 'tuan.nguyenphananh@hcmut.edu.vn', '0936289722', 'Nam', '1975-01-01', 1, '7642534fb91ef51c9ed2a3023aa214dc', 1, '2022-12-04 11:01:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_publisher_id_foreign` (`publisher_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`),
  ADD CONSTRAINT `books_publisher_id_foreign` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
