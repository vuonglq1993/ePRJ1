<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Modal</title>
    <style>
        /* Tùy chỉnh input form để bỏ border */
        .no-border-input {
            border: none !important;
            box-shadow: none !#f8f9fa;
            background-color: #f8f9fa !important;
            padding: 10px;
            }

        .bg-f8f9fa {
            background-color: #f8f9fa !important;
        }

        .no-border-input:focus {
            outline: none !important;
            box-shadow: none !important;
        }
    </style>
    <!-- Include Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Button to open the modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#searchModal">
        Open Search Modal
    </button>

    <!-- Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Search Form -->
                    <form action="search.php" method="GET" role="search">
                        <div class="container">
                        <div class="row bg-f8f9fa">
                            <div class="col">
                                <input type="text" class="form-control no-border-input" id="searchQuery"
                                    name="searchQuery" placeholder="What are you looking for?">
                            </div>
                            <div class="col text-end">
                                <button type="submit" class="btn no-border-input"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                    </svg></button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap 5.3.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>