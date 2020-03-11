<?php $this->load->view("admin/inc/header") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-outline-primary" onclick="window.location='<?=base_url('admin/mails/compose')?>'"><i class="fas fa-edit"></i> Compose New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Role</th>
                                <th>Users</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                                <td>1.</td>
                                <td></td>
                                <td>Mrs Chinenye</td>
                                <td>chi@school.com</td>
                                <td><span class="badge badge-info">active</span></td>
                                <td><a class="btn btn-outline-info" href="<?=base_url("admin/teachers/view")?>">View</a> | <a class="btn btn-outline-warning" href="<?=base_url("admin/teachers/edit")?>">Edit</a> | <a class="btn btn-outline-danger" href="<?=base_url("admin/teachers/delete")?>">Delete</a></td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>