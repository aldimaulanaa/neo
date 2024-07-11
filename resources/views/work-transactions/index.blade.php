<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Transactions</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <h1>Work Transactions</h1>

    <div class="form-group">
        <label for="mesin_id">Mesin ID:</label>
        <input type="text" class="form-control" id="mesin_id" name="mesin_id">
    </div>

    <div class="form-group">
        <label for="site_code">Site Code:</label>
        <input type="text" class="form-control" id="site_code" name="site_code">
    </div>

    <div class="form-group">
        <label for="month">Month:</label>
        <select class="form-control" id="month" name="month">
            <option value="">Select Month</option>
            <option value="01">January</option>
            <option value="02">February</option>
            <option value="03">March</option>
            <option value="04">April</option>
            <option value="05">May</option>
            <option value="06">June</option>
            <option value="07">July</option>
            <option value="08">August</option>
            <option value="09">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>
    </div>

    <!-- Tambahkan field filter lainnya jika diperlukan -->

    <table id="work-transactions-table" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Action</th>
                <th>Submitted By</th>
                <th>Submitted When</th>
                <th>Site Code</th>
                <th>Activity</th>
                <th>Mesin ID</th>
                <th>Fuel</th>
                <th>Duty</th>
                <th>Reason</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
            <tr>
                <th>Action</th>
                <th>Submitted By</th>
                <th>Submitted When</th>
                <th>Site Code</th>
                <th>Activity</th>
                <th>Mesin ID</th>
                <th>Fuel</th>
                <th>Duty</th>
                <th>Reason</th>
            </tr>
        </tfoot>
    </table>

    <script>
        $(document).ready(function() {
            var table = $('#work-transactions-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('work-transactions.index') }}",
                    data: function(d) {
                        d.mesin_id = $('#mesin_id').val();
                        d.site_code = $('#site_code').val();
                        d.month = $('#month').val();
                    }
                },
                columns: [
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                    {data: 'submitted_by', name: 'submitted_by'},
                    {data: 'submitted_when', name: 'submitted_when'},
                    {data: 'site_code', name: 'site_code'},
                    {data: 'activity', name: 'activity'},
                    {data: 'mesin_id', name: 'mesin_id'},
                    {data: 'fuel', name: 'fuel'},
                    {data: 'duty', name: 'duty'},
                    {data: 'reason', name: 'reason'},
                ],
            });

            $('#mesin_id, #site_code, #month').on('input change', function() {
                table.draw();
            });
        });
    </script>
</body>
</html>
