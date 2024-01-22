function thanhCong(thongBao) {
    Swal.fire({
        title: "Thành Công",
        text: "Đã cập nhật thành công "+thongBao,
        icon: "success"
      });
}

function khongThanhCong(thongBao) {
    Swal.fire({
        title: "Thất Bại",
        text: "Đã cập nhật thất bại "+thongBao,
        icon: "error"
      });
}