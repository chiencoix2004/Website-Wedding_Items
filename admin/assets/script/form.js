function xacNhanForm() {
  document.getElementById("myForm").addEventListener("submit", function (e) {
    e.preventDefault(); // Prevent the form from submitting immediately

    // Reference to the form
    var form = this;

    // Use SweetAlert2 to confirm the submission
    Swal.fire({
      title: "Bạn có chắc chắn  không?",
      text: "Bạn sẽ không thể hoàn tác điều này!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: "Hủy",
      confirmButtonText: "Đồng ý , Lưu!",
    }).then((result) => {
      if (result.isConfirmed) {
        // If the user confirms, manually trigger the form submission
        form.submit();
      }
    });
  });
}
