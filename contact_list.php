<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/cropped-maison-margiela-favicon-32x32.png">
    <title>Maison Margiela - Contact List</title>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <style>
        body {
            font-family: Courier, monospace;
            text-align: center;
            background-color: #ffffff;
            color: #000000;
        }
        .container {
            margin: 0 auto;
            padding: 20px;
            max-width: 900px;
        }
        .header {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .subheader {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .image-container {
            margin: 20px 0;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
        }
        .text {
            font-size: 16px;
            margin-bottom: 20px;
        }
        #contact-table {
            width: 100%;
        }
        #export {
            color: #ffffff;
            background-color: #3ba4ff;
            border: 0;
            border-radius: 50px;
            padding: 8px 10px;
        }
    </style>
</head>
<body>
        <div class="image-container">
            <img src="imgs/maison-margiela-logo-250x52.png" alt="Maison Margiela">
        </div>
    <h3 style="text-align: start;">Contact List</h3>
    <table id="contact-table" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Birth Date</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <button id="export" disabled>Export .xlsx</button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.4/xlsx.full.min.js"></script>
    <script>
        var dataSource;

        $(document).ready(function() {
            $('#export').on('click', () => {
                exportToExcel(`contact`, dataSource);
            })

            var table = $('#contact-table').DataTable({
    "ajax": {
        "url": "get_contact.php",
        "dataSrc": ""
    },
    "columns": [
        { "data": "id" },
        { "data": "firstname" },
        { "data": "lastname" },
        { "data": "phone" },
        { "data": "birth_date" }
    ]
});

    // Use the `xhr` event to capture and store the data
    table.on('xhr', function(e, settings, json) {
    console.log(json); // Check the returned data structure
    dataSource = json; // Store the data in the variable

    // Enable or disable the export button based on data availability
    if(dataSource.length > 0){
        $('#export').prop('disabled', false);
    } else {
        $('#export').prop('disabled', true);
    }
});

            
        });


        // exportToExcel(`contact`, dataSource)
        function exportToExcel(filename, data) {
            // สร้างหนังสือเวียนใหม่
            const wb = XLSX.utils.book_new();
            // แปลงข้อมูล JSON เป็นแผ่นงาน
            const ws = XLSX.utils.json_to_sheet(data);
            // เพิ่มแผ่นงานเข้าไปในหนังสือเวียน
            XLSX.utils.book_append_sheet(wb, ws, "Sheet1");
            // เขียนไฟล์ Excel
            XLSX.writeFile(wb, filename + ".xlsx");
        }
    </script>
</body>
</html>