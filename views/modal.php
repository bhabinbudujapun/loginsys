<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form to edit user information -->
                <form action=<?= ABSPATH . "/user/edit" ?> method="POST">
                    <div class="form-group" style="margin-bottom: 10px;">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 10px;">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 10px;">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save Changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Popup form to add user information -->
<div id="form-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add User Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action=<?= ABSPATH . "/user/add/" ?> method="POST">
                    <div class="form-group" style="margin-bottom: 10px;">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name='username' placeholder="Enter username" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 10px;">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name='email' placeholder="Enter email" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 10px;">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name='address' placeholder="Enter address" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Register</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>