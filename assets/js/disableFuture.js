
const datepickerDisableFuture = document.getElementById('datepicker-disable-future');

new te.Datepicker(datepickerDisableFuture, {
  disableFuture: true,
  confirmDateOnSelect: true,
});
