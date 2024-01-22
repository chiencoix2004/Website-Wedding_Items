function xoaKhong(link) {
  Swal.fire({
    title: "Bạn có chắc chắn không ?",
    text: "Bạn sẽ không thể hoàn tác điều này!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    cancelButtonText: "Hủy",
    confirmButtonText: "Đồng ý ,xóa!",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = link;
    }
  });
}
