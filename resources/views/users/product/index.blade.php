<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Document</title>
</head>

<body>

    @if (session('success'))
    <div id="notification" class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
    <div id="notification" class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
    </div>
    @endif


    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Create a Product</h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal">
                <i class="fa fa-plus"></i> Add
            </button>
        </div>

        <table class="table table-bordered table-striped shadow-sm bg-white">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Created At</th>
                    <th>Created By</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id ?? 'no data' }}</td>
                    <td>{{ $product->name ?? 'no data' }}</td>
                    <td>{{ $product->description ?? 'no data' }}</td>
                    <td>{{ $product->qty ?? 'no data' }}</td>
                    <td>{{ $product->price ?? 'no data' }}</td>
                    <td>{{ $product->created_at ?? 'no data' }}</td>
                    <td>{{ $product->created_by ?? 'no data' }}</td>
                    <td>
                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal"
                            data-id="{{ $product->id ?? '' }}" data-name="{{ $product->name ?? '' }}"
                            data-description="{{ $product->description ?? '' }}" data-qty="{{ $product->qty ?? '' }}"
                            data-price="{{ $product->price ?? '' }}">
                            Edit
                        </button>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST"
                            style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to delete this product?')">
                                Delete
                            </button>
                        </form>

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" method="POST" action="{{ route('product.store') }}">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Add New Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="name" value="{{ old('name') }}" required>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                            name="description" rows="2" required>{{ old('description') }}</textarea>
                        @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="qty" class="form-label">Quantity</label>
                        <input type="number" class="form-control @error('qty') is-invalid @enderror" id="qty" name="qty"
                            value="{{ old('qty') }}" required>
                        @error('qty')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                            name="price" value="{{ old('price') }}" required>
                        @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-check"></i> Save Product
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" id="editForm" action="{{ route('product.update') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <input type="hidden" name="id" id="edit-id">
                        <div class="mb-3">
                            <label for="edit-name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="edit-name" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit-description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="edit-description" rows="2"
                                required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="edit-qty" class="form-label">Quantity</label>
                            <input type="number" class="form-control" name="qty" id="edit-qty" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit-price" class="form-label">Price</label>
                            <input type="number" class="form-control" name="price" id="edit-price" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        setTimeout(function() {
        const alertBox = document.getElementById('notification');
        if (alertBox) {
            alertBox.classList.remove('show');
            alertBox.classList.add('fade');
            alertBox.style.opacity = '0';
            setTimeout(() => alertBox.remove(), 500); // Remove from DOM after fade
        }
    }, 5000);
    </script>

    @if ($errors->any())
    <script>
        const productModal = new bootstrap.Modal(document.getElementById('productModal'));
    window.addEventListener('DOMContentLoaded', () => {
        productModal.show();
    });
    </script>
    @endif


    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const editModal = document.getElementById('editModal');
    editModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;

        const id = button.getAttribute('data-id');
        const name = button.getAttribute('data-name');
        const description = button.getAttribute('data-description');
        const qty = button.getAttribute('data-qty');
        const price = button.getAttribute('data-price');

        document.getElementById('edit-id').value = id;
        document.getElementById('edit-name').value = name;
        document.getElementById('edit-description').value = description;
        document.getElementById('edit-qty').value = qty;
        document.getElementById('edit-price').value = price;

        const form = document.getElementById('editForm');
    });
});
    </script>
</body>

</html>
