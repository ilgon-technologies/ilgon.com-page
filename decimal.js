function numberWithCommas(x) {
  var parts = x.toString().split(".");
  parts[0]=parts[0].replace(/\B(?=(\d{3})+(?!\d))/g,".");
  console.log(parts.join(","))
  return parts.join(",");
  }
numberWithCommas(123123)