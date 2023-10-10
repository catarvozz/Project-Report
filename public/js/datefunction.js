document.addEventListener('DOMContentLoaded', function () {
    var dateInput = document.getElementById('date');
    var dataTable = document.getElementById('data-table');
  
    dateInput.addEventListener('change', function () {
      var selectedDate = dateInput.value;
  
      // Mengirim permintaan AJAX ke server untuk mengambil data berdasarkan tanggal yang dipilih
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'get_data.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Respons dari server
          var data = JSON.parse(xhr.responseText);
  
          // Hapus data yang ada di tabel
          while (dataTable.firstChild) {
            dataTable.removeChild(dataTable.firstChild);
          }
  
          // Isi tabel dengan data yang diterima dari server
          for (var i = 0; i < data.length; i++) {
            var row = dataTable.insertRow();
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
  
            cell1.innerHTML = data[i].id;
            cell2.innerHTML = data[i].data;
            cell3.innerHTML = data[i].tanggal;
          }
        }
      };
      xhr.send('tanggal=' + selectedDate);
    });
  });
  