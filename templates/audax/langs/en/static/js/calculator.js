document.addEventListener("DOMContentLoaded", function () {
  var root = document.getElementById("calculator");
  if (!root) return;

  var coefficient = 30;
  var currency = root.getAttribute("data-currency") || "";
  var depositInput = root.querySelector('[data-calc="deposit"]');
  var daysInput = root.querySelector('[data-calc="days"]');
  var modal = document.getElementById("calculator-modal");
  if (!depositInput || !daysInput) return;

  var accent = "#c2410c";
  var track = "#d9deef";

  function formatMoney(value) {
    return currency + Math.round(value).toLocaleString("en-US");
  }

  function fillRange(input) {
    var min = Number(input.min);
    var max = Number(input.max);
    var val = Number(input.value);
    if (!isFinite(min) || !isFinite(max) || max === min) return;
    var percent = ((val - min) / (max - min)) * 100;
    input.style.background =
      "linear-gradient(to right," +
      accent +
      " 0%," +
      accent +
      " " +
      percent +
      "%," +
      track +
      " " +
      percent +
      "%," +
      track +
      " 100%)";
  }

  function setText(name, value) {
    var el = root.querySelector('[data-calc="' + name + '"]');
    if (el) el.textContent = value;
  }

  function calculate() {
    var deposit = Number(depositInput.value);
    var days = Number(daysInput.value);
    if (!isFinite(deposit) || !isFinite(days)) return;
    var revenue = deposit * (coefficient / 100) * days;
    var total = deposit + revenue;
    setText("deposit_value", formatMoney(deposit));
    setText("days_value", String(days));
    setText("total", formatMoney(total));
    setText("revenue", formatMoney(revenue));
    setText("profitability", String(coefficient));
    setText("deposit_min", formatMoney(Number(depositInput.min)));
    setText("deposit_max", formatMoney(Number(depositInput.max)));
    fillRange(depositInput);
    fillRange(daysInput);
  }

  var min = Number(depositInput.min);
  var max = Number(depositInput.max);
  if (isFinite(min) && isFinite(max)) {
    depositInput.value = String(Math.round((min + max) / 2));
  }
  calculate();

  depositInput.addEventListener("input", calculate);
  daysInput.addEventListener("input", calculate);

  var openBtn = root.querySelector("[data-calc-open-modal]");
  if (!modal || !openBtn) return;

  function closeModal() {
    modal.classList.remove("is-open");
    modal.setAttribute("aria-hidden", "true");
    document.body.classList.remove("calc-modal-open");
  }

  openBtn.addEventListener("click", function () {
    modal.classList.add("is-open");
    modal.setAttribute("aria-hidden", "false");
    document.body.classList.add("calc-modal-open");
  });
  modal.querySelectorAll("[data-calc-modal-close]").forEach(function (el) {
    el.addEventListener("click", closeModal);
  });
  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape" && modal.classList.contains("is-open")) closeModal();
  });
});
