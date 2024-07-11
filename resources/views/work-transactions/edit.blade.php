<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Work Transaction</title>
</head>
<body>
    <h1>Edit Work Transaction</h1>
    <form action="{{ route('work-transactions.update', $transaction->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="submitted_by">Submitted By:</label>
            <input type="text" class="form-control" id="submitted_by" name="submitted_by" value="{{ $transaction->submitted_by }}">
        </div>
        
        <div class="form-group">
            <label for="submitted_when">Submitted When:</label>
            <input type="date" class="form-control" id="submitted_when" name="submitted_when" value="{{ $transaction->submitted_when }}">
        </div>
        
        <div class="form-group">
            <label for="site_code">Site Code:</label>
            <input type="text" class="form-control" id="site_code" name="site_code" value="{{ $transaction->site_code }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</body>
</html>
