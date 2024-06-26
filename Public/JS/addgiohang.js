document.addEventListener('DOMContentLoaded', function() {
    const buyButtons = document.querySelectorAll('.add-cart a');
    console.log('a');

    // Gắn sự kiện click cho từng nút "Mua hàng"
    buyButtons.forEach(function(button, index) {
        button.onclick = function(event) {
            event.preventDefault();
            event.stopPropagation();
            var btnItem = event.target;
            var product = btnItem.parentElement;
            console.log(product);
            console.log('a');
            // Lấy thông tin sản phẩm từ phần tử HTML (ví dụ: tên, giá)
            const productName = button.closest('.product_content').querySelector('h3 a').textContent;
            const productPrice = button.closest('.product_content').querySelector('.current_price').textContent;

            // Hiển thị thông tin sản phẩm (ví dụ: log ra console)
            console.log('Tên sản phẩm:', productName);
            console.log('Giá sản phẩm:', productPrice);

            return false; // Ngăn chặn chuyển hướng
        };
    });
});
