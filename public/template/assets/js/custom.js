/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

const { doc } = require("prettier");

//Fungsi Hapus
function hapus(id) {
  $("#del-" + id).submit();
}

//Menu Dinamis
var path = location.pathname.split("/");
var url = location.origin + "/" + path[1];
$("ul.sidebar-menu li a").each(function () {
  if ($(this).attr("href").indexOf(url) !== -1) {
    $(this)
      .parent()
      .addClass("active")
      .parent()
      .parent("li")
      .addClass("active");
  }
});

//Pagination
$(document).ready(function () {
  $("#myTable").DataTable();
});

function BarisBaru() {
  var Nomor = $("#tableLoop tbody tr").length + 1;
  var Baris = "<tr>";
  Baris += '<td class ="text-center">' + Nomor + "</td>";
  Baris += "<td>";
  Baris +=
    '<select class="form-control" name="kode_akun3[]" id="kode_akun3 ' +
    Nomor +
    '" required></select>';
  Baris += "</td>";
  Baris += "<td>";
  Baris +=
    '<input type="number" name="debit[]" class="form-control debit" placeholder="Debit..." required="">';
  Baris += "</td>";
  Baris += "<td>";
  Baris +=
    '<input type="number" name="kredit[]" class="form-control kredit" placeholder="Kredit..." required="">';
  Baris += "</td>";
  Baris += "<td>";
  Baris +=
    '<select class="form-control" name="id_status[]" id="id_status' +
    Nomor +
    '" required> </select>';
  Baris += "</td>";
  Baris += '<td class = "text-center">';
  Baris +=
    '<a class="btn btn-sm btn-warning" title="Hapus Baris" id="HapusBaris"><i class="fas fa-times"></i> </a>';
  Baris += "</td>";
  Baris += "</tr>";

  $("#tableLoop tbody").append(Baris);
  $("#tableLoop tbody tr").each(function () {
    $(this).find("td:nth-child(2) input").focus();
  });

  FormSelectAkun(Nomor);
  FormSelectStatus(Nomor);
}

$(document).ready(function () {
  var A;
  for (A = 1; A <= 1; A++) {
    Barisbaru();
  }
  $("#BarisBaru").click(function (e) {
    e.preventDefault();
    Barisbaru();
  });
  $("tableLoop tbody")
    .find("input[type=text]")
    .filter(":visible:first")
    .focus();
});

$(document).on("click", "#Hapusbaris", function (e) {
  e.preventDefault();
  var Nomor = 1;
  $(this).parent().parent().remove();
  $("tableLoop tbody tr").each(function () {
    $(this).find("td:nth-child(1)").html(Nomor);
    Nomor++;
  });
});

function FormSelectAkun(Nomor) {
  var output = [];
  output.push('<option value = "">Pilih Data</option>');
  //ambil datanya disini
  $.getJSON("/Transaksi/akun3", function (data) {
    $.each(data, function (key, value) {
      output.push(
        '<option value="' +
          value.kode_akun3 +
          '">' +
          value.kode_akun3 +
          "|" +
          value.nama_akun3 +
          "</option>"
      );
    });
    $("#kode_akun3" + Nomor).html(output.join(""));
  });
}

function FormSelectStatus(Nomor) {
  var output = [];
  output.push('<option value="">Pilih Data</option>');
  //ambil datanya disini
  $.getJSON("/Transaksi/status", function (data) {
    $.each(data, function (key, value) {
      output.push(
        '<option value="' + value.id_status + '">' + value.status + "</option>"
      );
    });
    $("#id_status" + Nomor).html(output.join(""));
  });
}
