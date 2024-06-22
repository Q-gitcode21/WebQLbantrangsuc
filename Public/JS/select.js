// Lấy tất cả các nút radio với tên 'platform'
var radios = document.querySelectorAll('input[type=radio][name="platform"]');

// Hàm để ẩn phần tử span
function hideSpan() {
  document.getElementById('selected-value').style.display = 'none';
}

// Thêm bộ lắng nghe sự kiện vào mỗi nút radio
radios.forEach(function(radio) {
  radio.addEventListener('change', hideSpan);
});
