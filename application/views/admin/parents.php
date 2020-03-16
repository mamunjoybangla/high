<?php $this->load->view("admin/inc/header") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <?php $this->load->view('msg_view'); ?>
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-outline-primary" onclick="window.location='<?= base_url('admin/parents/add') ?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th style="display: none;">S/N</th>
                                <th>S/N</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $x = 1;
                            foreach ($parents as $parent) :  ?>
                                <tr>
                                    <td style="display: none;"><?= $x; ?></td>
                                    <td><?= $x; ?></td>
                                    <td>
                                        <img class="img img-thumbnail" width="50" src="<?= ($parent->pic) ?
                                                                                            base_url('assets/img/' . $parent->pic) :
                                                                                            base_url('assets/img/avatars/profile.jpg') ?>"> </td>
                                    <td><?= (!empty($parent->guardian_name)) ?
                                            ucwords($parent->guardian_name) :
                                            ucwords($parent->father_name) ?></td>
                                    <td><?= $parent->email; ?></td>
                                    <td><?= statusLabel($parent->status); ?></td>
                                    <td>
                                        <a class="btn btn-outline-info" href="<?= base_url("admin/parents/view/" . simple_crypt($parent->uid) . '/') ?>">View</a> |
                                        <a class="btn btn-outline-warning" href="<?= base_url("admin/parents/edit/" . simple_crypt($parent->uid . '/')) ?>">Edit</a> |
                                        <a class="btn btn-outline-danger" href="<?= base_url("admin/parents/delete/") ?>">Delete</a>
                                    </td>
                                </tr>
                            <?php $x++;
                            endforeach; ?>
>>>>>>> 4ad296d63d97784a5ffa73ded7dbd716a97405b7
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
