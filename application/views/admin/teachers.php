<?php $this->load->view("admin/inc/header") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix">
                <button type="button" class="btn btn-outline-primary float-right" onclick="window.location='<?=base_url('admin/teachers/add')?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td></td>
                                <td>Mrs Chinenye</td>
                                <td>chi@school.com</td>
                                <td><span class="badge badge-info">active</span></td>
                                <td><a class="btn btn-outline-info" href="<?=base_url("admin/teachers/view")?>">View</a> | <a class="btn btn-outline-warning" href="<?=base_url("admin/teachers/edit")?>">Edit</a> | <a class="btn btn-outline-danger" href="<?=base_url("admin/teachers/delete")?>">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>