<?php
$page_name = 'Add E-Book';
$rootDir = '/home/multistream6/domains/thomas.matagram.com/public_html/';
$siteUrl = 'https://thomas.matagram.com/';
include_once($rootDir . 'cms/functions/liberian_function.php');
include_once($rootDir . 'cms/partials/header.php');
?>

<div class="dashboard-main-body">

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Dropdown</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Components / Dropdown</li>
        </ul>
    </div>

    <div class="row gy-4">
        <div class="col-xl-6">
            <div class="card h-100 p-0">
                <div class="card-header border-bottom bg-base py-16 px-24">
                    <h6 class="text-lg fw-semibold mb-0">Basic Dropdown Primary</h6>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="card-body p-24">
                        <!-- Book Name -->
                        <div class="col-12">
                            <label class="form-label">Book Name</label>
                            <input type="text" name="book_name" class="form-control" required>
                        </div>

                        <!-- Book Type Dropdown -->
                        <div class="col-12">
                            <label class="form-label">Book Type</label>
                            <select name="book_type" id="book_type" class="form-control" onchange="toggleFields()" required>
                                <option value="">Select Book Type</option>
                                <option value="1">PDF</option>
                                <option value="2">Link</option>
                            </select>
                        </div>

                        <!-- PDF Upload Field (Initially Hidden) -->
                        <div class="col-12" id="pdf_upload" style="display: none;">
                            <label class="form-label">Upload PDF</label>
                            <input type="file" name="pdf_file" class="form-control" accept="application/pdf">
                        </div>

                        <!-- Book Link Field (Initially Hidden) -->
                        <div class="col-12" id="book_link" style="display: none;">
                            <label class="form-label">Book Link</label>
                            <input type="url" name="book_link" class="form-control" placeholder="http://example.com">
                        </div>

                        <!-- Department ID -->
                        <div class="col-12">
                            <label class="form-label">Department ID</label>
                            <input type="number" name="dpt_id" class="form-control" required>
                        </div>

                        <!-- Book Cover Upload -->
                        <div class="col-12">
                            <label class="form-label">Book Cover</label>
                            <input type="file" name="book_cover" class="form-control" accept="image/*" required>
                        </div>

                        <!-- Author -->
                        <div class="col-12">
                            <label class="form-label">Author</label>
                            <input type="text" name="author" class="form-control" required>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12">
                            <button type="submit" name="submit" class="btn btn-primary">Add Book</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include_once($rootDir . 'cms/partials/footer.php');
?>
