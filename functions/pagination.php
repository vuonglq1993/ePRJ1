<?php
function paginate_auctions($auction_data, $limit = 3, $current_page = 1)
{
    // Tính tổng số sản phẩm
    $total_auctions = count($auction_data);
    $total_pages = ceil($total_auctions / $limit); // Tính tổng số trang

    // Đảm bảo số trang không nhỏ hơn 1
    if ($current_page < 1) {
        $current_page = 1;
    }

    // Tính chỉ số bắt đầu cho truy vấn
    $offset = ($current_page - 1) * $limit;

    // Lấy dữ liệu cho trang hiện tại
    $current_auction_data = array_slice($auction_data, $offset, $limit);

    return [
        'data' => $current_auction_data,
        'total_pages' => $total_pages,
        'current_page' => $current_page
    ];
}
