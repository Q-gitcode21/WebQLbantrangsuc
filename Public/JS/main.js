(function ($) {
  "use strict";

  new WOW().init();

 //đóng mở giỏ hàng
  $(".cart_link > a").on("click", function () {
    $(".mini_cart").addClass("active");
  });

  $(".mini_cart_close > a").on("click", function () {
    $(".mini_cart").removeClass("active");
  });

  //sticky navbar
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();
    if (scroll < 100) {
      $(".sticky-header").removeClass("sticky");
    } else {
      $(".sticky-header").addClass("sticky");
    }
  });

  // background image
  function dataBackgroundImage() {
    $("[data-bgimg]").each(function () {
      var bgImgUrl = $(this).data("bgimg");
      $(this).css({
        "background-image": "url(" + bgImgUrl + ")", // concatenation
      });
    });
  }

  $(window).on("load", function () {
    dataBackgroundImage();
  });

  //for carousel slider of the slider section
  $(".slider_area").owlCarousel({
    animateOut: "fadeOut",
    autoplay: true,
    loop: true,
    nav: false,
    autoplayTimeout: 6000,
    items: 1,
    dots: true,
  });

  //product column responsive
  $(".product_column3").slick({
    centerMode: true,
    centerPadding: "0",
    slidesToShow: 5,
    arrows: true,
    rows: 2,
    prevArrow:
      '<button class="prev_arrow"><i class="ion-chevron-left"></i></button>',
    nextArrow:
      '<button class="next_arrow"><i class="ion-chevron-right"></i></button>',
    responsive: [
      {
        breakpoints: 400,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoints: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoints: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        },
      },
      {
        breakpoints: 1200,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
    ],
  });

  //for tooltip
  $('[data-toggle="tooltip"]').tooltip();

  //tooltip active
  $(".action_links ul li a, .quick_button a").tooltip({
    animated: "fade",
    placement: "top",
    container: "body",
  });

  //product row activation responsive
  $(".product_row1").slick({
    centerMode: true,
    centerPadding: "0",
    slidesToShow: 5,
    arrows: true,
    prevArrow:
      '<button class="prev_arrow"><i class="ion-chevron-left"></i></button>',
    nextArrow:
      '<button class="next_arrow"><i class="ion-chevron-right"></i></button>',
    responsive: [
      {
        breakpoints: 400,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoints: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoints: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        },
      },
      {
        breakpoints: 1200,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
    ],
  });

  // blog section
  $(".blog_column3").owlCarousel({
    autoplay: true,
    loop: true,
    nav: true,
    autoplayTimeout: 5000,
    items: 3,
    dots: false,
    margin: 30,
    navText: [
      '<i class="ion-chevron-left"></i>',
      '<i class="ion-chevron-right"></i>',
    ],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
    },
  });

  //navactive responsive
  $(".product_navactive").owlCarousel({
    autoplay: false,
    loop: true,
    nav: true,
    items: 4,
    dots: false,
    navText: [
      '<i class="ion-chevron-left arrow-left"></i>',
      '<i class="ion-chevron-right arrow-right"></i>',
    ],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      250: {
        items: 2,
      },
      480: {
        items: 3,
      },
      768: {
        items: 4,
      },
    },
  });

  $(".modal").on("shown.bs.modal", function (e) {
    $(".product_navactive").resize();
  });

  $(".product_navactive a").on("click", function (e) {
    e.preventDefault();
    var $href = $(this).attr("href");
    $(".product_navactive a").removeClass("active");
    $(this).addClass("active");
    $(".product-details-large .tab-pane").removeClass("active show");
    $(".product-details-large " + $href).addClass("active show");
  });
   // Thêm mã JavaScript thêm giỏ hàng 

     // Hàm tính tổng tiền
  function calculateTotal() {
    let total = 0;
    let totalQuantity = 0;
    const cartItems = document.querySelectorAll('.cart_item');
    cartItems.forEach(function(item) {
      const quantity = item.querySelector('.quantity input').value;
      const priceText = item.querySelector('.price_cart').textContent;
      const price = parseInt(priceText.replace(/[^0-9]/g, ''), 10);
      total += quantity * price;
      totalQuantity += parseInt(quantity, 10);
    });
    document.querySelector('.cart_total span:nth-child(2)').textContent = total.toLocaleString() + ' VND';
    document.querySelector('.cart_quantity').textContent = totalQuantity;
  }
   $(document).ready(function() {
    const buyButtons = document.querySelectorAll('.add-cart');
   

    // Gắn sự kiện click cho từng nút "Mua hàng"
    buyButtons.forEach(function(button, index) {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ a
            event.stopPropagation(); // Ngăn chặn sự kiện lan ra các phần tử khác
            var btnItem = event.target;
            var product = btnItem.closest('.single_product');
            console.log(product);
            // Lấy thông tin sản phẩm từ phần tử HTML (ví dụ: tên, giá)
            const productName = button.closest('.product_content').querySelector('h3 a').textContent;
            const productPrice = button.closest('.product_content').querySelector('.current_price').textContent;
            const productImage = product.querySelector('.product_thumb .primary_img img').getAttribute('src');
            // Hiển thị thông tin sản phẩm (ví dụ: log ra console)
            // Tạo phần tử giỏ hàng mới
            const cartItem = document.createElement('div');
            cartItem.classList.add('cart_item');
            cartItem.innerHTML = `
                <div class="cart_img">
                    <a href="#"><img src="${productImage}" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="#">${productName}</a>
                    <span class="quantity"><input style="width: 50px; outline: none;" type="number" value="1" min="1"></span>
                    <span class="price_cart">${productPrice}</span>
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="ion-android-close"></i></a>
                </div>
            `;

            // Thêm phần tử giỏ hàng vào container giỏ hàng
            document.querySelector('.cart_container').appendChild(cartItem);
             // Tính lại tổng tiền sau khi thêm sản phẩm mới
             calculateTotal();

             // Gắn sự kiện thay đổi số lượng cho input
             cartItem.querySelector('.quantity input').addEventListener('input', function() {
               calculateTotal();
             });
 
             // Gắn sự kiện xóa sản phẩm khỏi giỏ hàng
             cartItem.querySelector('.cart_remove a').addEventListener('click', function(event) {
               event.preventDefault();
               cartItem.remove();
               calculateTotal();
             });
            return false; // Ngăn chặn chuyển hướng
        });
    });
  });

})(jQuery);
