<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Image to PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Convert Images to PDF</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('images.pdf') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="images" class="form-label">Upload Images</label>
                    <input type="file" name="images[]" id="images" class="form-control" multiple required>
                    @error('images.*')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Generate PDF</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
