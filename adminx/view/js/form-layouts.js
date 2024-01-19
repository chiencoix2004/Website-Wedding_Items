"use strict";
!(function () {
  var e = document.querySelectorAll(".phone-mask"),
    t = document.querySelector(".credit-card-mask"),
    n = document.querySelector(".expiry-date-mask"),
    c = document.querySelector(".cvv-code-mask"),
    r = document.querySelectorAll(".dob-picker"),
    o = document.querySelectorAll(".form-check-input-payment");
  e &&
    e.forEach(function (e) {
      new Cleave(e, { phone: !0, phoneRegionCode: "US" });
    }),
    t &&
      new Cleave(t, {
        creditCard: !0,
        onCreditCardTypeChanged: function (e) {
          document.querySelector(".card-type").innerHTML =
            "" != e && "unknown" != e
              ? '<img src="' +
                assetsPath +
                "img/icons/payments/" +
                e +
                '-cc.png" height="28"/>'
              : "";
        },
      }),
    n && new Cleave(n, { date: !0, delimiter: "/", datePattern: ["m", "y"] }),
    c && new Cleave(c, { numeral: !0, numeralPositiveOnly: !0 }),
    r &&
      r.forEach(function (e) {
        e.flatpickr({ monthSelectorType: "static" });
      }),
    o &&
      o.forEach(function (e) {
        e.addEventListener("change", function (e) {
          "credit-card" === e.target.value
            ? document
                .querySelector("#form-credit-card")
                .classList.remove("d-none")
            : document
                .querySelector("#form-credit-card")
                .classList.add("d-none");
        });
      });
})(),
  $(function () {
    var e,
      t = $(".sticky-element"),
      t =
        (window.Helpers.initCustomOptionCheck(),
        (e = Helpers.isNavbarFixed() ? $(".layout-navbar").height() + 7 : 0),
        t.length && t.sticky({ topSpacing: e, zIndex: 9 }),
        $(".select2"));
    t.length &&
      t.each(function () {
        var e = $(this);
        e.wrap('<div class="position-relative"></div>').select2({
          placeholder: "Select value",
          dropdownParent: e.parent(),
        });
      });
  });
